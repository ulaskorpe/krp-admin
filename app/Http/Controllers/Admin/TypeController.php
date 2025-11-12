<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Type;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;


class TypeController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $types = Type::orderByDesc('id')->get();

        return view('admin_panel.types.type_list', [
            'types' => $types,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin_panel.types.type_form', [
            'type' => new Type(['single' => false]),
            'formAction' => route('sudo.types.store'),
            'isEdit' => false,
            'fieldOptions' => $this->getPostFieldOptions(),
            'selectedFields' => [],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validatedData($request);

        Type::create($validated);

        return redirect()
            ->route('sudo.types.index')
            ->with('success', __('Type created successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type): View
    {
        return view('admin_panel.types.type_form', [
            'type' => $type,
            'formAction' => route('sudo.types.update', $type),
            'isEdit' => true,
            'fieldOptions' => $this->getPostFieldOptions(),
            'selectedFields' => $this->parseFields($type->fields),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type): RedirectResponse
    {
        $validated = $this->validatedData($request, $type);

        $type->update($validated);

        return redirect()
            ->route('sudo.types.index')
            ->with('success', __('Type updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type): RedirectResponse
    {
        $type->posts()->delete();
        $type->delete();

        return redirect()
            ->route('sudo.types.index')
            ->with('success', __('Type deleted successfully.'));
    }

    /**
     * Validate incoming request data for creating/updating types.
     */
    protected function validatedData(Request $request, ?Type $type = null): array
    {
        $slugSource = $request->input('slug') ?: $request->input('name');
        $request->merge([
            'slug' => Str::slug((string) $slugSource),
        ]);

        $fieldsInput = $request->input('fields');
        if (is_string($fieldsInput) && $fieldsInput !== '') {
            $request->merge([
                'fields' => $this->parseFields($fieldsInput),
            ]);
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => [
                'required',
                'string',
                'max:255',
                Rule::unique('types')->ignore($type?->id),
            ],
            'fields' => ['nullable', 'array'],
            'fields.*' => ['string'],
            'resize_array' => ['nullable', 'string'],
            'single' => ['nullable', 'boolean'],
            'children' => ['nullable', 'string', 'max:255'],
            'active' => ['nullable', 'string', 'max:255'],
        ]);

        $validated['single'] = $request->boolean('single');
        $fields = $validated['fields'] ?? null;
        $validated['fields'] = $this->stringifyFields(is_array($fields) ? $fields : null);
        $validated['resize_array'] = $validated['resize_array'] !== null ? trim($validated['resize_array']) : null;
        $validated['children'] = $validated['children'] !== null ? trim($validated['children']) : null;
        $validated['active'] = $validated['active'] !== null ? trim($validated['active']) : null;

        return $validated;
    }

    /**
     * Retrieve the list of selectable post fields.
     */
    protected function getPostFieldOptions(): array
    {
        return (new Post())->getFillable();
    }

    /**
     * Convert stored field string to an array.
     */
    protected function parseFields(?string $fields): array
    {
        if (empty($fields)) {
            return [];
        }

        return collect(explode(',', $fields))
            ->map(fn ($field) => trim($field, " '"))
            ->filter()
            ->values()
            ->all();
    }

    /**
     * Convert selected field array to the persisted string format.
     */
    protected function stringifyFields(?array $fields): ?string
    {
        if (empty($fields)) {
            return null;
        }

        $items = collect($fields)
            ->map(fn ($field) => trim((string) $field))
            ->filter()
            ->unique()
            ->values()
            ->map(fn ($field) => "'{$field}'")
            ->implode(',');

        return $items !== '' ? $items : null;
    }
}

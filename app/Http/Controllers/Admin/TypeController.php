<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => [
                'required',
                'string',
                'max:255',
                Rule::unique('types')->ignore($type?->id),
            ],
            'fields' => ['nullable', 'string'],
            'resize_array' => ['nullable', 'string'],
            'single' => ['nullable', 'boolean'],
            'children' => ['nullable', 'string', 'max:255'],
            'active' => ['nullable', 'string', 'max:255'],
        ]);

        $validated['single'] = $request->boolean('single');
        $validated['fields'] = $validated['fields'] !== null ? trim($validated['fields']) : null;
        $validated['resize_array'] = $validated['resize_array'] !== null ? trim($validated['resize_array']) : null;
        $validated['children'] = $validated['children'] !== null ? trim($validated['children']) : null;
        $validated['active'] = $validated['active'] !== null ? trim($validated['active']) : null;

        return $validated;
    }
}

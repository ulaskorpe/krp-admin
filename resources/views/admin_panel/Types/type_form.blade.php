@extends('admin_panel.main_layout')

@section('content')
<div class="row match-height">
    <div class="col-md-12">
        <div class="card" style="min-height: 600px;">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h3 class="mb-0">
                    {{ $isEdit ? 'Type Güncelle' : 'Yeni Type Oluştur' }}
                </h3>
                <a href="{{ route('sudo.types.index') }}" class="btn btn-secondary">Geri Dön</a>
            </div>
            <div class="card-body collapse in">
                <div class="card-block" style="padding-left: 50px;padding-right: 50px;">
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ $formAction }}" method="POST">
                        @csrf
                        @if($isEdit)
                            @method('PUT')
                        @endif

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="name" class="form-control-label"><b>Adı</b></label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $type->name) }}" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="slug" class="form-control-label"><b>Slug</b></label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $type->slug) }}" placeholder="Otomatik oluşturmak için boş bırakabilirsiniz">
                            </div>
                        </div>
                        @php
                        $fieldOptions = $fieldOptions ?? [];
                        $selectedFields = collect(old('fields', $selectedFields ?? []))
                            ->map(fn ($field) => trim($field))
                            ->filter()
                            ->values()
                            ->all();
                    @endphp

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class="form-control-label"><b>Alanlar</b></label>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="row">
                                    @foreach ($fieldOptions as $field)
                                        @php
                                            $fieldId = 'field_' . \Illuminate\Support\Str::slug($field, '_');
                                        @endphp
                                        <div class="col-md-4 col-sm-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fields[]" id="{{ $fieldId }}" value="{{ $field }}" {{ in_array($field, $selectedFields, true) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="{{ $fieldId }}">{{ $field }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <small class="form-text text-muted">Post içerikleri için kullanılacak alanları seçin.</small>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="resize_array" class="form-control-label"><b>Resize Array</b></label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="resize_array" id="resize_array" rows="3" class="form-control" placeholder="Örn: 400x400@fit|800x600@crop">{{ old('resize_array', $type->resize_array) }}</textarea>
                                <small class="form-text text-muted">Görseller için yeniden boyutlandırma tanımlarını girin.</small>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class="form-control-label"><b>Single</b></label>
                            </div>
                            <div class="col-12 col-md-9 d-flex align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="single" id="single" value="1" {{ old('single', $type->single) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="single">Tekil içerik</label>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="children" class="form-control-label"><b>Children</b></label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="children" id="children" class="form-control" value="{{ old('children', $type->children) }}" placeholder="Alt içerik tipi (varsa)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="active" class="form-control-label"><b>Active Tab</b></label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="active" id="active" class="form-control" value="{{ old('active', $type->active) }}" placeholder="Varsayılan aktif sekme (isteğe bağlı)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"></div>
                            <div class="col-12 col-md-9">
                                <button type="submit" class="btn btn-primary" style="width: 300px;">
                                    {{ $isEdit ? 'Güncelle' : 'Kaydet' }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<?php

namespace brnysn\LaravelH5P\Http\Requests;

use brnysn\LaravelH5P\Models\H5PContent;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class ContentListRequest extends FormRequest
{
    public function authorize(): bool
    {
//        return Gate::allows('list', H5PContent::class);
        
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['sometimes', 'nullable', 'string'],
            'library_id' => ['sometimes', 'nullable', 'integer'],
        ];
    }
}

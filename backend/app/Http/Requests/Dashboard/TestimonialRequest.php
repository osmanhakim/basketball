<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TestimonialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'image' => 'required_without:id|max:900|image',

        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => ['required', 'string', Rule::unique('testimonial_translations', 'name')->ignore($this->id, 'testimonial_id')]];
            $rules += [$locale . '.description' => ['required', 'string']];
        }

        return $rules;
    }
}
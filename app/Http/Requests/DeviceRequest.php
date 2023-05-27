<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class DeviceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            "device_id" => "required|string",
        ];

        $device = $this->device;
        if ($device) {
            $rules["file"] = "image";
        } else {
            $rules["file"] = "required|image";
        }

        return $rules;
    }

    public function uploadImage(): void
    {
        $file = $this->file('file');
        if ($file) {
            $filename = Str::random(30) . "." . $file->getExtension();
            $file->move("uploads", $filename);
            $filename = "uploads/" . $filename;
            $this->request->add(['image' => $filename]);
        }
    }
}

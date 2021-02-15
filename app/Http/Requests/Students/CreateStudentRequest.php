<?php

declare(strict_types = 1);

namespace App\Http\Requests\Students;


use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateStudentRequest
 * @package App\Http\Requests\Cars
 */
class CreateStudentRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'fullname' => 'required|string|filled',
            'student_number' => 'nullable|string|regex:/^[0-9A-Z]{6}$/',
        ];
    }

    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}

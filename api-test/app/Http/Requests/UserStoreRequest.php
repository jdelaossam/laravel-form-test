<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Validator;

class UserStoreRequest extends FormRequest
{

    public function validate () {
        
        $validator = Validator::make($this->input(), $this->rules(), $this->messages());
        
        if ($validator->fails()) {            
            throw new ValidationException($validator, $validator->errors());
        }
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;     
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'lastname' => 'required|string'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'name.string' => 'Name must be text!',
            'lastname.required' => 'Last Name is required!',
            'lastname.string' => 'Last Name must be text!'
        ];
    }

    /**
     * Get the failed validation response for the request.
     *
     * @param array $errors
     * @return JsonResponse
     */
    // public function response(array $errors)
    // {
    //     $transformed = [];
 
    //     foreach ($errors as $field => $message) {
    //         $transformed[] = [
    //             'field' => $field,
    //             'message' => $message[0]
    //         ];
    //     }
 
    //     return response()->json([
    //         'errors' => $transformed
    //     ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
    // }
}

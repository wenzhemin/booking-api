<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Only allow logged in users
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            // 'name' => 'max:255',
            'email' => 'required|email|max:255',
        ];
    }

    public function messages()
    {
        return [
            'max' => ':attribute kan kun være 255 tegn langt.',
            'alpha_spaces' => ':attribute må kun indeholde bogstaver og mellemrum.'
        ];
    }

    public function attributes()
    {
        return[
            'name' => 'Navn', //This will replace any instance of 'username' in validation messages with 'email'
            'email' => 'Email',
        ];
    }
}

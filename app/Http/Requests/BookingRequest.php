<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
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
            'date' => 'required',
            'timeslot' => 'required',
            'interval_id' => 'required',
            'name_of_guest' => 'required|min:2',
            'phone_no' => 'required',
            'email' => 'required|email',
            'no_of_guests' => 'required',
            'location_id' => 'required',
            'service_id' => 'required'
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'date.required' => 'A date is required',
            'name_of_guest.required'  => 'You must provide a name',
        ];
    }
}

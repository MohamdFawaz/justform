<?php

namespace App\Http\Requests\User;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;


/**
 * Class ManageSettingsRequest.
 */
class SalesFormRequest extends Request
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
            'user_id'       => 'required|exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => trans('validation.user_id'),
        ];
    }
}

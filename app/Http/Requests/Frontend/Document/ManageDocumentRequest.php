<?php

namespace App\Http\Requests\Frontend\Document;

use App\Http\Requests\Request;

/**
 * Class ManageDocumentRequest.
 */
class ManageDocumentRequest extends Request
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
            //
        ];
    }
}

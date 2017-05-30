<?php

namespace App\Http\Requests\Frontend\Document;

use App\Http\Requests\Request;

/**
 * Class DownloadDocumentRequest.
 */
class DownloadDocumentRequest extends Request
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
            'nome' => 'required',
            'processo' => 'required|integer',
            'doe' => 'required|integer',
            'datadoe' => 'required',
            'cpfcnpj' => 'required',
            'ait' => 'required',
            'aitvenc' => 'required',
            'valor' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório',
            'processo.required' => 'O campo Processo é obrigatório',
            'processo.integer' => 'O campo Processo somente aceita numeros',
            'doe.required' => 'O campo DOE é obrigatório',
            'doe.integer' => 'O campo DOE somente aceita numeros',
            'datadoe.required' => 'O campo Data DOE é obrigatório',
            'cpfcnpj.required' => 'O campo CPF/CNPJ é obrigatório',
            'ait.required' => 'O campo Auto de Infração é obrigatório',
            'aitvenc.required' => 'O campo Vencimento do Auto é obrigatório',
            'valor.required' => 'O campo Valor é obrigatório',
        ];
    }
}

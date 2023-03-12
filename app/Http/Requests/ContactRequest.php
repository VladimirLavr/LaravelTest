<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Node\Expr\FuncCall;

class ContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'from' => 'required',
            'to' => 'required|email',
            'copy' => 'sometimes|nullable|email',
            'subject' => 'required|min:1|',
            'type' => 'required|string',
            'body' => 'required|min:1',


        ];
    }
    public function messages()
    {
        return [
            'from.required' => 'Введите верно адресс отправителя',
            'to.required' => 'Введите верно адресс получателя',
            'copy.email' => 'Введите верно адресс(КОПИИ) получателя',
            'subject.required' => 'Введите тему сообщения',
            'type.required' => 'Поле ТИП не заполнено',
            'body.required' => ' Поле Сообщение не заполнено',
        ];
    }
}

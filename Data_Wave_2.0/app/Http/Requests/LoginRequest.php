<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return ['email' => 'required', 'string', 'email',
            'password' => 'required', 'string', 'password',
            'permissao' => 'required', 'string', 'permissao',       
        ];
    }

    public function messages(): array

    {
        return[
            'email.required' => 'Campo e-mail é obrigatório',
            'email.email' => 'Necessário enviar e-mail válido!',
            'password.required' =>'Campo password é obrigatório',
            'permissao.required' => 'Necessário informar a permissão',       

        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $email = $this->input('email');
            
            // Remove espaços extras
            $email = trim($email);

            // Verifica se o e-mail contém exatamente uma parte local e um domínio
            if (substr_count($email, '@') !== 1) {
                $validator->errors()->add('email', 'O e-mail fornecido é inválido.');
                return;
            }

            // Verifica se há pontos antes ou depois do @
            if (preg_match('/\.@|@\./', $email)) {
                $validator->errors()->add('email', 'O e-mail não pode ter ponto antes ou depois do @.');
                return;
            }

            $domain = 'gmail.com'; // Defina o domínio que você deseja validar
            $emailDomain = substr(strrchr($email, "@"), 1); // Extrai o domínio após o "@"
            
            if ($emailDomain !== $domain) {
                $validator->errors()->add('email', 'O e-mail deve ser do provedor ' . $domain . '.');
            }
        });
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adicionarRequest extends FormRequest
{
    public function authorize()
    {
        return true;  // Permite que a requisição seja autorizada
    }

    public function rules()
    {
        return [
            'titulo' => 'required|max:255',
            'anolanc' => 'required|date',
            'classi' => 'required|max:10',
            'genero' => 'required|max:50',
            'pontuacao' => 'required|numeric|between:0,10',
            'plataforma' => 'required|max:50',
            'empresa' => 'required|max:50',
            'capa' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O título é obrigatório',
            'anolanc.required' => 'A data de lançamento é obrigatória',
            'classi.required' => 'A classificação é obrigatória',
            'genero.required' => 'O gênero do jogo é obrigatório',
            'pontuacao.required' => 'A pontuação é obrigatória',
            'plataforma.required' => 'A plataforma é obrigatória',
            'empresa.required' => 'O nome da empresa é obrigatório',
            'capa.image' => 'A capa deve ser uma imagem válida',
        ];
    }
}

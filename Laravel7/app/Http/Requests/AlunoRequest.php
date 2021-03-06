<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AlunoRequest extends FormRequest
{

    public function authorize()
    {
        //return false;
        return true;
    }

    public function rules()
    {
        return [
            //
            'nome' => ['required', Rule::unique('alunos')->ignore($this->id), 'min:2', 'max:256'],
            'nomepai' => ['nullable', 'min:2', 'max:256'],
            'nomemae' => ['required', 'min:2', 'max:256'],
            'nomeresponsavel' => ['nullable', 'min:2', 'max:256'],
            'nascimento' => 'required|date|date_format:Y-m-d',
            'nascimentopai' => 'nullable|date|date_format:Y-m-d',
            'nascimentomae' => 'required|date|date_format:Y-m-d',
            'nascimentoresponsavel' => 'nullable|date|date_format:Y-m-d',           
            /* 'data' => 'required|unique:posts|date|date_format:Y-m-d|before:' . $after_date . '|after:' . $before_date, */
            'sexo' => 'required',
            'cpf' => ['nullable', 'numeric', 'cpf_cnpj'],
            'cpfpai' => ['nullable', 'numeric', 'cpf_cnpj'],
            'cpfmae' => ['numeric', 'cpf_cnpj'],
            'cpfresponsavel' => ['nullable', 'cpf'],
            'numerotelefonepai' => 'nullable|min:8',
            'numerotelefonemae' => 'required|min:8',
            'numerotelefoneresponsavel' => 'nullable|min:8',
            'enderecopai' => 'nullable',
            'enderecomae' => 'required',
            'enderecoresponsavel' => 'nullable',       
            'bairroresponsavel' => 'nullable',
            'bairromae' => 'required',
            'bairropai' => 'nullable',
            'cidademae' => 'required',
            'cidadepai' => 'nullable',
            'cidaderesponsavel' => 'nullable',
            'estadomae' => 'required',
            'estadopai' => 'nullable',
            'estadoresponsavel' => 'nullable',
            'emailpai' => 'email|nullable',
            'emailmae' => 'email|nullable',
            'emailresponsavel' => 'email|nullable',
        ];
    }
    public function messages() {
        return [
            'nome.required' => '?? necess??rio preencher o nome.',
            'nome.unique' => 'Nome j?? est?? em uso.',
            'nome.min' => 'O Nome deve ter no m??nimo 2 caracteres.',
            'nome.max' => 'O Nome deve ter no m??ximo 256 caracteres.',
            'cpf.required' => 'O CPF do aluno ?? obrigat??rio.',
            'cpf.unique' => 'CPF j?? est?? em uso.',
            'cpf.cpf_cnpj' => 'O n??mero digitado para o CPF n??o ?? V??lido.',
            'cpf.numeric' => 'Digite apenas n??meros no CPF do aluno.',
            'cpfpai.required' => 'O CPF do pai ?? obrigat??rio.',
            'cpfpai.unique' => 'CPF j?? est?? em uso.',
            'cpfpai.cpf_cnpj' => 'O n??mero digitado para o CPF n??o ?? V??lido.',
            'cpfpai.numeric' => 'Digite apenas n??meros no CPF do pai.',
            'cpfmae.required' => 'O CPF da m??e ?? obrigat??rio.',
            'cpfmae.unique' => 'CPF j?? est?? em uso.',
            'cpfmae.cpf_cnpj' => 'O n??mero digitado para o CPF n??o ?? V??lido.',
            'cpfmae.numeric' => 'Digite apenas n??meros no CPF do aluno.',
            'cpfresponsavel.required' => 'O CPF da m??e ?? obrigat??rio.',
            'cpfresponsavel.unique' => 'CPF j?? est?? em uso.',
            'cpfresponsavel.cpf_cnpj' => 'O n??mero digitado para o CPF n??o ?? V??lido.',
            'cpfresponsavel.numeric' => 'Digite apenas n??meros no CPF do aluno.',
            'nascimento.required' => '?? necess??rio preencher a data de nascimento do aluno.',
            
            'nomepai.required' => '?? necess??rio preencher o nome do Pai.',
            'nomepai.unique' => 'Nome do Pai j?? est?? em uso.',
            'nomepai.min' => 'O Nome do Pai deve ter no m??nimo 2 caracteres.',
            'nomepai.max' => 'O Nome do Pai deve ter no m??ximo 256 caracteres.',
            'numerotelefonepai.required' => '?? necess??rio preencher o n??mero de telefone do Pai.',
            'numerotelefonepai.min' => 'O n??mero de telefone est?? incompleto do Pai.',
            'nascimentopai.required' => '?? necess??rio preencher a data de nascimento do Pai.',
            'enderecopai.required' => '?? neces??rio preencher o endere??o do Pai.',
            'bairropai.required' => '?? necess??rio preencher o bairro do Pai.',
            'cidadepai.required' => '?? necess??rio preencher a cidade do Pai.',
            'estadopai.required' => '?? necess??rio preencher a estado do Pai.',
            'emailpai.email'  => '?? necess??rio preencher o email do Pai no formato certo.',
            
            'nomemae.required' => '?? necess??rio preencher o nome da M??e.',
            'nomemae.unique' => 'Nome da M??e j?? est?? em uso.',
            'nomemae.min' => 'O Nome da M??e deve ter no m??nimo 2 caracteres.',
            'nomemae.max' => 'O Nome da M??e deve ter no m??ximo 256 caracteres.',
            'numerotelefonemae.required' => '?? necess??rio preencher o n??mero de telefone da M??e.',
            'numerotelefonemae.min' => 'O n??mero de telefone da M??e est?? incompleto.',
            'nascimentomae.required' => '?? necess??rio preencher a data de nascimento da M??e.',
            'enderecomae.required' => '?? neces??rio preencher o endere??o da M??e.',
            'bairromae.required' => '?? necess??rio preencher o bairro da M??e.',
            'cidademae.required' => '?? necess??rio preencher a cidade da M??e.',
            'estadomae.required' => '?? necess??rio preencher a estado da M??e.',
            'emailmae.email'  => '?? necess??rio preencher o email no formato certo da M??e.',
            
            'nomeresponsavel.required' => '?? necess??rio preencher o nome do Respons??vel.',
            'nomeresponsavel.unique' => 'Nome do Respons??vel j?? est?? em uso.',
            'nomeresponsavel.min' => 'O Nome do Respons??vel deve ter no m??nimo 2 caracteres.',
            'nomeresponsavel.max' => 'O Nome do Respons??vel deve ter no m??ximo 256 caracteres.',
            'numerotelefoneresponsavel.required' => '?? necess??rio preencher o n??mero de telefone do Respons??vel.',
            'numerotelefoneresponsavel.min' => 'O n??mero de telefone est?? incompleto do Respons??vel.',
            'nascimentoresponsavel.required' => '?? necess??rio preencher a data de nascimento do Respons??vel.',
            'enderecoresponsavel.required' => '?? neces??rio preencher o endere??o do Respons??vel.',
            'bairroresponsavel.required' => '?? necess??rio preencher o bairro do Respons??vel.',
            'cidaderesponsavel.required' => '?? necess??rio preencher a cidade do Respons??vel.',
            'estadoresponsavel.required' => '?? necess??rio preencher a estado do Respons??vel.',
            'emailresponsavel.email'  => '?? necess??rio preencher o email do Respons??vel no formato certo.',
             
            ];
    }
}

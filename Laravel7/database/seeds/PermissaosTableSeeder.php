<?php

namespace database\seeds;

use Illuminate\Database\Seeder;
use App\Permissao;

class PermissaosTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

//Atendimento
        if (!Permissao::firstWhere('nome', 'menu-atendimento')) {
            Permissao::create([
                'nome' => 'menu-atendimento',
                'descricao' => 'Menu Atendimento',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }

        if (!Permissao::firstWhere('nome', 'menu-atendimento-agenda')) {
            Permissao::create([
                'nome' => 'menu-atendimento-agenda',
                'descricao' => 'Menu Atendimento - Agenda',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-agenda-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-agenda-cadastrar',
                'descricao' => 'Menu Atendimento - Agenda - Cadastrar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-agenda-editar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-agenda-editar',
                'descricao' => 'Menu Atendimento - Agenda - Editar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-agenda-excluir')) {
            Permissao::create([
                'nome' => 'menu-atendimento-agenda-excluir',
                'descricao' => 'Menu Atendimento - Agenda - Excluir',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-agenda-listar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-agenda-listar',
                'descricao' => 'Menu Atendimento - Agenda - Listar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-clientes')) {
            Permissao::create([
                'nome' => 'menu-atendimento-clientes',
                'descricao' => 'Menu Atendimento - Clientes',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-clientes-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-clientes-cadastrar',
                'descricao' => 'Menu Atendimento - Clientes - Cadastrar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-clientes-editar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-clientes-editar',
                'descricao' => 'Menu Atendimento - Clientes - Editar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-clientes-excluir')) {
            Permissao::create([
                'nome' => 'menu-atendimento-clientes-excluir',
                'descricao' => 'Menu Atendimento - Clientes - Excluir',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-clientes-listar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-clientes-listar',
                'descricao' => 'Menu Atendimento - Clientes - Listar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-fornecedores')) {
            Permissao::create([
                'nome' => 'menu-atendimento-fornecedores',
                'descricao' => 'Menu Atendimento - Fornecedores',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-fornecedores-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-fornecedores-cadastrar',
                'descricao' => 'Menu Atendimento - Fornecedores - Cadastrar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-fornecedores-editar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-fornecedores-editar',
                'descricao' => 'Menu Atendimento - Fornecedores - Editar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-fornecedores-excluir')) {
            Permissao::create([
                'nome' => 'menu-atendimento-fornecedores-excluir',
                'descricao' => 'Menu Atendimento - Fornecedores - Excluir',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-fornecedores-listar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-fornecedores-listar',
                'descricao' => 'Menu Atendimento - Fornecedores - Listar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-produtos')) {
            Permissao::create([
                'nome' => 'menu-atendimento-produtos',
                'descricao' => 'Menu Atendimento - Produtos',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-produtos-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-produtos-cadastrar',
                'descricao' => 'Menu Atendimento - Produtos - Cadastrar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-produtos-editar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-produtos-editar',
                'descricao' => 'Menu Atendimento - Produtos - Editar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-produtos-excluir')) {
            Permissao::create([
                'nome' => 'menu-atendimento-produtos-excluir',
                'descricao' => 'Menu Atendimento - Produtos - Excluir',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-produtos-listar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-produtos-listar',
                'descricao' => 'Menu Atendimento - Produtos - Listar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-servicos')) {
            Permissao::create([
                'nome' => 'menu-atendimento-servicos',
                'descricao' => 'Menu Atendimento - Servicos',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-servicos-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-servicos-cadastrar',
                'descricao' => 'Menu Atendimento - Servicos - Cadastrar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-servicos-editar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-servicos-editar',
                'descricao' => 'Menu Atendimento - Servicos - Editar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-servicos-excluir')) {
            Permissao::create([
                'nome' => 'menu-atendimento-servicos-excluir',
                'descricao' => 'Menu Atendimento - Servicos - Excluir',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-servicos-listar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-servicos-listar',
                'descricao' => 'Menu Atendimento - Servicos - Listar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-orcamentos')) {
            Permissao::create([
                'nome' => 'menu-atendimento-orcamentos',
                'descricao' => 'Menu Atendimento - Orcamentos',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-orcamentos-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-orcamentos-cadastrar',
                'descricao' => 'Menu Atendimento - Orcamentos - Cadastrar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-orcamentos-editar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-orcamentos-editar',
                'descricao' => 'Menu Atendimento - Orcamentos - Editar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-orcamentos-excluir')) {
            Permissao::create([
                'nome' => 'menu-atendimento-orcamentos-excluir',
                'descricao' => 'Menu Atendimento - Orcamentos - Excluir',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-orcamentos-listar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-orcamentos-listar',
                'descricao' => 'Menu Atendimento - Orcamentos - Listar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-ordemdeservico')) {
            Permissao::create([
                'nome' => 'menu-atendimento-ordemdeservico',
                'descricao' => 'Menu Atendimento - Ordem de servi??o',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-ordemdeservico-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-ordemdeservico-cadastrar',
                'descricao' => 'Menu Atendimento - Ordem de servi??o - Cadastrar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-ordemdeservico-editar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-ordemdeservico-editar',
                'descricao' => 'Menu Atendimento - Ordem de servi??o - Editar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-ordemdeservico-excluir')) {
            Permissao::create([
                'nome' => 'menu-atendimento-ordemdeservico-excluir',
                'descricao' => 'Menu Atendimento - Ordem de servi??o - Excluir',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-ordemdeservico-listar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-ordemdeservico-listar',
                'descricao' => 'Menu Atendimento - Ordem de servi??o - Listar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-telemarketingtransporte')) {
            Permissao::create([
                'nome' => 'menu-atendimento-telemarketingtransporte',
                'descricao' => 'Menu Atendimento - Telemarketing',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-telemarketingtransporte-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-telemarketingtransporte-cadastrar',
                'descricao' => 'Menu Atendimento - Telemarketing - Cadastrar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-telemarketingtransporte-editar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-telemarketingtransporte-editar',
                'descricao' => 'Menu Atendimento - Telemarketing - Editar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-telemarketingtransporte-excluir')) {
            Permissao::create([
                'nome' => 'menu-atendimento-telemarketingtransporte-excluir',
                'descricao' => 'Menu Atendimento - Telemarketing - Excluir',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-atendimento-telemarketingtransporte-listar')) {
            Permissao::create([
                'nome' => 'menu-atendimento-telemarketingtransporte-listar',
                'descricao' => 'Menu Atendimento - Telemarketing - Listar',
                'grupo' => '1',
                'usuario_id' => '0'
            ]);
        }


//Rebanho
        if (!Permissao::firstWhere('nome', 'menu-rebanho')) {
            Permissao::create([
                'nome' => 'menu-rebanho',
                'descricao' => 'Menu Rebanho',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-animais')) {
            Permissao::create([
                'nome' => 'menu-rebanho-animais',
                'descricao' => 'Menu Rebanho - Animais',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-animais-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-animais-cadastrar',
                'descricao' => 'Menu Rebanho - Animais - Cadastrar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-animais-listar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-animais-listar',
                'descricao' => 'Menu Rebanho - Animais - Listar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-animais-configuracao')) {
            Permissao::create([
                'nome' => 'menu-rebanho-animais-configuracao',
                'descricao' => 'Menu Rebanho - Animais - Configura????o',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-alimentacao')) {
            Permissao::create([
                'nome' => 'menu-rebanho-alimentacao',
                'descricao' => 'Menu Rebanho - Alimenta????o',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-alimento-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-alimento-cadastrar',
                'descricao' => 'Menu Rebanho - Alimento - Cadastrar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-alimento-listar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-alimento-listar',
                'descricao' => 'Menu Rebanho - Alimento - Listar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-alimentacao-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-alimentacao-cadastrar',
                'descricao' => 'Menu Rebanho - Alimenta????o - Cadastrar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-alimentacao-listar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-alimentacao-listar',
                'descricao' => 'Menu Rebanho - Alimenta????o - Listar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-producao')) {
            Permissao::create([
                'nome' => 'menu-rebanho-producao',
                'descricao' => 'Menu Rebanho - Produ????o',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-producao-individual')) {
            Permissao::create([
                'nome' => 'menu-rebanho-producao-individual',
                'descricao' => 'Menu Rebanho - Produ????o - Individual',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-producao-grupo')) {
            Permissao::create([
                'nome' => 'menu-rebanho-producao-grupo',
                'descricao' => 'Menu Rebanho - Produ????o - Grupo',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-producao-listar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-producao-listar',
                'descricao' => 'Menu Rebanho - Produ????o - Listar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-reproducao')) {
            Permissao::create([
                'nome' => 'menu-rebanho-reproducao',
                'descricao' => 'Menu Rebanho - Reprodu????o',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-reproducao-inseminacao')) {
            Permissao::create([
                'nome' => 'menu-rebanho-reproducao-inseminacao',
                'descricao' => 'Menu Rebanho - Reprodu????o - Insemina????o',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-reproducao-inseminacao-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-reproducao-inseminacao-cadastrar',
                'descricao' => 'Menu Rebanho - Reprodu????o - Insemina????o - Cadastrar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-reproducao-inseminacao-listar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-reproducao-inseminacao-listar',
                'descricao' => 'Menu Rebanho - Reprodu????o - Insemina????o - Listar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-reproducao-gestacao')) {
            Permissao::create([
                'nome' => 'menu-rebanho-reproducao-gestacao',
                'descricao' => 'Menu Rebanho - Reprodu????o - Gesta????o',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-reproducao-gestacao-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-reproducao-gestacao-cadastrar',
                'descricao' => 'Menu Rebanho - Reprodu????o - Gesta????o - Cadastrar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-reproducao-gestacao-listar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-reproducao-gestacao-listar',
                'descricao' => 'Menu Rebanho - Reprodu????o - Gesta????o - Listar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-reproducao-parto')) {
            Permissao::create([
                'nome' => 'menu-rebanho-reproducao-parto',
                'descricao' => 'Menu Rebanho - Reprodu????o - Parto',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-reproducao-parto-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-reproducao-parto-cadastrar',
                'descricao' => 'Menu Rebanho - Reprodu????o - Parto - Cadastrar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-reproducao-parto-listar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-reproducao-parto-listar',
                'descricao' => 'Menu Rebanho - Reprodu????o - Parto - Listar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-reproducao-relatorios')) {
            Permissao::create([
                'nome' => 'menu-rebanho-reproducao-relatorios',
                'descricao' => 'Menu Rebanho - Reprodu????o - Relat??rios',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-abates')) {
            Permissao::create([
                'nome' => 'menu-rebanho-abates',
                'descricao' => 'Menu Rebanho - Abates',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-abates-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-abates-cadastrar',
                'descricao' => 'Menu Rebanho - Abates - Cadastrar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-abates-listar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-abates-listar',
                'descricao' => 'Menu Rebanho - Abates - Listar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-vacinas')) {
            Permissao::create([
                'nome' => 'menu-rebanho-vacinas',
                'descricao' => 'Menu Rebanho - Vacinas',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-vacinas-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-vacinas-cadastrar',
                'descricao' => 'Menu Rebanho - Vacinas - Cadastrar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-vacinas-listar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-vacinas-listar',
                'descricao' => 'Menu Rebanho - Vacinas - Listar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-vacinacao-vacinarum')) {
            Permissao::create([
                'nome' => 'menu-rebanho-vacinacao-vacinarum',
                'descricao' => 'Menu Rebanho - Vacina????o - Vacinar Um',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-vacinacao-vacinargrupo')) {
            Permissao::create([
                'nome' => 'menu-rebanho-vacinacao-vacinargrupo',
                'descricao' => 'Menu Rebanho - Vacina????o - Vacinar Grupo',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-vacinacao-listar')) {
            Permissao::create([
                'nome' => 'menu-rebanho-vacinacao-listar',
                'descricao' => 'Menu Rebanho - Vacina????o - Listar',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-rebanho-vacinacao-relatorio')) {
            Permissao::create([
                'nome' => 'menu-rebanho-vacinacao-relatorio',
                'descricao' => 'Menu Rebanho - Vacina????o - Relatorio',
                'grupo' => '2',
                'usuario_id' => '0'
            ]);
        }


//Financeiro
        if (!Permissao::firstWhere('nome', 'menu-financeiro')) {
            Permissao::create([
                'nome' => 'menu-financeiro',
                'descricao' => 'Menu Financeiro',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-clientes')) {
            Permissao::create([
                'nome' => 'menu-financeiro-clientes',
                'descricao' => 'Menu Financeiro - Clientes',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-clientes-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-clientes-cadastrar',
                'descricao' => 'Menu Financeiro - Clientes - Cadastrar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-clientes-editar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-clientes-editar',
                'descricao' => 'Menu Financeiro - Clientes - Editar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-clientes-excluir')) {
            Permissao::create([
                'nome' => 'menu-financeiro-clientes-excluir',
                'descricao' => 'Menu Financeiro - Clientes - Excluir',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-clientes-listar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-clientes-listar',
                'descricao' => 'Menu Financeiro - Clientes - Listar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-fornecedores')) {
            Permissao::create([
                'nome' => 'menu-financeiro-fornecedores',
                'descricao' => 'Menu Financeiro - Fornecedores',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-fornecedores-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-fornecedores-cadastrar',
                'descricao' => 'Menu Financeiro - Fornecedores - Cadastrar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-fornecedores-editar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-fornecedores-editar',
                'descricao' => 'Menu Financeiro - Fornecedores - Editar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-fornecedores-excluir')) {
            Permissao::create([
                'nome' => 'menu-financeiro-fornecedores-excluir',
                'descricao' => 'Menu Financeiro - Fornecedores - Excluir',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-fornecedores-listar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-fornecedores-listar',
                'descricao' => 'Menu Financeiro - Fornecedores - Listar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-contasareceber')) {
            Permissao::create([
                'nome' => 'menu-financeiro-contasareceber',
                'descricao' => 'Menu Financeiro - Contas a Receber',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-contasareceber-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-contasareceber-cadastrar',
                'descricao' => 'Menu Financeiro - Contas a Receber - Cadastrar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-contasareceber-editar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-contasareceber-editar',
                'descricao' => 'Menu Financeiro - Contas a Receber - Editar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-contasareceber-excluir')) {
            Permissao::create([
                'nome' => 'menu-financeiro-contasareceber-excluir',
                'descricao' => 'Menu Financeiro - Contas a Receber - Excluir',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-contasareceber-listar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-contasareceber-listar',
                'descricao' => 'Menu Financeiro - Contas a Receber - Listar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-contasareceber-mensalidade')) {
            Permissao::create([
                'nome' => 'menu-financeiro-contasareceber-mensalidade',
                'descricao' => 'Menu Financeiro - Contas a Receber - Gerar Mensalidade',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-contasapagar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-contasapagar',
                'descricao' => 'Menu Financeiro - Contas a Pagar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-contasapagar-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-contasapagar-cadastrar',
                'descricao' => 'Menu Financeiro - Contas a Pagar - Cadastrar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-contasapagar-editar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-contasapagar-editar',
                'descricao' => 'Menu Financeiro - Contas a Pagar - Editar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-contasapagar-excluir')) {
            Permissao::create([
                'nome' => 'menu-financeiro-contasapagar-excluir',
                'descricao' => 'Menu Financeiro - Contas a Pagar - Excluir',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-contasapagar-listar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-contasapagar-listar',
                'descricao' => 'Menu Financeiro - Contas a Pagar - Listar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-boleto')) {
            Permissao::create([
                'nome' => 'menu-financeiro-boleto',
                'descricao' => 'Menu Financeiro - Boleto',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-boleto-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-boleto-cadastrar',
                'descricao' => 'Menu Financeiro - Boleto - Cadastrar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-boleto-editar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-boleto-editar',
                'descricao' => 'Menu Financeiro - Boleto - Editar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-boleto-excluir')) {
            Permissao::create([
                'nome' => 'menu-financeiro-boleto-excluir',
                'descricao' => 'Menu Financeiro - Boleto - Excluir',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-boleto-listar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-boleto-listar',
                'descricao' => 'Menu Financeiro - Boleto - Listar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-boleto-remessa')) {
            Permissao::create([
                'nome' => 'menu-financeiro-boleto-remessa',
                'descricao' => 'Menu Financeiro - Boleto - Remessa',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-boleto-retorno')) {
            Permissao::create([
                'nome' => 'menu-financeiro-boleto-retorno',
                'descricao' => 'Menu Financeiro - Boleto - Retorno',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-carne')) {
            Permissao::create([
                'nome' => 'menu-financeiro-carne',
                'descricao' => 'Menu Financeiro - Carn??',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-carne-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-carne-cadastrar',
                'descricao' => 'Menu Financeiro - Carn?? - Cadastrar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-carne-listar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-carne-listar',
                'descricao' => 'Menu Financeiro - Carn?? - Listar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-formadepagamento')) {
            Permissao::create([
                'nome' => 'menu-financeiro-formadepagamento',
                'descricao' => 'Menu Financeiro - Forma de Pagamento',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-formadepagamento-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-formadepagamento-cadastrar',
                'descricao' => 'Menu Financeiro - Forma de Pagamento - Cadastrar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-formadepagamento-editar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-formadepagamento-editar',
                'descricao' => 'Menu Financeiro - Forma de Pagamento - Editar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-formadepagamento-excluir')) {
            Permissao::create([
                'nome' => 'menu-financeiro-formadepagamento-excluir',
                'descricao' => 'Menu Financeiro - Forma de Pagamento - Excluir',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-financeiro-formadepagamento-listar')) {
            Permissao::create([
                'nome' => 'menu-financeiro-formadepagamento-listar',
                'descricao' => 'Menu Financeiro - Forma de Pagamento - Listar',
                'grupo' => '3',
                'usuario_id' => '0'
            ]);
        }

//BI
        if (!Permissao::firstWhere('nome', 'menu-bi')) {
            Permissao::create([
                'nome' => 'menu-bi',
                'descricao' => 'Menu BI',
                'grupo' => '4',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-bi-clientes')) {
            Permissao::create([
                'nome' => 'menu-bi-clientes',
                'descricao' => 'Menu BI - Clientes',
                'grupo' => '4',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-bi-clientes-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-bi-clientes-cadastrar',
                'descricao' => 'Menu BI - Clientes - Cadastrar',
                'grupo' => '4',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-bi-clientes-listar')) {
            Permissao::create([
                'nome' => 'menu-bi-clientes-listar',
                'descricao' => 'Menu BI - Clientes - Listar',
                'grupo' => '4',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-bi-fornecedores')) {
            Permissao::create([
                'nome' => 'menu-bi-fornecedores',
                'descricao' => 'Menu BI - Fornecedores',
                'grupo' => '4',
                'usuario_id' => '0'
            ]);
        }


//Importa????o
        if (!Permissao::firstWhere('nome', 'menu-importacao')) {
            Permissao::create([
                'nome' => 'menu-importacao',
                'descricao' => 'Menu Importa????o',
                'grupo' => '5',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-importacao-cliente01')) {
            Permissao::create([
                'nome' => 'menu-importacao-cliente01',
                'descricao' => 'Menu Importa????o - Cliente 01 - Casa da Lavoura',
                'grupo' => '5',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-importacao-cliente02')) {
            Permissao::create([
                'nome' => 'menu-importacao-cliente02',
                'descricao' => 'Menu Importa????o - Cliente 02 - Cooper Brasil',
                'grupo' => '5',
                'usuario_id' => '0'
            ]);
        }

//Configura????o
        if (!Permissao::firstWhere('nome', 'menu-configuracoes')) {
            Permissao::create([
                'nome' => 'menu-configuracoes',
                'descricao' => 'Menu Configura????o',
                'grupo' => '6',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-configuracoes-cadastrarempresas')) {
            Permissao::create([
                'nome' => 'menu-configuracoes-cadastrarempresas',
                'descricao' => 'Menu Configura????o - Cadastrar empresas',
                'grupo' => '6',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-configuracoes-listarempresas')) {
            Permissao::create([
                'nome' => 'menu-configuracoes-listarempresas',
                'descricao' => 'Menu Configura????o - Listar empresas',
                'grupo' => '6',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-configuracoes-cadastrarusuario')) {
            Permissao::create([
                'nome' => 'menu-configuracoes-cadastrarusuario',
                'descricao' => 'Menu Configura????o - Cadastrar usu??rio',
                'grupo' => '6',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-configuracoes-listarusuarios')) {
            Permissao::create([
                'nome' => 'menu-configuracoes-listarusuarios',
                'descricao' => 'Menu Configura????o - Listar usu??rios',
                'grupo' => '6',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-configuracoes-permissaoacesso')) {
            Permissao::create([
                'nome' => 'menu-configuracoes-permissaoacesso',
                'descricao' => 'Menu Configura????o - Cadastrar permiss??es de acesso',
                'grupo' => '6',
                'usuario_id' => '0'
            ]);
        }

            //Conv??nio
        if (!Permissao::firstWhere('nome', 'menu-convenio')) {
            Permissao::create([
                'nome' => 'menu-convenio',
                'descricao' => 'Menu do Conv??nio',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-conveniado')) {
            Permissao::create([
                'nome' => 'menu-convenio-conveniado',
                'descricao' => 'Menu Conv??nio - Conveniados',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-conveniado-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-convenio-conveniado-cadastrar',
                'descricao' => 'Menu Conv??nio - Conveniados - Cadastrar',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-conveniado-editar')) {
            Permissao::create([
                'nome' => 'menu-convenio-conveniado-editar',
                'descricao' => 'Menu Conv??nio - Conveniados - Editar',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-conveniado-excluir')) {
            Permissao::create([
                'nome' => 'menu-convenio-conveniado-excluir',
                'descricao' => 'Menu Conv??nio - Conveniados - Excluir',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-conveniado-listar')) {
            Permissao::create([
                'nome' => 'menu-convenio-conveniado-listar',
                'descricao' => 'Menu Conv??nio - Conveniados - Listar',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-conveniado-cadastrosnovos')) {
            Permissao::create([
                'nome' => 'menu-convenio-conveniado-cadastrosnovos',
                'descricao' => 'Menu Conv??nio - Conveniados - Cadastros Novos',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-conveniado-cadastrospendentes')) {
            Permissao::create([
                'nome' => 'menu-convenio-conveniado-cadastrospendentes',
                'descricao' => 'Menu Conv??nio - Conveniados - Cadastros Pendentes',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-conveniado-cadastrosvencidos')) {
            Permissao::create([
                'nome' => 'menu-convenio-conveniado-cadastrosvencidos',
                'descricao' => 'Menu Conv??nio - Conveniados - Cadastros Vencidos',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-credenciado')) {
            Permissao::create([
                'nome' => 'menu-convenio-credenciado',
                'descricao' => 'Menu Conv??nio - Credenciados',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-credenciado-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-convenio-credenciado-cadastrar',
                'descricao' => 'Menu Conv??nio - Credenciados - Cadastrar',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-credenciado-editar')) {
            Permissao::create([
                'nome' => 'menu-convenio-credenciado-editar',
                'descricao' => 'Menu Conv??nio - Credenciados - Editar',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-credenciado-excluir')) {
            Permissao::create([
                'nome' => 'menu-convenio-credenciado-excluir',
                'descricao' => 'Menu Conv??nio - Credenciados - Excluir',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-credenciado-listar')) {
            Permissao::create([
                'nome' => 'menu-convenio-credenciado-listar',
                'descricao' => 'Menu Conv??nio - Credenciados - Listar',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-plano')) {
            Permissao::create([
                'nome' => 'menu-convenio-plano',
                'descricao' => 'Menu Conv??nio - Planos',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-plano-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-convenio-plano-cadastrar',
                'descricao' => 'Menu Conv??nio - Planos - Cadastrar',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-plano-editar')) {
            Permissao::create([
                'nome' => 'menu-convenio-plano-editar',
                'descricao' => 'Menu Conv??nio - Planos - Editar',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-plano-excluir')) {
            Permissao::create([
                'nome' => 'menu-convenio-plano-excluir',
                'descricao' => 'Menu Conv??nio - Planos - Excluir',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-plano-listar')) {
            Permissao::create([
                'nome' => 'menu-convenio-plano-listar',
                'descricao' => 'Menu Conv??nio - Planos - Listar',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-contratoconvenio')) {
            Permissao::create([
                'nome' => 'menu-convenio-contratoconvenio',
                'descricao' => 'Menu Conv??nio - Contratos do Conv??nio ',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-contratoconvenio-cadastrar')) {
            Permissao::create([ 
                'nome' => 'menu-convenio-contratoconvenio-cadastrar',
                'descricao' => 'Menu Conv??nio - Contratos do Conv??nio - Cadastrar',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-contratoconvenio-editar')) {
            Permissao::create([ 
                'nome' => 'menu-convenio-contratoconvenio-editar',
                'descricao' => 'Menu Conv??nio - Contratos do Conv??nio - Editar',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-contratoconvenio-excluir')) {
            Permissao::create([ 
                'nome' => 'menu-convenio-contratoconvenio-excluir',
                'descricao' => 'Menu Conv??nio - Contratos do Conv??nio - Excluir',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-contratoconvenio-listar')) {
            Permissao::create([
                'nome' => 'menu-convenio-contratoconvenio-listar',
                'descricao' => 'Menu Conv??nio - Contratos do Conv??nio - Listar',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-contratoconvenio-novoscontratos')) {
            Permissao::create([
                'nome' => 'menu-convenio-contratoconvenio-novoscontratos',
                'descricao' => 'Menu Conv??nio - Contratos do Conv??nio - Novos Contratos',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-contratoconvenio-contratosvencidos')) {
            Permissao::create([
                'nome' => 'menu-convenio-contratoconvenio-contratosvencidos',
                'descricao' => 'Menu Conv??nio - Contratos do Conv??nio - Contratos Vencidos',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-convenioatendimento-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-convenio-convenioatendimento-cadastrar',
                'descricao' => 'Menu Conv??nio - Conveniados - Registrar Atendimento',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-convenioatendimento-excluir')) {
            Permissao::create([
                'nome' => 'menu-convenio-convenioatendimento-excluir',
                'descricao' => 'Menu Conv??nio - Conveniados - Convenio Atendimento - Excluir',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-convenioatendimento-editar')) {
            Permissao::create([
                'nome' => 'menu-convenio-convenioatendimento-editar',
                'descricao' => 'Menu Conv??nio - Conveniados - Convenio Atendimento - Editar',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-convenioatendimento-relatorio')) {
            Permissao::create([
                'nome' => 'menu-convenio-convenioatendimento-relatorio',
                'descricao' => 'Menu Conv??nio - Conveniados - Relat??rio de Atendimento',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-conveniado-consultarficha')) {
            Permissao::create([
                'nome' => 'menu-convenio-conveniado-consultarficha',
                'descricao' => 'Menu Conv??nio - Conveniados - Consultar Ficha',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-conveniado-historicoconsultas')) {
            Permissao::create([
                'nome' => 'menu-convenio-conveniado-historicoconsultas',
                'descricao' => 'Menu Conv??nio - Conveniados - Hist??rico de Consultas',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-cartao')) {
            Permissao::create([
                'nome' => 'menu-convenio-cartao',
                'descricao' => 'Menu Conv??nio - Cart??o',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-cartao-controle')) {
            Permissao::create([
                'nome' => 'menu-convenio-cartao-controle',
                'descricao' => 'Menu Conv??nio - Cart??o - Controle',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-cartao-cartoesentregues')) {
            Permissao::create([
                'nome' => 'menu-convenio-cartao-cartoesentregues',
                'descricao' => 'Menu Conv??nio - Cart??o - Cart??es Entregues',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-cartao-cartoesparaentregar')) {
            Permissao::create([
                'nome' => 'menu-convenio-cartao-cartoesparaentregar',
                'descricao' => 'Menu Conv??nio - Cart??o - Cart??es para Entregar',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-convenio-cartao-cartoesaguardandopedido')) {
            Permissao::create([
                'nome' => 'menu-convenio-cartao-cartoesaguardandopedido',
                'descricao' => 'Menu Conv??nio - Cart??o - Cart??es Aguardando Pedido',
                'grupo' => '7',
                'usuario_id' => '0'
            ]);
        }


// Transportadora
        if (!Permissao::firstWhere('nome', 'menu-transportadora')) {
            Permissao::create([
                'nome' => 'menu-transportadora',
                'descricao' => 'Menu da Transportadora',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-passagem')) {
            Permissao::create([
                'nome' => 'menu-transportadora-passagem',
                'descricao' => 'Menu transportadora - Passagem',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-passagem-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-transportadora-passagem-cadastrar',
                'descricao' => 'Menu transportadora - Passagem - Cadastrar',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-passagem-excluir')) {
            Permissao::create([
                'nome' => 'menu-transportadora-passagem-excluir',
                'descricao' => 'Menu transportadora - Passagem - Excluir',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-passagem-listar')) {
            Permissao::create([
                'nome' => 'menu-transportadora-passagem-listar',
                'descricao' => 'Menu transportadora - Passagem - Listar',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-viagem')) {
            Permissao::create([
                'nome' => 'menu-transportadora-viagem',
                'descricao' => 'Menu transportadora - Viagem',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-viagem-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-transportadora-viagem-cadastrar',
                'descricao' => 'Menu transportadora - Viagem - Cadastrar',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-viagem-excluir')) {
            Permissao::create([
                'nome' => 'menu-transportadora-viagem-excluir',
                'descricao' => 'Menu transportadora - Viagem - Excluir',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-viagem-listar')) {
            Permissao::create([
                'nome' => 'menu-transportadora-viagem-listar',
                'descricao' => 'Menu transportadora - Viagem - Listar',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-veiculo')) {
            Permissao::create([
                'nome' => 'menu-transportadora-veiculo',
                'descricao' => 'Menu Transportadora - Ve??culos',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-veiculo-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-transportadora-veiculo-cadastrar',
                'descricao' => 'Menu Transportadora - Ve??culos - Cadastrar',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-veiculo-excluir')) {
            Permissao::create([
                'nome' => 'menu-transportadora-veiculo-excluir',
                'descricao' => 'Menu Transportadora - Ve??culos - Excluir',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-veiculo-listar')) {
            Permissao::create([
                'nome' => 'menu-transportadora-veiculo-listar',
                'descricao' => 'Menu Transportadora - Ve??culos - Listar',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-contratoviagem')) {
            Permissao::create([
                'nome' => 'menu-transportadora-contratoviagem',
                'descricao' => 'Menu Transportadora - Contrato de Viagem',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-contratoviagem-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-transportadora-contratoviagem-cadastrar',
                'descricao' => 'Menu Transportadora - Contrato de Viagem - Cadastrar',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-contratoviagem-excluir')) {
            Permissao::create([
                'nome' => 'menu-transportadora-contratoviagem-excluir',
                'descricao' => 'Menu Transportadora - Contrato de Viagem - Excluir',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-transportadora-contratoviagem-listar')) {
            Permissao::create([
                'nome' => 'menu-transportadora-contratoviagem-listar',
                'descricao' => 'Menu Transportadora - Contrato de Viagem - Listar',
                'grupo' => '8',
                'usuario_id' => '0'
            ]);
        }

            //Menu Cl??nica
        if (!Permissao::firstWhere('nome', 'menu-clinica')) {
            Permissao::create([
                'nome' => 'menu-clinica',
                'descricao' => 'Menu Cl??nica',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-agenda')) {
            Permissao::create([
                'nome' => 'menu-clinica-agenda',
                'descricao' => 'Menu Cl??nica - Agenda',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-agenda-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-clinica-agenda-cadastrar',
                'descricao' => 'Menu Cl??nica - Agenda - Cadastrar',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-agenda-excluir')) {
            Permissao::create([
                'nome' => 'menu-clinica-agenda-excluir',
                'descricao' => 'Menu Cl??nica - Agenda - Excluir',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-agenda-listar')) {
            Permissao::create([
                'nome' => 'menu-clinica-agenda-listar',
                'descricao' => 'Menu Cl??nica - Agenda - Listar',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-consultas')) {
            Permissao::create([
                'nome' => 'menu-clinica-consultas',
                'descricao' => 'Menu Cl??nica - Consultas',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-consultas-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-clinica-consultas-cadastrar',
                'descricao' => 'Menu Cl??nica - Consultas - Cadastrar',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-consultas-excluir')) {
            Permissao::create([
                'nome' => 'menu-clinica-consultas-excluir',
                'descricao' => 'Menu Cl??nica - Consultas - Excluir',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-consultas-listar')) {
            Permissao::create([
                'nome' => 'menu-clinica-consultas-listar',
                'descricao' => 'Menu Cl??nica - Consultas - Listar',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-pacientes')) {
            Permissao::create([
                'nome' => 'menu-clinica-pacientes',
                'descricao' => 'Menu Cl??nica - Pacientes',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-pacientes-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-clinica-pacientes-cadastrar',
                'descricao' => 'Menu Cl??nica - Pacientes - Cadastrar',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-pacientes-excluir')) {
            Permissao::create([
                'nome' => 'menu-clinica-pacientes-excluir',
                'descricao' => 'Menu Cl??nica - Pacientes - Excluir',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-pacientes-listar')) {
            Permissao::create([
                'nome' => 'menu-clinica-pacientes-listar',
                'descricao' => 'Menu Cl??nica - Pacientes - Listar',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-especialidades')) {
            Permissao::create([
                'nome' => 'menu-clinica-especialidades',
                'descricao' => 'Menu Cl??nica - Especialidades',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-especialidades-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-clinica-especialidades-cadastrar',
                'descricao' => 'Menu Cl??nica - Especialidades - Cadastrar',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-especialidades-excluir')) {
            Permissao::create([
                'nome' => 'menu-clinica-especialidades-excluir',
                'descricao' => 'Menu Cl??nica - Especialidades - Excluir',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-especialidades-listar')) {
            Permissao::create([
                'nome' => 'menu-clinica-especialidades-listar',
                'descricao' => 'Menu Cl??nica - Especialidades - Listar',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-medicos')) {
            Permissao::create([
                'nome' => 'menu-clinica-medicos',
                'descricao' => 'Menu Cl??nica - M??dicos',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-medicos-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-clinica-medicos-cadastrar',
                'descricao' => 'Menu Cl??nica - M??dicos - Cadastrar',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-medicos-excluir')) {
            Permissao::create([
                'nome' => 'menu-clinica-medicos-excluir',
                'descricao' => 'Menu Cl??nica - M??dicos - Excluir',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-medicos-listar')) {
            Permissao::create([
                'nome' => 'menu-clinica-medicos-listar',
                'descricao' => 'Menu Cl??nica - M??dicos - Listar',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-procedimentos')) {
            Permissao::create([
                'nome' => 'menu-clinica-procedimentos',
                'descricao' => 'Menu Cl??nica - Procedimentos',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-procedimentos-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-clinica-procedimentos-cadastrar',
                'descricao' => 'Menu Cl??nica - Procedimentos - Cadastrar',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-procedimentos-excluir')) {
            Permissao::create([
                'nome' => 'menu-clinica-procedimentos-excluir',
                'descricao' => 'Menu Cl??nica - Procedimentos - Excluir',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-procedimentos-listar')) {
            Permissao::create([
                'nome' => 'menu-clinica-procedimentos-listar',
                'descricao' => 'Menu Cl??nica - Procedimentos - Listar',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-exames')) {
            Permissao::create([
                'nome' => 'menu-clinica-exames',
                'descricao' => 'Menu Cl??nica - Exames',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-exames-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-clinica-exames-cadastrar',
                'descricao' => 'Menu Cl??nica - Exames - Cadastrar',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-exames-excluir')) {
            Permissao::create([
                'nome' => 'menu-clinica-exames-excluir',
                'descricao' => 'Menu Cl??nica - Exames - Excluir',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-clinica-exames-listar')) {
            Permissao::create([
                'nome' => 'menu-clinica-exames-listar',
                'descricao' => 'Menu Cl??nica - Exames - Listar',
                'grupo' => '9',
                'usuario_id' => '0'
            ]);
        }

            //Menu Escola
        if (!Permissao::firstWhere('nome', 'menu-escola')) {
            Permissao::create([
                'nome' => 'menu-escola',
                'descricao' => 'Menu Escola',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-aluno')) {
            Permissao::create([
                'nome' => 'menu-escola-aluno',
                'descricao' => 'Menu Escola - Aluno',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-aluno-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-escola-aluno-cadastrar',
                'descricao' => 'Menu Escola - Aluno - Cadastrar',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-aluno-excluir')) {
            Permissao::create([
                'nome' => 'menu-escola-aluno-excluir',
                'descricao' => 'Menu Escola - Aluno - Excluir',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-aluno-listar')) {
            Permissao::create([
                'nome' => 'menu-escola-aluno-listar',
                'descricao' => 'Menu Escola - Aluno - Listar',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-turma')) {
            Permissao::create([
                'nome' => 'menu-escola-turma',
                'descricao' => 'Menu Escola - Turma',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-turma-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-escola-turma-cadastrar',
                'descricao' => 'Menu Escola - Turma - Cadastrar',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-turma-excluir')) {
            Permissao::create([
                'nome' => 'menu-escola-turma-excluir',
                'descricao' => 'Menu Escola - Turma - Excluir',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-turma-listar')) {
            Permissao::create([
                'nome' => 'menu-escola-turma-listar',
                'descricao' => 'Menu Escola - Turma - Listar',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-contratoescola')) {
            Permissao::create([
                'nome' => 'menu-escola-contratoescola',
                'descricao' => 'Menu Escola - Contrato de Escola',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-contratoescola-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-escola-contratoescola-cadastrar',
                'descricao' => 'Menu Escola - Contrato de Escola - Cadastrar',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-contratoescola-excluir')) {
            Permissao::create([
                'nome' => 'menu-escola-contratoescola-excluir',
                'descricao' => 'Menu Escola - Contrato de Escola - Excluir',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-contratoescola-listar')) {
            Permissao::create([
                'nome' => 'menu-escola-contratoescola-listar',
                'descricao' => 'Menu Escola - Contrato de Escola - Listar',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-contratoescola-config')) {
            Permissao::create([
                'nome' => 'menu-escola-contratoescola-config',
                'descricao' => 'Menu Escola - Contrato de Escola - Configura????o',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-matricula')) {
            Permissao::create([
                'nome' => 'menu-escola-matricula',
                'descricao' => 'Menu Escola - Matricula',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-matricula-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-escola-matricula-cadastrar',
                'descricao' => 'Menu Escola - Matricula - Cadastrar',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-matricula-excluir')) {
            Permissao::create([
                'nome' => 'menu-escola-matricula-excluir',
                'descricao' => 'Menu Escola - Matricula - Excluir',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-matricula-listar')) {
            Permissao::create([
                'nome' => 'menu-escola-matricula-listar',
                'descricao' => 'Menu Escola - Matricula - Listar',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-diario')) {
            Permissao::create([
                'nome' => 'menu-escola-diario',
                'descricao' => 'Menu Escola - Diario',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-diario-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-escola-diario-cadastrar',
                'descricao' => 'Menu Escola - Diario - Cadastrar',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-diario-excluir')) {
            Permissao::create([
                'nome' => 'menu-escola-diario-excluir',
                'descricao' => 'Menu Escola - Diario - Excluir',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-diario-listar')) {
            Permissao::create([
                'nome' => 'menu-escola-diario-listar',
                'descricao' => 'Menu Escola - Diario - Listar',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-aviso')) {
            Permissao::create([
                'nome' => 'menu-escola-aviso',
                'descricao' => 'Menu Escola - Aviso',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-aviso-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-escola-aviso-cadastrar',
                'descricao' => 'Menu Escola - Aviso - Cadastrar',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-aviso-excluir')) {
            Permissao::create([
                'nome' => 'menu-escola-aviso-excluir',
                'descricao' => 'Menu Escola - Aviso - Excluir',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-aviso-listar')) {
            Permissao::create([
                'nome' => 'menu-escola-aviso-listar',
                'descricao' => 'Menu Escola - Aviso - Listar',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-agenda')) {
            Permissao::create([
                'nome' => 'menu-escola-agenda',
                'descricao' => 'Menu Escola - Agenda',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-agenda-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-escola-agenda-cadastrar',
                'descricao' => 'Menu Escola - Agenda - Cadastrar',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-agenda-excluir')) {
            Permissao::create([
                'nome' => 'menu-escola-agenda-excluir',
                'descricao' => 'Menu Escola - Agenda - Excluir',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-escola-agenda-listar')) {
            Permissao::create([
                'nome' => 'menu-escola-agenda-listar',
                'descricao' => 'Menu Escola - Agenda - Listar',
                'grupo' => '10',
                'usuario_id' => '0'
            ]);
        }

            //Menu Associa????o
        if (!Permissao::firstWhere('nome', 'menu-associacao')) {
            Permissao::create([
                'nome' => 'menu-associacao',
                'descricao' => 'Menu Associa????o',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-clientes')) {
            Permissao::create([
                'nome' => 'menu-associacao-clientes',
                'descricao' => 'Menu Associa????o - Clientes',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-clientes-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-associacao-clientes-cadastrar',
                'descricao' => 'Menu Associa????o - Clientes - Cadastrar',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-clientes-excluir')) {
            Permissao::create([
                'nome' => 'menu-associacao-clientes-excluir',
                'descricao' => 'Menu Associa????o - Clientes - Excluir',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-clientes-listar')) {
            Permissao::create([
                'nome' => 'menu-associacao-clientes-listar',
                'descricao' => 'Menu Associa????o - Clientes - Listar',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-fornecedores')) {
            Permissao::create([
                'nome' => 'menu-associacao-fornecedores',
                'descricao' => 'Menu Associa????o - Fornecedores',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-fornecedores-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-associacao-fornecedores-cadastrar',
                'descricao' => 'Menu Associa????o - Fornecedores - Cadastrar',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-fornecedores-excluir')) {
            Permissao::create([
                'nome' => 'menu-associacao-fornecedores-excluir',
                'descricao' => 'Menu Associa????o - Fornecedores - Excluir',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-fornecedores-listar')) {
            Permissao::create([
                'nome' => 'menu-associacao-fornecedores-listar',
                'descricao' => 'Menu Associa????o - Fornecedores - Listar',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-veiculo')) {
            Permissao::create([
                'nome' => 'menu-associacao-veiculo',
                'descricao' => 'Menu Associa????o - Ve??culos',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-veiculo-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-associacao-veiculo-cadastrar',
                'descricao' => 'Menu Associa????o - Ve??culos - Cadastrar',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-veiculo-excluir')) {
            Permissao::create([
                'nome' => 'menu-associacao-veiculo-excluir',
                'descricao' => 'Menu Associa????o - Ve??culos - Excluir',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-veiculo-listar')) {
            Permissao::create([
                'nome' => 'menu-associacao-veiculo-listar',
                'descricao' => 'Menu Associa????o - Ve??culos - Listar',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-contratoassociacao')) {
            Permissao::create([
                'nome' => 'menu-associacao-contratoassociacao',
                'descricao' => 'Menu Associa????o - Contrato de Associa????o',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-contratoassociacao-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-associacao-contratoassociacao-cadastrar',
                'descricao' => 'Menu Associa????o - Contrato de Associa????o - Cadastrar',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-contratoassociacao-excluir')) {
            Permissao::create([
                'nome' => 'menu-associacao-contratoassociacao-excluir',
                'descricao' => 'Menu Associa????o - Contrato de Associa????o - Excluir',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-contratoassociacao-listar')) {
            Permissao::create([
                'nome' => 'menu-associacao-contratoassociacao-listar',
                'descricao' => 'Menu Associa????o - Contrato de Associa????o - Listar',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-rateio')) {
            Permissao::create([
                'nome' => 'menu-associacao-rateio',
                'descricao' => 'Menu Associa????o - Rateio',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-rateio-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-associacao-rateio-cadastrar',
                'descricao' => 'Menu Associa????o - Rateio - Cadastrar',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-rateio-excluir')) {
            Permissao::create([
                'nome' => 'menu-associacao-rateio-excluir',
                'descricao' => 'Menu Associa????o - Rateio - Excluir',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-rateio-listar')) {
            Permissao::create([
                'nome' => 'menu-associacao-rateio-listar',
                'descricao' => 'Menu Associa????o - Rateio - Listar',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-quota')) {
            Permissao::create([
                'nome' => 'menu-associacao-quota',
                'descricao' => 'Menu Associa????o - Quota',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-quota-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-associacao-quota-cadastrar',
                'descricao' => 'Menu Associa????o - Quota - Cadastrar',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-quota-excluir')) {
            Permissao::create([
                'nome' => 'menu-associacao-quota-excluir',
                'descricao' => 'Menu Associa????o - Quota - Excluir',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-quota-listar')) {
            Permissao::create([
                'nome' => 'menu-associacao-quota-listar',
                'descricao' => 'Menu Associa????o - Quota - Listar',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-fundodecaixa')) {
            Permissao::create([
                'nome' => 'menu-associacao-fundodecaixa',
                'descricao' => 'Menu Associa????o - Fundo de Caixa',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-fundodecaixa-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-associacao-fundodecaixa-cadastrar',
                'descricao' => 'Menu Associa????o - Fundo de Caixa - Cadastrar',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-fundodecaixa-excluir')) {
            Permissao::create([
                'nome' => 'menu-associacao-fundodecaixa-excluir',
                'descricao' => 'Menu Associa????o - Fundo de Caixa - Excluir',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-associacao-fundodecaixa-listar')) {
            Permissao::create([
                'nome' => 'menu-associacao-fundodecaixa-listar',
                'descricao' => 'Menu Associa????o - Fundo de Caixa - Listar',
                'grupo' => '11',
                'usuario_id' => '0'
            ]);
        }


            //Menu Projetos
        if (!Permissao::firstWhere('nome', 'menu-projetos')) {
            Permissao::create([
                'nome' => 'menu-projetos',
                'descricao' => 'Menu Projetos',
                'grupo' => '12',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-projetos-projetos')) {
            Permissao::create([
                'nome' => 'menu-projetos-projetos',
                'descricao' => 'Menu Projetos - Projetos',
                'grupo' => '12',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-projetos-projetos-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-projetos-projetos-cadastrar',
                'descricao' => 'Menu Projetos - Projetos - Cadastrar',
                'grupo' => '12',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-projetos-projetos-excluir')) {
            Permissao::create([
                'nome' => 'menu-projetos-projetos-excluir',
                'descricao' => 'Menu Projetos - Projetos - Excluir',
                'grupo' => '12',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-projetos-projetos-listar')) {
            Permissao::create([
                'nome' => 'menu-projetos-projetos-listar',
                'descricao' => 'Menu Projetos - Projetos - Listar',
                'grupo' => '12',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-projetos-tarefas')) {
            Permissao::create([
                'nome' => 'menu-projetos-tarefas',
                'descricao' => 'Menu Projetos - Tarefas',
                'grupo' => '12',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-projetos-tarefas-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-projetos-tarefas-cadastrar',
                'descricao' => 'Menu Projetos - Tarefas - Cadastrar',
                'grupo' => '12',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-projetos-tarefas-excluir')) {
            Permissao::create([
                'nome' => 'menu-projetos-tarefas-excluir',
                'descricao' => 'Menu Projetos - Tarefas - Excluir',
                'grupo' => '12',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-projetos-tarefas-listar')) {
            Permissao::create([
                'nome' => 'menu-projetos-tarefas-listar',
                'descricao' => 'Menu Projetos - Tarefas - Listar',
                'grupo' => '12',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-projetos-pessoas')) {
            Permissao::create([
                'nome' => 'menu-projetos-pessoas',
                'descricao' => 'Menu Projetos - Pessoas',
                'grupo' => '12',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-projetos-pessoas-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-projetos-pessoas-cadastrar',
                'descricao' => 'Menu Projetos - Pessoas - Cadastrar',
                'grupo' => '12',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-projetos-pessoas-excluir')) {
            Permissao::create([
                'nome' => 'menu-projetos-pessoas-excluir',
                'descricao' => 'Menu Projetos - Pessoas - Excluir',
                'grupo' => '12',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-projetos-pessoas-listar')) {
            Permissao::create([
                'nome' => 'menu-projetos-pessoas-listar',
                'descricao' => 'Menu Projetos - Pessoas - Listar',
                'grupo' => '12',
                'usuario_id' => '0'
            ]);


            //Menu Nota Fiscal
        }
        if (!Permissao::firstWhere('nome', 'menu-notafiscal')) {
            Permissao::create([
                'nome' => 'menu-notafiscal',
                'descricao' => 'Menu Nota Fiscal',
                'grupo' => '13',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-notafiscal-produtos')) {
            Permissao::create([
                'nome' => 'menu-notafiscal-produtos',
                'descricao' => 'Menu Nota Fiscal - Produtos',
                'grupo' => '13',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-notafiscal-produtos-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-notafiscal-produtos-cadastrar',
                'descricao' => 'Menu Nota Fiscal - Produtos - Cadastrar',
                'grupo' => '13',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-notafiscal-produtos-excluir')) {
            Permissao::create([
                'nome' => 'menu-notafiscal-produtos-excluir',
                'descricao' => 'Menu Nota Fiscal - Produtos - Excluir',
                'grupo' => '13',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-notafiscal-produtos-listar')) {
            Permissao::create([
                'nome' => 'menu-notafiscal-produtos-listar',
                'descricao' => 'Menu Nota Fiscal - Produtos - Listar',
                'grupo' => '13',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-notafiscal-produtos-configuracao')) {
            Permissao::create([
                'nome' => 'menu-notafiscal-produtos-configuracao',
                'descricao' => 'Menu Nota Fiscal - Produtos - Configura????o',
                'grupo' => '13',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-notafiscal-servicos')) {
            Permissao::create([
                'nome' => 'menu-notafiscal-servicos',
                'descricao' => 'Menu Nota Fiscal - Servi??os',
                'grupo' => '13',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-notafiscal-servicos-cadastrar')) {
            Permissao::create([
                'nome' => 'menu-notafiscal-servicos-cadastrar',
                'descricao' => 'Menu Nota Fiscal - Servi??os - Cadastrar',
                'grupo' => '13',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-notafiscal-servicos-excluir')) {
            Permissao::create([
                'nome' => 'menu-notafiscal-servicos-excluir',
                'descricao' => 'Menu Nota Fiscal - Servi??os - Excluir',
                'grupo' => '13',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-notafiscal-servicos-listar')) {
            Permissao::create([
                'nome' => 'menu-notafiscal-servicos-listar',
                'descricao' => 'Menu Nota Fiscal - Servi??os - Listar',
                'grupo' => '13',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'menu-notafiscal-servicos-configuracao')) {
            Permissao::create([
                'nome' => 'menu-notafiscal-servicos-configuracao',
                'descricao' => 'Menu Nota Fiscal - Servi??os - Configura????o',
                'grupo' => '13',
                'usuario_id' => '0'
            ]);
        }



//Tela Inicial
        if (!Permissao::firstWhere('nome', 'tela-inicial-atendimento')) {
            Permissao::create([
                'nome' => 'tela-inicial-atendimento',
                'descricao' => 'Tela Inicial - Atendimento',
                'grupo' => '99',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'tela-inicial-financeiro')) {
            Permissao::create([
                'nome' => 'tela-inicial-financeiro',
                'descricao' => 'Tela Inicial - Financeiro',
                'grupo' => '99',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'tela-inicial-financeiro-contasareceber')) {
            Permissao::create([
                'nome' => 'tela-inicial-financeiro-contasareceber',
                'descricao' => 'Tela Inicial - Financeiro Contas a Receber',
                'grupo' => '99',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'tela-inicial-financeiro-contasapagar')) {
            Permissao::create([
                'nome' => 'tela-inicial-financeiro-contasapagar',
                'descricao' => 'Tela Inicial - Financeiro Contas a Pagar',
                'grupo' => '99',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'tela-inicial-viagem')) {
            Permissao::create([
                'nome' => 'tela-inicial-viagem',
                'descricao' => 'Tela Inicial - Viagem',
                'grupo' => '99',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'tela-inicial-convenio')) {
            Permissao::create([
                'nome' => 'tela-inicial-convenio',
                'descricao' => 'Tela Inicial - Conv??nio',
                'grupo' => '99',
                'usuario_id' => '0'
            ]);
        }
        if (!Permissao::firstWhere('nome', 'tela-inicial-rebanho')) {
            Permissao::create([
                'nome' => 'tela-inicial-rebanho',
                'descricao' => 'Tela Inicial - Rebanho',
                'grupo' => '99',
                'usuario_id' => '0'
            ]);
        }

        // Exibe uma informa????o no console durante o processo de seed
        $this->command->info('Permissaos do Sistema Criadas');
    }

}

# Sistema de Almoxarifado Simples com Relatórios

Almoxarifado é um importante setor das empresas, sejam públicas ou privadas, e consiste no lugar destinado à armazenagem em condições adequadas de produtos para uso interno, e é matéria de estudo em administração.

## Começando

```
Criar um cópia do arquivo env.example para .env (Ambiente de Teste)
```
Esse passo é importante dependendo onde você está rodando o projeto se for local é bom usar o .env caso em produção configurar no config/database.php

```
php artisan migrate
```

Executar o comando para rodar a migrations para criação das tabelas no banco de dados.

```
Criar grupos de usuário para uso do sistema.
```
Agora só criar o usuário e acessar o sistema.

# Funcionalidades do sistema

## O sistema consiste em utilizar seguintes telas

* Formulário de cadastro e edição.
* Listagem com filtros.
* Relatórios em PDF.
* Restrição para acessar o sistema.
* Formulário de contato para enviar email.
* Migrações para controle da estrutura do banco de dados.

### Clientes

```
Nome, Email, Telefone, Endereço e CPF
```
### Fornecedores

```
Nome, Email, Telefone, Endereço e CPNJ
```

### Categorias

```
Nome
```

### Produtos

```
Nome, Categoria, Estoque Mínimo e Estoque Máximo, Quantidade(Conforme a entrada e saída é atualizado)
```
### Entrada de Produtos

```
Produto, Quantidade, Tipo de Movimento, Descrição, Fornecedor e Data de Entrada
```

### Saída de Produtos

```
Produto, Quantidade, Tipo de Movimento, Descrição, Cliente e Data de Entrada
```

### Relatórios em PDF

* Entrada de Produtos(Data Inicial e Data Final)
* Saída de Produtos(Data Inicial e Data Final)
* Produtos(Categoria do produto)
* Produtos por Fornecedor(Data Inicial, Data Final e Fornecedor)

## Desenvolvimento

Um pequeno módulo feito para um projeto ERP.

### Pré-requisitos

O que você precisa?
* PHP 7+
* MySQL ou PostgreSQL
* [SublimeTEXT](https://www.sublimetext.com/) - Editor de Texto
* [Visual Studio Code](https://code.visualstudio.com/) - IDE
* [Composer](https://getcomposer.org/) - Gerenciador de pacotes

### Ferramentas usadas

* PHP 7+
* MySQL
* [Laravel](https://laravel.com/) - Laravel 5.7
* [Template](https://adminlte.io/preview) - AdminLTE 2
* [DomPDF](https://github.com/barryvdh/laravel-dompdf) - DomPDF para Laravel 5+
* [Composer](https://getcomposer.org/) - Gerenciador de pacotes

### Desenvolvedor
* Yuri Neves(https://github.com/yurineves92)



# CRUD de Usuários · PHP

Aplicação acadêmica em PHP e MySQL para cadastrar, listar, editar e excluir usuários.

## O que o projeto apresenta

- Cadastro e listagem de usuários.
- Edição e exclusão de registros.
- Formulários com Bootstrap.
- Persistência por conexão MySQL.

## Tecnologias

PHP · MySQL · Bootstrap · HTML · CSS

## Executar localmente

```bash
git clone https://github.com/WeldonCarlos/crud-php.git
cd crud-php
php -S localhost:8000
```

Requer PHP com a extensão MySQLi e um servidor MySQL configurado. Depois de preparar a conexão e as tabelas, acesse `http://localhost:8000`. Também é possível servir a pasta com Apache/XAMPP.

## Estrutura

- `README.md`
- `config.php`
- `css/`
- `editar-usuario.php`
- `index.php`
- `js/`
- `listar-usuarios.php`
- `novo-usuario.php`
- `salvar-usuario.php`

## Estado atual

Configure `config.php` e crie a tabela `usuarios` com campos `id`, `nome`, `email`, `senha` e `data_nasc`, conforme o código. O projeto utiliza SQL concatenado e MD5 para senhas; exige revisão antes de uso real.

## Autoria

[Weldon Carlos](https://github.com/WeldonCarlos) · [LinkedIn](https://www.linkedin.com/in/weldon-carlos-41b488231/)

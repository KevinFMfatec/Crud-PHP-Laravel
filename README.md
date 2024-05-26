# Projeto CRUD de usuários em PHP utilizando Laravel

Aplicação Web simples para gerenciamento de usuários. Permintindo criar, listar, visualizar, editar e excluir usuários.
Abaixo você encontrará detalhes de como configurar e iniciar o projeto.

## Requisitos
- PHP >= 8.3.7 	
- Composer
- Laravel Installer >= 5.8.1
- MySQL

![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) ![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white) ![MySQL](https://img.shields.io/badge/mysql-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white)
## Instalação

1. **Clone o repositório:**

```bash
git clone https://github.com/KevinFMfatec/Crud-PHP-Laravel.git
cd Crud-PHP-Laravel
```

2. **Instale as dependências:**

```bash
composer install
```

3. **Configure o arquivo `.env`**:

Renomeie o arquivo `.env.example` para `.env` e faça as configurações do banco de dados, de acordo com o seu usuário:
```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

4. **Gere a chave da aplicação**:

```bash
php artisan key:generate
```

5. **Execute as migrações**:

```bash
php artisan migrate
```

## Inicializando o Projeto

Para iniciar o servidor de desenvolvimento do Laravel, execute:

```bash
php artisan serve
```

A aplicação estará disponível em [http://localhost:8000](http://localhost:8000).

## Agora é só acessar o Link e testar a aplicação.
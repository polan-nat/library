# Biblioteca API

Esta é uma API RESTful para um sistema de gerenciamento de biblioteca, desenvolvida com Laravel.

## Instalação

1. Clone o repositório para sua máquina local:

git clone https://github.com/polan-nat/library.git

2. Navegue até o diretório do projeto:

cd library

3. Instale as dependências do projeto usando o Composer:

composer install

4. Copie o arquivo `.env.example` e renomeie para `.env`:

cp .env.example .env

5. Gere a chave de aplicação do Laravel:

php artisan key

6. Configure seu arquivo `.env` com as informações do banco de dados e outras configurações necessárias.

7. Execute as migrações do banco de dados para criar as tabelas necessárias:

php artisan migrate

## Executando a Aplicação

Para iniciar o servidor de desenvolvimento, execute o seguinte comando:

php artisan serve

Acesse a aplicação em `http://localhost:8000`.

## Executando Testes

Para executar os testes unitários e de integração, execute o seguinte comando:

php artisan test

## Rotas da API

A API fornece as seguintes rotas:

- `POST /register`: Registrar um novo usuário.
- `POST /login`: Autenticar um usuário.
- `GET /books`: Listar todos os livros.
- `GET /authors`: Listar todos os autores.
- `GET /me`: Obter informações do usuário autenticado.
- Outras rotas para CRUD de livros, autores e empréstimos.

Consulte a documentação da API para obter mais detalhes sobre cada rota.

## Contribuindo

Contribuições são bem-vindas! Se você encontrar algum problema ou tiver alguma sugestão, sinta-se à vontade para abrir uma issue ou enviar um pull request.

## Licença

Este projeto está licenciado sob a [Licença MIT](https://opensource.org/licenses/MIT).

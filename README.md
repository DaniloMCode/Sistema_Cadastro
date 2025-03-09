# Sistema de Cadastro Simples em PHP

Este projeto é um sistema de cadastro básico desenvolvido em PHP, utilizando um banco de dados MySQL. Ele oferece funcionalidades de registro de usuários, login, logout e conexão com o banco de dados.

## Funcionalidades

* **Registro de Usuários**: Permite que novos usuários se cadastrem no sistema, fornecendo nome, email e senha.
* **Login**: Permite que usuários cadastrados acessem o sistema utilizando suas credenciais.
* **Logout**: Permite que usuários conectados encerrem sua sessão.
* **Conexão com Banco de Dados**: Utiliza PDO para estabelecer uma conexão segura com o banco de dados MySQL.

 ## Segurança

* As senhas dos usuários são armazenadas no banco de dados utilizando hash para maior segurança.

## Tecnologias Utilizadas

* PHP
* MySQL
* HTML
* CSS

## Pré-requisitos

* Servidor web XAMPP
* PHP 7.0 
* MySQL

## Instalação

1.  Clone este repositório:

    ```bash
    git clone <URL_DO_SEU_REPOSITORIO>
    ```

2.  Importe o arquivo `database.sql` para o seu banco de dados MySQL.
3.  Configure as credenciais do banco de dados no arquivo `config/db.php`.
4.  Inicie o servidor web e acesse o sistema através do seu navegador.

## Estrutura de Arquivos

* `index.php`: Página principal após o login.
* `login.php`: Página de login.
* `logout.php`: Script de logout.
* `cadastro.php`: Página de cadastro de usuários.
* `config/db.php`: Arquivo de configuração da conexão com o banco de dados.
* `database.sql`: Arquivo SQL com a estrutura do banco de dados.
* `style.css`: Arquivo CSS para estilização (opcional).

## Considerações

* Este é um sistema de cadastro básico para fins de aprendizado.
* Recomenda-se o uso de criptografia de senha segura (como `password_hash()` do PHP) em sistemas de produção.
* Para segurança, nunca armazene informações confidenciais diretamente no código.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou enviar pull requests.

## Licença

Este projeto está sob a licença [MIT](link da licença, se aplicável).
 

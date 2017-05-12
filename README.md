S2IT - PHP Challenge
====================

Este projeto foi desenvolvido em linguagem PHP, com a utilização do framework Symfony2 e banco de dados MySQL.

Consiste em enviar arquivos XMLs e compilar as informações necessárias.


Instalação
----------

Para instalar os componentes, vamos utilizar o composer (https://getcomposer.org/). O arquivo composer.json já possui as dependências, basta digitar a linha de comando "composer install".

Após a conclusão da instalação, será necessário configurar os parâmetros de acesso da base de dados. Abra o arquivo app\config\parameters.yml e altere os parâmetros:

*    database_host: 127.0.0.1
*    database_port: 3306
*    database_name: php_challenge
*    database_user: challenge_user
*    database_password: challenge_pass
*    mailer_transport: smtp
*    mailer_host: 127.0.0.1
*    mailer_user: null
*    mailer_password: null
*    secret: ThisTokenIsNotSoSecretChangeIt
    
Concluída a etapa anterior, usaremos o Doctrine ORM para gerenciar as entidades no banco de dados. Digite o comando "php app\console doctrine:schema:update".

Feito isso, inicie o serviço, através do comando "php app/console server:run" e rode a aplicação no navegador (http://localhost:8000).
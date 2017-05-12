S2IT - PHP Challenge
====================

Este projeto foi desenvolvido em linguagem PHP, com a utilização do framework Symfony2 e banco de dados MySQL.

Consiste em enviar arquivos XMLs e compilar as informações necessárias.


Instalação
----------

Para instalar os componentes, vamos utilizar o composer (https://getcomposer.org/). O arquivo composer.json já possui as dependências, basta digitar a linha de comando "composer install".

Durante a instação, será necessário configurar os parâmetros do banco de dados.

Concluída a etapa anterior, usaremos o Doctrine ORM para gerenciar as entidades no banco de dados. Digite o comando "php app\console doctrine:schema:update".

Feito isso, inicie o serviço, através do comando "php app/console server:run" e rode a aplicação no navegador (http://localhost:8000).
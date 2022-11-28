<?php

/**
 * DEFINIÇÔES GLOBAIS DO PROJETO
 */
define('FRONTEND_TITLE', 'Bicho Novo: Seu PetShop Animal');
define('BACKEND_TITLE', 'Bicho Novo');
define('TIMEZONE', 'America/Sao_Paulo');
define('DISPLAY_ERRORS', 1);
define('PATH_PROJETO', __DIR__ . '/../');
define('SALT_SENHA', '123ABC');

/**
 * DEFINIÇÕES DE PATH DE ARQUIVOS
 */
define('URL', 'http://localhost');
define('TEMPLATES', PATH_PROJETO . 'templates/');
define('TBACKEND',  TEMPLATES . 'backend/');
define('TFRONTEND', TEMPLATES . 'frontend/');

/**
 * DEFINIÇÕES DO BANCO DE DADOS
 */
define('DB_HOST',   'localhost');
define('DB_SCHEMA', 'ps_gb006425');
define('DB_USER',   'root');
define('DB_PASS',   '');

/**
 * DIFINIÇÕES DE ENVIO DE EMAIL
 */
define('MAIL_HOST', 'smtp.gmail.com');
define('MAIL_PORT',  587);
define('MAIL_NAME', 'Bicho Novo Pet Shop');
define('MAIL_USER', 'gb006425@cfjl.com.br');
define('MAIL_PASS', '');
define('MAIL_CONTACTNAME', 'Boiaski Atendedor');
define('MAIL_CONTACTMAIL', 'gb006425@cfjl.com.br');
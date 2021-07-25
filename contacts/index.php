<?php

/**
 * template.php
 * Página modelo para criação do tema do aplicativo.
 * Esta página servirá de modelo para todas as outras quando o tema estiver pronto.
 */

// Define constante com o diretório raiz (/) do aplicativo
// Também podemos usar a constante mágica __DIR__, se disponível no servidor
define('PATH', $_SERVER['DOCUMENT_ROOT']);

// Importa arquivo de configuração da página
require_once(PATH . '/config/config.php');

// Define o(s) ano(s) na mensagem de copyright
// Se o ano atual é maior que o ano de criação do aplicativo, exibe os dois anos
// Senão, exibe o ano de criação do aplicativo
if (intval(date('Y')) > intval($C['appYear']))
    $app_year = $C['appYear'] . ' ' . date('Y');
else
    $app_year = $C['appYear'];

///// Título da página /////
// Se vazio, teremos <title>Nome do aplicativo .:. Slogan do aplicativo</title>
// Se definido, teremos <title>Nome do aplicativo .:. $title</title>
$title = 'Página Modelo';

//////////////////////////////////////////////////////////////
///// Os códigos PHP para gerar o conteúdo começam aqui. /////
//////////////////////////////////////////////////////////////

// Conteúdo principal da página (EXEMPLO)
$article = '';
$aside = '';

///////////////////////////////////////////////////////////////
///// Os códigos PHP para gerar o conteúdo terminam aqui. /////
///////////////////////////////////////////////////////////////

// Importa abertura do tema
require_once(PATH .  '/config/header.php');

?>

<article><?= $article ?></article>
<aside><?= $aside ?></aside>

<?php

// Importa fechamento do tema
require_once(PATH . '/config/footer.php');

?>
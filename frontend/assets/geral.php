<?php
// Defina o cabeçalho como CSS para indicar que é um arquivo CSS
header("Content-type: text/css");

// Lista de arquivos CSS que você deseja combinar
$cssFiles = array(
    "./css/geral.css",
    "./css/components/topHeader.css",
    "./css/cadastro/users/users.css",
    "./css/Login/login.css",
    "./css/cadastro/moves/moves.css"
);

// Inicialize uma variável para armazenar o conteúdo CSS combinado
$combinedCss = '';

// Loop através da lista de arquivos e combine o conteúdo
foreach ($cssFiles as $cssFile) {
    $cssContent = file_get_contents($cssFile);
    $combinedCss .= $cssContent;
}

// Saída do conteúdo CSS combinado
echo $combinedCss;

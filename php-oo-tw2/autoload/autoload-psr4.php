<?php

function carregar(string $nomeCompleto)
{
    $nsRaiz = "App\\";
    $diretorioBase = __DIR__ . "/../src/";

    $tamanhoNsBase = strlen($nsRaiz);

    $nsRaizRecebido = substr($nomeCompleto,0, $tamanhoNsBase);
    if ($nsRaiz !== $nsRaizRecebido) {
        return;
    }

    $caminhoRelativo = substr($nomeCompleto, $tamanhoNsBase);

    $caminhoArquivo = $diretorioBase . str_ireplace("\\", "/", $caminhoRelativo) . ".php";

    if (file_exists($caminhoArquivo)) {
        require $caminhoArquivo;
    }
}

spl_autoload_register("carregar");
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Caderno Virtual</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/reset.css"  />
        <link rel="stylesheet" type="text/css" href="../css/geral.css"/>
        <link rel="stylesheet" type="text/css" href="../css/caderno.css"/>
    </head>
    <body>
        <!--============================    CABEÇALHO     =========================-->        
        <?php
        $nome_pagina = "Projetos em TI";
        include './cabecalho.php';
        ?>
        <!--=======================================================================-->
        <!--==========================       CORPO         ========================-->
        <?php $aula1 = "Introdução ao conteúdo" ?>
        <div id="menu-lateral">
            <article>
                <ul>
                    <li><a href="#aula1"><?php echo "Aula 1 - $aula1"; ?></a></li>
                </ul>
            </article>
        </div>
        <div id="corpo">
            <article>
                <h1 id="aula1"><?php echo "Aula 1 - $aula1"; ?></h1>
                <h2>1ºTrimestre</h2>
                <ul>
                    <li>Conceitos de programação em C</li>
                    <li>Desenvolvimento de páginas HTML</li>
                    <li>Programação básica de JavaScript</li>
                    <li>Desenvolvimento de páginas dinamicas em PHP</li>
                    <li>Utilização de Banco de Dados(MySQL)</li>
                    <li>Utilização do XAMPP</li>
                </ul>
                <h2>2ºTrimestre</h2>
                <ul>
                    <li>Desenvolvimento de Projeto</li>
                </ul>
                <h2>3ºTrimestre</h2>
                <ul>
                    <li>Desenvolvimento de Projeto</li>
                </ul>
            </article>
        </div>
        <!--=======================================================================-->
        <!--========================        RODAPÉ           ======================-->
        <footer>
            <nav>
                <ul>
                    <li>
                        <a></a>
                    </li>

                    <li>
                        <a></a>
                    </li>

                    <li>
                        <a></a>
                    </li>
                </ul>
            </nav>
        </footer>
        <!--=======================================================================-->
    </body>
</html>

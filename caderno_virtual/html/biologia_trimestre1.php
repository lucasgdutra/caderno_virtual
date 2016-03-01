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
        $nome_pagina = "Biologia";
        include './cabecalho.php';
        ?>
        <!--=======================================================================-->
        <!--==========================       CORPO         ========================-->
        <?php $aula1 = "Introdução a genética" ?>
        <div id="menu-lateral">
            <article>
                <ul>
                    <li><a href="#aula1"><?php echo "Aula 1 - $aula1"; ?></a></li>
                </ul>
            </article>
        </div>
        <div id="corpo">
            <div id="aula1">
                <img id="img-dna" src="../img/dna.jpg">

                <article>
                    <h1 id="aula1"><?php echo "Aula 1 - $aula1"; ?></h1>
                    <h2>Genes</h2>
                    <ul>
                        <li>É uma sequência de DNA codificante</li>
                        <li>É um conjunto de bases nitrogenadas que determinam a 
                            sequência de uma proteína</li>
                        <li>É constituído de DNA</li>
                    </ul>

                    <h2>DNA</h2>
                    <ul>
                        <li>É um livro de receitas do desenvolvimento biológico de 
                            qualquer organismo</li>
                        <li>Carrega nossas características</li>
                        <li>Acido desoxiribonúcleico(bases nitrogenadas, açúcar, fosfato)</li>
                        <li>46 moléculas de DNA núclear(23 da mãe e 23 do pai)em cada uma de nossas células</li>
                        <li>1 molécula de DNA = 1 cromossomo</li>
                        <li>Gene é DNA, DNA não é necessariamente gene</li>
                    </ul>
                    <h2>Cromossomo</h2>
                    <figure>
                        <img id="img-cromossomo" src="../img/cromossomo.jpg">
                        <figcaption>locallização do gene</figcaption>
                    </figure>


                </article>
            </div>
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

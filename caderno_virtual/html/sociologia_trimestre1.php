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
        $nome_pagina = "Sociologia";
        include './cabecalho.php';
        ?>
        <!--=======================================================================-->
        <!--==========================       CORPO         ========================-->
        <?php
        $aula1 = "Ciências Socias";
        $aula2 = "O que é poder?"
        ?>

        <div id="menu-lateral">
            <article>
                <ul>
                    <li><a href="#aula1"><?php echo "Aula 1 - $aula1"; ?></a></li>
                    <li><a href="#aula2"><?php echo "Aula 2 - $aula2"; ?></a></li>
                </ul>
            </article>
        </div>
        <div id="corpo">
            <article>
                <h1 id="aula1"><?php echo "Aula 1 - $aula1"; ?></h1>
                <p>As ciências socias consistem em um grupo de campos de estudos que estudam a sociedade,
                    entre elas temos a Sociologia, Antropologia e a Ciência Política.</p>
                <section>
                    <h2>Sociologia</h2>
                    <p>A sociologia surgiu em meados do século XIX, a partir de discussões </p>
                </section>
                <h1 id="aula2"><?php echo "Aula 2 - $aula2"; ?></h1>
                <p>Poder é a capacidade de impor a própria vontade sobre os demais</p>
                <h2>As formas de exercício de poder</h2>
                <h3>Dominação</h3>
                <p>A dominação se determina através de um sistema de poder onde 
                    o dominado possui a "vontade de obedecer", esse tipo de dominação
                é estabelecida através de um dominante que consegue o poder de forma carismática
                , tradicional ou racional-legal.
                </p>
                <h3>Força, Violência</h3>
                <h2>A análise do poder</h2>
                <h3>Ciência política</h3>
                <h3>Filosofia política</h3>
                <h3>História política</h3>
                <h2>Nicolau Maquiavel</h2>
                <h3>"O príncipe" </h3>
                <p>realismo político - Como conquistar e manter o poder</p>
                <h3>O "maquiavelismo" e a condenação pública de Maquiavel</h3>
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

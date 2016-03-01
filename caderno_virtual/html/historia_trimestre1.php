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
        $nome_pagina = "Historia";
        include './cabecalho.php';
        ?>
        <!--=======================================================================-->
        <!--==========================       CORPO         ========================-->
        <?php
        $aula1 = "História geral - Conteúdo";
        $aula2 = "História do Brasil - Período Joanino e o processo de independência do Brasil";
        $aula3 = "História do Brasil - Revolução liberal do Porto(1820)";
        ?>
        <div id="menu-lateral">
            <article>
                <ul>
                    <li><a href="#aula1"><?php echo "Aula 1 - $aula1"; ?></a></li>
                    <li><a href="#aula2"><?php echo "Aula 2 - $aula2"; ?></a></li>
                    <li><a href="#aula3"><?php echo "Aula 3 - $aula3"; ?></a></li>
                </ul>
            </article>
        </div>
        <div id="corpo">
            <article id="aula1">
                <h1 class="titulo"><?php echo "Aula 1 - $aula1"; ?></h1>

                <ul>
                    <li>Século XXI - Revolução Industrial, Imperialismo.
                        ool  </li>
                    <li>Século XX - 1ªGuerra (1914 - 1918), Revolução Russa(1917)
                        , Crise de 1929, Nazi-Facismo, 2ªGuerra(1939-1945), Guerra
                        Fria.
                    </li>
                </ul>
                <h2>Caracterize a revolução industrial e o Imperialismo</h2>


                <iframe width="855" height="480" src="https://www.youtube.com/embed/8OZhwSCp_Z8" frameborder="0" allowfullscreen></iframe>

            </article>
            <article id="aula2">
                <h1 class="titulo"><?php echo "Aula 2 - $aula2"; ?></h1>
                <h2>Período Joanino(1808-1821)</h2>
                <h3>D. João VI e família real no brasil</h3>
                <ul>
                    <li>-Motivo:fugiram de Napoleão(Bloqueio Continental)</li>
                </ul>
                <h3>Medidas de D.João VI</h3>
                <ul>
                    <li>Abertura dos portos</li>
                    <li>-Consequência: fim do pacto colonial</li>
                </ul>
                <ul>
                    <li>Criação do Reino Unido de "Portugal, Brasil e Algarvis"</li>
                    <li>Consequência : autonomia política</li>
                </ul>
                <h3>Acordos de 1810</h3>
                <ul>
                    <li>D.João VI x Inglaterra</li>
                    <li>Inglaterra ganhou privilégios jurídicos e comercias no Brasil</li>
                </ul>
                <ul>
                    <li>- Foro privilegiado</li>
                    <li>- Liberdade religiosa</li>
                    <li>- Impostos mais baixos</li>
                    <li>15% Inglaterra</li>
                    <li>16% Portugal</li>
                    <li class="nivel1">24% Outros</li>
                </ul>
                <h2>Tarefa: Resumir a revolução liberal do porto de 1820</h2>
            </article>

            <article id="aula3">
                <h1 class="titulo"><?php echo "Aula 3 - $aula3"; ?></h1>
                <h2>Constituição para Portugal (Recolonizar o Brasil)</h2>
                <ul>
                    <li class="nivel3">1821</li>
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

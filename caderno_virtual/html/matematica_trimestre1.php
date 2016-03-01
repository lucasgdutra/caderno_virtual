<!DOCTYPE html>

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
        $nome_pagina = "Matematica";
        include './cabecalho.php';
        ?>
        <!--=======================================================================-->
        <!--==========================       CORPO         ========================-->
        <?php $aula1 = "Análise combinatória - lista 1" ?>
        <div id="menu-lateral">
            <article>
                <ul>
                    <li><a href="#aula1"><?php echo "Aula 1 - $aula1"; ?></a></li>
                </ul>
            </article>
        </div>
        <div id="corpo">
            <div id="aula1">
                <article>
                    <h1 id="aula1"><?php echo "Aula 1 - $aula1"; ?></h1>
                    <h2>Lista 1 - Princípio fundamental da contagem (PFC) ou 
                        principio multiplicativo</h2>
                    <ul>
                        <li>1. Há quatro estradas ligando as cidades A e B, e 
                            três estradas ligando as cidades B e C. De quantas 
                            maneiras distintas pode-se ir de A a C passando por B?</li>
                        <li class="resposta">São quatro possibilidades de A a B,
                            e três possibilidades de B a C, permitindo até 12(3x4=12) 
                            caminhos distintos. </li>
                    </ul>
                    <ul>
                        <li>2. Uma agência de turismo oferece bilhetes aéreos para
                            o trecho São Paulo -- Manaus por meio de duas companhias:
                            TAM e Azul. O passageiro pode escolher também
                            entre primeira classe, classe executiva e classe econômica.
                            De quantas maneiras um passageiro pode fazer tal escolha?  </li>
                        <li class="resposta">São duas companhias com três classes
                            diferentes cada uma, permitindo até 6 viagens diferentes(2x3=6)</li>
                    </ul>
                    <ul>
                        <li>3. O vagão de um trem possui seis portas. De quantas
                            maneiras distintas um passageiro pode entrar no trem
                            e sair dele por uma porta diferente da que entrou ?</li>
                        <li class="resposta">O passageiro pode utilizar qualquer
                            uma das seis portas para entrar e 5 das restantes para sair,
                            permitindo entrar e sair por até 30 caminhos diferentes, sendo 
                            6 de entrada e 5 de saída, (6x5=30).</li>
                    </ul>
                    <ul>
                        <li>4. Um jantar constará de três partes: entrada,
                            prato principal e sobremesa. De quantas maneiras distintas
                            ele poderá ser composto se há como opções oito entradas,
                            cinco pratos principais e quatro sobremesas? </li>
                        <li class="resposta">São 160 possibilidades diferentes(8x5x4=160)</li>
                    </ul>
                    <ul>
                        <li>5.Uma prova consta de dez testes de múltipla escolha.
                            De quantas maneiras distintas a prova pode ser resolvida,
                            se cada tem cinco alternativas distintas? </li>
                        <li class="resposta">São 5¹⁰ possibilidades, sendo 5 
                            alternativas por questão em 10 questões.</li>
                    </ul>
                    <ul>
                        <li>6. Uma prova consta de 10 questões do tipo V ou F. 
                            De quantas maneiras distintas ela pode ser resolvida?</li>
                        <li class="resposta">São 2¹⁰ possibilidades, sendo 2 
                            alternativas por questâo em 10 questões.</li>
                    </ul>
                    <ul>
                        <li>7. Com os algarismo 1, 2, 3, 4, 5, e 6. Quantos números
                            de três algarismos distintos podemos formar?</li>
                        <li class="resposta">São 120 possibilidades, sendo 6 
                            números possíveis para a primeira casa, 5 para a 
                            segunda e 4 para a terceira (6x5x4=120).</li>
                    </ul>
                    <ul>
                        <li>8. Quantos números de 3 algarismos distintos podem ser
                            formados com os algarismos 1, 2, 3, 4, 5, 6 e 7?</li>
                        <li class="resposta">São 210 possibilidades, sendo 7 números
                            para primeira casa, 6 para a segunda e 5 para a terceira
                            (7x6x5=210)</li>
                    </ul>
                    <ul>
                        <li>9. Quantos números de 3 algarismos podem ser
                            formados com os algarismos 0, 1, 2, 3, 4, 5, 6 e 7?</li>
                        <li class="resposta">São 448 possibilidades, sendo 7 
                            números possíveis para a primeira casa e 8 para a 
                            segunda e terceira (7x8x8=448)</li>
                    </ul>
                    <ul>
                        <li>10. Quantos números de quatro algarismos distintos existem?</li>
                        <li class="resposta">São 4536 possibilidades, sendo 9 
                            números possíveis para a primeira casa, 9 para a 
                            segunda, 8 para a terceira e 7 para a quarta(9x9x8x7=4536)</li>
                    </ul>
                    <ul>
                        <li>11. Quantos números de 3 algarismos podemos 
                            formar com os algarismos 0, 1, 2, 3, 4 e 5?</li>
                        <li class="resposta">São 180 possibilidades, sendo 5 
                            números possíveis para a primeira casa, 6 para segunda
                            e terceira.(5x6x6=180)</li>
                    </ul>
                    <ul>
                        <li>12. Com os algarismos 2, 3, 4, 5 e 8:</li>
                        <li>a) quantos números pares de quatro algarismos distintos
                            podemos formar?</li>
                        <li class="resposta">são 240 possibilidades, sendo 4 
                            possibilidades para a quarta e última casa, que só 
                            pode conter números pares 4 dos 6 apresentados, 5 
                            para a primeira casa, 4 para a segunda e 3 para a 
                            terceira(4x5x4x3=240)</li>
                        <li>b) quantos números de quatro algarismos distintos começam por 3?</li>
                        <li class="resposta">são 60 possibilidades, sendo 1 
                            para a primeira casa, que só pode conter o número 3,
                            5 para a segunda casa, 4 para a terceira e 3 para 
                            quarta(1x5x4x3=60)</li>
                    </ul>
                    <ul>
                        <li>13. Com os algarismos 1, 2, 4, 6, 8 e 9</li>
                        <li>a) quantos números de quatro algarismos podemos formar?</li>
                        <li class="resposta">são 1296 possibilidades, sendo 6
                            possíbilidades para cada casa(6⁴=1296)</li>
                        <li>b) quantos números de quatro algarismos distintos podemos formar?</li>
                        <li class="resposta">são 360 possibilidades sendo 
                            6 para primeira casa, 5 para a segunda, 4 para terceira
                            e 3 para quarta(6x5x4x3)</li>
                    </ul>
                    <ul>
                        <li>14. Quantos números ímpares de 3 algarismos distintos
                            podemos formar com os algarismos 0 ,1, 2, 3, 4, 5, 6, 7 e 8</li>
                        <li class="resposta">são 144 possibilidades sendo 4 
                            números restritos a última casa e 7 para a primeira e
                            segunda casa, considerando que a primeira casa não 
                            pode conter o zero(4x7x7=196)</li>
                    </ul>

                    <ul>
                        <li>15. Calcule a quantidade de números pares de 2 algarismos
                            distintos distintos que podemos formar com 1,2,3,4 e 8</li>
                        <li class="resposta">São 12 possibilidades sendo 3 para a
                            segunda casa(2,4 e 8) e 4 para a primeira casa((1,2,3,4,8)-1
                            reservado a segunda casa).(3x4=12) </li>
                    </ul>
                    <ul>
                        <li>16. Quantos números ímpares de três algarismos distintos
                            podemos formar com os algarismos 0, 1, 2, 3, 4, 5, 6 e 7?</li>
                        <li class="resposta">São 144 possibilidades sendo 4 para
                            a terceira casa (1,3,5 e 7), 6 para primeira ((1,2,3,4,5,6 e 7)-1
                            restrito a terceira casa) e 6 para segunda((0,1,2,3,4,5,6 e 7)- 2)
                            restritos as primeira e terceira casas.(4x6x6=144)</li>
                    </ul>
                    <ul>
                        <li>17. Quantos números de quatro algarismos distintos 
                            começando por 3 podemos formar com os algarismos 
                            1, 2, 3, 4, 5, 6 e 7?</li>
                        <li class="resposta">São 30 possibilidades sendo 1 para 
                            primeira casa(3), 6 para segunda(1,2,4,5,6,7) e 5 
                            para terceira((1,2,4,5,6,7)-1 restrito a segunda casa)
                            .(1x6x5=30)</li>
                    </ul>
                    <ul>
                        <li>18. Quantos números de 3 algarismos começam por 3?</li>
                        <li class="resposta">São 72 possibilidades sendo 1 para
                            primeira casa(3), 9 para segunda(0,1,2,4,5,6,7,8,9)
                            e para terceira((0,1,2,4,5,6,7,8,9)-1 restrito a segunda casa)
                            (1x9x8=72)</li>
                    </ul>
                    <ul>
                        <li>19. Quantos são os números pares de 3 algarismos distintos?</li>
                        <li class="resposta">São 328 possibilidades sendo 256 + 72 possibilidades, separadas onde o zero pertence ou não a terceira casa.
                            <br><br>
                            Zero não pertencente
                            <br>
                            4 números para terceira casa(2,4,6,8),
                            8 para primeira casa((1,2,3,4,5,6,7,8,9)-1 restrito a terceira casa) e 8
                            para segunda(0,1,2,3,4,5,6,7,8,9)-2 restritos as primeira e terceira casas).
                            (4x8x8=256)
                            <br><br>
                            Zero pertencente
                            <br>
                            1 número para terceira casa(0), 9 para primeira casa((0,1,2,3,4,5,6,7,8,9)-1 restrito a terceira)
                            e 8 para terceira casa(0,1,2,3,4,5,6,7,8,9)-2 restritos as primeira e terceira casas).
                            (1x9x8=72) </li>
                    </ul>
                    <ul>
                        <li>20. Quantos números pares de 4 algarismos existem?</li>
                        <li class="resposta"></li>
                    </ul>
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

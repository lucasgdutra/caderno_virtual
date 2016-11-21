<?php

function insereAula($conexao, $titulo, $preco) {
    $query = "insert into aula (titulo, numero, conteudo, id_grade) values ('{$tituloAula}', '{$numeroAula}', '{$conteudoAula}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

function listaDisciplina($conexao, $turma) {
    $query = "SELECT nome FROM Disciplina, Grade, Turma WHERE Disciplina.id = Grade.id_disciplina AND Grade.curso = Turma.curso AND Grade.ano = Turma.anoatual and Turma.id = '{$turma}'";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

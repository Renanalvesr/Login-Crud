<?php
$servidor = "localhost";
$usuario = "root";
$senha = "alvesrr120595";
$db = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM CURSOS";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "SELECT * FROM ALUNOS";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "SELECT alunos_cursos.id_aluno_curso, alunos.nome_aluno, cursos.nome_curso 
FROM alunos, cursos, alunos_cursos
WHERE alunos_cursos.id_aluno = alunos.id_aluno
AND alunos_cursos.id_curso = cursos.id_curso;
";
$consulta_matriculas = mysqli_query($conexao, $query);

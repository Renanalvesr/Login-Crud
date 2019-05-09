<h1>Inserir nova matrícula</h1>
<p>Selecione o aluno</p>
<form method="post" action="processa_matricula.php">
    <select class="form-control" name="escolha_aluno">
       <option >Selecione um aluno</option>
       <?php
        while ($linha= mysqli_fetch_array($consulta_alunos)) {
            echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
        }
        
        ?>   
    </select>
    <br><br>
    <p>Selecione o Curso</p>
    <select name="escolha_curso">
       <option >Selecione um curso</option>
        <?php
        while ($linha= mysqli_fetch_array($consulta_cursos)) {
            echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
        }
        
        ?>   
    </select>
    <br><br>
    <input class="btn btn-succes" type="submit" value="Matricular aluno no curso">

</form>
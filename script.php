<?php

$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo "Meu nome é $nome e minha nota final é $media";

if ($media >= 6){
    
    echo "<br>";
    echo "<p></p>";
    echo "\nO aluno $nome está aprovado(a)";

} else if ($media >= 4 && $media < 6){
    echo "O aluno está de recuperação";
} 

else{

    echo "<br>";
    echo "<p></p>";
    echo "\nO aluno está reprovado(a)";
}

?>;
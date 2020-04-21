<?php

include "servicos/servicoMensagemEmSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

defineCategoriaCompetidor($nome, $idade);

header("location: index.php");


$nome = $_POST['nome'];
$idade = $_POST['idade'];


//var_dump($nome);
//var_dump($idade);


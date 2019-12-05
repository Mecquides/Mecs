<?php

include ("../includes/variaveis.php");
include("../class/class_crud.php");

$Crud=new Classcrud();

// if(){
	$Crud->insertDB(
		"usuarios",
		"?,?,?,?,?",
		array(
			$id,
			$nome,
			$email,
			$nome_usuario,
			$senha,
			)
		);

	echo "<script> type='javascript'>alert('Cadastrado com Sucesso!');";

	echo "javascript:window.location='../login.php';</script>";



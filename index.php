<?php

	require_once 'Classe.php';
	require_once 'placa.php';

	$c1 = new Carro ($_POST["cor"],$_POST["modelo"],$_POST["marca"],$_POST["proprietario"]);
	$c1->mostraCarro();
	$p1 = new Placa($_POST["placa"]);
	$p1->mostraPlaca();
	$c1->mostraClasse();

	$c1->setCor("azul");
	$c1->mostraCarro();
	$p1->mostraPlaca();
	$c1->mostraClasse();
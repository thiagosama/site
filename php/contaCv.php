<?php
	
	include "config.php";

/*
      $arquivo = 'http://thiagois.esy.es/_downlads/Thiago.jpg';
      header("Content-Type: jpg"); // informa o tipo do arquivo ao navegador
      header("Content-Length: ".filesize($arquivo)); // informa o tamanho do arquivo ao navegador
      header("Content-Disposition: attachment; filename=".basename($arquivo)); // informa ao navegador que é tipo anexo e faz abrir a janela de download, tambem informa o nome do arquivo
      readfile($arquivo); // lê o arquivo
  */    






	$cont = mysql_query("SELECT * FROM curriculo") or die(mysql_error());
	$quatidade = mysql_num_rows($cont);
	$qt = $quatidade+1;
	mysql_query("INSERT INTO curriculo (contador,data) values ('1','".date('d/m/Y-H:m:s')."')") or die(mysql_error());

	echo "Esse curriculo foi baixado ".$qt." vezes.";
	
?>
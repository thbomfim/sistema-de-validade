<?php

##Hora local 
date_default_timezone_set("America/Sao_Paulo");

  /**
  * Conexao com o servidor
  */
  try
  { 
    $pdo = new PDO("mysql:host=localhost;dbname=validades", "root", "123");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conectando = True;
  }
  catch(PDOException $e)
  {
    $conectando = False;
  }
  
##Caso a conexao seja reprovada, exibe na tela uma mensagem de erro
if(!$conectando) die ("
<p align='center'>
<br/>
<b>Banco de dados desconectado!</b>
<br/>
Tente acessar o site dentro de alguns instantes, ou entre em contato!</p>
<br/>
");

?>
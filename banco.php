<?php

/*conexao com o banco de dados*/
/*(host,usuario,senha,banco)sempre deve se tem os 4 parametrios acima, mesmo que vazios */

$banco= new mysqli("localhost","root","","Unistudy");

/* se houver erro na conexao sera emitido uma msg de erro */

if($banco->connect_errno){
    echo"<p>Erro na conexão $banco->errno --> $banco->connect_error</p>";
    die();
}
 /*passar padrao br */

 $banco->query("SET NAMES'utf8'");
 $banco->query("SET character_set_connection=utf8");
 $banco->query("SET character_set_client=utf8");
 $banco->query("SET character_set_results=utf8");
?>
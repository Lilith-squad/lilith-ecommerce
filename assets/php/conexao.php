<?php

    $dbHost = 'ESN509VMYSQL';
    $dbUsername = 'aluno';
    $dbPassword = 'Senai1234';
    $dbName = 'bd_lilith_ofc';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   if ($conexao-> connect_errno) {
        echo "Erro";
   } else {
        echo "Conexão efetuada com sucesso";
   }

  
?> 
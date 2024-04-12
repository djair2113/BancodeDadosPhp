<?php
include("./../vendor/autoload.php");

use App\model\SistemaUsuario;
use App\persistence\ConnectionFactory;

if($conn = ConnectionFactory::getConnection()){
    try{
        $sql = "select * from Pessoa";
        $statement = $conn->prepare($sql);
        $statement->execute();
        $rs = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach($rs as $registro){
            echo print_r($registro['nome'] ." ". $registro['idade'] ."<br>", true);
        }
    } catch(Exception $e){
        echo print_r($e, true);
    }
    
}else{
    echo "Não Funcionou!";
}

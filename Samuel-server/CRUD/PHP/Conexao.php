<?php 
//declarando as variáveis que vamos utilizar na conexão 
    $host = 'localhost';
    $nomeBanco = 'crud_pdo';
    $usuario = 'root';
    $senha = '';

    //Criando um novo objeto que conecta no banco de dados 
    //Vamos utilizar o PDO para isso, passando as variáveis acima como parametro.
    // Parametro é uma variável que não está no escopo, porém foi definido em algum lugar.
    try{
        $conexao = new PDO(
            "mysql:host=$host;
            dbname=$nomeBanco;charset=UTF8",
            $usuario,
            $senha
            
        );

        //Definindo como o PDO ira tratar o erro 
        //No caso, vai lançar uma exceção, que posteriormente será tratada no CATCH
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão realizada com êxito! <br><hr><br>";
    }catch(PDOException $e ){
        echo "ERRO: " . $e->getMessage();
    }
?>
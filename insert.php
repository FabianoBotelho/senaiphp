<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $host = 'localhost';
        $db = 'aulaphp';
        $user = 'eliza';
        $pass = '123456';
        $port = 3307;
        require_once 'php/connection.php';
        $database = new Database($host,$db,$user,$pass,$port);
        $database -> connect();
        $pdo = $database->getConnection();

        if ($pdo){
            try{
                $stmt = $pdo->prepare("SELECT id, nome FROM usuario");

                $stmt->execute();
            }
            catch(PDOException $e){
                echo "Erro ao consultar o banco de dados: " . $e->getMessage() . "<br>"
            }
        }
    ?>
</head>

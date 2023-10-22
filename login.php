<?php
    require_once("backend/connection/conection.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        $sql = "SELECT id, nome, senha FROM usuario WHERE email = ? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->bind_result($id, $nome, $senha_hash);

        if($stmt->fetch() && password_verify($senha, $senha_hash)){
            session_start();
            $_SESSION["nome"] = $nome;
            $_SESSION["id_user"] = $id;
            header("Location: admin.php");
            exit();
        }
        else{
            echo "<script>alert('email ou senha incorreto ou não existente')</script>";
        }

        $stmt->close();
    }
    $conn->close(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Document</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Flavyss">
    <meta name="Description" content="site de landing page com backend para portifólio">
    <meta name="Keywords" content="site,landingpage,html,css,js,php">
    <meta name="robots" content="index">

    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Open+Sans:wght@300;400&family=Tilt+Neon&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/c49e0b56e6.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <div class="container">
            <h2>Login do Administrador</h2>
            <form method="post">
                <div class="w100">
                    <p>Email</p>
                    <input type="text" name="email">
                </div>
                <div class="w100">
                    <p>Senha</p>
                    <input type="password" name="senha">
                </div>
                <div class="w100s">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </header>    
</body>
</html>
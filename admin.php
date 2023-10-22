<?php
require_once("backend/connection/conection.php");
require_once("backend/verify.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $iduser =  $_SESSION["id_user"];
    $txt1 = $_POST["txt1"];
    $tt1 = $_POST["tt1"];
    $tt2 = $_POST["tt2"];
    $tt3 = $_POST["tt3"];
    $dd1 = $_POST["dd1"];
    $dd2 = $_POST["dd2"];
    $dd3 = $_POST["dd3"];

    $uploadDir = "src/uploads/";

    $logoFile = $_FILES["logo"]["name"];
    $img1File = $_FILES["img1"]["name"];
    $img2File = $_FILES["img2"]["name"];
    $img3File = $_FILES["img3"]["name"];

    $logoTempFile = $_FILES["logo"]["tmp_name"];
    $logoFile = $uploadDir . $_FILES["logo"]["name"];
    move_uploaded_file($logoTempFile, $logoFile);
    
    $img1TempFile = $_FILES["img1"]["tmp_name"];
    $img1File = $uploadDir . $_FILES["img1"]["name"];
    move_uploaded_file($img1TempFile, $img1File);
    
    $img2TempFile = $_FILES["img2"]["tmp_name"];
    $img2File = $uploadDir . $_FILES["img2"]["name"];
    move_uploaded_file($img2TempFile, $img2File);
    
    $img3TempFile = $_FILES["img3"]["tmp_name"];
    $img3File = $uploadDir . $_FILES["img3"]["name"];
    move_uploaded_file($img3TempFile, $img3File);


    $sql_check = "SELECT iduser FROM site WHERE iduser = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param('s', $iduser);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    if ($result->num_rows > 0) {
        $sql = "UPDATE site SET logo = ?, txt1 = ?, img1 = ?, img2 = ?, img3 = ?, tt1 = ?, tt2 = ?, tt3 = ?, dd1 = ?, dd2 = ?, dd3 = ? WHERE iduser = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssssssssss', $logoFile, $txt1, $img1File, $img2File, $img3File, $tt1, $tt2, $tt3, $dd1, $dd2, $dd3, $iduser);
        
        if ($stmt->execute()) {
            echo "Dados e imagens foram atualizados com sucesso.";
        } else {
            echo "Erro ao atualizar os dados no banco de dados.";
        }
    } else {
        $sql = "INSERT INTO site (iduser, logo, txt1, img1, img2, img3, tt1, tt2, tt3, dd1, dd2, dd3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssssssssss', $iduser, $logoFile, $txt1, $img1File, $img2File, $img3File, $tt1, $tt2, $tt3, $dd1, $dd2, $dd3);

        if ($stmt->execute()) {
            echo "Novos dados e imagens foram inseridos com sucesso.";
        } else {
            echo "Erro ao inserir os dados no banco de dados.";
        }
    }

    $stmt->close();
    $stmt_check->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Bem vindo, <?php echo $_SESSION["nome"]?></h1>
    <a href="backend/logout.php">Sair</a>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="logo">Logo:</label>
        <input type="file" id="logo" name="logo" accept="image/*" ><br><br>

        <label for="txt1">Texto 1:</label>
        <input type="text" id="txt1" name="txt1" ><br><br>

        <label for="img1">Imagem 1:</label>
        <input type="file" id="img1" name="img1" accept="image/*" ><br><br>

        <label for="img2">Imagem 2:</label>
        <input type="file" id="img2" name="img2" accept="image/*" ><br><br>

        <label for="img3">Imagem 3:</label>
        <input type="file" id="img3" name="img3" accept="image/*" ><br><br>

        <label for="tt1">Título 1:</label>
        <input type="text" id="tt1" name="tt1" ><br><br>

        <label for="tt2">Título 2:</label>
        <input type="text" id="tt2" name="tt2" ><br><br>

        <label for="tt3">Título 3:</label>
        <input type="text" id="tt3" name="tt3" ><br><br>

        <label for="dd1">Descrição 1:</label>
        <input type="text" id="dd1" name="dd1" ><br><br>

        <label for="dd2">Descrição 2:</label>
        <input type="text" id="dd2" name="dd2" ><br><br>

        <label for="dd3">Descrição 3:</label>
        <input type="text" id="dd3" name="dd3" ><br><br>

        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>
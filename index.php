<?php
    require_once("backend/connection/conection.php");
    session_start();

    $iduser = $_SESSION["id_user"];
    
    $sql = "SELECT logo, txt1, img1, img2, img3, tt1, tt2, tt3, dd1, dd2, dd3 FROM site WHERE iduser = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $iduser);
    $stmt->execute();
    $stmt->bind_result($logo, $txt1,$img1 ,$img2 ,$img3, $tt1 ,$tt2 ,$tt3,$dd1 ,$dd2 ,$dd3);

    if ($stmt->fetch()) {
        $_SESSION["logo"] = $logo;
        $_SESSION["txt1"] = $txt1;
        $_SESSION["img1"] = $img1;
        $_SESSION["img2"] = $img2;
        $_SESSION["img3"] = $img3;
        $_SESSION["tt1"] = $tt1;
        $_SESSION["tt2"] = $tt2;
        $_SESSION["tt3"] = $tt3;
        $_SESSION["dd1"] = $dd1;
        $_SESSION["dd2"] = $dd2;
        $_SESSION["dd3"] = $dd3;
        } else {
        echo "ID de usuário não encontrado no banco de dados.";
    }
    
    $stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Landing Page</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Flavyss">
    <meta name="Description" content="site de landing page com backend para portifólio">
    <meta name="Keywords" content="site,landingpage,html,css,js,php">
    <meta name="robots" content="index">

    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Open+Sans:wght@300;400&family=Tilt+Neon&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/c49e0b56e6.js" crossorigin="anonymous"></script>

</head>
<body>
    <header id="inicio">
        <div class="opacity"></div>
        <div class="container">
            <div class="logo">
                <img src="<?php echo $logo?>" alt="">
            </div>
            <nav class="menu">
                <h2 class="ativa"><i class="fa-solid fa-bars"></i></h2>
                <ul class="campo">
                    <h2 class="fecha"><i class="fa-regular fa-circle-xmark"></i></h2>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#galeria">Galeria</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
        </div>

        <div class="container">
            <section class="hdtxt">
                <div class="txt">
                    <h2><?php echo $txt1;?></h2>
                </div>
            </section>
        </div>
    </header>

    <section class="sobre" id="sobre">
        <div class="container">
            <div class="textD">
                <h2>Sobre</h2>
                <div class="border"></div>
            </div>
            
            <div class="cards">
                <div class="cardsingle">
                    <div class="card">
                        <div class="img">
                            <img src="<?php echo $img1?>" alt="">
                        </div>
                        <div class="text">
                            <h3><?php echo $tt1?></h3>
                            <p><?php echo $dd1?></p>
                        </div>
                    </div>
                </div>

                <div class="cardsingle">
                    <div class="card">
                        <div class="img">
                            <img src="<?php echo $img2?>" alt="">
                        </div>
                        <div class="text">
                            <h3><?php echo $tt2?></h3>
                            <p><?php echo $dd2?></p>
                        </div>
                    </div>
                </div>

                <div class="cardsingle">
                    <div class="card">
                        <div class="img">
                            <img src="<?php echo $img3?>" alt="">
                        </div>
                        <div class="text">
                            <h3><?php echo $tt3?></h3>
                            <p><?php echo $dd3?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="button">
              <button>CONVERSE CONOSCO</button>
            </div>
        </div>
    </section>

    <section class="galeria" id="galeria">
        <div class="container">
            <div class="textD">
                <h2>Galeria</h2>
                <div class="border"></div>
            </div>
            <div class="galeriaCont">
                <div class="galeriaWraper">
                    <div class="gimg">
                        <img src="src/images/bg2.jpg" alt="">
                    </div>
                </div>

                <div class="galeriaWraper">
                    <div class="gimg">
                        <img src="src/images/bg2.jpg" alt="">
                    </div>
                </div>

                <div class="galeriaWraper">
                    <div class="gimg">
                        <img src="src/images/bg2.jpg" alt="">
                    </div>
                </div>

                <div class="galeriaWraper">
                    <div class="gimg">
                        <img src="src/images/bg2.jpg" alt="">
                    </div>
                </div>
                <div class="galeriaWraper">
                    <div class="gimg">
                        <img src="src/images/bg2.jpg" alt="">
                    </div>
                </div>

                <div class="galeriaWraper">
                    <div class="gimg">
                        <img src="src/images/bg2.jpg" alt="">
                    </div>
                </div>

                <div class="galeriaWraper">
                    <div class="gimg">
                        <img src="src/images/bg2.jpg" alt="">
                    </div>
                </div>

                <div class="galeriaWraper">
                    <div class="gimg">
                        <img src="src/images/bg2.jpg" alt="">
                    </div>
                </div>

                <div class="galeriaWraper">
                    <div class="gimg">
                        <img src="src/images/bg2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contato" id="contato">
        <div class="container">
            <div class="textD">
                <h2>Galeria</h2>
                <div class="border"></div>
            </div>
            <form action="">
                <div class="w50">
                    <p>nome</p>
                    <input type="text">
                </div>
                <div class="w50">
                    <p>sobrenome</p>
                    <input type="text">
                </div>
                <div class="w100">
                    <p>email</p>
                    <input type="text">
                </div>
                <div class="w100">
                    <p>mensagem</p>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="w100s">
                    <input type="submit" value="enviar">
                </div>
            </form>
        </div>
    </section>

    <footer>
		<div class="container">
			<span><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook" target="_blank"></i></a> <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a> <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a> <a href="https://youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a></span>
			<p>Todos os Direitos Reservados - 2023 </p>
			<p>feito com amor por Flavyss<i class="fa-solid fa-laptop-code"></i></p>
		</div>
	</footer>

    <script src="src/js/main.js"></script>
</body>
</html>
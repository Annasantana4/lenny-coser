<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">

    <title>Lenny Coser</title>
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.14.0/devicon.min.css" />

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Cormorant', 'Montserrat', Arial, sans-serif;
            text-decoration: none;
        }

        body {
            background-color: #F1F1F1;
    
        }

        header {
            background-color: #F1F1F1;
            position: fixed;
            width: 100%;
            z-index: 10; 
        }

        .nav-link {
    font-family: "Cormorant", serif;
    font-size: 20px;
    font-weight: 700;
    position: relative;
   
}

.navbar{
    margin-left: 50px;
   
 
   
    
}


.navbar .nav-link.active {
    color: #5E5E5E;
}

.underline-hover {
    text-decoration: none;
}

.underline-hover:hover {
    text-decoration: underline #5E5E5E;
    
}

.social-icons {
    display: flex;
    justify-content: flex-end; 
    margin-right: 50px;
    font-size: 20px;
}

.social-icons a {
    margin: 0 10px; 
    text-decoration: none;
    color: #5E5E5E; 
}

.imagem-principal {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    height: 50%;
}

.imagem-principal img {
    max-width: 100%; 
    max-height: 100%;
    display: block;
}
        h1 {
            font-size: 40px;
            font-family: "Cormorant", serif;
            font-weight: 600;
            color: #D1A76B;
            text-align: center; 
            text-transform: uppercase; 
            padding: 40px;
        }

        h5 {
            font-size: 30px ;
            font-family: "Cormorant", serif;
        }

        p{
            font-family: "Montserrat", serif;
            font-size: 16px;
            text-align: center;
         
        }

        .carousel-container {
            width: 80%;
            margin: 0 auto;
            margin-bottom: 50px; 
        }

        .carousel-inner img {
            width: 100%;
            height: 400px; 
            object-fit: cover;

           
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            margin-left: 50px;
            margin-right: 50px;
           
        }
    
        

        .image-container img {
            width: 145px; 
            height: 145px; 
            object-fit: cover; 
            margin: 10px; 
            background-color: rgba(0, 0, 0, 0.5);
        }



        footer {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #5E5E5E;
            margin-top: 50px;
        }

        .img-footer {
            max-width: 300px;
            height: auto;
            margin-bottom: 10px;
        }

        footer p {
            margin: 0;
            text-align: center;
            font-size: 14px;
            color: #ffffff;
        }


        @media (max-width: 992px) {
            .navbar {
                margin-left: 20px;
            }

            .social-icons {
                margin-right: 20px;
            }

            .carousel-inner img {
                height: 300px;
            }

            .container {
                padding: 20px;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                margin-left: 10px;
            }

            .social-icons {
                margin-right: 10px;
                font-size: 18px;
            }

            h1 {
                font-size: 30px;
                padding: 30px;
            }

            .carousel-inner img {
                height: 250px;
            }

            .image-container img {
                max-width: 100px;
            }
        }

        @media (max-width: 576px) {
            .navbar {
                margin-left: 0;
            }

            .social-icons {
                margin-right: 0;
                justify-content: center;
            }

            h1 {
                font-size: 25px;
                padding: 20px;
            }

            .carousel-inner img {
                height: 200px;
            }

            .image-container img {
                max-width: 80px;
            }
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid w-100">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active underline-hover" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active underline-hover" aria-current="page" href="sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active underline-hover" aria-current="page" href="portifolio.php">Portfólio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active underline-hover" aria-current="page" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active underline-hover" aria-current="page" href="contacto.php">Contatos</a>
                    </li>
                </ul>

                <div class="social-icons ms-auto">
                    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://whatsapp.com" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="imagem-principal">
    <img src="./imagens/foto-servico.png" alt="">
</div>

<h1>SERVIÇOS</h1>

<div class="carousel-container">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./imagens/imagem-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>SESSÕES FOTOGRÁFICAS
                    </h5>
                    <p>As sessões fotográficas Shot são sessões fotográficas espontâneas e descontraídas, que permitem captar imagens mais naturais e genuínas do que as habituais em estúdio. A sessão é realizada em sua casa, ou noutro local com que se identifique e onde se sinta à vontade.

Cada uma é 100% personalizada: decidimos em conjunto qual o melhor local e hora para a sua sessão e também a roupa e acessórios mais adequados</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./imagens/imagem-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>

                  CASAMENTOS

</h5>
                    <p>Ao fotografar casamentos, o meu foco é registar para sempre o mais importante do grande dia. As vossas emoções, os pequenos gestos que revelam o vosso amor e a partilha da vossa alegria com a família e amigos. Sem deixar de captar com todo o rigor cada detalhe em que os noivos investiram. 

Porque cada cerimónia é única, as reportagens são sempre planeadas à vossa medida, seja um elopment a dois ou uma festa de arromba com todos os vossos amigos e família! Parto de um questionário inicial para definir o vosso orçamento e, mais tarde, decidimos em conjunto o timeline da reportagem de acordo com os vossos planos.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./imagens/imagem-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
FOTOGRAFIAS PARA MARCAS
</h5>
                    <p>Qual a importância da fotografia para marcas e do branding pessoal?

Costuma-se dizer que não há uma segunda oportunidade de causar uma primeira impressão.

Quer pretenda mostrar o que a sua marca faz de melhor ou valorizar a sua imagem profissional, é fundamental investir em imagens que contem a sua história de uma forma única, autêntica e eficaz.

Para além da minha experiência em fotografia lifestyle para marcas, redes sociais, pequenos empresários e projetos editoriais, sou formada em Comunicação Social e e trabalhei durante mais de dez anos nas áreas de estratégia e copywriting para diversas agências de publicidade e comunicação digital. Por palavras ou em imagens, contar histórias é a minha paixão!

</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="image-container">
    <img src="./imagens/foto-pequena-1.jpg" alt="">
    <img src="./imagens/foto-pequena-2.jpg" alt="">
    <img src="./imagens/foto-pequena-3.jpg" alt="">
    <img src="./imagens/foto-pequena-4.jpg" alt="">
    <img src="./imagens/foto-pequena-5.jpg" alt="">
    <img src="./imagens/foto-pequena-6.jpg" alt="">
    <img src="./imagens/foto-pequena-7.jpg" alt="">
</div>

<footer>
    <img class="img-footer" src="./imagens/logo lenny.png" alt="">
    <p>LENNY COSER FOTOGRAFIA  //  FEITO POR ANNA SANTANA</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

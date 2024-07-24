<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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


        h3 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
            color: #D1A76B;
            font-family: "Cormorant", serif;
            font-size: 40px;
            font-weight: 700;
        }

        label {
            color: #D1A76B;
            font-family: "Cormorant", serif;
            font-size: 16px;
        }

        .form-control {
            border-radius: 0;
            border: solid 2px #D1A76B;
        }

        .container {
            background: #F1F1F1;
            padding: 30px;
            border-radius: 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 95%;
            margin-bottom: 50px;
        }

        .form-group label {
            font-weight: bold;
            margin-top: 10px;
        }

        .btn-submit {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #fff;
            color: #D1A76B;
            border: 2px solid #D1A76B;
            border-radius: 0;
        }

        .btn-submit:hover {
            background-color: #D1A76B;
            color: #fff;
            border: 2px solid #D1A76B;
        }

        .img-contacto {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .contact-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }


        .image-container {
    display: flex;
    flex-wrap: wrap;
    margin-left: 100px;
   
}
.image-container img {
    width: 140px; 
    height: 140px; 
    object-fit: cover; 
    margin: 6px; 
  
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

            h3 {
                font-size: 30px;
                margin-top: 30px;
                margin-bottom: 20px;
            }

            label {
                font-size: 14px;
            }

            .btn-submit {
                padding: 8px;
                margin-top: 15px;
            }

            .image-container {
                margin-left: 0;
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

            h3 {
                font-size: 25px;
                margin-top: 20px;
                margin-bottom: 15px;
            }

            .image-container img {
                max-width: 80px;
            }
        }


    </style>
</head>
<body>
<header>
           
           <nav class="navbar navbar-expand-lg ">
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
                     <a class="nav-link active  underline-hover" aria-current="page" href="sobre.php">Sobre</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link active underline-hover" aria-current="page" href="portifolio.php">Portfólio</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link active underline-hover" aria-current="page" href="servico.php">Serviços</a>
                   </li>

                   <li class="nav-item">
                     <a class="nav-link active underline-hover " aria-current="page" href="contacto.php">Contatos</a>
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

    <div>
        <img class="img-contacto" src="./imagens/foto-contact.png" alt="Imagem de contato">
    </div>

    <h3>CONTATOS</h3>
    <div class="contact-container">
        <div class="container">
            <form class="form" method="post" action="process.php"> 
                <div class="form-group">
                    <label for="nome">NOME</label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="telemovel">TELEMOVEL</label>
                    <input type="text" name="telemovel" id="telemovel" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="mensagem">MENSAGEM</label>
                    <textarea name="mensagem" id="mensagem" class="form-control" rows="4" required></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>

    <div class="image-container" >
    <img src="./imagens/foto-pequena-1.jpg" alt="">
    <img src="./imagens/foto-pequena-2.jpg" alt="">
    <img src="./imagens/foto-pequena-3.jpg" alt="">
    <img src="./imagens/foto-pequena-4.jpg" alt="">
    <img src="./imagens/foto-pequena-5.jpg" alt="">
    <img src="./imagens/foto-pequena-6.jpg" alt="">
    <img src="./imagens/foto-pequena-7.jpg" alt="">
   
  </div>



    <footer>
        <img class="img-footer" src="./imagens/logo lenny.png" alt="Logo">
        <p>LENNY COSER FOTOGRAFIA  //  FEITO POR ANNA SANTANA</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

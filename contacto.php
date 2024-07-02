<!DOCTYPE html>
<html>
<head>
    <title>Contatos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
*{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    text-decoration: none;
   
}

        body {
            padding: 50px;
            color: #D1A76B;
            background: url('./imagens/imagen-contac.jpg') no-repeat center center fixed; 
            background-size: cover;
        }

        .navbar-brand{
    font-family: "Cormorant", serif;
    font-size: 16px;
    font-weight: 900;
}

.nav-link {
    font-family: "Cormorant", serif;
    font-size: 16px;
    font-weight: 700;
}

.navbar a{
    color: #D1A76B;
    font-size: 20px;
    
    
}

.navbar .nav-link.active {
    color: #D1A76B;

}


.social-icons {
    display: flex;
    justify-content: flex-end; 
}

.social-icons a {
    margin: 0 10px; 
    text-decoration: none;
    color: inherit; 
}

.social-icons a:hover {
    color: #D1A76B; 
}



        h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #D1A76B;
            font-family:  "Cormorant", serif; 
            font-size:40px;
            font-weight: 700;
        }
        
        .form-control {
            border-radius: 0;
        }
        .container {
            max-width: 600px;
            background: rgba(255, 255, 255, 0.5); 
            padding: 30px;
            border-radius: 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
        .form-group label {
            font-weight: bold;
            margin-top: 10px;
        }
        .btn-success {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #fff;
            color: #D1A76B;
            border: 2px solid #D1A76B;
            border-radius: 0;
        }

        .btn-success:hover{
            background-color: #D1A76B;
            border: 2px solid #D1A76B;
        }
    </style>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid w-100">
                  <a class="navbar-brand" href="index.php">Home</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Sobre</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Portfólio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Serviços</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contacto.php">Contatos</a>
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
    <h3>CONTATOS</h3>
    <div class="container">
        <form class="form" method="post" action="process.php"> 
            <div class="form-group">
                <label for="nome">NOME</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="text" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="telemovel">TELEMOVEL</label>
                <input type="text" name="telemovel" id="telemovel" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="mensagem">MENSAGEM</label>
                <input type="text" name="mensagem" id="mensagem" class="form-control" required>
            </div>
            <div>
                <button type="submit" class="btn btn-success">SUBMIT</button>
            </div>
        </form>
    </div>
</body>
</html>
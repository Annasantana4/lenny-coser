<html>
    <head>
        <title>Contatos</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <body style="padding:50px;">
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
        <button type="submit" class="btn btn-success" >SUBMIT</button>
    </div>
</form>

</div>

        
    </body>
</html>
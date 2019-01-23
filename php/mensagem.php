// mensagem.php - CLOAK
<!DOCTYPE html>
<html>
<head>
    
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">		
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>	 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="css/index.css">

<title>Fale Conosco</title>
</head>
<body>

 <!-- Início do Cabeçalho -->
      <header id="style">
	<h1>C L O A K</h1>

	<!-- Início da Barra de Navegação -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
           <a class="navbar-brand" href="#">
	      <img src="https://goodweave.org/wp-content/uploads/2017/03/Logo_cloak.png" width="45" height="30">
           </a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
           </button>
	   
	   <!-- Menu de Navegação -->



  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Novidades</a>
      </li>

      <li class="nav-item">
	      <a class="nav-link" href="index.html">Pagina Inicial</a>      
      </li>
	  
		      
     <li class="nav-item">
       <a class="nav-link" href="#">Camisas</a>
     </li>

    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

  
	
	
	
</header>   

 <!-- Formulario Fale Conosco -->

 <form action="php/mensagem.php" method="post">
   
   <div class="col-md-4 offset-md-4">
   <div class="card text-center">
   <label for="email">Email</label>
   <input type="text" name="email">
   
   <label>Deixe Seu comentário aqui!</label>
   <textarea placeholder="Espaço Para digitação..."></textarea>
   
   <input type="submit" name="enviar" value="Enviar Mensagem">
   
   </div>
   </div>
     
	 

   </form>

</body>
</html>

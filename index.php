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
      <title>C L O A K</title>
   </head>
   <body> 

      <!-- Início do Cabeçalho -->
      <header id="style">
	<h1>C L O A K</h1>

	<!-- Início da Barra de Navegação -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
           <a class="navbar-brand" href="index.php">
	      <img src="https://goodweave.org/wp-content/uploads/2017/03/Logo_cloak.png" width="45" height="30">
           </a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
           </button>
	   
	   <!-- Menu de Navegação -->



  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <?php
        $login_cookie = $_COOKIE['email'];
	if(isset($login_cookie)) {
	   echo "
        <a class='nav-link' href='html/login.html'>Login</a> ";
	}else{
	 echo "
        <a class='nav-link' href='html/login.html'>Sair</a> ";
	}
        ?>
      </li>

      <li class="nav-item">
	      <a class="nav-link" href="#">Camisas</a>      
      </li>
	  
		      
     <li class="nav-item">
       <a class="nav-link" href="php/mensagem.php">Fale Conosco</a>
     </li>

    </ul>

    <form action="busca.php" method="post" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Buscar...  " aria-label="Search" name="banda">
      <input class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="buscar" value="Pesquisar">
    </form>
  </div>
</nav>
	
	
</header>


	 <!-- Blusa Panic -->
 
<div class="row text-center">


  <div class="col-sm-3">
  
  
   <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
   
   <div class="carousel-inner">
   
    <div class="card carousel-item active">
	 <img class="card-img-top" "d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=Primeiro Slide" alt="Primeiro Slide [800x400]" src="img/acd1.jpg" data-holder-rendered="true">
      <div class="card-body">
        <h5 class="card-title">Camiseta AC/DC!</h5>
        <a href="#" class="card-text btn btn-dark">R$39,00</a>

	
    </div>
    </div>
  
	
	

   
   
    <div class="card carousel-item">
	 <img class="card-img-top" "d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=Segundo Slide Slide" alt="Segundo Slide [800x400]" src="img/acd2.jpg" data-holder-rendered="true">
      <div class="card-body">
        <h5 class="card-title">Camiseta AC/DC!</h5>
        <a href="#" class="card-text btn btn-dark">R$39,00</a>
		
		
		
    </div>
    </div>
  
	
	
	 <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Anterior</span>
         </a>
		 
         <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Próximo</span>
         </a>
	
	
	
   </div>
   </div>
   </div>

  
  
   
 
 <!-- Blusa Metallica -->
 
 
 
 
 
   <div class="col-sm-3">
   
  
   <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
   
   <div class="carousel-inner">
   
    <div class="card carousel-item active">
	
	 <img class="card-img-top" "d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=Primeiro Slide" alt="Primeiro Slide [800x400]" src="img/met1.jpg" data-holder-rendered="true">
	 
      <div class="card-body">
	  
        <h5 class="card-title">Camiseta Metallica!</h5>
        <a href="#" class="card-text btn btn-dark">R$39,00</a>
	
    </div>
    </div>
  
	
	

   
   
    <div class="card carousel-item">
	
	 <img class="card-img-top" "d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=Segundo Slide Slide" alt="Segundo Slide [800x400]" src="img/met2.jpg" data-holder-rendered="true">
	 
    <div class="card-body">
	  
        <h5 class="card-title">Camiseta Metallica!</h5>
        <a href="#" class="card-text btn btn-dark">R$39,00</a>
		
		
    </div>
    </div>
  
	
	
		 <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Anterior</span>
         </a>
		 
         <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Próximo</span>
         </a>
	
	
	
   </div>
 
   
   
   
   </div> 
   </div>
   
   
   <!-- System OF A Down-->
   
   
    <div class="col-sm-3">
   
  
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
   
   <div class="carousel-inner">
   
    <div class="card carousel-item active">
	
	 <img class="card-img-top" "d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=Primeiro Slide" alt="Primeiro Slide [800x400]" src="img/sys1.jpg" data-holder-rendered="true">
	 
      <div class="card-body">
	  
        <h5 class="card-title">Camiseta System Of A Down!</h5>
        <a href="#" class="card-text btn btn-dark">R$49,00</a>
	
    </div>
    </div>
  
	
	

   
   
    <div class="card carousel-item">
    
    <img class="card-img-top" "d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=Segundo Slide Slide" alt="Segundo Slide [800x400]" src="img/sys2.jpg" data-holder-rendered="true">
	 
    <div class="card-body">
	  
        <h5 class="card-title">Camiseta System of a Down!</h5>
        <a href="#" class="card-text btn btn-dark">R$49,00</a>
		
		
    </div>
    </div>
  
	
	 <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Anterior</span>
         </a>
		 
         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Próximo</span>
         </a>
	
	
	
   </div>
 
   
   
   
   </div> 
   </div>


<!--Camiseta Iron Maiden-->


<div class="col-sm-3">
   
  
   <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
   
   <div class="carousel-inner">
   

    <div class="card carousel-item active">
  
   <img class="card-img-top" "d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=Primeiro Slide" alt="Primeiro Slide [800x400]" src="img/iron1.jpg" data-holder-rendered="true">
   
      <div class="card-body">
    
        <h5 class="card-title">Camiseta Iron Maiden!</h5>
        <a href="#" class="card-text btn btn-dark">R$59,00</a>

  
    </div>
    </div>
  
  
  

   
   

  

    <div class="card carousel-item">
  
   <img class="card-img-top" "d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=Segundo Slide Slide" alt="Segundo Slide [800x400]" src="img/iron2.jpg" data-holder-rendered="true">
   
    <div class="card-body">

    
        <h5 class="card-title">Camiseta Iron Maiden!</h5>
        <a href="#" class="card-text btn btn-dark">R$59,00</a>
    
    
    </div>
    </div>
  
  
  

        <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Anterior</span>
         </a>
     
         <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Próximo</span>
         </a>
  
  
  
   </div>
 
   
   
   
   </div> 
   </div>


	</div>
	
	
	<!-- Sobre Nós-->
	
    <div class="col-sm-12">
         <footer>
        <p>Endereço: Av. Brg. Lima e Silva, 764 - Jardim Vinte e Cinco de Agosto, Duque de Caxias - RJ Brasil | <br><br>
        © Copyright by C L O A K, 2019 | Imagens Meramente Ilustrativas!<br><br>
		<a href="html/sobre.html" class="link">Sobre nós</a></p>
      </footer> 
    
   </body>

   

</html>


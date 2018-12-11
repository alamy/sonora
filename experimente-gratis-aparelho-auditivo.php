<html>
  <head>
    <title> Sonora Soluções Auditivas  </title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
 
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">   
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" media="screen">  
    <link href="css/bootstrap-reboot.min.css" rel="stylesheet" media="screen">  
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet" >  
    <link href="fontawesome/css/fa-brands.min.css" rel="stylesheet" >  
    <link href="fontawesome/css/fa-regular.min.css" rel="stylesheet" >  
    <link href="fontawesome/css/fa-solid.min.css" rel="stylesheet" >  
     <link href="css/estilo.css" rel="stylesheet" media="screen" > 
   <link href="https://fonts.googleapis.com/css?family=Roboto:600" rel="stylesheet">


    
    
  </head>
  <body>
   <header>
    <?php
    include('header.php')

   ?>
    </header>

   <section class="navegacao">
     <div class="container">
       <div class="row">
         <ul class="col-md-12">
           <li><a href="index.html"><i class="fas fa-home"></i></a></li>
           <li>/ EXPERIMENTE GRÁTIS</li>
         </ul>
       </div>
     </div>
   </section>

   <section id="faleconosco" >
      <div class="container" >
        <div class="row" >
           <h3>FAÇA UM TESTE GRÁTIS</h3>

          <h1>RECONQUISTE O PRAZER DE OUVIR BEM.</h1>
          <p>A melhor forma de conhecer qual o melhor aparelho auditivo é testando. Por que esperar, quando você pode experimentá-lo hoje, GRATUITAMENTE.
Preencha o formulário abaixo e aguarde nossa central de relacionamento entrar em contato para fazer o agendamento do seu teste. </p>

          <div class="col-md-6">

        <form action="enviar.php" method="post" class="form-inline" >
        <div class="form-group mb-2 col-md-12">
        <label for="nome">NOME COMPLETO</label>
          <input type="text" name="nome" id="nome">
        </div>

         <div class="form-group mb-2 col-md-6">
          <label for="email">E-MAIL</label>
          <input type="text" name="email" id="email">
        </div>

         <div class="form-group mb-2 col-md-6">
          <label for="email">TELEFONE</label>
          <input type="text" name="telefone" id="telefone">
        </div>

         <div class="form-group mb-2 col-md-12">
         <label for="mensagem">MENSAGEM</label>
          <textarea name="mensagem" id="mensagem"></textarea>
        </div>
        
        <div class="form-group mb-2 col-md-4">
          <input type="submit" name="enviar" value="ENVIAR">
        </div>

        
          
       

        </form>
        </div>

        <div class="col-md-6">
          <img src="img/experimene-gratis.jpg" class="img-fluid">
        </div>
        </div>
      </div>
   </section>

  

   
    



   </section>


    <?php
    include('footer.php')

   ?>  
  
  </body>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script type="text/javascript" src="js/bootstrap.min.js"> </script> 
    <script type="text/javascript" src="js/jquery.mask.min.js"> </script> 
    
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/backstretch.js"></script>
   <script>
 $('#telefone').mask('(00)0000-0000');
</script>



</html>
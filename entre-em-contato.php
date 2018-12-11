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
           <li>/ FALE CONOSCO</li>
         </ul>
       </div>
     </div>
   </section>

   <section id="faleconosco" >
      <div class="container" >
        <div class="row" >
          <h3>FALE CONOSCO</h3>
          <p class="left">Para entrar em contato com Sonora, preencha o formulário abaixo e aguarde.  Em breve entraremos em contato.</p>

        <form action="enviar.php" method="post" class="form-inline" >
        <div class="form-group mb-2 col-md-6">
        <label for="nome">NOME COMPLETO</label>
          <input type="text" name="NOME" id="nome">
        </div>

         <div class="form-group mb-2 col-md-3">
          <label for="email">E-MAIL</label>
          <input type="text" name="email" id="email">
        </div>

         <div class="form-group mb-2 col-md-3">
          <label for="email">TELEFONE</label>
          <input type="text" name="telefone" id="telefone">
        </div>

         <div class="form-group mb-2 col-md-12">
         <label for="mensagem">MENSAGEM</label>
          <textarea name="mensagem"></textarea>
        </div>
        
        <div class="form-group mb-2 col-md-2">
          <input type="submit" name="enviar" value="ENVIAR">
        </div>

        <div class="form-group mb-2 col-md-5">
        <div class="col-md-2">
          <i class="fas fa-phone"></i>
          </div>
           <div class="col-md-10">
            <p>81 3038.9676<br>
         81 99662.4757 ( Atendimento via Whatsapp )</p>
          </div>
        </div>

        <div class="form-group mb-2 col-md-5">
        <div class="col-md-2" >
          <i class="far fa-envelope"></i>
          </div>
          <div class="col-md-10">
            <p>contato@sonorasolucoesauditivas.com.br</p>
           </div>
          
        </div>

        </form>
        </div>
      </div>
   </section>

   <section id="mapa">
   <div class="container" >
        <div class="row" >

      <h1>ONDE ESTAMOS</h1>
      <br>
      <p>Avenida Governador Agamenon Magalhães, 4318 - Sala 508 - Empresarial Renato Dias - Derby, Recife - PE</p>
</div></div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.589426119276!2d-34.87959578486708!3d-8.041194882530489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18890b03217b%3A0x90d1b666e7d19d6f!2sR.+Sonora+-+Santo+Amaro%2C+Recife+-+PE%2C+50110-405!5e0!3m2!1spt-PT!2sbr!4v1521828493828" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

     
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
 $('#telefone').mask('(00)00000-0000');
</script>



</html>
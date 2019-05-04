<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Temos a solução</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="icon" href="img/icone.png">

  
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style-form-contato.css">
 
  
</head>

<body>

  <!--
  Please note: this code is in no way ready to be used as is in production on your website. It will need to be adapted to be cross browser compliant & accessible. I just wanted to share how one might go about this effect with CSS & JS and no other dependencies
-->
<div class="container">
  <div class="card-column column-0">
    <div class="card card-color-0">
      <div class="border"></div>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-00.jpg" />
      <h1>Gostaria de ter todas informações da sua empresa na sua mão? Click deixe-nos seu contato que lhe mostraremos como.</h1>
    </div>
    <div class="card card-color-2">
      <div class="border"></div>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-02.jpg" />
      <h1>Gostaria de melhorar o desempenho da sua equipe de forma simples e prática? Click deixe-nos seu contato que lhe mostraremos como.</h1>
    </div>
  </div>
  <div class="card-column column-1">
    <div class="card card-color-1">
      <div class="border"></div>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-01.jpg" />
      <h1>E se você podesse acompanhar em tempo real como sua equipe desempenha o atendimento a seus clientes? Click deixe-nos seu contato que lhe mostraremos como.</h1>
    </div>
    <div class="card card-color-3">
      <div class="border"></div>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-03.jpg" />
      <h1>E se você podesse fazer aquela viagem que planeja a muito tempo, e não faz porque sua empresa só funciona com você por perto.</h1>
    </div>
  </div>
</div>

<div id="cover" class="cover"></div>

<div id="open-content" class="open-content">
  <a href="#" id="close-content" class="close-content"><span class="x-1"></span><span class="x-2"></span></a>
    <div class="mailbg">
        
        <form id="formDados" name="f1" method="post">
            <label class="l1" for="mailinput">Digite aqui seu e-mail:</label>
            <input name="email" onblur="validacaoEmail(f1.email)" class="mailinput" aria-label="Your Email" autocomplete="on" type="email" placeholder="">
            <label class="l2" for="messtxt">Descreva seu problema:</label>
            <textarea name="texto" class="messtxt" aria-label="Your Message" placeholder=""></textarea>
            <button id="sendmess" class="sendmess" type="submit" aria-label="Send message">Enviar<div class="bar"></div></button>
            <div class="success" id="msgemail2" onclick="validacaoEmail(f1.email)"></div>
            <!-- <input type="hidden" name="acao" value="Cadastrar"> -->
            <div id="msgemail"></div>
            <?php
        if(isset($_POST['acao'])){
            //Enviei o formulário.
            if ($_POST['email'] != ''){
                $email = $_POST['email'];
                if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                    //tudo certo, é um email.
                    //só enviar.
                }else{
                    echo '<script>alert("Não é um e-mail válido")</script>';
                }
            }else{
                echo '<script>alert("Campos vazios não são permitidos!")</script>';
            }
        }
        ?>
        </form>
        <button class="closemess" aria-label="Close Form">Fechar</div></button>
        <img id="open-content-image" src="" />
        <div class="text" id="open-content-text">
        </div>
    </div>
  <!-- <a href="#" id="close-content" class="close-content"><span class="x-1"></span><span class="x-2"></span></a>
  <img id="open-content-image" src="" />
  <div class="text" id="open-content-text">
  </div> -->
</div>
  
  
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script type="text/javascript" src="js/constants.js"></script>
    <script type="text/javascript" src="js/form-contato.js"></script>
    <script type="text/javascript" src="js/formularios.js"></script>
    <script  src="js/index.js"></script>

<!--     <script type="text/javascript">
        $(document).ready(function(){
        /*desabilita o submit do form*/
            $("#formDados").submit(function(){
                return false; 
            });
        });
    </script> -->



</body>

</html>

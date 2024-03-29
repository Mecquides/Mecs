<?php

session_start();

?>  
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Faça Login Para Continuar </title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
<!-- Seleção -->
<style type="text/css">
    ::selection{background:rgba(157, 255, 159, 0.84);}
    ::-webkit-selection{background:rgba(157, 255, 159, 0.84);}
    ::-moz-selection{background:rgba(157, 255, 159, 0.84);}

    ins,del{text-decoration:none;}
    .t-caret{font-size:inherit;color:rgba(20, 21, 20, 0);}
    @media(max-width:800px){#t{width:400px;margin-left:-200px;}}    
  </style>
<!-- Fim Seleção -->


<style>
    html
  {
    background: center top no-repeat rgb(34, 34, 34);
    background-image: linear-gradient(rgba(0, 255, 75, 0.16) 5%, rgba(72, 94, 42, 0) 100%);
  }

  body 
  {
    font-family: 'Titillium Web', sans-serif;
    margin: 0;
  }

/* menu */
  ul.topnav 
    {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        height: 55px;
    }

    ul.topnav li 
    {
        float: left;
    }

    ul.topnav li a 
    {
        display: block;
        color: white;
        text-align: center;
        padding: 16px 16px;
        text-decoration: none;
    }

    ul.topnav li a:hover:not(.active) 
    {
        background-color: rgba(74, 255, 128, 0.42);
        transition: 0.8s;
    }

    ul.topnav li a.active 
    {
        background-color: #3b6679;
    }

    ul.topnav li.right 
    {
        float: right;
    }

    @media screen and (max-width: 600px) 
    {
    ul.topnav li.right, ul.topnav li 
    {
        float: none;
    }
    }
    
    ul.topnav 
    {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        border-bottom: inset 1.5px;
        border-bottom-color: #5efb60;
    }

    ul.topnav li 
    {
        float: left;
    }

    ul.topnav li a 
    {
        display: block;
        color: white;
        text-align: center;
        padding: 16px 16px;
        text-decoration: none;
    }

    ul.topnav li a:hover:not(.active) 
    {
      background-color: rgba(74, 255, 128, 0.42);
      transition: 0.8s;
    }

    ul.topnav li a.active 
    {
        background-color: rgb(48, 86, 39);
        padding: 14px 16px;
    }
    
    ul.topnav li a.active:hover
    {
      background-color: rgba(74, 255, 128, 0.42);
      transition: 0.8s;
    }

    ul.topnav li.right 
    {
        float: right;
    }

    @media screen and (max-width: 600px) 
    {
        ul.topnav li.right, ul.topnav li 
        {
            float: unset;
        }
    }

    .logo 
    {
        height: 52px;
        width: 77px;
        position: absolute;
        margin: 0% 47% 0% 47%;
        border-radius: 10px;
        cursor: pointer;
    }

    .logo:hover
    {
      image: url("img/WHITE-GREEN-HYDRA.png");
      transition: 1.0s;
    }

    img
    {
        vertical-align: middle;
        border-style: none;
    }

    @media screen and (max-width: 600px)
    {
        .logo
        {
            display: none;
        }
  }
  /* fim menu */


  h2, h1, b 
  {
      color: #f1f1f1;
      text-align: center;
  }

  h2
  {
    padding-top: 15px;
    margin: 0;
  }

  h2:hover, h1:hover, b:hover
  {
    color: #479d4b;
    transition: 0.8s;
  }

  * 
  {
    box-sizing: border-box;
  }
  
  .bg-img 
  {
    /* The image used */
    background-image: url("img/LR-back.png");
    min-height: 500px;
  
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }
  
  /* Add styles to the form container */
  .container 
  {
    position: absolute;
    right: 0;
    margin: 20px;
    max-width: 300px;
    padding: 16px;
    background-image: rgb(161, 161, 161);
    position: relative;
    margin: 0% 42% 0% 41.3%;
    padding-top: 40px;
  }
  
  /* Full-width input fields */
  input[type=text], input[type=password] 
  {
    width: 100%;
    padding: 10px;
    margin: 5px 0 22px 0;
    border-radius: 5px;
    background: #f1f1f1;
    text-align: center;
    border-bottom-style: groove;
    border-top: hidden;
    border-left: hidden;
    border-right: hidden;
    border-bottom-color: rgba(0, 255, 11, 0.64);
  }
  
  input[type=text]:focus, input[type=password]:focus 
  {
    background-color: rgba(157, 255, 159, 0.84) !important;
    outline: none;
    border-bottom-style: groove;
    border-top: hidden;
    border-left: hidden;
    border-right: hidden;
    border-bottom-color: rgba(0, 255, 11, 0.64);
    transition: 0.8s;
  }
  
  /* Set a style for the submit button */
  .btn 
  {
    background-color: #111;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
    border-bottom-color: rgba(0, 255, 11, 0.64);
    border-bottom-style: groove;
    border-top: hidden;
    border-left: hidden;
    border-right: hidden;
    position: relative;
    float: left;
    left: 23%;
    transition: 0.5s;
  }
  
  .btn:hover 
  {
    opacity: 1;
  }

  .btnn:hover
  {
    box-shadow: 3px 4px 20px 1px rgba(0, 0, 0, 0.67);
    transition: 0.8s;
  }

  .btnn
  {
    background-color: #111;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    width: 16%;
    opacity: 0.9;
    cursor: pointer;
    border-bottom-color: rgba(0, 255, 11, 0.64);
    border-bottom-style: groove;
    border-top: hidden;
    border-left-style: hidden;
    border-right-style: hidden;
    position: relative;
    margin: 1% 41.3% 1% 41.3%;
  }

  a
  {
    color: white;
    text-decoration: none;
    text-align: center;
  }

  footer
  {
    background-color: #1b1b1b;
    height: 100px;
    border-bottom: inset 1px;
    border-bottom-color: #5efb60;
    margin: 9% 0% -1% 0%;
  }

  footer p
  {
    padding-top: 10px;
    text-align: center;
    color: #9c9c9c;
  }

  .logoF
  {
    display: block;
    height: 52px;
    width: 77px;
    position: absolute;
    margin: 2% 47% 2% 47%;
    border-radius: 10px;
  }

  @media screen and (max-width: 1317px)
  {
    .logoF
    {
      display: block;
      height: 52px;
      width: 77px;
      position: absolute;
      margin: 5% 47% 0% 47%;
      border-radius: 10px;
    }
    .footer{
      background-color: #1b1b1b;
      border-bottom: inset 1px;
      border-bottom-color: #5efb60;
      height: 140px;
    }
  }

  @media screen and (max-width: 1160px)
  {
    .logoF
    {
      display: block;
      height: 52px;
      width: 77px;
      position: absolute;
      margin: 6% 47% 0% 47%;
      border-radius: 10px;
    }
    .footer{
      background-color: #1b1b1b;
      border-bottom: inset 1px;
      border-bottom-color: #5efb60;
      height: 130px;
    }
  }

  @media screen and (max-width: 700px)
  {
    .logoF
    {
      display: block;
      height: 52px;
      width: 77px;
      position: absolute;
      margin: 10% 47% 0% 47%;
      border-radius: 10px;
    }
    .footer{
      background-color: #1b1b1b;
      border-bottom: inset 1px;
      border-bottom-color: #5efb60;
      height: 190px;
    }
  }

  @media screen and (max-width: 660px)
  {
    .logoF
    {
      display: none;
    }
  }

  @media screen and (max-width: 480px)
  {
    .logoF
    {
      display: none;
    }
  }


  
</style>

</head>
<body>

  <?php

//Conexão
require_once 'conexao.php';

//Sessão
// session_start();

if (isset($_SESSION['logado'])) {
    echo "<script> type='javascript'>alert('Acesso Negado!');";
    echo "javascript:window.location='home.php';</script>";
}

//Botão Enviar
if(isset($_POST['btn-entrar'])):
  $erros = array();
  $email = mysqli_escape_string($connect, $_POST['email']);
  $senha = mysqli_escape_string($connect, $_POST['senha']);

  if(isset($_POST['lembrar-senha'])):

    setcookie('email', $email, time()+3600);
    setcookie('senha', md5($senha), time()+3600);
  endif;

  if(empty($email) or empty($senha)):
    $erros[] = "<h6 style=\"font-weight: 100;
        color: rgba(255, 0, 0, 0.678);
        padding: 5px;
        background-color: rgba(255, 0, 0, 0.294);
        border: 1px solid rgba(255, 0, 0, 0.575);
        border-radius: 10px;
        width: 274px;\">
        Campo e-mail/senha não preenchidos
    </h6>";
  else:
    $sql = "SELECT email FROM usuarios WHERE email = '$email'";
    $res = mysqli_query($connect, $sql);

    if(mysqli_num_rows($res) > 0):
    $senha = md5($senha);
    $sql = "SELECT * FROM usuarios WHERE senha = '$senha'AND email = '$email'";
    $res = mysqli_query($connect, $sql);

      if(mysqli_num_rows($res) == 1):
        $dados = mysqli_fetch_array($res);
        $_SESSION['logado'] = true;
        $_SESSION['id_usuario'] = $dados['id'];
        echo "<script> type='javascript'>alert('Login Efetuado com Sucesso!');";
        echo "javascript:window.location='home.php';</script>";

      else:
        $erros[] = "<h3 style=\"font-weight: 100;
                color: rgba(255, 0, 0, 0.678);
                padding: 5px;
                background-color: rgba(255, 0, 0, 0.294);
                border: 1px solid rgba(255, 0, 0, 0.575);
                border-radius: 10px;
                width: 219px;\">
                Usuário e senha não conferem
            </h3>";
      endif;
    else:
      $erros[] = "<h3 style=\"font-weight: 100;
            color: rgba(255, 0, 0, 0.678);
            padding: 5px;
            background-color: rgba(255, 0, 0, 0.294);
            border: 1px solid rgba(255, 0, 0, 0.575);
            border-radius: 10px;
            width: 139px;\">
            Usuário inexistente
        </h3>";
    endif;

  endif;

endif;
?>
<!-- Menu -->
<ul class="topnav">
<a href="home.php"><img style="vertical-align: middle;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="support.php">Suporte</a></li>
            <li class="right"><a href="cadastrar.php">Cadastro</a></li>
        </ul>
     <!-- FIM/menu -->

        <div class="bg-img">
        <h2>Entre Com Uma Conta Existente</h2>
        <form method="POST" action="" class="container">

          

            <h1>Login</h1>

            <?php
                if(!empty($erros)):
                  foreach($erros as $erro):
                    echo $erro;
                  endforeach;
                endif;
                    if(isset($_GET['suce'])):
                        $erro = $_GET['suce'];
                        echo $erro;

                    endif;
            ?>

            <?php
                if(isset($_GET['comp'])):
                    $comp = $_GET['comp'];
                   $comp2 = "<h3 style=\"font-weight: 150 px;
                   color: rgba(255, 0, 0, 0.678);
                   padding: 10px;
                   margin-top: 20px;
                   background-color:
                   rgba(255, 0, 0, 0.294);
                   border: 5px solid rgba(255, 0, 0, 0.575);
                   border-radius: 10px;
                   width: 274px;\">
                   $comp
                   </h3>";
                   echo $comp2;
                endif;
                ?>

            <label for="usuario"><b>E-mail</b></label>
            <input type="text" placeholder="Enter E-mail" name="email" required>

            <label for="senha"><b>Senha</b></label>
            <input type="password" placeholder="Enter Password" name="senha" required>

            <button type="submit" id="entrar" name="btn-entrar" class="btn"><a>ENTRAR</button></a>
        </form>
        </div>

        <a href="cadastrar.php"><button class="btnn">Clique Aqui Para Registrar-se</button></a>

<!-- Footer -->
  <footer>
    <img src="img/HYDRA-WHITEE.png" class="logoF">
        <p>© 2019 Hydra Corporation. Todos os direitos reservados. Todas as marcas são propriedade dos deus respectivos donos nos EUA e em outros países.
        IVA incluso em todos os preços onde aplicável.</p>
  </footer>
    <!-- FIM/footer -->



</body>
</html>

<?php

session_start();
$id = $_SESSION['id_usuario'];
if ($id != 1 and $id != 9) {
  echo "<script> type='javascript'>alert('Acesso Negado!');";
  echo "javascript:window.location='home.php';</script>";
}

if (isset($_POST['btn-cadastrar'])) {

        //Conexão
        include_once 'conexao.php';

        //Dados vindos do formulario

         $nome_J = mysqli_escape_string($connect, $_POST['nomep']);

        $categoria = mysqli_escape_string($connect, $_POST['categoria']);

        $descricaop = mysqli_escape_string($connect, $_POST['descricaop']);

        $plataforma = mysqli_escape_string($connect, $_POST['plataforma']);

        $preco = mysqli_escape_string($connect, $_POST['precop']);  

        $link_J = mysqli_escape_string($connect, $_POST['link_J']);       


        $formatosP = array("png", "jpeg", "jpg", "gif");

        $extensao = pathinfo($_FILES['img_1']['name'], PATHINFO_EXTENSION);

        if(in_array($extensao, $formatosP)){
            
            //Preparando o arquivo e o diretorio
            $pasta = "img/jogos/";
            
            $temp = $_FILES['img_1']['tmp_name'];
            
            $novoN = uniqid().".$extensao";

            $extensao2 = pathinfo($_FILES['img_2']['name'], PATHINFO_EXTENSION);

            $temp2 = $_FILES['img_2']['tmp_name'];

            $novoN2 = uniqid().".$extensao";

            $extensao3 = pathinfo($_FILES['img_3']['name'], PATHINFO_EXTENSION);

            $temp3 = $_FILES['img_3']['tmp_name'];

            $novoN3 = uniqid().".$extensao";

            if(move_uploaded_file($temp, $pasta.$novoN)){

                if (move_uploaded_file($temp2, $pasta.$novoN2)) {

                    if (move_uploaded_file($temp3, $pasta.$novoN3)) {

                        $sql = "INSERT INTO jogos (nome_J, categoria, descri, plataforma, preco, link_J, img_1, img_2, img_3) VALUES ('$nome_J', '$categoria', '$descricaop', '$plataforma', '$preco', '$link_J', '$novoN', '$novoN2', '$novoN3')";

                        if(mysqli_query($connect, $sql)){
                            echo "<script> alert('Cadastrado com sucesso!'); </script>";
                        }else{
                            $erros[] = "Erro ao fazer Upload, Tente Novamente!";
                        }
                        
                    }
                }

            }

        }
        else{
            $erros[] = "Erro, não foi possivel fazer o upload! formato inválido";
        }

}




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/cadastro.js"></script>
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

<style type="text/css">
    html
    {
        background: url(/public/images/v6/colored_body_top2.png?v=2) center top no-repeat #222222;
    }

    .tc 
    {
        background: linear-gradient( to bottom, #365d3d 5%, rgba(72, 94, 42, 0) 70%);
    }

    body
    {
        font-family: 'Titillium Web', sans-serif;
        display: block;
        margin: 0;
    }

    h1, b
    {
        color: #f1f1f1;
        text-align: center; 
        margin-top: 0px;
    }

    h1
    {
        font-size: 25px;
    }

    h2
    {
        color: #ffffff;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 35px;
    }

    ul.topnav 
    {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        height: 55px;
        border-bottom: inset 1px;
        border-bottom-color: #155916;
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
    
    .caixa1, .caixa2, .caixa3
    {
        position: relative;
        display: block;
        align-content: center;
        justify-content: space-between;
        padding: .5rem 1rem;
        padding-top: 0.5rem;
        padding-right: 1rem;
        padding-bottom: 0.5rem;
        padding-left: 1rem;

    }

    input
    {
        padding: 10px;
        margin: 5px 0 22px 0;
        border-radius: 5px;
        background: #f1f1f1;
        text-align: center;
        border-bottom-style: groove !important;
        border-top: hidden;
        border-left: hidden;
        border-right: hidden;
        border-bottom-color: rgba(0, 255, 11, 0.64) !important;
    }

    input[type=text]:focus, input[type=password]:focus, input[type=email]:focus 
    {
        background-color: rgba(157, 255, 159, 0.84) !important;
        outline: none;
        border-bottom-style: groove !important;
        border-top: hidden;
        border-left: hidden;
        border-right: hidden;
        border-bottom-color: rgba(0, 255, 11, 0.64) !important;
    }

    fieldset  
    {
        margin: 0% 30% 0% 30%;
        border-radius: 5px;
        position: inherit;
        justify-content: space-between;
        display: flex;
        text-align: -webkit-center;
        padding-block-start: 0;
        padding-inline-start: 0;
        padding-inline-end: 0;
        padding-block-end: 0;
        border-color: #1918183d !important;
    }

    fieldset :hover
    {
        box-shadow: 3px 4px 20px 1px rgba(0, 0, 0, 0.67);
        transition: 0.8s;
    }
    
    b:hover{
        border: none;
        box-shadow: none;
    }

    .btnS
    {

    }

    .btnR
    {
        background-color: #111;
        color: white;
        padding: 0.7rem 1.3rem;
        border-radius: 5px;
        opacity: 0.9;
        cursor: pointer;
        border-bottom-color: rgba(107, 255, 110, 0.9);
        border-bottom-style: groove;
        border-top: hidden;
        border-left-style: hidden;
        border-right-style: hidden;
        display: block;
        align-content: center;
        justify-content: space-between;
        position: absolute;
        margin: 0% 36% 0% 36%;
    }

    .btnE
    {
        background-color: #111;
        color: white;
        padding: 0.7rem 1.3rem;
        border-radius: 5px;
        opacity: 0.9;
        cursor: pointer;
        border-bottom-color: rgba(107, 255, 110, 0.9);
        border-bottom-style: groove;
        border-top: hidden;
        border-left-style: hidden;
        border-right-style: hidden;
        display: block;
        align-content: center;
        justify-content: space-between;
        position: absolute;
        margin: 0% 57% 0% 57%;
    }

    .btnS p:hover .btnR
    {
        background-color: rgba(87, 152, 88, 0.9);
        transition: 0.8s;
    }

    .btnS p:hover .btnE
    {
        background-color: rgba(87, 152, 88, 0.9);
        transition: 0.8s;
    }

    footer
  {
    background-color: #1b1b1b;
    height: 100px;
    border-bottom: inset 1px;
    border-bottom-color: #5efb60;
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
    margin: 2% 47% 0% 47%;
    border-radius: 10px;
  }

  @media screen and (max-width: 1160px)
  {
    .logoF
    {
      display: block;
      height: 52px;
      width: 77px;
      position: absolute;
      margin: 3% 47% 0% 47%;
      border-radius: 10px;
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

    <!-- Menu -->
        <ul class="topnav">
        <a href="home.php"><img style="vertical-align: middle;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="suport.php">Suporte</a></li>
            <li class="right"><a href="account.php">Conta</a></li>
            <li class="right"><a href="sair.php">Sair</a></li>
        </ul>
     <!-- FIM/menu -->

        <div class="tc">
        <br>
            <h2>Insira os dados do Produto</h2>

        <!-- Formulário -->
        <?php
			
		?>

        <fieldset>
        <div class="caixa1">
            
            <form  action="" method="POST" style="border: none; box-shadow: none;" enctype="multipart/form-data">
                
            <h1 style="box-shadow: none;">Informações Principais</h1>

            <div>
                <?php
                    if (!empty($erros)):
                        foreach($erros as $erro):
                            echo $erro;
                        endforeach;
                    endif;
                ?>  
            </div>
            
            <label for="nomep" style="box-shadow: none !important;"><b>Nome do produto</b></label><br>
            
            <input type="text" name="nomep" placeholder="Nome" id="nomep" style=" box-shadow: none !important;">
            
                <br>
                <br>

            <label for="categoria" style="box-shadow: none !important;"><b>Categoria</b></label><br>
            
            <input type="text" name="categoria" placeholder="categoria" id="categoria" style=" box-shadow: none !important;">
            
                <br>
                <br>
            
            <label for="descricaop" style=" box-shadow: none !important;"><b>Descrição do produto</b></label><br>
            
            <input name="descricaop" type="text" placeholder="Descrição" id="descricaop" style=" box-shadow: none !important;" >
            
                <br>
                <br>
            
            <label for="plataforma" style=" box-shadow: none !important;"><b>Platafroma</b></label>

            <br>

            <input name="plataforma" type="text" placeholder="Platafroma" id="plataforma" style=" box-shadow: none !important;" >

                <br>
                <br>

            <label for="precop" style=" box-shadow: none !important;"><b>Preço</b></label><br>

            <input name="precop" type="text" placeholder="Preço" id="precop" style=" box-shadow: none !important;" >
                <br>
                <br>

            <label for="link_J" style=" box-shadow: none !important;"><b>Link</b></label><br>

            <input name="link_J" type="text" placeholder="Preço" id="link_J" style=" box-shadow: none !important;" >
                <br>
                <br>

            <label for="img_1" style=" box-shadow: none !important;"><b>Imagem 1</b></label><br>

            <input name="img_1" type="file" placeholder="Link" id="img_1" style=" box-shadow: none !important;" >
            <br>
            <br>

            <label for="img_1" style=" box-shadow: none !important;"><b>Imagem 2</b></label><br>

            <input name="img_2" type="file" placeholder="Imagem" id="img_2" style=" box-shadow: none !important;" >
            <br>
            <br>

            <label for="img_1" style=" box-shadow: none !important;"><b>Imagem 3</b></label><br>

            <input name="img_3" type="file" placeholder="Imagem" id="img_3" style=" box-shadow: none !important;" >
            <br>
            <br>

            <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>

            </form>


            </form>
              
        </div>
        </fieldset>
    <!-- FIM/formulário -->

            <br class="aww">
                <h1>Após Todos os Campos Estarem Verificados Corretamente, Clique em Enviar</h1>


    <!-- botões -->
        <div class="btnS">
            
            <p><button class="btnE" type="submit" name="btnCadUsuario">Enviar</button></p>
        
        </form>
        <p><button type="button" class="btnR" onclick="validar()">Verificar</button></p>
        </div>
        <br>
        <br>
    </div>
    <!-- FIM/botões -->

    <!-- Footer -->
    <footer>
    <img src="img/HYDRA-WHITEE.png" class="logoF">
        <p>© 2019 Hydra Corporation. Todos os direitos reservados. Todas as marcas são propriedade dos deus respectivos donos nos EUA e em outros países.
        IVA incluso em todos os preços onde aplicável.</p>
    </footer>
    <!-- FIM/footer -->

    
</body>
</html>


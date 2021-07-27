<?php
session_start();
if(isset($_SESSION['nao_autenticado'])){
    $teste = false;
}
elseif(isset($_SESSION['email'])){
        $teste = true;
}
else{
    $teste = false;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style1.css">
    <link rel="stylesheet" href="../style/banner.css">
    <link rel="stylesheet" href="../style/styler_slider.css">
    <link rel="shortcut icon" href="../img/LimpFlex.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <title>LimpFlex</title>

</head>
<body>
    <div style="position:relative;" class="banner">
        <h1><img height="70px" src="../img/LimpFleX-removebg-preview.png" alt=""></h1>
           <div class="menu"> 
               <a href="../index.php" id="text-menu">Home</a>
               <a href="../orcamento/orcamento.php" id="text-menu">Orçamento</a>
               <a href="saibamais.php" id="text-menu">Saiba Mais</a>
               <?php
               if($teste == false){
                echo "<a href='../entrar/entrar.php' id='text-menu'>Entrar</a>";
               }
               else{
                echo "<a href='../painelcliente/painelcliente.php' id='text-menu'>Minha Conta</a>";
               }
               ?>
           </div>    
    </div>

<div class="ajuste-principal" >

    <img id="descriçao_img" src="../img/LimpFleX.png" alt="#">
    
    <div class="prin_descriçao">
    
        <h3> A LimpFlex Serviços</h3>
            <p style="font-size: 17px;" ><span class="tab">Nossa </span> empresa está consolidada no mercado a mais de 10 anos atualmente atuamos em diversos estados, prestando serviços residenciais, empresariais e industriais. Atuamos no mercado de serviços de controles de vetores/pragas, e higienização de ambientes, visando garantir a obtenção de superfícies, equipamentos e ambientes com características adequadas de limpeza e baixa carga microbiana residual, evitando a recontaminação de ambientes produtos e superfícies.<br>
        <h3> Missão LimpFlex Serviços</h3>
            <p style="font-size: 17px;" ><span class="tab">Ser </span> uma empresa saudável, próspera e integra que forneça resultados através da prestação de serviços de qualidade aos seus clientes. Atuando em um ambiente de confiança, respeito, participação, trabalho em equipe, confiabilidade e inovação.</p>
        
            
    </div>
</div>

<div class="ajuste-principal" style="height: 300px;" >

    <img id="descriçao_img" src="../img/8.jpeg" alt="#">
    
    <div class="prin_descriçao">

        <h3>Nossos Valores</h3>

            <p style="font-size: 17px;" ><span class="tab"></span><br>
            </p>    
            <ul>
                <li>Responsabilidade social, econômia e ambiental;</li>
                <li>Ética, respeito ao cliente e ao meio ambiente;</li>
                <li>Profissionais competentes e capacitados;</li>
                <li>Gerar ambientes protegidos e saudáveis;</li>
            </ul>
        <br>
        <h3>Equipe LimpFlex Serviços</h3><br>
            <p style="font-size: 17px;"><span class="tab">Equipe</span> especializada no Controle de Vetores, Pragas Urbanas e higienização.</p>
            <p style="font-size: 17px;"><span class="tab">LimpFlex</span>Serviços está sempre pronta para atender, contamos com equipe qualificada composta por biólogos e engenheiros agrônomos para melhor orientar nossos clientes, oferecendo a solução ideal para cada caso específicos</p>
    </div>
</div>
<div class="ajuste-principal">

    <img id="descriçao_img" src="../img/areadeatendimento.jpg" alt="#">
    
    <div class="prin_descriçao">

        <h3>ÁREA DE ATUAÇÃO</h3>

            <h4 style="font-size: 17px;" ><span class="tab"></span>Estados que estamos presentes</h4>
            <br>
            <ul>
                <li>MARANHÃO</li>
                <li>PIAUÍ</li>
                <li>TOCANTINS</li>
                <li>CEARÁ</li>
                <li>BHAIA</li>
            </ul>
    </div>
</div>
</div>   
</body>
</html>
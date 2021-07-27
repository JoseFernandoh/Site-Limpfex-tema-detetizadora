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
    <link rel="stylesheet" href="style/style1.css">
    <link rel="stylesheet" href="style/banner.css">
    <link rel="stylesheet" href="style/styler_slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="img/LimpFlex.ico" type="image/x-icon">
    <title>LimpFlex</title>

</head>
<body>
    <div class="banner">
        <h1><img height="70px" src="img/LimpFleX-removebg-preview.png" alt=""></h1>
           <div class="menu"> 
               <a href="index.php" id="text-menu">Home</a>
               <a href="orcamento/orcamento.php" id="text-menu">Orçamento</a>
               <a href="saibamais/saibamais.php" id="text-menu">Saiba Mais</a>
               <?php
               if($teste == false){
                echo "<a href='entrar/entrar.php' id='text-menu'>Entrar</a>";
               }
               else{
                echo "<a href='painelcliente/painelcliente.php' id='text-menu'>Minha Conta</a>";
               }
               ?>
           </div>    
    </div>
<div id="slider_img" >
    <div id="slider">
        <img class="selected" src="img/5.jpeg" alt="#">
        <img src="img/2.jpeg" alt="#">
        <img src="img/10.jpeg" alt="#">
        <img src="img/11.jpeg" alt="#">
    </div>

</div>


<script src="scrpty/scrpty.js"></script>

    <div>
        <a id="fazer_orçamento" href="orcamento/orcamento.php">ORÇAMENTO</a>
    </div>

    <div class="separador"></div>

<div class="ajuste-principal" >

    <img id="descriçao_img" src="img/1.jpeg" alt="#">
    
    <div class="prin_descriçao">
    
        <h3> Dedetizadora no nordeste LimpFlex Serviços</h3>
            <p style="font-size: 17px;" ><span class="tab">Empresa </span> de Controle e Afastamento de Pragas que se preocupa com o meio ambiente e a sua saúde utilizando somente produtos de uso autorizados.<br>
                <span class="tab"></span>A Dedetizadora </span> LimpFlex serviços atende toda a região do nordeste e Angra dos Reis. Somos especializados no controle de pragas como baratas, cupins, ratos, mosquito da dengue e outros insetos. Realizamos os serviços de Afastamento de pombos e morcegos, Atomização - combate a mosquitos e moscas, Higienização de Reservatórios, Termonebulização Fumacê, Dedetização - Tratamento contra baratas e formigas, Descupinização - Tratamento contra cupins e brocas e Desratização - Tratamento contra ratos e roedores na sua casa, condomínio e ambientes empresariais.</p>

        
            
    </div>
</div>

<div class="ajuste-principal" >
    
    <div class="prin_descriçao" style="padding-left: 15px;">

        <h3>O que é sanitização?</h3>

            <p style="font-size: 17px;" ><span class="tab"></span>A sanitização consiste em reduzir microrganismos críticos para saúde pública em níveis considerados seguros. Na prática, é um processo que deixa o ambiente seguro no quesito de microrganismos.<br>
                <span class="tab"></span>Atualmente, a sanitização de ambientes tem sido amplamente divulgada como forma de desinfecção preventiva contra o coronavírus, entretanto, o procedimento é muito comum como forma de combater o mofo em qualquer tipo de edificação, residências ou empresas, além de prevenir contaminação por bactérias, principalmente nos segmentos de saúde e alimentação.</p> 
    </div>

    <img id="descriçao_img" src="img/3.jpeg" alt="#">

</div>

<div class="ajuste-principal" style="height: 300px;" >

    <img id="descriçao_img" src="img/6.jpeg" alt="#">
    
    <div class="prin_descriçao">

        <h3>Em quais locais deve ser realizada a sanitização?</h3>

            <p style="font-size: 17px;" ><span class="tab"></span>Todos os locais onde há circulação de pessoas devem ser sanitizados. Em geral, vários segmentos e estabelecimentos podem se beneficiar dos efeitos da sanitização. Confira, a seguir, uma lista de ambientes em que a sanitização é fundamental:<br>
            </p>    
            <ul>
                <li>Estabelecimentos de saúde: hospitais, clínicas, consultórios, laboratórios, farmácias, clínicas veterinárias;</li>
                <li>Vias públicas: calçadas, praças, paradas de ônibus, parques, ruas comerciais com grande fluxo de pessoas;</li>
                <li>Comércio e serviços: lojas, supermercados, bancos, restaurantes, padarias, postos de combustível, cartórios, escritórios, hotéis e pousadas;</li>
                <li>Indústrias: todas as indústrias, com destaque para o segmento alimentício, que segue rígidas normas sanitárias;</li>
                <li>Transportes: ônibus, vans, trens e até mesmo carros de aplicativo podem tornar seus espaços mais seguros com a sanitização;</li>
                <li>esidências: para garantir um ambiente saudável e seguro para a sua família.</li>
            </ul>
    </div>
</div>
<div class="rodape">
        <div class="faleconosco">
            <h3>Fale Conosco</h3>
            <ul>
                <li><a href="mailto:LimpFlex.Eficacia@gmail.com">Email:LimpFlex.Eficacia@gmail.com</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=5599991991907&text=Ola%20Estou%20Interesdo"><i class="fa fa-whatsapp"> (99) 9-9199-1907</i></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=5586999744358&text=Ola%20Estou%20Interesdo"><i class="fa fa-whatsapp"> (86) 9-9974-4358</i></a></li>
                <li><a href="#"><i class="fa fa-facebook-square"> @LimpFlex</i></a></li>
            </ul>

        </div>
        <div class="segurança">
            <h3>Segurança Garantida</h3>
            <li>Sucuri Security</li>
            <li>Wordfence Security</li>
            <li>All In One WP Security & Firewall</li>
            <li>Jetpack</li>
            <li>iThemes Security</li>
            <li>VaultPress</li>
            <li>Google Authenticator — Two Factor Authentication</li>

        </div>
        <div class="endereço">
            <h3>Localizaçao</h3>
            <ul>
                <li>MARANHÃO</li>
                <li>PIAUI</li>
                <li>CEARA</li>
                <li>BHAIA</li>
                <li>TOCANTINS</li>
            </ul>
        </div>
    </div>
</body>
</html>
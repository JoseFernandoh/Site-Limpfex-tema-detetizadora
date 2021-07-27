<?php
session_start();
include('Conexao.php');
include('pegarcpf.php');

$array = array("Afastamento", "Desinsetização", "Descupinização", "Desratização", "Higienização","Termonebulizador", "Sanitização");
$servico = null;
$cont = 0;
function chekbox($chk){
    if (isset($_POST[$chk])) {
        return $chk;
    } else {
       return null;
    }

}

$data = mysqli_real_escape_string($conexao, $_POST['data']);
$opcao = mysqli_real_escape_string($conexao, $_POST['opcao']);


for($i=0; $i<7; $i++){
    $chk=$array[$i];
    $array[$i]=chekbox($chk);

}

for($i=0; $i<7; $i++){
    if($array[$i]!=null){
        if($cont==0){
            $servico = $array[$i];
            $cont = 1;
        }
        else{
            $servico = $servico .','. $array[$i];
        }
    }

}
$query = "INSERT INTO `orçamento` (`Orcamento_ID`, `Cpf`, `data`, `Empresarial ou Industrial`, `Serviço`) VALUES (NULL, '{$id}', '{$data}', '{$opcao}', '{$servico}')";

$result = mysqli_query($conexao, $query);

header('Location: ../painelcliente/painelcliente.php');

?>
<!DOCTYPE html>
<?php 
   include_once "conf/default.inc.php";
   require_once "conf/Conexao.php";
   $title = "Lista de carros";
   $procurar = isset($_POST["procurar"]) ? $_POST["procurar"] : ""; 
   $procura = isset($_POST["procura"]) ? $_POST["procura"] : "";
   $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
   $valor = isset($_POST["valor"]) ? $_POST["valor"] : "";
   $km = isset($_POST["km"]) ? $_POST["km"] : "";
?>

<html>
<head>
<link rel="stylesheet" href="conf../teste.css">

    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>

<style>

.red{
color: red; 

}
.blue{
color:blue;

}

</style>

</head>
<body>
<?php include "menu.php"; ?>
    <form method="post">

    <p>
                <input type="radio" name="carro" value="nome"/>Nome
                <input type="radio" name="carro" value="valor"/> Valor
                <input type="radio" name="carro" value="km"/>Km
            </p>
            
    <fieldset>
        <legend>Procurar carros</legend>
        <input type="text"   name="procurar" id="procurar"  value="<?php echo $procurar;?>">
        <input type="submit" name="acao"     id="acao">
        <br><br>
        <table>
	    <tr><td><b>id  </b></td>
        <td><b>nome  </b></td>
        <td><b> valor  </b></td>
        <td><b> km  </b></td>
        <td><b> data de fabricação  </b></td>
        <td><b>Anos de uso</b></td>
        <td><b>Média Km por ano</b></td>
        <td><b>Valor de revenda</b></td>
        </tr>
<?php
    $pdo = Conexao::getInstance(); 
    
    if($procura==""){
        $consulta = $pdo->query("SELECT * FROM carro 
        WHERE nome LIKE '$procurar%' 
        ORDER BY nome");
        }

        else if($procura=="pro1"){
            $consulta = $pdo->query("SELECT * FROM carro 
                                 WHERE nome LIKE '$procurar%' 
                                 ORDER BY nome");
                                }
    else if($procura=="pro2"){
        $consulta = $pdo->query("SELECT * FROM carro 
                              WHERE valor <= '$procurar%' 
                              ORDER BY valor");
                            }
    else if($procura=="pro3"){
        $consulta = $pdo->query("SELECT * FROM carro 
                               WHERE km <= '$procurar%' 
                               ORDER BY km");
                            }
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                $hoje = date("Y");
$fab = date ("Y",strtotime($linha['datafabricacao']));
$anosdeuso = $hoje - $fab;
$mediaquilometros =  ($linha['km']) / $anosdeuso ; 

if($linha['km'] >= 100000 && $anosdeuso <10){
    
    $valorconta = $linha['valor'] * 0.10;
    $valorrevenda = $linha['valor'] - $valorconta;
    $cor = "red";
    

}elseif($linha['km'] < 100000 && $anosdeuso >= 10){
    
    $valorconta = $linha['valor'] * 0.10;
    $valorrevenda = $linha['valor'] - $valorconta;
    $cor = "red";
    

}elseif($linha['km'] >= 100000 && $anosdeuso >= 10){
    $valorconta = $linha['valor'] * 0.20;
    $valorrevenda = $linha['valor'] - $valorconta;
    $cor = "red";

}else {
    $valorrevenda = $linha['valor'];
    $cor="blue";
}

?>
	    <tr><td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo number_format( $linha['valor'], 1, ".", ".");?></td>
            <td><?php echo number_format($linha['km'], 1, ".", ".");?></td>
            
            <td><?php echo date("d/m/Y",strtotime($linha['datafabricacao'])) ?></td>
            <td><?php  echo $anosdeuso ?></td>
            <td><?php echo $mediaquilometros ?></td>
            
            <td style="color:<?php echo $cor;?>"><?php echo $valorrevenda; ?></td>
            
</tr>




        
            <?php } ?>       
        </table>
    </fieldset>
    </form>
</body>
</html>
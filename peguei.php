<?php
    $conn = mysqli_connect("localhost", "root", "", "db_itens")or die("ERRO");


    $nome = $_POST['nome'];
    $total = $_POST['quant'];
    $repositorio = $_POST['repos'];
    $dis = $_POST['quant'];

    
    $sql = mysqli_query($conn, "INSERT INTO item (nome, quant, id_repositorio, disponivel) VALUES ('$nome', '$total', '$repositorio', '$dis' )");

    if($sql){
        echo '<script>'
         . ' alert("Enviado Com Sucesso !!!");'
         . ' window.location.href = "item_area.php";'
         . '</script>';
    }else{
        echo '<script>'
         . ' alert("errou !!!");'
         . ' window.location.href = "index.php";'
         . '</script>';
    }



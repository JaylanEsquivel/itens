<?php

$conn = mysqli_connect("localhost", "root", "", "db_itens")or die("ERRO");


    $area = $_POST['area'];
    $dis = $_POST['quant'];
    $id_item = $_POST['id'];
    $total = $_POST['total'];

    $vdd = $total - $dis;
    
    if($dis > $total){
        echo '<script>'
         . ' alert("Quantidade solicitada Indisponivel !!!");'
         . ' window.location.href = "item_area.php";'
         . '</script>';
    } else {
       $sql = mysqli_query($conn, "INSERT INTO area_item (id_area, id_item, quant) VALUES ('$area', '$id_item', '$dis')");
    }
    if($sql){
        $sql = mysqli_query($conn, "UPDATE item SET disponivel = $vdd WHERE id = $id_item ")or die("ERRo");
        echo '<script>'
         . ' alert("Enviado Com Sucesso !!!");'
         . ' window.location.href = "item_area.php";'
         . '</script>';
    }else{
        echo '<script>'
         . ' alert("errou !!!");'
         . ' window.location.href = "item_area.php";'
         . '</script>';
    }

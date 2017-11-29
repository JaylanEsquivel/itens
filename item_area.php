<!DOCTYPE html>
<!--
NOME: Template Base;
DESCRIÇAO: Template base para Projetos;
AUTOR: Jaylan Esquivel Pereira Santos;
TECNOLOGIAS DISPONIVEIS: Bootstrap, Jquery, Animate.css, FontAwesome, Normalize.css, MaskJquery;
-->
<?php
     $conn = mysqli_connect("localhost", "root", "", "db_itens")or die("ERRO");
     
     $sql = mysqli_query($conn, "SELECT id,disponivel FROM item ORDER BY id DESC LIMIT 1");
     
     $valor = mysqli_fetch_array($sql);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/> <!-- ESSA META TIRA ZOOM EM DISPOSITIVOS MOBILES -->
        <meta charset="UTF-8">
        <title>Inputs Dinamicos</title>
        <link rel="stylesheet" href="css/animate.css" />
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style-one.css"/>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                 <?php if($valor[1] > 0 ){  ?>
                    <form action="peguei_2.php" method="post">
                            <div class="form-group">
                                <label for="nome">Quantidade:</label>
                                <input type="text" class="form-control" name="quant" id="quant" value="<?php echo $valor[1]; ?>" required/>
                                <input type="hidden" name="id" id="id" value="<?php echo $valor[0]; ?>" />
                                <input type="hidden" name="total" id="total" value="<?php echo $valor[1]; ?>" />
                            </div>
                               <div class="form-group">
                                    <label>Area:</label>
                                    <select class="form-control" name="area" required>
                                      <option value="1">Quimica</option>
                                      <option value="2">Logistica</option>
                                      <option value="3">Informatica</option>
                                      <option value="4">Automação</option>
                                    </select>
                                </div>  
                            <div class="row">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-info" value="Alocar"/>
                                </div>
                            </div>
                        </form>
                 <?php }else{ ?>
                    <span>Quantidade indisponivel para Alocação</span>
                 <?php } ?>
                    <a href="index.php" class="btn btn-warning">VOLTAR</a>
                </div>
            </div>
        </div>       
<!--======================================= js  =========================================== -->
<script src="js/jquery-3.2.1.min.js" ></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/anijs.js" type="text/javascript"></script> 
<script src="js/anijs-helper-scrollreveal.js" type="text/javascript"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
 
  <!--======================================= js  =========================================== -->
    </body>
</html>

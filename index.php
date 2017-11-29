<!DOCTYPE html>
<!--
NOME: Template Base;
DESCRIÇAO: Template base para Projetos;
AUTOR: Jaylan Esquivel Pereira Santos;
TECNOLOGIAS DISPONIVEIS: Bootstrap, Jquery, Animate.css, FontAwesome, Normalize.css, MaskJquery;
-->
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
                    <form action="peguei.php" method="post">
                            <div class="form-group">
                                <label for="nome">Nome Item:</label>
                                <input type="text" class="form-control" name="nome" id="nome" required/>
                            </div>
                            <div class="form-group">
                                <label for="nome">Quantidade:</label>
                                <input type="text" class="form-control" name="quant" id="quant" required/>
                            </div>
                               <div class="form-group">
                                    <label>Unidade:</label>
                                    <select class="form-control" name="uni" required>
                                      <option value="Caixa">Caixa</option>
                                      <option value="Unidade">Unidade</option>
                                      <option value="Kg">Kg</option>
                                      <option value="litro">Litro</option>
                                    </select>
                                </div>  
                        <div class="row">
                           <div class="col-sm-12">
                               <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Rua:</label>
                                    <select class="form-control" name="rua" id="rua" required>
                                      <option value=""></option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                     </select>
                                </div>
                               </div>
                               <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Prateleira:</label>
                                    <select class="form-control" name="pra" id="pra" disabled required>
                                      <option value=""></option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                     </select>
                                </div>
                               </div>
                               <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Andar:</label>
                                    <select class="form-control disabled" name="and" id="and" disabled required>
                                      <option value=""></option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                     </select>
                                </div>
                               </div>
                               <div class="col-sm-3">
                               <div class="form-group">
                                    <label>Repositorio:</label>
                                    <select class="form-control disabled" name="repos" id="repos" disabled required>
                                      <option value=""></option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                     </select>
                                </div>
                               </div>
                            </div>
                          </div>
                           <!-- <div class="form-group">
                                <label for="nome">local:</label><br>
                                <select class="selectpicker" name="local" data-show-subtext="true" data-live-search="true" required>
                                    <option data-subtext="" value="1 1 1 1">1 1 1 1</option>
                                    <option data-subtext="" value="2 1 1 1">2 1 1 1</option>
                                    <option data-subtext="" value="3 1 1 1">3 1 1 1</option>
                                    <option data-subtext="" value="4 1 1 1">4 1 1 1</option>
                                    <option data-subtext="" value="5 1 1 1">5 1 1 1</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label>Área</label>
                                            <select class="form-control" name="area">
                                                <option value="inf">Informática</option>
                                                <option value="log">Logistíca</option>
                                                <option value="qui">Quimica</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <label for="nome">Quantidade por area:</label>
                                            <input type="text" class="form-control" name="numeric" id="numeric" maxlength="" required/>
                                        </div>
                                        
                                        <div class="col-sm-2" style="padding-top: 24px">
                                           
                                            <a href="#" id="mais" class="btn btn-info"><i class="fa fa-plus"></i></a>
                                        </div>       
                                    </div>
                                </div>
                            </div><br>-->
                            <div class="row">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Registrar"/>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>       
<!--======================================= js  =========================================== -->
<script src="js/jquery-3.2.1.min.js" ></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/anijs.js" type="text/javascript"></script> 
<script src="js/anijs-helper-scrollreveal.js" type="text/javascript"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
  
  <script>
    $('#rua').change(function() {
        $('#pra').removeAttr('disabled');
    });
    $('#pra').change(function() {
        $('#and').removeAttr('disabled');
    });
    $('#and').change(function() {
        $('#repos').removeAttr('disabled');
    });  
  </script>

<!-- clona uma div 
<script>
  $('#mais').click(function(e){
    var f = $(this).parent().parent(),
        c = f.clone(true,true);
        c.insertAfter(f);
  });
</script> -->
  
  <!--======================================= js  =========================================== -->
    </body>
</html>

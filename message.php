<?php
    if(isset($_GET['erro'])){
        switch($_GET['erro']){ // (switch) 
            case 101:
                $erro = "Login Inválido";
                break;
            case 102:
                $erro = "Necessario realizar o Login";
                break;
        }
    }

    if(isset($erro))
        echo '<div class="alert alert-success" role="alert">'.$erro.'</div>';
?>

<?php 
   if(isset($_GET['m'])){
       switch($_GET['m']){
 
           case 201:
               $m = "Cadastrado com Sucesso!";
               break;
           case 202:
               $m = "Erro ao cadastrar, preencha todos os campos";
               break;
       }
   }
   if(isset($m))
       echo '<div class="alert alert-success" role="alert">'.$m.'</div>';
 
?>


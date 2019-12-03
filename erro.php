<?php
if (isset($_GET['erro'])){
    switch($_GET['erro']){
        case 101:
            $erro = "Login Invalido";
        break;
        case 102:
            $erro = "Necessario realizar o login";
        break;
    }
}
if (isset($erro))
echo '<div class="alert alert-danger" role="alert">'.$erro.'</div>';


if (isset($m))
echo '<div class="alert alert-warning" role="alert">'.$m.'</div>';

?>
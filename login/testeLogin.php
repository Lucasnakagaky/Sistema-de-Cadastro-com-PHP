<?php

// print_r($_REQUEST);

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    # Acessa

    include_once('../formulario/config.php');

    $email = empty($_POST['email']);
    $senha = empty($_POST['senha']);

    print_r('email ' . $email);
    print_r('senha ' . $senha);

}
else{
    header('Location: login.php');
}


?>
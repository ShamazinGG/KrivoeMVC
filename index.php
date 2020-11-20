<?php
//namespace Core;
include "Core/Router.php";
//$router = new Core\Router();
$router = Router::getInstance();
$router->parse();

//include 'partials/header.php';
////include 'users/users.php';
//include 'Router.php';
//include 'Models/UserModel.php';
//$model = new UserModel();
//$model->getUsers();
//$router = Router::getInstance();
//$router->parse();
//include 'partials/footer.php';




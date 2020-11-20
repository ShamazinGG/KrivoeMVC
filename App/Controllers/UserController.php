<?php
//namespace App\Controllers;
//use Core;

class UserController extends Controller
{
    public function MainAction()
    {
        $this->view->generate('main.php', 'template.php');
        //echo 'MainAction';
    }

    public function CreateAction()
    {
        $this->view->generate('create.php', 'template.php');
    }

    public function ViewAction()
    {
        $this->view->generate('view.php', 'template.php');
    }

    public function UpdateAction()
    {
        $this->view->generate('upgrade.php', 'template.php');
    }

    public function DeleteAction()
    {
        $this->view->generate('delete.php', 'template.php');
    }


}


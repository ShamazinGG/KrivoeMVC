<?php
class Main_Controller
{
    public function action1()
    {

    }
    public function action2()
    {

    }
}

$test = new Main_Controller();
$test->action1();
$a = "Main_Controller";
$b = "action2";

$test2 = new $a();
$test2->$b();

$c = [
    "Controller" => $a,
    "Action" => $b
];

$test3 = new $c["Controller"];
$d = $c["Action"];
$test3->$d();

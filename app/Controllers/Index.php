<?php 
namespace App\Controllers;

class Index extends BaseController {
    public function index(){
        echo "Hello World from CodeIgniter 4";
    }

    public function feature(): void{
        echo "The feature of a msi laptop is that it is very powerful for gaming and programming";
    }

    public function add($num1, $num2){
        $sum = $num1 + $num2;
        echo "The sum $num1 and $num2 is $sum";
    }
}
?>
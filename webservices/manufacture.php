<?php 
require 'database.php';

class manufacture{
    public $name;
    public function insert_manufacture($dbOject,$data){
        if($dbOject->insert("manufacture",$data)){
            return "Manufacture inserted successfully";
        }else{
            return "Error";
        }
    }
}
$objManufacture = new manufacture();
if(isset($_POST['manufacture_name'])){
    $data = array(
        'manufacture_name' => $_POST['manufacture_name'],
    );
        echo $objManufacture->insert_manufacture($dbOject,$data);
}


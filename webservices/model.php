<?php 
require 'database.php';

class model{
    public $name;
    public function insert_model($dbOject,$data){
        if($dbOject->insert("model",$data)){
            return "Model inserted successfully";
    }else{
        return "Error";
        } 
    }
}
$objModel = new model();
if(isset($_POST['manufacture_name'])){
    $picture1='';
    $picture2='';
    if(isset($_FILES['picture1'])){
        $files1=$_FILES['picture1'];
        $tmp_name1=$files1['tmp_name'];
        $picture1=$files1['name'];
        $destination1='../uploads/'.$picture1;
        $res=move_uploaded_file($tmp_name1, $destination1);
    }

    if(isset($_FILES['picture2'])){
        $files2=$_FILES['picture2'];
        $tmp_name2=$files2['tmp_name'];
        $picture2=$files2['name'];
        $destination2='../uploads/'.$picture2;
        $res=move_uploaded_file($tmp_name2, $destination2);
    }

    $data = array(
        'manufacture_id' => $_POST['manufacture_name'],
        'name' => $_POST['name'],
        'color' => $_POST['color'],
        'manufacturing_year' => $_POST['manufacturing_year'],
        'registration_no' => $_POST['registration_no'],
        'note' => $_POST['note'],
        'picture1' => $picture1,
        'picture2' => $picture2
    );
        echo $objModel->insert_model($dbOject,$data);
}

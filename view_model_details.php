<?php
    require 'webservices/database.php';
    $query = "SELECT * FROM model MO JOIN manufacture MA ON MO.manufacture_id=MA.manufacture_id WHERE model_id='".$_REQUEST['model_id']."'";
    $data = $dbOject ->customQuery($query);
    foreach($data as $row){
    ?>
<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="model_detail_popup">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Model Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="row">
            <div class="col-sm-6"><strong>Manufacture  Name: </strong></div>
            <div class="col-sm-6"><?php echo $row['manufacture_name']?></div>
        </div>
        <div class="row">
            <div class="col-sm-6"><strong>Model Name  : </strong></div>
            <div class="col-sm-6"><?php echo $row['name']?></div>
        </div> 
        <div class="row">
            <div class="col-sm-6"><strong>Color  : </strong></div>
            <div class="col-sm-6"><?php echo $row['color']?></div>
        </div>
        <div class="row">
            <div class="col-sm-6"><strong>Manufacture Year : </strong></div>
            <div class="col-sm-6"><?php echo $row['manufacturing_year']?></div>
        </div>
        <div class="row">
            <div class="col-sm-6"><strong>Registration No.  : </strong></div>
            <div class="col-sm-6"><?php echo $row['registration_no']?></div>
        </div>
        <div class="row">
            <div class="col-sm-6"><strong>Note  : </strong></div>
            <div class="col-sm-6"><?php echo $row['note']?></div>
        </div>
        <div class="row">
        <div class="col-sm-6"><strong>Pitures  : </strong></div>
            <div class="col-sm-6"><img src ="uploads/<?php echo $row['picture1']?>" style="width:150px;height:150px">
            <img src ="uploads/<?php echo $row['picture2']?>" style="width:150px;height:150px"></div>
        </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
<?php

}
?>

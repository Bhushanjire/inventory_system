
<?php
    require 'webservices/database.php';
?>
<h4>Add Model</h4>
<form enctype="multipart/form-data" method="post" id="model_form_id">

<div class="row">
            <div class="col-sm-3">Select Manufacture:<span style="color:red">*<span> </div>
            <div class="col-sm-3">
            <?php
        $data = $dbOject ->getRows('manufacture');
      ?>  
            <select class="form-control" id="manufacture_name" name="manufacture_name" onchange="if($('#manufacture_name').val()!=''){ $('#Mmanufacture_name').text('')}">
      <option value=''>--Select--</option>
      <?php
        foreach($data as $row){
            ?>
            <option value="<?php echo $row['manufacture_id']?>"><?php echo $row['manufacture_name'] ?></option>
            <?php
        }
      ?>
    </select>
    <span id="Mmanufacture_name" style='color: red;'></span>
</div>
        
    <div class="col-sm-1"><label for="name">Name:<span style="color:red">*<span> </label> </div>
    <div class="col-sm-3"><input type="text" class="form-control" id="name" name="name" placeholder="Enter Model Name" onkeyup="if($('#name').val()!=''){ $('#Mname').text('')}"></div>
    <span id="Mname" style='color: red;'></span>          
</div>


<div class="row" style="margin-top:10px">
          <div class="col-sm-3"><label for="color">Color: </label></div>
          <div class="col-sm-6"><input type="text" class="form-control" id="color" name="color" placeholder="Enter Model Color"></div>
</div>

      <div class="row" style="margin-top:10px">
          <div class="col-sm-3"><label for="color">Manufacturing Year: </label></div>
          <div class="col-sm-6">    <input type="text" class="form-control" id="manufacturing_year" name="manufacturing_year" placeholder="Enter Manufacturing Year"></div>
      </div>


      <div class="row" style="margin-top:10px">
          <div class="col-sm-3"><label for="color">Registration No.: </label></div>
          <div class="col-sm-6"><input type="text" class="form-control" id="registration_no" name="registration_no" placeholder="Registration No"></div>
      </div>

      <div class="row" style="margin-top:10px">
          <div class="col-sm-3"><label for="color">Note: </label></div>
          <div class="col-sm-6"><textarea type="text" class="form-control" id="note" name="note" placeholder="Enter Note"></textarea></div>
      </div>
      <div class="row" style="margin-top:10px">
          <div class="col-sm-3"><label for="color">Picture 1: </label></div>
          <div class="col-sm-6"><input type="file" class="form-control" id="picture1" name="picture1"></div>
      </div>

      <div class="row" style="margin-top:10px">
          <div class="col-sm-3"><label for="color">Picture 2: </label></div>
          <div class="col-sm-6"><input type="file" class="form-control" id="picture2"  name="picture2"></div>
      </div>
      <div class="row" style="margin-top:15px">
      <div class="col-sm-3"></div>
        <div class="col-sm-3"><button type="button" class="btn btn-primary" onclick="formSubmit('webservices/model.php','model')">Add</button></div>
      </div>
</form>
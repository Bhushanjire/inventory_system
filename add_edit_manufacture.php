  <h4>Add Manufacture</h4>
  <form  id="manufacture_form_id" method="post"  enctype="multipart/form-data">
    <div class="form-group">
      <label for="manufacture_name">Name:<span style="color:red">*<span></label>
      <input type="text" class="form-control" id="manufacture_name" placeholder="Enter Manufacture Name" name="manufacture_name" 
      onkeyup="if($('#manufacture_name').val()!=''){ $('#Mmanufacture_name').text('')}">
      <span id="Mmanufacture_name" style='color: red;'></span>
    </div>
    <button type="button" class="btn btn-primary" onclick="formSubmit('webservices/manufacture.php','manufacture')">Add</button>
  </form>
  



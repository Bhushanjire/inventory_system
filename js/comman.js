var baseUrl=location.origin+'/';
function redirectPage(url){
    var baseUrl=baseUrl+'/inventory_system/'+url;
    data=''
    $.post(url, {data}, function(result){
      $("#output_div").html(result);
    });
}
function formSubmit(url,whichForm){
  var flag=0;
if(whichForm=="manufacture"){
  if($('#manufacture_name').val()==''){
    $('#Mmanufacture_name').text('Please enter manufacture name');
    flag=1;
  }
}

if(whichForm=="model"){
  if($('#manufacture_name').val()==''){
    $('#Mmanufacture_name').text('Please select manufacture name');
      flag=1;
  }
  if($('#name').val()==''){
    $('#Mname').text('Please enter model name');
      flag=1;
  }

}

if(flag==0){
  var baseUrl =baseUrl+'/inventory_system/'+url;
  var fd = new FormData();
  if(whichForm=="model"){
  
  var file_data1 = $('#picture1')[0].files;
  fd.append("picture1", file_data1[0]);

  var file_data2 = $('#picture2')[0].files;
  fd.append("picture2", file_data2[0]);

}
  var other_data = $('form').serializeArray();
  $.each(other_data,function(key,input){
      fd.append(input.name,input.value);
  });
  $.ajax({
      url: url, 
      method : 'POST',
      data : fd,
      dataType: 'text',  // what to expect back from the PHP script, if anything
      cache: false,
      contentType: false,
      processData: false,
      success: function(result){
        $("#message").html(result).show();
        if(whichForm=="manufacture"){
          $('#manufacture_name').val('');
        }
    
        if(whichForm=="model"){
          $('#manufacture_name').prop('selectedIndex',0);
          $('#name').val('');
          $('#color').val('');
          $('#manufacturing_year').val('');
          $('#registration_no').val('');
          $('#note').val('');
          $('#picture1').val('');
          $('#picture2').val('');
        }
    
        setTimeout(function(){ 
          $('#message').html('').hide() }, 2000);
     // $("#div1").html(result);
    }});





  $.post(url, formData, function(result){
    

    

  });
}
}
$(document).ready(function() {
  $('#example').DataTable();
} );

function openPopup(id){
  $('#demo-modal').load('view_model_details.php?model_id='+id,function() {
    $('#model_detail_popup').modal({
      show : true
    });
  });
}



function test(){

  
  
  }


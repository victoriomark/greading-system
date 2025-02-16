$(document).ready(function(){
   
    $.ajax({
        url: '../controllers/departmentController.php',
        type: 'POST',
        data:{action: 'showToSelect'},
        success: function(data){
            $('#Department').html(data)
        }
    })
})
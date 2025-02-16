$(document).ready(function(){
 
    $('#createDepartmentModal').submit(function(event){
        event.preventDefault()

        const DataForm = new FormData(this)
        DataForm.append('action','create')

        // ajax request\

        $.ajax({
            url: '../controllers/departmentController.php',
            type: 'post',
            data: DataForm,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(res){
               
                if (res.success == true) {
                    Swal.fire({
                        title: "Good job!",
                        text: res.message,
                        icon: "success"
                      });
                }else{
                    Swal.fire({
                        title: "Opps!",
                        text: res.message,
                        icon: "error"
                      });
                }
            }
        })
    })

})
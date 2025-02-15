$(document).ready(function(){
    // for creating New students

 $('#Add_new_student_modal').submit(function(event){
    event.preventDefault()

    const dataForm = new FormData(this)
    dataForm.append('action','newStudent')

    // ajax request

    $.ajax({
        url: '../controllers/studentsController.php',
        type: 'post',
        data: dataForm,
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function(res){
            console.log(res)

            function ErrorMessages(field, message){ // helper function for showwing the error message
                if (message){
                    $(`#${field}_msg`).html(message)
                    $(`#${field}`).addClass('is-invalid')
                    return
                }else {
                    $(`#${field}_msg`).html('')
                    $(`#${field}`).removeClass('is-invalid')
                }
            }

        
            if(res.errors){
                ErrorMessages('first_name',res.errors.first_name)
                ErrorMessages('last_name',res.errors.last_name)
                ErrorMessages('m_middle_name',res.errors.m_middle_name)
                ErrorMessages('email_address',res.errors.email_address)
                ErrorMessages('studentId',res.errors.studentId)
                ErrorMessages('birthday_date',res.errors.birthday_date)
                return;
            }


            if(res.success === true){
                Swal.fire({
                    title: "Good job!",
                    text: res.message,
                    icon: "success"
                  });
                  $('#Add_new_student_modal')[0].reset(); // reset the form
            }

            if(res.success === false){
                Swal.fire({
                    title: "Opps!",
                    text: res.message,
                    icon: "error"
                  });
                  return;
            }

         
        }
    })
 })
})
<!-- Modal for adding New Student -->
<form class="modal fade" id="Add_new_student_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">New Student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid d-flex justify-content-center align-items-center p-2">
                    <div class="avatar avatar-xxl">
                        <img id="image_preview" src="../../assets/img/profile.jpg" alt="Profile" class="avatar-img img-thumbnail rounded-circle">
                    </div>
                </div>


                <div class="form-floating mb-3">
                    <input name="first_name" type="text" class="form-control" id="first_name" placeholder="First Name">
                    <label for="first_name">First Name</label>
                    <div id="first_name_msg" class="invalid-feedback">
                    </div>
                </div>



                <div class="form-floating mb-3">
                    <input name="last_name" type="text" class="form-control" id="last_name" placeholder="lastName">
                    <label for="last_name">Last Name</label>
                    <div id="last_name_msg" class="invalid-feedback">
                    </div>
                </div>


                <div class="form-floating  mb-3">
                    <input name="m_middle_name" type="text" class="form-control" id="m_middle_name" placeholder="Middle Name">
                    <label for="m_middle_name">Middle Name</label>
                    <div id="m_middle_name_msg" class="invalid-feedback">
                    </div>
                </div>


                <div class="form-floating mb-3">
                    <input name="birthday_date" type="date" class="form-control" id="birthday_date">
                    <label for="birthday_date">birthday date</label>
                    <div id="birthday_date_msg" class="invalid-feedback">
                    </div>
                </div>

                <div class="form-floating mb-3 ">
                    <input name="email_address" type="email" class="form-control" id="email_address" placeholder="name@example.com">
                    <label for="email_address">Email address</label>
                    <div id="email_address_msg" class="invalid-feedback">
                    </div>
                </div>

                <div class="form-floating mb-3 ">
                    <input name="studentId" type="number" class="form-control" id="studentId">
                    <label for="studentId">StudntId</label>
                    <div id="studentId_msg" class="invalid-feedback">
                    </div>
                </div>

                <div>
                    <label>
                        upload Profile
                        <input type="file" id="studentProfile" accept="image/*" name="studentProfile">
                    </label>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">
                    Add New Student
                    <i class="fa-user-icon-plus"></i>
                </button>
            </div>
        </div>
    </div>
</form>


<!-- Modal for subjects-->
<div class="modal fade" id="Add_new_subject_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Subject Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="FirstName" placeholder="First Name">
                    <label for="FirstName">Subject Name</label>
                </div>

                <div class="form-floating  mb-3">
                    <input type="number" class="form-control" id="Unit">
                    <label for="Unit">Unit</label>
                </div>

                <select class="form-select" id="formGroupDefaultSelect" aria-label="Default select example">
                    <option selected>Select Course</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">
                    Add New Subject
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modal for subjects-->
<form class="modal fade" id="Add_new_Enroll_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Student Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <select name="student" class="form-select mb-3" aria-label="Default select example">
                    <option selected>Select Student</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

                <select name="subject" class="form-select mb-3" aria-label="Default select example">
                    <option selected>Select Subject</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

                <div class="form-floating  mb-3">
                    <input name="semester" type="number" class="form-control" id="semester">
                    <label for="semester">Semester</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">
                    Enrol Now
                </button>
            </div>
        </div>
    </div>
</form>



<!-- Modal for course -->
<form class="modal fade" id="createCourseModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">New Course</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="form-floating  mb-3">
                    <input name="courseName" type="number" class="form-control" id="courseName">
                    <label for="courseName">Course Name</label>
                </div>

                <select name="Department" id="Department" class="form-select" aria-label="Default select example">
                </select>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">create</button>
            </div>
        </div>
    </div>
</form>


<!-- Modal for Department -->
<form class="modal fade" id="createDepartmentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">New Deparment</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating  mb-3">
                    <input name="DepartmentName" type="text" class="form-control" id="DepartmentName">
                    <label for="courseName">Department Name</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">create</button>
            </div>
        </div>
    </div>
</form>
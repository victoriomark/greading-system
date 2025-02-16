<?php

namespace controllers;
require_once '../models/students.php';
require_once '../../helper/successMessage_or_error.php';
use  Exception;
use helper\ErrorMessage;
use models\students;

class studentsController
{
    public static function createNewStudent():void
    {

        $fileDir = '../studentProfileUploaded/';
        $image = $_FILES['studentProfile'];

        $Fields = [
            'first_name' => 'first name is required',
            'last_name' =>  'last name is required',
            'birthday_date' =>  'birthday date name is required',
            'email_address' => 'email address is required',
            'studentId'  => 'student Id is required',
            'm_middle_name' =>  'middle name is required',
        ];

        $data = [];
        $error = [];


        foreach($Fields as $Field => $message){
            if (!isset($_POST[$Field]) || trim($_POST[$Field]) === '') { // check if each input is Empty or no value
                $error[$Field] = $message;

            }else{
                $data[$Field] = htmlspecialchars($_POST[$Field]);
            }
        }

        if (!empty($error)) { // check if the error array is not empty
            $data['success'] = false;
            $data['errors'] = $error;
            echo json_encode($data);
            return;
        }

        //handle profile upload
        if($image && !empty($image['name'])){
            $fileInfo = pathinfo($image['name']);
            $fileExtension = strtolower($fileInfo['extension']);

            $filename = ('StudentProfile_' . uniqid() . '.' .$fileExtension);
            $uploadPath = $fileDir .$filename;

            if(!move_uploaded_file($image['tmp_name'],$uploadPath)){
                ErrorMessage::Error_SuccessMessage(false,'Upload Failed');
                return;
            }

            $data['image'] = $filename;

        }else{
            ErrorMessage::Error_SuccessMessage(false,'profile picture is required');
            return;
        }


        try{
            $student = new students();
            // student id checker
            if ($student->studentIdChecker($data['studentId'])) {
                ErrorMessage::Error_SuccessMessage(false, 'Apologies, but that student ID is already in use. Kindly provide a different one.');
                return;
            }
            // call the method from model/students
            $student->createNewStudent(
                $data['first_name'],
                $data['last_name'],
                $data['birthday_date'],
                $data['email_address'],
                intval($data['studentId']), // Siguraduhing ito ay integer
                $data['image'],
                $data['m_middle_name']
            );

        }catch(Exception $e){
            error_log('Error',$e->getMessage());
            ErrorMessage::Error_SuccessMessage(false, "An error occurred while creating the student record.");
        }
    }

}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])){
    match ($_POST['action']){
        'newStudent' => studentsController::createNewStudent()
    };
}
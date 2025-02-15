<?php
namespace helper;

class ErrorMessage {
  public static function Error_SuccessMessage(bool $success, string $message):void{

    echo json_encode(['success' => $success, 'message' => $message]);
    
  }
}
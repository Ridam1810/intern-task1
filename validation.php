<?php

class UserValidation{
    private $data;
    private $errors=[];
    private static $fields =['name','email'];
    
    public function __construct($post_data){
      $this->data =$post_data;
    } 
    public function validateForm(){
    foreach(self ::$fields as $field){
      if(!array_key_exists($field, $this->data)){
    trigger_error("$field is not present in data");
    return;
      }
    }
    $this->validateName();
    $this->validateEmail();
    $this->validateAddress();
    return $this->errors;
    }
    
    private function validateName(){
    $val=trim($this-> data['name']);
    if(empty($val)){
      $this->addError('name','Name cannot be empty.');
    }
    else {
      $val=trim($this-> data['name']);
      if (!preg_match('/^[a-zA-Z ]{3,20}$/', $val)){
    $this->addError('name','Name must have 3-20 chars & alphanumrics');
    }
    }
    }
    
    private function validateEmail(){
    
      $val=trim($this-> data['email']);
    
      if(empty($val)){
        $this->addError('email','Email cannot be empty.');
      }
      else {
        if (!filter_var($val,FILTER_VALIDATE_EMAIL)){
      $this->addError('email','Email must be a valid email.');
      }
      }
    }

    private function validateAddress(){
      $val=trim($this-> data['address']);
      if(empty($val)){
        $this->addError('address','Address cannot be empty.');
      }
      else {
        $val=trim($this-> data['address']);
        if (!preg_match('/^[a-zA-Z ]{8,100}$/', $val)){
      $this->addError('address','Address must have 8-20 chars & alphanumrics');
      }
      }
    }
    
    private function addError($key, $val){
    $this->errors[$key]=$val;
    
    }
    
      }

      ?>

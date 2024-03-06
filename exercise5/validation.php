<?php

class Accounts {
    public $usernames = ["peter", "kirsch", "madrid"];
    public $passwords = ["peter123", "kirsch123", "madrid123"];

    public function getUsernames(){
        return $this->usernames;
    }

    public function getPasswords(){
        return $this->passwords;
    }
}

class Validation {
    private $usernames;
    private $passwords;
    private $userInput;
    private $userPassword;

    public function __construct($usernames, $passwords, $userInput, $userPassword){
        $this->usernames = $usernames;
        $this->passwords = $passwords;
        $this->userInput = $userInput;
        $this->userPassword = $userPassword;
    }

    public function check(){
        for($i=0; $i<count($this->usernames); $i++){
            if($this->userInput == $this->usernames[$i] && $this->userPassword == $this->passwords[$i]){
                return true;
            }
        }
        return false;
    }
    public function validate(){
        $errors = [];
        if(empty($this->userInput) && empty($this->userPassword)){
            $errors[] = "Enter both username and password.";
        }else if(empty($this->userInput)){
            $errors[] = "Enter username";
        }else if(empty($this->userPassword)){
            $errors[] = "Enter password";
        }
        if(strpos($this->userInput, "'") !== false){
            unset($errors);
            $errors[] = "Username cannot contain apostrophes.";
        }
        return $errors;
    }
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $usernameInput = $_POST['username'];
    $passwordInput = $_POST['password'];

    $accounts = new Accounts();
    $validation = new Validation($accounts->getUsernames(), $accounts->getPasswords(), $usernameInput, $passwordInput);

    $errors = $validation->validate();

    if(empty($errors)){
        if($validation->check()){
            header("Location: accountpage.php");
            exit();
        } else {
            $message = "Invalid Credentials";
        }
    } else {
        $message = implode("", $errors);
    }
}
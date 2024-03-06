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
                return "Login Successful";
            }
        }
        return "Invalid Credentials";
    }
}

$accounts = new Accounts();
$response = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = $_POST['username'];
    $userPassword = $_POST['password'];

    $user1 = new Validation($accounts->getUsernames(), $accounts->getPasswords(), $userInput, $userPassword);
    $response =  $user1->check();
}
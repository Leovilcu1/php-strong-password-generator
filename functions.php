<?php

function generateStrongPassword($length){
        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()" ;
        $password ="";
        for($i = 0; $i < $length ; $i++){
            $randomNumber = rand(0, strlen($characters) -1);
            $password .=$characters[$randomNumber];
        }
        return $password;
    }
?>
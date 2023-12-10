<?php
    session_start();
    require_once("../core/request.php");
    require_once("../core/validations.php");
    require_once("../core/sessions.php");
    $errors = [];

    if(postMethod()){
        foreach($_POST as $key => $value){
            $$key = sanitizeInputs($value);
        }

        // validations 

    if(requiredInput($name)){
        $errors[] = "name required";
    }elseif(minInput($name,3)){
        $errors[] ="name must be greater than 3 chars";
    }elseif(maxInput($name,20)){
        $errors[] = "name must be smaller than 20 chars";
    }


    if(requiredInput($email)){
        $errors[] = "email required";
    }elseif(emailInput($email)){
        $errors[] = "please type a valid email";
    }


    if(requiredInput($password)){
        $errors[] = "password required";
    }elseif(minInput($password,6)){
        $errors[] ="password must be greater than 6 chars";
    }elseif(maxInput($password,25)){
        $errors[] = "password must be smaller than 25 chars";
    }


    if(requiredInput($confirm_password)){
        $errors[] = "confirm password required";
    }elseif(sameInput($password,$confirm_password)){
        $errors[] = "confirm password must be equal to password";
    }

    if(empty($errors)){
        // Save User Data
        $user = [
            "name" => $name,
            "email" => $email,
            "password" => $password,
            "confirm_password" => $confirm_password
        ];
        sessionStore('user',$user);
        header("location:../profile.php");

    }else{
        sessionStore("errors",$errors);
        header("location:../registration.php");
    }


        
    }else{
        echo "Method Not allowed";
    }
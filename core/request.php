<?php

    function getRequestType(){
        return $_SERVER["REQUEST_METHOD"];
    }
    function postMethod(){
        if(getRequestType() == "POST"){
            return true;
        }else {
            return false;
        }
    }
    function sanitizeInputs($value){
        return trim(htmlspecialchars(htmlentities($value)));
    }
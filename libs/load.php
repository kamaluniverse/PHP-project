<?php

function load_template($name){
    include $_SERVER['DOCUMENT_ROOT']."/_templates/$name.php"; 
}
function validate_certancial($username,$password){
    if($username == "ninja@ninja" and $password == "ninja" ){
        return true;
    }else{
        return false;
    }
}
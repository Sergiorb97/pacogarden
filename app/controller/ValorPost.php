<?php
function ValorPost($campo,$default = ""){
    if( isset($_POST[$campo])){
        return $_POST[$campo];
    }else{
        return $default;
    }
}
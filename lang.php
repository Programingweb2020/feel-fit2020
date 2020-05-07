<?php

if(isset($_GET['feel-fit-lang'])){
    if($_GET['feel-fit-lang']== "es"){
         require_once "index.html" ;
    }elseif ($_GET['feel-fit-lang'] == "en") {
        require_once "en/index.html" ;
    }elseif ($_GET ['feel-fit-lang'] == "eus"){
        require_once "eus/index.html";
    }elseif ($_GET ['feel-fit-lang'] == "zerbitzuak"){
        require_once "eus/classes.html";
    }
}

?>
<?php

function mySetCookie(){
    setcookie('CM','14coder myathinkyu', time()+3600,'/','','0');
}

function myGetCookie(){
    if(isset($_COOKIE['CM'])){
        echo $_COOKIE['CM'];
    }else{
        echo "there is no cookie set with that key";
    }
}

function myDeleteCookie(){
    setcookie('CM','14coder myathinkyu', time()-3600,'/','','0');
}
    

//mySetCookie();
myGetCookie();
//myDeleteCookie();
?>
<?php

function pozdravSvijetu(){
    echo '<hr> Hello world';
    echo '<br>';
    echo 'Pozdrav svijetu';
    echo '<hr>';
}


function l($v){
    echo '<pre>';
    print_r($v);
    echo '</pre>';
    echo '<hr>';
    
    
    }

    function wtf($v){
        echo '<pre style="background-color:#f0f; color:white">';
        print_r($v);
        echo '</pre>';
        echo '<hr>';
        
        
        }

    function slucajniBroj(){
        $prvi=rand(1,10);
        $drugi=rand(-10,-1);
        return abs($prvi+$drugi);
    
    }

    function primBroj($broj){
        for($i=2;$i<$broj;$i++){
            if($broj%$i===0){
                return false;
            }
        }
        return true;
    }
    
<?php

echo '</h1><br><h1 id="number">:D</h1></div></body>';

echo'<script language="javascript" type="text/javascript">

var n = 0;
var l = document.getElementById("number");
window.setInterval(function(){
    l.innerHTML = n;
    n++;
    if(n == 6){
        window.location.href="../selecao.php";
    }
},1000);

</script>';
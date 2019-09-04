<?php
function cetak(){
    for ($i=0; $i < 100; $i++) { 
        if($i%2 == 1) {
            echo "$i<br>";
        }
    }
}
//pemanggilan fungsi
cetak();

?>
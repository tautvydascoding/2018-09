<?php

//pakeisti f-ja 10 kartu, ir atspausdinti kelintas kartas

function rekursija() {
    static $k = 0;
    if ($k < 10) {
        $k++;
        
        rekursija();
    
    }
    echo "iskviesti $k kartas <br />";
}
rekursija();

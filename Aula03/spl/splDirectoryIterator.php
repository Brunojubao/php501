<?php

echo "<pre>";
foreach (new DirectoryIterator('/') as $diretorio){
    echo  "$diretorio<br>";
    foreach ($diretorio as $subdiretorio){
        echo " - Sub Diretorio: $subdiretorio<br>";
    }
    
}
echo gettype(new DirectoryIterator('/'));

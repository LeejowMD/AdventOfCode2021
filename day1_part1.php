<?php
if ($file= fopen('input.txt', "r")){
    $i = 0;
    $difference = 0;
    $positivevalues = 0;
    while(!feof($file)){
        $line = fgets($file);
        $strline = (int)$line;
        if (!$i == 0){
            $difference = $strline-$prev;
            echo $difference."<br>";
            $prev = $strline;
            
            
        }else{
            $prev = $strline;
            $i++;
        }
        if($difference>0){
            $positivevalues++;
        }
    }

}
echo "Total positive values:".$positivevalues;
?>


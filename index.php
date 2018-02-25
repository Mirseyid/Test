<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php


        $con = true;
        for ($i =0; $i<strlen($text); $i++){

             if($text[$i] == ' ' ){
                $con = $con ?  false : true;
             }
             if($con){
                 echo strtoupper($text[$i]);
             }else{
                 echo strtolower($text[$i]);

             }
        }
        $explode=explode(" ",$text);
        echo "<pre>";
        print_r($explode);
        foreach($explode as $arr){
            $con=$con? false:true;
            if ($con){
                echo strtoupper($arr) . ' ';
            }else{
                echo strtolower($arr) . ' ';
            }
        }
    $test=explode(" ",$text);
    $ab= implode(" ",$test);
    for($i =0; $i<strlen($ab); $i++){

        if($ab[$i] == ' ' ){
            $con = $con ?  false : true;
        }
        if($con){
            echo strtoupper($ab[$i]);
        }else{
            echo strtolower($ab[$i]);
        }
    }
$h = explode(' ', $text_two);
$arr = array('ipsum', 'adipisicing', 'incididunt', 'aliquip', 'commodo', 'consequat', 'reprehenderit', 'fugiat');
    foreach ($h as $hs){
    if(in_array($hs, $arr)){
        echo '********* ';
    }else{
        echo $hs . " ";

    }
}




?>
</body>
</html>
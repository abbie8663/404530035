<?php
$h=$_POST["height"];
$w=$_POST["weight"];


if(empty($w)||empty($h)){
    echo "please type in all information<br>";
}else{
    
    $bmi=$w/($h*$h);
    echo "height=".$h."<br>";
    echo "weight=".$w."<br>";
    echo "BMI:".$bmi."<br>";
}

if($_FILES["file"]["error"]>0){
    echo "empty<br>";
    echo $_FILES["file"]["type"];

}
else{

    $filename = $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
    echo '<img src = "upload/'.$filename.'"/>';
}

?>
<?php

//พื้นที่ = กว้าง x ยาว

// $width= 30;
// $height= 80;

// if($width>0 && $height>0){
//     $area = $width * $height;  

// echo "พื้นที่สี่เหลี่ยม = ".$area."ตารางนิ้ว";
// }
// else{
//     echo "ต้องป้อนตัวเลข ความกว้างและความสูง มากกว่า 0";
// }










/*
คะแนน (score)

มากกว่า 80 => A
มากกว่า 80 => B
มากกว่า 60 => C
มากกว่า 50 => D
อื่นๆ => F

*/

$score=12331541;
$grade = "";

if($score>=80){
    $grade="A"; 
    }
else if($score>=70){
    $score="B";
}
else if($score>=60){
    $score="C";
}
else if($score>=50){
    $score="D";
}
else{
    $grade="F";
}

echo "คะแนนของคุณ คือ".$score."เกรดที่ได้ = ".$grade;

?>
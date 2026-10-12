<?php
// //การสร้าง function
// function show($message){ //พารามิเตอร์
//     print("<b>Hollo ".$message."</b>");
//     print("<br>");
//     print("<hr>");
// }
// function add($number1 , $number2 , $number3){// คำนวณ ใช้ add
//     $result= $number1+$number2+$number3; 
//     print($number1."+".$number2."+".$number3."=".$result);
//     print("<br>");
//     print("<hr>");

// }

// //เรียกฟังก์ชั่น
// add(100,200,300);
// add(1000,5000,200);





// //แบบที่3
// function getAddress(){
//     $x="ระยอง";
//     return $x;
// }

// function getBonus(){
//     $bonus = 100;
//     //ประมวลผล
//     return $bonus;
// }


// //เรียกใช้งาน
// print("จำนวนโบนัส = ".getBonus());
// print("<br>");
// $salary = 10000+getBonus();

// print("เงินเดือนรวมโบนัส = ".$salary);







//รับส่งเงินเดือนเข้ามา
//ส่งผลการคำนวณรายได้ต่อปี

// function getTotal($salary,$count){
//     //คำนวณเงินเดือน * จำนวนเดือนที่ทำงาน
//     return $salary*$count;
// }

// $amount = 2500;//เงินเดือน
// $monht = 16;
// print("เงินเดือนของฉัน = ".$amount."   บาท");
// print("<br>");
// print("ระยะเวลา = ".$monht."    เดือน");
// print("<br>");
// $total=getTotal($amount,$monht);
// print("รายได้= ".$total."    บาท");






// //ชื่อ นามสกุล ที่อยู่

// function showData($fname,$lname,$city="skibidi city"){
//     print("ชื่อ = ".$fname."<br>");
//     print("นมสกุล = ".$lname."<br>");
//     print("ที่อยู่ = ".$city."<br>");
//     print("<hr>");
// }

// //การเรียกใช้งาน
// showData("apisit","jessadaapimuk","thai");
// showData("l;djh","idfhsg","slkhg");


// showData("skibidi","domdomdom"); // ไม่มี$city จะใส่ให้เป็น skibidi city                     :)





// global
$x = 100;
$y = 10;

// print($x);

// $total = $x+$y;
// print($total);


function showNumber(){
    global $x;
    $GLOBALS ["z"] = 50000;
    // local
    print("ตัวแปร x = ".$x."<br>");
}

showNumber(); // ในฟังก์ชั้น global

print("ค่า x =".$x."<br>"); // นอกฟังก์ชั่น locaal
print("ค่า z =".$z."<br>");












?>
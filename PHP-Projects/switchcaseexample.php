<?php

// $month=1;

// switch($month){
//     case 1: echo "เดือนมกราคม";
//         break;
//     case 2: echo "เดือนกุมภา";
//         break;
//     case 3: echo "เดือนมีนา";
//         break;
//     default :
//         echo "ไม่พบเดือน";
// }


/*
5 ปี => 10%
10 ปี => 20%


*/

$year = 10;

switch($year){
    case 5 :
        echo "ระยะเวลากู้ = ".$year."ปี คิดดอกเบี้ย 10%";
        break;
    case 10 :
        echo "ระยะเวลากู้ = ".$year."ปี คิดดอกเบี้ย 20%";
        break;
        default:
        echo "ไม่เข้าเงือนไขตามที่กำหนด";
}




?>
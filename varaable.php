<?php
$a = "Hello";
echo ($a);
echo("<br>");
define("PROVINCE","Bangkok");
echo PROVINCE;
echo("<br>");
define("SALARY",15000);
echo SALARY;
echo("<br>");
$t = date("H");
echo $t;
echo("<br>");
if($t<"20") {
    echo "Have a good day!";
}else{
    echo "Have a good night!";
}

if($t <"10") {
echo "Have a good morning!";
}elseif ($t < "20") {
echo "Have a good day!";
}else {
    echo "Have a good ninght!";
}


$favcolor = "red";

switch ($favcolor){
    case "red";
    echo "Your favorite color is red!";
    break;
    case "orange";
    echo "Your favorite color is orange!";
    break;
    case "yellow";
    echo "Your favorite color is yellow!";
    break;
default:
echo "Your favorite color is neither red,brown,nor yollow! ";
}


?>

<!DOCTYPE html>
<html lang="en">
    <header>
        <!-- Reqired meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=l">
        <title></title>
    </header>
    <body>
        <h1>
        <?php
        echo($a);
        ?>
        </h1>
        <div style="font-size:larger; color:red;">
            <?php
                echo "<b>คณะบริหารธุรกิจ สาขาเทคโนโลยีสารสนเทศทางธุรกิจ 
                ประกอบด้วย 3 วิชาเอก</b>";
            ?>
        </div>
        <ul>
            <?php
                echo "<li>การจัดการ</li>";
                echo "<li>พัฒนาซอร์ฟแวร์</li>";
                echo "<li>มัลติมีเดีย</li>";
            ?>
        </ul>
        date("H");เป็นคำสั่งที่มีไว้สำหรับการเรียกเวลา H คือเวลาหรือชั่วโมง คำสั่งค่า H เป็นคำสั่งที่โชว์แค่ชั่วโมงอย่างเดียว
    </body>
</html>
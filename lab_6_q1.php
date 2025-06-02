<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Lab 6 Q1</title> 
</head> 
<body>

<?php  
$name = "Muhammad Noor Azami Bin Wahid"; 
$matricNo = "CI230060";
$course = "Bachelor of Information Technology";
$year = "2024/2025";
$address = "No. 11A, Jalan Kampung Parit Lapis Baru";
?>

<table style="width:100%; border-collapse: collapse;"> 
    <tr style="background-color:#f2f2f2;"> 
        <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Name</th> 
        <td style="padding: 8px; border: 1px solid #ddd;"><?php echo $name; ?></td> 
    </tr> 
    <tr> 
        <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Matric No</th> 
        <td style="padding: 8px; border: 1px solid #ddd;"><?php echo $matricNo; ?></td> 
    </tr> 
    <tr style="background-color:#f2f2f2;"> 
        <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Course</th> 
        <td style="padding: 8px; border: 1px solid #ddd;"><?php echo $course; ?></td> 
    </tr> 
    <tr> 
        <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Year</th> 
        <td style="padding: 8px; border: 1px solid #ddd;"><?php echo $year; ?></td> 
    </tr> 
    <tr style="background-color:#f2f2f2;"> 
        <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Address</th> 
        <td style="padding: 8px; border: 1px solid #ddd;"><?php echo $address; ?></td> 
    </tr> 
</table>
</table> 
</body> 
</html>
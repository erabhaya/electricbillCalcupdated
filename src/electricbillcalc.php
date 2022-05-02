<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electric bill Calculator</title>
    <style>
        #main{
            margin: 20px auto;
            width: 50%; height: 300px;
            border: 2px Solid lightcoral;
        }
        h1{
            text-align: center;
        }
        input{
            margin-left: 80px;
        }
        button{
            margin: 10px auto;
            margin-left: 130px;
        }
    </style>
</head>
<body>
    <div id="main">
        <h1>Electric Bill Calculator</h1>
        <form action="" method="post">
            <input type="text" name="unit" placeholder="enter the units" ><br>
            <button id="btnbill" value="submit">Get bill</button>
        </form>
  
    <?php
$q=$_POST["unit"];
if($q<=50)
{
    $final=$q*3.50;
    echo "Your Total Bill Amount is: ".$final;
}
else if($q>50 && $q<=150)
{
    $fifty = 175;
    $rem = $q-50;
    $unit4 = $rem*4;
    $finalUnit4 = $unit4+$fifty;
    echo "Your Total Bill Amount is: ".$finalUnit4;
}
else if($q>=151 && $q<=250)
{
    $fifty=175;
    $hundred=400;
    $rem=$q-150;
    $unit5 = $rem*5.20;
    $finalUnit5 = $unit5+$fifty+$hundred;
    echo "Your Total Bill Amount is: ".$finalUnit5;
}
else if($q>250)
{
    $fifty=175;
    $hundred=400;
    $hundredPlus = 520;
    $unit6 = ($q-250)*6.50;
    $finalUnit6 = $fifty + $hundred + $hundredPlus +$unit6;
    echo "Your Total Bill Amount is: ".$finalUnit6;
}
?>  </div>
</body>
</html>
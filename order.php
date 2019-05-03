<!-- Created by Wojciech Augustyn -->
<!DOCTYPE html>
<html manifest="./cache_manifest.manifest" lang="en">

<head>
    <meta charset=utf-8/>
    <title>Sumary</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="apple-touch-icon" href="images.jpeg"/>
    <style>
        body{
            background-color: antiquewhite;
            font-family: Lato;
        }
        div{
            display: inline-block;
            margin: 0 auto;
        }
        table{
            font-size: 20px;
            border-color: black;
        }
        a{
            padding: 6px;
            border: 2px solid black;
            background-color: dimgray;
            text-decoration: none;
            color: black;
            border-radius: 5px;
        }
    </style>
</head>

<body style="text-align: center; max-width: 1000px; margin: 0 auto;">
<?php
    $energy = $_POST['energy'];
    $gas = $_POST['gas'];
    $echarge = $_POST['echarge'];
    $energyprice = $_POST['energyprice'];
    $gasprice = $_POST['gasprice'];
    $days = $_POST['days'];
    $energyconsumption = ($energyprice*$energy)/100;
    $gasconsumption = ($gasprice*$gas)/100;
    $sch = ($days*$echarge*2)/100;
    $suma = ($energyprice*$energy+$gasprice*$gas+$days*$echarge*2)/100;
    $sum = $suma+($suma*0.05);
    // 2 miejsca po przecinku
    $sumr = round($sum,2);
    $sumar = round($suma,2);
    $energyconsumptionr = round($energyconsumption,2);
    $gasconsumptionr = round($gasconsumption,2);
    $schr = round($sch,2);
    // druga cyfra po przecinku zawsze widoczna
    $sumar = number_format($sumar, 2, '.', ',');
    $sumr = number_format($sumr, 2, '.', ',');
    $schr = number_format($schr, 2, '.', ',');
    $gasconsumptionr = number_format($gasconsumptionr, 2, '.', ','); 
    $energyconsumptionr = number_format($energyconsumptionr, 2, '.', ',');
    
    
echo<<<END

<br><br><h1>Summary</h1><br><br>
    
<div><table border="1" cellpadding="10" cellspacing="5">
<tr>
<td>ENERGY ($energyprice p/kWh)</td> <td>&pound $energyconsumptionr</td>
</tr>
<tr>
<td>GAS ($gasprice p/kWh)</td> <td>&pound $gasconsumptionr</td>
</tr>
<tr>
<td>Standing charge</td><td>&pound $schr</td>
<tr>
<td>SUM</td><td>&pound $sumar</td>
</tr>
<tr>
<td>SUM+5%VAT</td><td>&pound $sumr</td>
</tr>
</table></div>
<br><br><br><br><a href="index.php">BACK</a> 
    
END;
?>
<br/><br/><br/><br/><hr><br/>
    Created by Wojciech Augustyn &reg;<br/><br/>
</body>

</html>

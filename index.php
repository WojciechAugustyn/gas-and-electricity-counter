<!-- Created by Wojciech Augustyn -->
<!DOCTYPE html>
<html manifest="./cache_manifest.manifest" lang="en">

<head>
    <meta charset=utf-8/>
    <title>Home counter</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="apple-touch-icon" href="images.jpeg"/>
    <style>
        body{
            background-color: antiquewhite;
            text-align: center;
            margin: 0;
            font-family: Lato;
        }
        strong{
            color: red;
        }
        #submit{
            font-size: 20px;
            border-style:ridge;
            border-color: black;
            border-radius: 5px;
            cursor: pointer;
        }
        input{
            font-size: 25px;
            text-align: center;
        }
        
    </style>
</head>

<body>
    <br/>
    <h1>Gas and Electricity Counter </h1>
    <br/><br/>
    <div><strong>Warning:</strong> when entering values, use a dot instead of a comma.</div><br/><br/><br/>
    <form action="order.php" method="post">
        Energy price per unit (pence):<br/><br/>
        <input type="text" name="energyprice" /><br/><br/>
        Energy consumption (kWh):<br/><br/>
        <input type="text" name="energy" /><br/><br/>
        <hr>
        <br/><br/>
        Gas price per unit (pence):<br/><br/>
        <input type="text" name="gasprice" /><br/><br/>
        Gas consumption (kWh):<br/><br/>
        <input type="text" name="gas" /><br/><br/>
        <hr><br/><br/>
        Standing charge (pence):<br/><br/>
        <input type="text" name="echarge" /><br/><br/>
        How many days:<br/><br/>
        <input type="text" name="days" />
        <br/><br/><br/><br/>
        <input id="submit" type="submit" value="check cosumption" />
    </form>
    <br/><br/><hr><br/>
        Created by Wojciech Augustyn &reg;<br/><br/>
</body>

</html>

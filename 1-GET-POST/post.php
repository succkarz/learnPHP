<?php 
    if(isset($_POST["b1"])){
        $a = $_POST["t1"];
        $b = $_POST["t2"];
        $s = $a + $b;
        echo "Sum is $s!";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GET/POST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
</head>
<body> 
    <form action="post.php" method="post" name="emp">
        <table>
            <tr>
                <td>Enter first number</td>
                <td><input type="text" name="t1"/></td>
            </tr>
            <tr>
                <td>Enter second number</td>
                <td><input type="text" name="t2"/></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Sum" name="b1"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
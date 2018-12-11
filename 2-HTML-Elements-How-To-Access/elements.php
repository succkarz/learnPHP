<?php 
if(isset($_GET['btnsubmit'])){
    $nam = $_GET['txtename'];
    $eadd = $_GET['txteadd'];
    $gen = $_GET['r1'];
    $gam = $_GET['chk'];
    $cnt = $_GET['d1'];
    $dep = $_GET['d2'];
    echo "Name: $nam </br>";
    echo "Address: $eadd </br>";
    echo "Gender: $gen </br>";
    echo "Game: </br>";
    foreach($gam as $val){
        echo "$val <br>";
    }
    echo "Country: $cnt <br>";
    echo "Department: $dep";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ELEMENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
</head>
<body>
    <form action="elements.php" method="get" name="emp">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="txtename"/></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="txteadd"/></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                <input type="radio" name="r1" value="M"/>MALE
                <br>
                <input type="radio" name="r1" value="F"/>FEMALE
                </td>
            </tr>
            <tr>
                <td>Game</td>
                <td><input type="checkbox" name="chk[]" value="TT">TT
                <br><input type="checkbox" name="chk[]" value="FB">FB
                <br><input type="checkbox" name="chk[]" value="AS">AS
                <br><input type="checkbox" name="chk[]" value="SS">SS
                </td>
            </tr>
            <tr>
                <td>Country</td>
                <td><select name="d1" id="">
                    <option value="India">IND</option>
                    <option value="USA">USA</option>
                    <option value="UK">United Kingdom</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Department</td>
                <td><select name="d2">
                    <option value="Accts">Accounts</option>
                    <option value="Sales">Sales</option>
                    <option value="Mkt">Marketing</option>
                </select></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit" name="btnsubmit"/></td>
            </tr>
        </table>
    </form>
</body>
</html>
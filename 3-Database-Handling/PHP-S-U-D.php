<?php
$host="localhost";
$uname="learn"; //Your username here
$upwd="Learn@123"; //Your password here
$link=mysqli_connect($host,$uname,$upwd,'emp');
if(isset($_REQUEST['eno'])){
    $eno=$_REQUEST['eno'];
    $qry="select * from emp where eno=$eno";
    $res=mysqli_query($link,$qry);
    $r=mysqli_fetch_array($res);
        $eno=$r[0];
        $en=$r[1];
        $ea=$r[2];
        $es=$r[3];
}
if(isset($_POST["btnsave"])){
    $en=$_POST['txtename'];
    $ea=$_POST['txteadd'];
    $es=$_POST['txtesal'];
    $qry="insert emp values(NULL,'$en','$ea',$es)";
    $res=mysqli_query($link,$qry);
    if(mysqli_affected_rows($link)==1){
        echo 'Data saved';
    }else{
        echo 'Data not saved';
    }
}
if(isset($_POST["btnupdate"])){
    $eno=$_REQUEST['eno'];
    $en=$_POST['txtename'];
    $ea=$_POST['txteadd'];
    $es=$_POST['txtesal'];
    $qry="update emp set ename='$en',eadd='$ea',esal=$es where eno=$eno";
    $res=mysqli_query($link,$qry);
    if(mysqli_affected_rows($link)==1){
        echo 'Data updated.';
    }else{
        echo 'Data not updated.';
    }
}
if(isset($_POST["btndelete"])){
    $eno=$_REQUEST['eno'];
    $qry="delete from emp where eno=$eno";
    $res=mysqli_query($link,$qry);
    if(mysqli_affected_rows($link)==1){
        echo 'Data deleted';
    }else{
        echo 'Data not deleted';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP DB</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
</head>
<body>
    <form method="post" name="emp">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="txtename" value="<?php if(isset($en))echo $en;?>"/></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="txteadd" value="<?php if(isset($ea))echo $ea;?>"/></td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" name="txtesal" value="<?php if(isset($es))echo $es;?>"/></td>
            </tr>
            <tr>
                <td colspan="2">
                <input type="submit" value="Save" name="btnsave">
                <input type="submit" value="Update" name="btnupdate">
                <input type="submit" value="Delete" name="btndelete">
                </td>
            </tr>
        </table>
    </form>
    <?php 
        $qry1="select * from emp;";
        $res1=mysqli_query($link,$qry1);
        echo '<ul>';
        while($r=mysqli_fetch_array($res1)){
            echo '<li>';
            echo "<a href=PHP-S-U-D.php?eno=$r[0]>$r[1]</a></li>";
        }
        echo '</ul>';
    ?>
</body>
</html>
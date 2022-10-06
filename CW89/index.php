<?php
$host="localhost";
$user="root";
$password="";
$db="injection";

ini_set("display_errors",1);
if($_SERVER['REQUEST_METHOD']=='POST'){
    mysqli_connect($host, $user,$password,$db);
    #mysqli_select_db('injection');
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $query = "select userid, password from userid where userid='$userid' and password='$password'";
    $result = mysql_query($query);
    $rows = mysql_fetch_array($result);
    if($rows)
    {
        echo "Acceso succesful";
    }
    else
    {
        echo "Intentar nuevamente";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Demostrando Inyección</title>
</head>
<body>
    <form action="index.php" method="POST">
        <h2>Demostrando SQL Injection</h2><br>
        userid:</br>
        <input type="text" name="userid"><br><br>
        password:<br>
        <input type="text" name="password"><br><br>
        <input type="submit" value="Login"><br><br>
    </form>

</body>
</html>


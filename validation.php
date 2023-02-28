
<!DOCTYPE html>
<html>
<body>
<?php
echo $_ENV["DB_NAME"];
$uname="lionsclub";
$p="welcome";
// Set session variables
$_SESSION["name"] = $_POST["uname"] ;
$_SESSION["pass"] = $_POST["password"];
if($_SESSION["name"]==$uname && $_SESSION["pass"]==$p)
{
header("Location: main.php");
exit();
}
else
echo "Wrong Username or Password";


?>

</body>
</html>
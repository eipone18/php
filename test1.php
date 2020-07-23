<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Enter char:<input type="text" name="fname">
        <input type="Submit">
</form>
<?php 
echo "Result";
echo "<br>";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['fname'];
    echo $name;
    echo "<br>";

    $add=substr($name,strlen($name)-1);
    echo $add.$name.$add;

}

?>
</body>
</html>
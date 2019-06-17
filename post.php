    <?php
    include ('connection.php');

	//$sql_insert1 = "INSERT INTO log (u1, u2, msg) VALUES ('1111', '222222', 'hi')";
    $sql_insert1 = "INSERT INTO log (u1, u2, msg) VALUES ('".$_GET["u1"]."', '".$_GET["u2"]."', '".$_GET["msg"]."')";
	if(mysqli_query($con,$sql_insert1))
    {
    echo "Done addition";
    mysqli_close($con);
    }
    else
    {
    echo "error is ".mysqli_error($con );
    }
    ?>
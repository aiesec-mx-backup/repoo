<?php

    /* Database setup information 
    $dbhost = 'localhost';  // Database Host
    $dbuser = 'root';       // Database Username
    $dbpass = '';           // Database Password
    $dbname = 'search';     // Database Name

    /* Connect to the database and select database 
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
    */
	
	$hostname = "AlumniMexico.db.12058720.hostedresource.com";
	$username = "AlumniMexico";
	$dbname = "AlumniMexico"; 
	header('Content-type: text/html; charset=utf-8');
	ini_set('default_charset', 'utf-8');
	// Conectar bd
	$conn=mysqli_connect($hostname,$username,"A!esec2013", $dbname);
	if (mysqli_connect_errno()){
	  echo "Ha ocurrido un error, no se pudo conectar la base de datos: " . mysqli_connect_error();
	}
    /* The search input from user ** passed from jQuery .get() method */
    $param = $_GET["searchData"];

    /* If connection to database, run sql statement. */
    if ($conn) {

        /* Fetch the users input from the database and put it into a
         valuable $fetch for output to our table. */
        //$fetch = mysql_query("SELECT * FROM Usuarios WHERE nombres REGEXP '^$param'");
		$sql="SELECT nombres, U.email, tel, D.* FROM Usuarios U INNER JOIN Direccion D ON D.email = U.email WHERE nombres REGEXP '^$param' OR U.email REGEXP '^$param'";
		$fetch = mysqli_query($conn,$sql);

        /*
           Retrieve results of the query to and build the table.
           We are looping through the $fetch array and populating
           the table rows based on the users input.
         */
        //while ( $row = mysql_fetch_object( $fetch ) ) {
		$id = 1;
		while($row = mysqli_fetch_array($fetch)) {
			$dir = $row['calle'].' '.$row['num_ext'].' '.$row['num_int'].', '.$row['colonia'].', '.$row['ciudad'];
            $sResults .= '<tr id='.$id.'>';
            $sResults .= '<td>' . $row['nombres'] . '</td>';
			$sResults .= '<td>' . $dir . '</td>';
			$sResults .= '<td>' . $row['tel'] . '</td>';
            $sResults .= '<td>' . $row['email'] . '</td></tr>';
			$id++;
        }

    }

    mysqli_close($conn);
    echo $sResults;

?>
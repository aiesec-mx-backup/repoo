<?php 
    session_start();
    if(isset($_SESSION['email'])){
?>
<!DOCTYPE html>
<html>

<head>
    <title>AIESEC Alumni M&eacute;xico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/aiesec.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/ui/themes/ui-darkness/jquery.ui.all.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<?php
	header('Content-type: text/html; charset=utf-8');
	ini_set('default_charset', 'utf-8');
	include("ConectaBD.php");
?> 

<body>
	<div class="container" div id="dataTable">
    	<div class="row">
            <header class="col-lg-12 col-md-12">
                <img src="img/logo.png" class="pull-left" />
                <img src="img/logo_aam.jpg" class="pull-right" />
            </header>
        </div>
        <div class="row">
        	<div class="col-lg-12">
                <form method="post" class="navbar-form col-lg-12" >
                    <div class="col-lg-8 pull-left">
                        <input class="form-control" id="searchData" type="text" placeholder="buscar por nombre o email">
                    </div>            
                </form>
          	</div>
        </div><!-- ROW -->
        <div class="row">
        	<table class="table">
            	<thead>
                    <tr>
                        <th class="ui-state-default">nombre</th>
                        <th class="ui-state-default">dirección</th>
                        <th class="ui-state-default">tel</th>
                        <th class="ui-state-default">email</th>
                    </tr>
                </thead>
                <tbody id="results"></tbody>
            </table>
        </div>
    </div> <!-- end container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aiesec.js"></script>
    <script src="assets/ui/jquery.ui.core.js"></script>
	<script src="assets/ui/jquery.ui.widget.js"></script>
    <script src="assets/ui/jquery.ui.position.js"></script>
    <script src="assets/ui/jquery.ui.menu.js"></script>
    <script src="assets/ui/jquery.ui.autocomplete.js"></script>
    <script  src="js/jquery-ui-1.7.custom.min.js"></script>
    <script  src="js/jquery-search.js"></script>
</body>
</html>
<?php 
        include("DesconectaBD.php");
    } else
        //header( 'Location:admin.php' ); 

?>
<!DOCTYPE html>
<html>

<head>
    <title>AIESEC M&eacute;xico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/aiesec.css" rel="stylesheet" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<?php
	include("ConectaBD.php");
	// lista de países
	$sql="SELECT * FROM Paises";
	$paises = mysqli_query($con,$sql);
	
	// lista de sectores
	$sql="SELECT * FROM Sectores";
	$sectores = mysqli_query($con, $sql);
	
?> 

<body>
	<div class="container">
    	<div class="row">
            <header class="col-lg-12 col-md-12">
                <img src="img/logo.png" class="pull-left" />
                <img src="img/logo_aam.jpg" class="pull-right" />
            </header>
        </div>
        <div class="row">
        	<!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#datos-personales" data-toggle="tab">1. Datos Personales</a></li>
                <li><a href="#educacion" data-toggle="tab">2. Educación</a></li>
                <li><a href="#laboral" data-toggle="tab">3. Laboral</a></li>
                <li><a href="#aiesec" data-toggle="tab">4. AIESEC</a></li>
                <li><a href="#participacion" data-toggle="tab">5. Participación</a></li>
            </ul>
            <form action="procesaDatos.php" method="POST">
            <!-- Tab panes -->
            <div class="tab-content relativo">
            	<p class="obligatorios">*= campos obligatorios</p>
                <div class="tab-pane active col-lg-12" id="datos-personales">
                	<div class="row">
                    	<p>Email* y contraseña*</p>
                        <div class="col-lg-6">
                        	<input type="text" class="form-control" placeholder="e-mail" name="email" data-validation="email">
                        </div>
                        <div class="col-lg-6">
                        	<input type="text" class="form-control" placeholder="contraseña" name="password" data-validation="required">
                        </div>
                    	<p>Nombre*</p>	
                        <div class="col-lg-4">
                        	<input type="text" class="form-control" placeholder="nombre(s)" id="nom" name="nombres" data-validation="required">
                        </div>
                        <div class="col-lg-4">
                        	<input type="text" class="form-control" placeholder="apellido paterno" name="apeP" data-validation="required">
                        </div>
                        <div class="col-lg-4">
                        	<input type="text" class="form-control" placeholder="apellido materno" name="apeM">
                        </div>
                        <div class="clearfix"></div>
                        <p>Fecha de nacimiento*</p>
                         <div class="col-lg-2">
                            <select name="dia" class="form-control">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
	                         </select>
                        </div>
                        <div class="col-lg-6">
                        	<select name="mes" class="form-control">
                                <option value="01">Enero</option>
                                <option value="02">Febrero</option>
                                <option value="03">Marzo</option>
                                <option value="04">Abril</option>
                                <option value="05">Mayo</option>
                                <option value="06">Junio</option>
                                <option value="07">Julio</option>
                                <option value="08">Agosto</option>
                                <option value="09">Septiembre</option>
                                <option value="10">Octubre</option>
                                <option value="11">Noviembre</option>
                                <option value="12">Diciembre</option>
	                         </select>
                        </div>
                        <div class="col-lg-4">
							<select name="ano" class="form-control">
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                                <option value="1923">1923</option>
                                <option value="1922">1922</option>
                                <option value="1921">1921</option>
                                <option value="1920">1920</option>
                                <option value="1919">1919</option>
                                <option value="1918">1918</option>
                                <option value="1917">1917</option>
                                <option value="1916">1916</option>
                                <option value="1915">1915</option>
                                <option value="1914">1914</option>
                                <option value="1913">1913</option>
                                <option value="1912">1912</option>
                                <option value="1911">1911</option>
                                <option value="1910">1910</option>
                                <option value="1909">1909</option>
							</select>
                        </div>
                        
                        <p>Género*</p>
                        <div class="col-lg-12">
                        	<select name="genero" class="form-control">
                            	<option value="m">Masculino</option>
                                <option value="f">Femenino</option>
                            </select>
                        </div>
                        <p>País de nacimiento y nacionalidad*</p>
                        <div class="col-lg-6">
                        	<select name="paisNac" class="form-control">
                            	<?php
									while($row = mysqli_fetch_array($paises))
									{
										$idPais = $row['id_pais'];
										$nomPais = $row['nom_pais'];
										if ($idPais == "67") {
											echo <<<EOL
											<option value="$idPais" selected>$nomPais</option>
EOL;
										} else { 
											echo <<<EOL
											<option value="$idPais">$nomPais</option>
EOL;
										}
									}
								?>
                            </select>
                        </div>
                        <div class="col-lg-6">
                        	<input type="text" class="form-control" placeholder="nacionalidad" name="nacionalidad" data-validation="required">
                        </div>
                        <p>Ciudad y país de residencia*</p>
                        <div class="col-lg-6">
                        	<input type="text" class="form-control" placeholder="ciudad" name="ciudadRes" data-validation="required">
                        </div>
                        <div class="col-lg-6">
                        	<select name="paisRes" class="form-control">
                            	<?php
									mysqli_data_seek($paises, 0);
									while($row = mysqli_fetch_array($paises))
									{
										$idPais = $row['id_pais'];
										$nomPais = $row['nom_pais'];
										if ($idPais == "67") {
											echo <<<EOL
											<option value="$idPais" selected>$nomPais</option>
EOL;
										} else { 
											echo <<<EOL
											<option value="$idPais">$nomPais</option>
EOL;
										}
									}
								?>
                            </select>
                        </div>              
                        <div class="clearfix"></div>
                        <p>Teléfono casa*</p>
                        <div class="col-lg-12">
                        	<div class="row">
                            	<div class="col-lg-2">
		                        	<input type="tel" class="form-control" value="52" data-validation="number" name="claIntTel"> 
        						</div>
                                <div class="col-lg-4">
		                            <input type="tel" class="form-control col-lg-4" placeholder="lada" data-validation="number" name="ladaTel"> 
        						</div>
                                <div  class="col-lg-6">
		                            <input type="tel" class="form-control col-lg-4" placeholder="número" data-validation="number" name="numTel"> 
        						</div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <p>Celular*</p>
                        <div class="col-lg-12">
                        	<div class="row">
                            	<div class="col-lg-2">
		                        	<input type="tel" class="form-control" value="52" data-validation="number" name="claIntCel"> 
        						</div>
                                <div class="col-lg-4">
		                            <input type="tel" class="form-control col-lg-4" placeholder="lada" data-validation="number" name="ladaCel"> 
        						</div>
                                <div  class="col-lg-6">
		                            <input type="tel" class="form-control col-lg-4" placeholder="número" data-validation="number" name="numCel"> 
        						</div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <p>Redes</p>
                        <div class="input-group col-lg-3">
                            <span class="input-group-addon">LinkedIn</span>
                            <input type="text" class="form-control" placeholder="LinkedIn" name="linkedin">
                        </div>
                        <div class="input-group col-lg-3">
                            <span class="input-group-addon">Skype</span>
                            <input type="text" class="form-control" placeholder="Skype" name="skype">
                        </div>
                        <div class="input-group col-lg-3">
                            <span class="input-group-addon">Facebook</span>
                            <input type="text" class="form-control" placeholder="Facebook" name="facebook">
                        </div>
                        <div class="input-group col-lg-3">
                            <span class="input-group-addon">Twitter</span>
                            <input type="text" class="form-control" placeholder="Twitter" name="twitter">
                        </div>
                        <div class="pull-right col-lg-4">
                        	<a href="#educacion" data-toggle="tab" class="btn btn-primary col-lg-12 siguiente">Siguiente</a>   
                        </div>
                    </div> <!-- ROW -->
                </div> <!-- DATOS PERSONALES -->
                <div class="tab-pane col-lg-12" id="educacion">
                	<div class="row">
                        <p>Universidad y carrera*</p>	
                        <div class="col-lg-6">
                        	<input type="text" class="form-control" placeholder="universidad" name="universidad" data-validation="required">
                        </div>
                        <div class="col-lg-6">
                        	<input type="text" class="form-control" placeholder="carrera" name="carrera" data-validation="required">
                        </div>
                        <p>Título y años que duró la carrera*</p>	
                        <div class="col-lg-6">
                        	<input type="text" class="form-control" placeholder="titulo" name="titulo" data-validation="required">
                        </div>
                        <div class="col-lg-6">
                           	<input type="text" class="form-control" placeholder="duracion" name="anos_car" data-validation="number">
                        </div>
                        <div class="col-lg-2 pull-left">
                        	<div class="row">
                                <p>Maestría</p>	
                                <div class="col-lg-12">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default maestria-si">Si</button>
                                        <button type="button" class="btn btn-default maestria-no">No</button>
                                    </div>
                                </div>
                          	</div>
                       	</div>
                        <div class="col-lg-10 pull-right">
                        	<div class="row maestria">
                                <p>Universidad y título</p>	
                                <div class="col-lg-6">
                                    <input type="text" class="form-control disabled" placeholder="universidad" name="uni_maestria">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control disabled" placeholder="titulo" name="tit_maestria">
                                </div>
                           	</div>
                     	</div>
                        <div class="col-lg-2 pull-left">
                        	<div class="row">
                                <p>Doctorado</p>	
                                <div class="col-lg-12">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default doctorado-si">Si</button>
                                        <button type="button" class="btn btn-default doctorado-no">No</button>
                                    </div>
                                </div>
                          	</div>
                       	</div>
                        <div class="col-lg-10 pull-right">
                        	<div class="row doctorado">
                                <p>Universidad y título</p>	
                                <div class="col-lg-6">
                                    <input type="text" class="form-control disabled" placeholder="universidad" name="uni_doctorado">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control disabled" placeholder="titulo" name="tit_doctorado">
                                </div>
                           	</div>
                     	</div>
                        <div class="pull-left col-lg-4">
                        	<a href="#datos-personales" data-toggle="tab" class="btn btn-primary col-lg-12 anterior">Anterior</a>
                        </div>
                        <div class="pull-right col-lg-4">
                        	<a href="#laboral" data-toggle="tab" class="btn btn-primary col-lg-12 siguiente">Siguiente</a>
                    	</div>
                    </div> <!-- ROW -->
                </div> <!-- EDUCACION -->
                <div class="tab-pane col-lg-12" id="laboral">
                	<div class="row">
                    	<p>Nombre de la empresa*, sector* y puesto</p>	
                        <div class="col-lg-4">
                        	<input type="text" class="form-control" placeholder="empresa" name="empresa" data-validation="required">
                        </div>
                        <div class="col-lg-4">
                        	<select name="sector" class="form-control">
                            	<?php
									while($row = mysqli_fetch_array($sectores))
									{
										$idSector = $row['id_sec'];
										$nomSector = $row['nom_sec'];
										echo <<<EOL
											<option value="$idSector">$nomSector</option>
EOL;
									}
								?>
                            </select>
                        </div>
                        <div class="col-lg-4">
                        	<input type="text" class="form-control" placeholder="puesto" name="puesto" data-validation="required">
                        </div>
                        <div class="clearfix"></div>
                        <p>Dirección*</p>	
                        <div class="col-lg-4">
                        	<input type="text" class="form-control" placeholder="calle" name="calle" data-validation="required">
                        </div>
                        <div class="col-lg-2">
                        	<input type="text" class="form-control" placeholder="num. ext." name="num_ext" data-validation="required">
                        </div>
                        <div class="col-lg-2">
                        	<input type="text" class="form-control" placeholder="num. int." name="num_int">
                        </div>
                        <div class="col-lg-4">
                        	<input type="text" class="form-control" placeholder="colonia" name="colonia" data-validation="required">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-3">
                        	<input type="text" class="form-control" placeholder="ciudad" name="ciudad_emp" data-validation="required">
                        </div>
                        <div class="col-lg-3">
                        	<input type="text" class="form-control" placeholder="estado" name="edo_emp">
                        </div>
                        <div class="col-lg-3">
                        	<select name="pais_emp" class="form-control">
                            	<?php
									mysqli_data_seek($paises, 0);
									while($row = mysqli_fetch_array($paises))
									{
										$idPais = $row['id_pais'];
										$nomPais = $row['nom_pais'];
										if ($idPais == "67") {
											echo <<<EOL
											<option value="$idPais" selected>$nomPais</option>
EOL;
										} else { 
											echo <<<EOL
											<option value="$idPais">$nomPais</option>
EOL;
										}
									}
								?>
                            </select>
                        </div>
                        <div class="col-lg-3">
                        	<input type="text" class="form-control" placeholder="código postal" name="cp_emp" data-validation="required">
                        </div>
                        <p>Contacto empresa*</p>
                        <div class="col-lg-4">
                        	<input type="text" class="form-control" placeholder="página web" name="web">
                        </div>
                        <div class="col-lg-4">
                        	<input type="text" class="form-control" placeholder="e-mail laboral" name="email_emp" data-validation="required">
                        </div>
                        <div class="col-lg-3">
                        	<input type="text" class="form-control" placeholder="telefono" name="tel_emp" data-validation="required">
                        </div>
                        <div class="col-lg-1">
                        	<input type="text" class="form-control" placeholder="ext" name="ext_emp">
                        </div>
                        <div class="clearfix"></div>
                        <p>Últimas empresas en las que ha trabajado:</p>
                        <div class="col-lg-4">
                        	<input type="text" class="form-control" placeholder="empresa 1" name="emp1">
                        </div>
                        <div class="col-lg-4">
                        	<input type="text" class="form-control" placeholder="empresa 2" name="emp2">
                        </div>
                        <div class="col-lg-4">
                        	<input type="text" class="form-control" placeholder="empresa 3" name="emp3">
                        </div>
                        <div class="pull-left col-lg-4">
                        	<a href="#educacion" data-toggle="tab" class="btn btn-primary col-lg-12 anterior">Anterior</a>
                        </div>
                        <div class="pull-right col-lg-4">
                        	<a href="#aiesec" data-toggle="tab" class="btn btn-primary col-lg-12 siguiente">Siguiente</a>
                    	</div>
                    </div> <!-- ROW -->

                </div><!-- LABORAL -->
                <div class="tab-pane col-lg-12" id="aiesec">
                	<div class="row">
                    	<div class="col-lg-6 pull-left">
                        	<div class="row">
                                <p>País en el que se unió</p>
                                <div class="col-lg-12">
                                    <select name="pais_ai" class="form-control">
                                        <?php
                                            mysqli_data_seek($paises, 0);
                                            while($row = mysqli_fetch_array($paises))
                                            {
                                                $idPais = $row['id_pais'];
                                                $nomPais = $row['nom_pais'];
                                                if ($idPais == "67") {
                                                    echo <<<EOL
                                                    <option value="$idPais" selected>$nomPais</option>
EOL;
												} else { 
													echo <<<EOL
													<option value="$idPais">$nomPais</option>
EOL;
												}
											}
										?>
									</select>
								</div>
                           	</div>
                       	</div>
                        <div class="col-lg-6 pull-right">
                        	<div class="row">
                                <p>Año en el que se unió*</p>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" placeholder="año" name="ano_ai" data-validation="number">
                                </div>
                        	</div>
                        </div>
                        <div class="clearfix"></div>
                        <p>Comité local de origen*</p>
                        <div class="col-lg-12">
                        	<input type="text" class="form-control" placeholder="comité" name="comite" data-validation="required">
                        </div>
                        <div class="col-lg-6 pull-left">
                        	<div class="row">
                                <p>Último año en AIESEC*</p>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" placeholder="año" name="ult_ano" data-validation="number">
                                </div>
                        	</div>
                        </div>
                        <div class="col-lg-6 pull-right">
                        	<div class="row">
                                <p>Último puesto en AIESEC*</p>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" placeholder="año" name="ult_puesto" data-validation="required">
                                </div>
                        	</div>
                        </div>
                        <p>¿Formó parte de alguna mesa directiva?</p>
                        <div class="col-lg-12">
                        	<div class="btn-group">
                                <button type="button" class="btn btn-default mesa-si">Si</button>
                                <button type="button" class="btn btn-default mesa-no">No</button>
                            </div>
                        </div>
                        <p>Periodo y posición</p>
                        <div class="input-group col-lg-12">
                            <span class="input-group-addon">Del: </span>
                            <input type="text" class="form-control" placeholder="año inicial" name="periodo_ini">
                            <span class="input-group-addon">al: </span>
                            <input type="text" class="form-control" placeholder="año final" name="periodo_fin">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12">
                        	<input type="text" class="form-control" name="posicion_mesa" placeholder="posición">
                        </div>
                        <p>Nombre de las personas que formaron parte de ella:</p>
                        <div class="col-lg-12">
                        	<input type="text" class="form-control" name="presidente" placeholder="presidente">
                        </div>
                        <div class="col-lg-12">
                        	<input type="text" class="form-control" name="int_ent" placeholder="intercambio entrantes">
                        </div>
                        <div class="col-lg-12">
                        	<input type="text" class="form-control" name="int_sal" placeholder="intercambio salientes">
                        </div>
                        <div class="col-lg-12">
                        	<input type="text" class="form-control" name="mkt_com" placeholder="marketing o comunicaciones">
                        </div>
                        <div class="col-lg-12">
                        	<input type="text" class="form-control" name="finanzas" placeholder="finanzas">
                        </div>
                        <div class="col-lg-12">
                        	<input type="text" class="form-control" name="rh" placeholder="recursos humanos">
                        </div>
                        <div class="col-lg-12">
                        	<input type="text" class="form-control" name="otra" placeholder="otra">
                        </div>
                        
                        <div class="pull-left col-lg-4">
                        	<a href="#laboral" data-toggle="tab" class="btn btn-primary col-lg-12 anterior">Anterior</a>
                        </div>
                        <div class="pull-right col-lg-4">
                        	<a href="#participacion" data-toggle="tab" class="btn btn-primary col-lg-12 siguiente">Siguiente</a>
                    	</div>
                    </div><!-- ROW -->
                </div><!-- AIESEC -->
                <div class="tab-pane col-lg-12" id="participacion">
                	<div class="row">
                    	<p>¿De qué forma te gustaría participar como alumni?</p>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input class="tip_part" type="checkbox" name="tipo_participacion" value="1">
                                </span>
                                    <label class="form-control">Miembro de AIESEC Alumni México </label>
                            </div><!-- /input-group -->
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input class="tip_part" type="checkbox" name="tipo_participacion" value="2">
                                </span>
                                    <label class="form-control">Miembro de AIESEC Alumni Iberoamérica</label>
                            </div><!-- /input-group -->
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input class="tip_part" type="checkbox" name="tipo_participacion" value="3">
                                </span>
                                    <label class="form-control">Miembro de AIESEC Alumni Internacional</label>
                            </div><!-- /input-group -->
                        </div>
                        <p>¿En qué área te gustaría colaborar?</p>                
                        <div class="panel-group" id="accordion">
                       		<div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        	Relación Alumni - Alumni 
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    	<div class="col-lg-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" name="congresos" value="1">
                                                </span>
                                                    <label class="form-control">Congresos</label>
                                            </div><!-- /input-group -->
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" name="alumnite" value="1">
                                                </span>
                                                    <label class="form-control">ALUMnite</label>
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-info-sign"></i>
                                                </span>
                                            </div><!-- /input-group -->
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" name="isum" value="1">
                                                </span>
                                                    <label class="form-control">ISUM</label>
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-info-sign"></i>
                                                </span>
                                            </div><!-- /input-group -->
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" name="agroups" value="1">
                                                </span>
                                                    <label class="form-control">A-Gropups</label>
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-info-sign"></i>
                                                </span>
                                            </div><!-- /input-group -->
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" name="webinars" value="1">
                                                </span>
                                                    <label class="form-control">Webinars</label>
                                            </div><!-- /input-group -->
                                        </div>
                                    </div>
                                </div>
                          	</div><!-- PANEL -->
                          	<div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            Relación Alumni - AIESEC
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    	 <div class="col-lg-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" name="consejo" value="1">
                                                </span>
                                                    <label class="form-control">Consejo Asesor (BoA – Board of Advisors)</label>
                                            </div><!-- /input-group -->
                                        </div>
                                        <p>AIESEC Intership Referral Program: </p>
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" name="patrocinador" value="1">
                                                </span>
                                                    <label class="form-control">Patrocinador (dinero y/o especie)</label>
                                            </div><!-- /input-group -->
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" name="mentoring" value="1">
                                                </span>
                                                    <label class="form-control">Mentoring</label>
                                            </div><!-- /input-group -->
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" name="cursos" value="1">
                                                </span>
                                                    <label class="form-control">Cursos y/o capacitación</label>
                                            </div><!-- /input-group -->
                                        </div>
                                    </div>
                                </div>
                            </div><!-- PANEL -->
                          	<div class="panel panel-default">
                            	<div class="panel-heading">
                              		<h4 class="panel-title">
                                		<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                  			Relación Alumni - Sociedad
                                		</a>
                              		</h4>
                            	</div>
                            	<div id="collapseThree" class="panel-collapse collapse">
                                	<div class="panel-body">
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" name="apoyo" value="1">
                                                </span>
                                                    <label class="form-control">Programas de apoyo a nivel local, nacional, regional y/o internacional</label>
                                            </div><!-- /input-group -->
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" name="economia" value="1">
                                                </span>
                                                    <label class="form-control">Economía Azul</label>
                                            </div><!-- /input-group -->
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                    <label class="form-control">Alguna otra forma en que te gustaría participar:</label>
                                                <span class="input-group-addon">
                                                    <input type="text" name="otra_forma">
                                                </span>
                                            </div><!-- /input-group -->
                                        </div>
                                    </div>
                            	</div>
                          	</div><!-- PANEL -->
                        </div><!-- PANEL GROUP -->
                        <div class="pull-left col-lg-4">
                        	<a href="#aiesec" data-toggle="tab" class="btn btn-primary col-lg-12 anterior">Anterior</a>
                        </div>
                        <div class="pull-right col-lg-4">
                            <input class="submit btn btn-primary col-lg-12" type="submit" value="Guardar datos"/>
                    	</div>
                	</div><!-- ROW -->
            	</div> <!-- PARTICIPACION -->
            </div><!-- TAB-CONTENT -->
            </form>
        </div><!-- ROW -->
    </div> <!-- end container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aiesec.js"></script>
    <script src="js/jquery.form-validator.min.js"></script>
    <script>
		focusNombre();
		navegacionTabs();	
		toggleMaestria();
		toggleDoctorado();
		checks();
		$.validate();
	</script>
</body>
</html>
<?php include("DesconectaBD.php");  ?>

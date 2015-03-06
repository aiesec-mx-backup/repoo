<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Career Plan - AIESEC IPN</title>

    <!---------- CSS ------------>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script language="javascript"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>



</head>

<body>

    <!--BEGIN #signup-form -->
    <div id="signup-form">

        <!--BEGIN #subscribe-inner -->
        <div id="signup-inner">

        	<div class="clearfix" id="header">

        		<img id="signup-icon" src="./images/signup.png" alt="" />

                <h1>AIESEC - IPN <br/>Career Plan </h1>

            </div>
            <p>Por favor completa los siguientes campos de la forma más sincera posible para poder trabajar a partir de tus respuestas.</p>

            <form id="send" action="submit.php" method="POST">

                <table >
                    <tr>
                        <td id="personalInfo">
                            <p>
                                <label for="nombre">Nombre *</label>
                                <input class="personalInfo" id="nombre" type="text" name="nombre" value="" required="true"/>
                            </p>

                            <p>
                                <label for="edad">Edad *</label>
                                <input class="personalInfo" id="edad" type="text" name="edad" value="" required="true" />
                            </p>

                            <p>
                                <label for="email">Email *</label>
                                <input class="personalInfo" id="email" type="text" name="email" value="" required="true" />
                            </p>
                            <p>
                                <label for="comite">Comité *</label>
                                <select class="personalInfo" id="comite" type="text" name="comite" value="" required="true">
                                    <option value="IPN">IPN</option>
                                    <option value="GUA">Guanajuato</option>
                                    <option value="CDJ">CD Juárez</option>
                                    <option value="ZAC">Zacatecas</option>
                                    <option value="GDL">Guadalajara</option>
                                    <option value="Otro">Otro</option>
                                </select>
                                <p class="commite_otro">
                                    <label for="otro">Otro</label>
                                    <input class="personalInfo" id="otro_comite" type="text" name="otro_comite" value="" />
                                </p>
                            </p>

                        </td>
                        <td>
                                                        
                            <p>
                                <label for="Foto">Fotografia *</label>
                                <input class="personalInfo" id="file" name="foto" type="file">
                                <br/>
                                <br/>
                                <img id="previewimg" src=""/>
                            </p>
                        </td>
                    </tr>
                </table>
                <h3>Self Awarennes </h3>
                <p>
                    <label for="sueños">¿Cuales son tus sueños? *</label>
                    <input id="sueños" type="text" name="suenos" value="" required="true" />
                </p>
                
                <p>
                    <label for="intereses">¿Cuales son tus intereses? *</label>
                    <input id="intereses" type="text" name="intereses" value="" required="true" />
                </p>
                
                <p>
                    <label for="actividades">¿Que actividades realizas fuera de AIESEC? *</label>
                    <input id="actividades" type="text" name="actividades" value="" required="true" />
                </p>

                <p>
                    <h3><label for="actividades">Realiza un FODA de ti mismo. </label></h3>


                    <?php 
                    $foda_cantidad=3; 

                    echo '<table>    
                    <tr>';

                        for ($foda=0; $foda < 4; $foda++) { 
                            switch ($foda) {
                                case '0':
                                $contexto= 'Fortalezas';
                                break;
                                case '1':
                                $contexto= 'Debilidades';
                                break;
                                case '2':
                                $contexto= 'Oportunidades';
                                break;
                                case '3':
                                $contexto= 'Amenazas';
                                break;        
                            }


                            echo '<td> <div>
                            <table id="T-'.$contexto.'">
                                <td  id="'.$contexto.'">'.$contexto.'<img src="images/mas.png" class="Add'.$contexto.'" /></td>
                                ';

                                for ($i=0; $i <$foda_cantidad ; $i++) { 
                                    echo '  <tr><td>
                                    <input class="fodaS '.$contexto.'" type="text" id="'.$contexto.''.$i.'" name="foda_'.$contexto.''.$i.'" value=""/><img src="images/menos.png" onclick="borrar(this)"/>
                                </td></tr>
                                ';
                            }

                            echo '</table>
                        </div></td>
                        ';
                        if($foda%2!=0){ echo '</tr>
                            '; }        
                    }
                    echo '</table>';
                    ?>

                    <br/>
                    <hr></hr>
                    <br/>

                    <p>
                        <h1>Career Plan Timeline <br/></h1>
                        <br/>
                        <br/>
                    </p>

                    <?php
                    $contexto="";


                    for ($j=0; $j < 3; $j++) { 

                        switch ($j) {
                            case '0': $contexto="AIESEC"; break;

                            case '1': $contexto="PROFESSIONAL"; break;

                            case '2': $contexto="PERSONAL"; break;        
                        }

                        echo '<p><h2>'.$contexto.' Career Plan </h2></p>';
                        echo '<p><h5><label class="tiempo" for="tiempo">Tiempo</label></h5>';
                        echo '<table id="'.$contexto.'" class="timeLine -'.$contexto.'">';

                        echo '<tr>';
                        echo '    <td class="tabla-header '.$contexto.'">METAS SMART</td>';
                        echo '    <td class="tabla-header '.$contexto.'">3 Meses</td>';
                        echo '    <td class="tabla-header '.$contexto.'">6 Meses</td>';
                        echo '    <td class="tabla-header '.$contexto.'">1 Año</td>';
                        echo '    <td class="tabla-header '.$contexto.'">2 Año</td>';
                        echo '    <td class="tabla-header '.$contexto.'">5 Año</td>';
                        echo '    <td class="tabla-header '.$contexto.'">10 Año</td>                        ';
                        echo '    <td><img src="images/mas.png" class="Add'.$contexto.'" /></td>';
                        echo '</tr>';


                        for ($i=0; $i <3 ; $i++) { 
                            echo '<tr>';
                            echo '<td><textarea class="myTimeLine" type="text" name="'.$j.'-'.$i.'-meta" value="" /></textarea></td>';
                            echo '<td><textarea class="myTimeLine" type="text" name="'.$j.'-'.$i.'-3m" value="" /></textarea></td>';
                            echo '<td><textarea class="myTimeLine" type="text" name="'.$j.'-'.$i.'-6m" value="" /></textarea></td>';
                            echo '<td><textarea class="myTimeLine" type="text" name="'.$j.'-'.$i.'-12m" value="" /></textarea></td>';
                            echo '<td><textarea class="myTimeLine" type="text" name="'.$j.'-'.$i.'-24m" value="" /></textarea></td>';
                            echo '<td><textarea class="myTimeLine" type="text" name="'.$j.'-'.$i.'-60m" value="" /></textarea></td>';
                            echo '<td><textarea class="myTimeLine" type="text" name="'.$j.'-'.$i.'-120m" value="" /></textarea></td>';
                            echo '<td><input type="hidden" name="'.$j.'-'.$i.'-tipo" value="'.$j.'" /> <img src="images/menos.png" onclick="borrarTimeLine(this)" />   </td>';
                            echo '</tr>';
                        }

                        echo "</table></p>";
                    }
                    ?>
                    <input type="hidden" value="" name="numF" id="numF" />
                    <input type="hidden" value="" name="numD" id="numD" />
                    <input type="hidden" value="" name="numO" id="numO" />
                    <input type="hidden" value="" name="numA" id="numA" />
                    <input type="hidden" value="" name="numAIESEC" id="numAIESEC" />
                    <input type="hidden" value="" name="numPROF" id="numPROF" />
                    <input type="hidden" value="" name="numPER" id="numPER" />
                    
                    <label for="magic">Palabra clave *</label>
                    <input class="" id="magic" type="text" name="magic" value="" required="true" />
                    <br/>
                    <span>Esto con la finalidad de poder compartirlo con otra persona. (1 palabra sin espacios) </span>
                    <p>
                        <button id="submit" type="submit" onclick="fijarValores()">Submit</button>
                    </p>
                </form>

                <div id="required">
                  <p>* Required Fields<br/>
                      NOTE: Hi!</p>
                  </div>
              </div>

              <!--END #signup-inner -->
          </div>

          <!--END #signup-form -->   
      </div>
      <script type="text/javascript" src="js/functions.js"></script>
      <script type="text/javascript">
        $('.commite_otro').hide();
        $('#comite').on('change', function(e){
            if ($('#comite').val()=='Otro') {
                $('.commite_otro').show('slow');
            }
            else{
                $('.commite_otro').hide();
            }
        });       
      </script>
  </body>
  </html>
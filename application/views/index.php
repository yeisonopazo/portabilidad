<!DOCTYPE html>
<html>
    <head>
        <title>FORMULARIO PORTABILIDAD</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="lib/css/materialize.min.css"/>


    </head>
    <body>
        <div id="form">
            <header>
                <div class="container">
                    <div class="card-panel teal lighten-2 text-primary">FORMULARIO DE PORTABILIDAD NUMERICA - NETVOISS LTDA</div>
                </div>
            </header>

            <div class="container">
                <form name="portabilidad">
                    <div class="card-panel grey lighten-5 hoverable"> 
                        <h5 class="header">DATOS DE SOLICITUD</h5>
                        <div class="divider"></div>
                        <br>
                        <div class="row">
                            <div class=" col s6">                           
                                <label >TIPO DE SOLICITUD</label>
                            </div>
                            <div class="col s6">
                                <input type="checkbox" id="test1" checked disabled value="PREFACTIBILIDAD" name="PREFACTIBILIDAD"/>
                                <label for="test1">PREFACTIBILIDAD</label><br>
                                <input type="checkbox" id="test2" value="PORTABILIDAD" name="PORTABILIDAD"/>
                                <label for="test2">PORTABILIDAD</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">                           
                                <label >MODALIDAD DE SERVICIO</label>
                            </div>
                            <div class=" col s6">
                                <input name="modalidad" type="radio" id="prepago" value="PREPAGO"/>
                                <label for="prepago">PREPAGO</label><br>
                                <input name="modalidad" type="radio" id="pospago" value="POSTPAGO"/>
                                <label for="pospago">POSTPAGO</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">                           
                                <label >TIPO DE SERVICIO</label>
                            </div>


                            <div class="col s6">
                                <input name="tiposervicio" type="radio" id="fija" value="FIJA" />
                                <label for="fija">FIJA</label><br>
                                <input name="tiposervicio" type="radio" id="voip" value="VOIP"/>
                                <label for="voip">VOIP</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">

                                <div class="input-field">
                                    <input id="donant" type="text" name="proveedor">
                                    <label for="donant">PROVEEDOR DONANTE:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s3">                           
                                <label >NUMEROS</label>
                            </div>
                            <div class="col s3">
                                <input type="text" name="numero1"/>

                                <input type="text" name="numero2"/>

                            </div>
                            <div class="col s3">
                                <input type="text" name="numero3"/>

                                <input type="text"  name="numero4"/>
                            </div>
                            <div class="col s3">
                                <input type="text" name="numero5"/>
                                <input type="text" name="numero6"/>
                            </div>
                        </div>
                    </div>
                    <div class="card-panel grey lighten-5 hoverable">
                        <h5>DATOS DEL USUARIO</h5>
                        <div class="divider"></div>
                        <br>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="razonsocial" type="text" name="razonsocial">
                                    <label for="razonsocial">NOMBRE/RAZON SOCIAL:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <div class="input-field">
                                    <input id="RUT" type="text" name="rutrazonsocial">
                                    <label for="RUT">RUT:</label>
                                </div>
                            </div>
                            <div class="col s6">
                                <div class="input-field">
                                    <input id="TELEFONO" type="text" name="telefonocontact">
                                    <label for="TELEFONO">TELEFONO CONTACTO:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="DIRECC" type="text" name="direccion">
                                    <label for="DIRECC">DIRECCION:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="EMAIL" type="email" name="email">
                                    <label for="EMAIL">E-MAIL:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="rutrepresent" type="text" name="rutrepresent">
                                    <label for="rutrepresent">RUT REPRESENTANTE LEGAL:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="fonorepresentl" type="text" name="fonorepresentl">
                                    <label for="fonorepresentl">TELEFONO REPRESENTANTE LEGAL:</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-panel grey lighten-5 hoverable">
                        <h5>SOLICITANTE</h5>
                        <div class="divider"></div>
                        <br>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="nombresol" type="text" name="nombresol">
                                    <label for="nombresol">NOMBRE</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="rutsol" type="text" name="rutsol">
                                    <label for="rutsol">RUT:</label>
                                </div>
                            </div>
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="direccsol" type="text" name="direccsol">
                                    <label for="direccsol">DIRECCION:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="ciudadsol" type="text" name="ciudadsol">
                                    <label for="ciudadsol">CIUDAD:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="pais" type="text" name="paissol">
                                    <label for="pais">PAIS:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="emailsol" type="email" name="emailsol">
                                    <label for="emailsol">E-MAIL:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="fonosol" type="text" >
                                    <label for="fonosol">TELEFONO DE CONTACTO:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s4">                           
                                <label >DOUMENTOS ADJUNTOS</label>
                            </div>
                            <div class="col s4">
                                <input type="checkbox" id="doc1" value="SOLICITANTE" name="doc1"/>
                                <label for="doc1">RUT SOLICITANTE</label><br>
                                <input type="checkbox" id="doc2" value="REPRESENTANTE LEGAL" name="doc2"/>
                                <label for="doc2"> RUT REPRESENTANTE LEGAL</label>

                            </div>
                            <div class="col s4">
                                <input type="checkbox" id="doc3" value="TITULAR" name="doc3"/>
                                <label for="doc3">RUT TITULAR</label><br>
                                <input type="checkbox" id="doc4" value="PODER SIMPLE" name="doc4"/>
                                <label for="doc4">PODER SIMPLE</label>
                            </div>
                        </div>
                        <!--                 <a href="#" class="btn btn-primaty" >Enviar formulario</a>-->

                    </div>
                    <div class="card-panel grey lighten-5 hoverable">
                        <div class="row">
                            <div>
                                <input type="checkbox" id="aceptar" value="SI"/>
                                <label for="aceptar">He leído y estoy de acuerdo con los Términos del Servicio y Condiciones de Uso</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" id="btenviar" class="btn btn-primaty right" value="Enviar Formulario">
                            </div>
                        </div>
                    </div>

                </form>
            </div>

        </div>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="lib/js/materialize.min.js"></script>
        <script type="text/javascript" src="lib/js/pdfFromHTML.js"></script>
        <script type="text/javascript" src="lib/js/jquery-2.1.3.js"></script>
        <script type="text/javascript" src="lib/js/jspdf.js"></script>
        <script type="text/javascript" >
            $(function () {
                $("#btenviar").click(function (e) {
                    e.preventDefault();
                    HTMLtoPDF();
                });
            });
        </script>

    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>FORMULARIO PORTABILIDAD</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="CSS/css/materialize.min.css"/>


    </head>
    <body>
        <div id="form">
            <header>
                <div class="container">
                    <div class="card-panel teal lighten-2 text-primary">FORMULARIO DE PORTABILIDAD NUMERICA - NETVOISS LTDA</div>
                </div>
            </header>

            <div class="container">
                <form>
                    <div class="card-panel"> 
                        <h5 class="header">DATOS DE SOLICITUD</h5>
                        <div class="row">
                            <div class=" col s6">                           
                                <label >TIPO DE SOLICITUD</label>
                            </div>
                            <div class="col s6">
                                <input type="checkbox" id="test1" />
                                <label for="test1">PREFACTIBILIDAD</label><br>
                                <input type="checkbox" id="test2" />
                                <label for="test2">PORTABILIDAD</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">                           
                                <label >MODALIDAD DE SERVICIO</label>
                            </div>
                            <div class=" col s6">
                                <input name="group1" type="radio" id="test3" />
                                <label for="test3">PREPAGO</label><br>
                                <input name="group1" type="radio" id="test4" />
                                <label for="test4">POSTPAGO</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">                           
                                <label >TIPO DE SERVICIO</label>
                            </div>
                            <div class="col s6">
                                <input name="group2" type="radio" id="test5" />
                                <label for="test5">FIJA</label><br>
                                <input name="group2" type="radio" id="test6" />
                                <label for="test6">VOIP</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">

                                <div class="input-field">
                                    <input id="donant" type="text" >
                                    <label for="donant">PROVEEDOR DONANTE:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s3">                           
                                <label >NUMEROS</label>
                            </div>
                            <div class="col s3">
                                <input type="text" />

                                <input  type="text"  />

                            </div>
                            <div class="col s3">
                                <input type="text" />

                                <input  type="text"  />
                            </div>
                            <div class="col s3">
                                <input type="text" />
                                <input  type="text"  />
                            </div>
                        </div>
                    </div>
                    <div class="card-panel">
                        <h5>DATOS DEL USUARIO</h5>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="razonsocial" type="text" >
                                    <label for="razonsocial">NOMBRE/RAZON SOCIAL:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <div class="input-field">
                                    <input id="RUT" type="text" >
                                    <label for="RUT">RUT:</label>
                                </div>
                            </div>
                            <div class="col s6">
                                <div class="input-field">
                                    <input id="TELEFONO" type="text" >
                                    <label for="TELEFONO">TELEFONO CONTACTO:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="DIRECC" type="text" >
                                    <label for="DIRECC">DIRECCION:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="EMAIL" type="email" >
                                    <label for="EMAIL">E-MAIL:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="rutrepresent" type="text" >
                                    <label for="rutrepresent">RUT REPRESENTANTE LEGAL:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="fonorepresentl" type="text" >
                                    <label for="fonorepresentl">TELEFONO REPRESENTANTE LEGAL:</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-panel">
                        <h5>SOLICITANTE</h5>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="nombresol" type="text" >
                                    <label for="nombresol">NOMBRE</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="rutsol" type="text" >
                                    <label for="rutsol">RUT:</label>
                                </div>
                            </div>
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="direccsol" type="text" >
                                    <label for="direccsol">DIRECCION:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="ciudadsol" type="text" >
                                    <label for="ciudadsol">CIUDAD:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="pais" type="email" >
                                    <label for="pais">PAIS:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="emailsol" type="text" >
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
                                <input type="checkbox" id="doc1" />
                                <label for="doc1">RUT SOLICITANTE</label><br>
                                <input type="checkbox" id="doc2" />
                                <label for="doc2"> RUT REPRESENTANTE LEGAL</label>

                            </div>
                            <div class="col s4">
                                <input type="checkbox" id="doc3" />
                                <label for="doc3">RUT TITULAR</label><br>
                                <input type="checkbox" id="doc4" />
                                <label for="doc4">PODER SIMPLE</label>
                            </div>
                        </div>
                        <!--                 <a href="#" class="btn btn-primaty" >Enviar formulario</a>-->
                        <div class="input-field">
                            <input type="submit" id="btenviar" class="btn btn-primaty right" value="Enviar Formulario">
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="CSS/js/materialize.min.js"></script>
        <script type="text/javascript" src="js/pdfFromHTML.js"></script>
        <script type="text/javascript" src="js/jquery-2.1.3.js"></script>
        <script type="text/javascript" src="js/jspdf.js"></script>
        <script type="text/javascript" >
            $(function () {
                $("#btenviar").click(function (e) {
                    HTMLtoPDF();
                });
            });
        </script>

    </body>
</html>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .fa_custom {
            color: #d10a11;
        }

        .header_black {
            background-color: #1d1d1b;
            height: 50px;
            width: 100%;
        }

        .header_yellow {
            background-color: #b78b1e;
            height: 10px;
            width: 100%;
        }

        .margin_out {
            margin: 0px;
        }

        .container {
            margin: 8px;
            width: 300px;
            margin: auto;
            padding: 10px;
        }

        .gotham_title {
            font-family: 'Gotham';
            font-size: 20px;
            color: #1d1d1b;
            text-shadow: 1px 0 #1d1d1b;
            letter-spacing: 0.5px;
            font-weight: bold;
        }

        .gotham_p {
            font-family: 'Gotham';
            font-size: 18px;
            color: #1d1d1b;
        }

        .gotham_p2 {
            font-family: 'Gotham';
            font-size: 16px;
            color: #1d1d1b;
        }

        .gotham_p3 {
            font-family: 'Gotham';
            font-size: 18px;
            color: #1d1d1b;
            font-weight: 500;
            text-align: center;
        }

        .gotham_p4 {
            font-family: 'Gotham';
            font-size: 16px;
            color: #1d1d1b;
            font-weight: 500;
            margin-bottom: 5px;
            text-align: start;
        }

        .gotham_p5 {
            font-family: 'Gotham';
            font-size: 16px;
            color: #d10a11;
            margin-top: 0;
            text-align: start;
        }

        .container_form {
            width: 300px;
            margin: auto;
            border: 2px solid;
            border-color: #b78b1e;
            border-radius: 15px;
            padding: 10px;
            box-shadow: 0px 5px #fff8e7;
        }

        .container_button {
            width: 100%;
            margin: auto;
            border: 2px solid;
            border-color: #b78b1e;
            border-radius: 15px;
            padding: 0px 10px 0px 10px;
            background-color: #fdf7e9;
        }

        .container_form_2 {
            left: 0;
        }

        .mail_custom {
            color: #b78b1e;
        }

        .yellow_p {
            color: #b78b1e;
        }

        .angle_up_custom {
            padding-right: 10px;
            float: right;
            font-size: 22px;
        }

        .espacio {
            margin: 5px;
        }

        .phone_custom {
            font-size: 20px
        }

        .row {
            display: flex;
        }

        .column {
            flex: 30%;
        }

        .button {
            background-color: #d10a11;
            border: none;
            color: white;
            padding: 10px 0px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 5%;
            cursor: pointer;
            border-radius: 50px;
            width: 90%;
            max-width: 20rem;
        }

        .disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .bg-modal {
            background-color: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            display: none;
            justify-content: center;
            align-items: center;
        }

        .bg-modal-2 {
            background-color: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            display: none;
            justify-content: center;
            align-items: center;
        }

        .bg-modal-3 {
            background-color: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            display: none;
            justify-content: center;
            align-items: center;
        }

        .bg-modal-4 {
            background-color: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            display: none;
            justify-content: center;
            align-items: center;
        }

        .bg-modal-5 {
            background-color: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            display: none;
            justify-content: center;
            align-items: center;
        }

        .bg-modal-6 {
            background-color: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            display: none;
            justify-content: center;
            align-items: center;
        }

        .bg-modal-7 {
            background-color: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            display: none;
            justify-content: center;
            align-items: center;
        }

        .modal-contents {
            width: 85%;
            background-color: white;
            text-align: center;
            padding: 20px 10px;
            position: relative;
            border-radius: 4px;
            max-width: 338px;
        }

        .modal-contents-2 {
            width: 85%;
            background-color: white;
            text-align: center;
            padding: 20px 10px;
            position: relative;
            border-radius: 4px;
            max-width: 338px;
        }

        .modal-contents-3 {
            width: 85%;
            background-color: white;
            text-align: start;
            padding: 20px 25px;
            position: relative;
            border-radius: 4px;
            max-width: 338px;
        }

        input {
            margin: 15px auto;
            display: block;
            padding: 8px;
            border: 1px solid gray;
            border-radius: 5px;
            width: 90%;
            max-width: 20rem;
        }

        .input-2 {
            margin: auto;
            display: block;
            padding: 8px;
            border: 1px solid gray;
            border-radius: 5px;
            width: -webkit-fill-available;
            max-width: 20rem;
        }

        .close {
            position: absolute;
            top: 0;
            right: 10px;
            font-size: 42px;
            color: #333;
            transform: rotate(45deg);
            cursor: pointer;
            background: #FFF;
            border-radius: 50%;
            border: 0;

        }

        .column-2 {
            float: left;
            padding: 10px;
        }

        .left {
            width: 25%;
        }

        .right {
            width: 75%;
        }

        .custom-select {
            font-family: Arial;
            width: 70px;
            height: 35px;
            /* centrar vertical y horizontalmente */
            margin: 15px 0px 20px 20px;
        }

        .custom-select-2 {
            width: 90%;
            border-radius: 20px;
            font-size: 15px;
        }

        .custom-select-3 {
            margin: auto;
            display: block;
            padding: 5px;
            border: 1px solid gray;
            border-radius: 5px;
            width: 100%;
            max-width: 338px;
        }

        option {
            padding: 10px;
        }
    </style>
</head>

<body class="margin_out">
    <div class="header">
        <div class="header_black"></div>
        <div class="header_yellow"></div>
    </div>
    <div class="container">

        <h1 class="gotham_title">
            Eres parte de la comunidad más grande de Uninorte.
        </h1>
        <p class="gotham_p">Porque te queremos cerca siempre, ayúdanos a <strong>validar</strong> , <strong>completar</strong> y <strong>actualizar</strong> tus datos.</p>
        <p class="gotham_p2">Última actualización: <?php echo "11/03/2016"; ?>. <br> Aquellos marcados con <i class="fa fa-warning fa_custom"></i> podrían estar desactualizados.</p>

    </div>
    <div class="container_form">
        <p class="yellow_p gotham_p3"><i class="fa fa-envelope"></i> Correos electrónicos</p>
        <button type="button" id="button" onclick="clickMe('button','.bg-modal')" class="container_button" form="formulario1">
            <div class="container_form_2">
                <p class="gotham_p4">Personal <i class="fa fa-angle-right angle_up_custom yellow_p"></i></p>
                <p class="gotham_p5"><i class="fa fa-warning fa_custom"></i> carlos@carvajalino.com</p>
            </div>
        </button>
        <div class="espacio"></div>
        <button type="button" id="button2" onclick="clickMe('button2','.bg-modal-2')" class="container_button" form="formulario2">
            <p class="gotham_p4">Corporativo <i class="fa fa-angle-right angle_up_custom yellow_p"></i></p>
            <p class="gotham_p5"><i class="fa fa-warning fa_custom"></i> No registrado</p>
        </button>
    </div>
    <br>
    <div class="container_form">
        <p class="yellow_p gotham_p3"><i class="fa fa-phone phone_custom"></i> Teléfonos </p>
        <button type="button" id="button3" onclick="clickMe('button3','.bg-modal-3')" class="container_button" form="formulario3">
            <p class="gotham_p4">Celular <i class="fa fa-angle-right angle_up_custom yellow_p"></i></p>
            <p class="gotham_p5"><i class="fa fa-warning fa_custom"></i> +57 3114013218</p>
        </button>
        <div class="espacio"></div>
        <button type="button" id="button4" onclick="clickMe('button4','.bg-modal-4')" class="container_button" form="formulario4">
            <p class="gotham_p4">Fijo <i class="fa fa-angle-right angle_up_custom yellow_p"></i></p>
            <p class="gotham_p5"><i class="fa fa-warning fa_custom"></i> 3732832</p>
        </button>
    </div>
    <br>
    <div class="container_form">
        <p class="yellow_p gotham_p3"><i class="fa fa-id-card-o"></i> Estado laboral </p>
        <button type="button" id="button5" onclick="clickMe('button5','.bg-modal-5')" class="container_button" form="formulario5">
            <p class="gotham_p4">Ocupación primaria <i class="fa fa-angle-right angle_up_custom yellow_p"></i></p>
            <p class="gotham_p5"><i class="fa fa-warning fa_custom"></i> Empresario</p>
        </button>
    </div><br>
    <div class="container_form">
        <p class="yellow_p gotham_p3"><i class="fa fa-map-marker phone_custom"></i> Direcciones </p>
        <button type="button" id="button6" onclick="clickMe('button6','.bg-modal-6')" class="container_button" form="formulario6">
            <p class="gotham_p4">Permanente <i class="fa fa-angle-right angle_up_custom yellow_p"></i></p>
            <p class="gotham_p5"><i class="fa fa-warning fa_custom"></i> No registrado</p>
        </button>
        <div class="espacio"></div>
        <button type="button" id="button7" onclick="clickMe('button7','.bg-modal-7')" class="container_button" form="formulario7">
            <p class="gotham_p4">Temporal <i class="fa fa-angle-right angle_up_custom yellow_p"></i></p>
            <div class="row">
                <div class="column"><i class="fa fa-warning fa_custom"></i></div>
                <div class="cloumn">
                    <p class="gotham_p5"> Calle 82A N° 41E - 77 Conjunto Residencial Cerrado. La Castellana Casa 2 Ciudad Jardín Barranquilla Atlántico, Colombia</p>
                </div>
            </div>
        </button>
        <br>
        <div class="form-group form-check">
            <input type="checkbox" class="
            
            -check-input" id="conditions" name="conditions" value="1">
            <label class="gotham_p2" for="conditions">Aceptar condiciones de uso</label>
        </div>
        <div>
            <button class="button gotham_p4">ACTUALIZAR</button>
            <button class="button disabled gotham_p4">ACTUALIZAR</button>
        </div>
    </div>
</body>
<!-- Modal Section -->
<div class="bg-modal">
    <div class="modal-contents">

        <button type="button" onclick="clickClose('.bg-modal')" class="close">+</button>
        <h1 class="gotham_title">¡Ayúdanos a estar en contacto contigo!</h1>
        <p class="yellow_p gotham_p3"><i class="fa fa-envelope"></i> Correo Personal</p>
        <form action="" id="formulario1">
            <input type="text" placeholder="Correo de contacto">
            <a href="#" class="button gotham_p4">CONFIRMAR Y CONTINUAR</a>
        </form>

    </div>
</div>
<div class="bg-modal-2">
    <div class="modal-contents">
        <button type="button" onclick="clickClose('.bg-modal-2')" class="close">+</button>
        <h1 class="gotham_title">¡Ayúdanos a estar en contacto contigo!</h1>
        <p class="yellow_p gotham_p3"><i class="fa fa-envelope"></i> Correo Corporativo</p>
        <form action="" id="formulario2">
            <input type="text" placeholder="Correo de contacto">
            <a href="#" class="button gotham_p4">CONFIRMAR Y CONTINUAR</a>
        </form>

    </div>
</div>
<div class="bg-modal-3">
    <div class="modal-contents">
        <button type="button" onclick="clickClose('.bg-modal-3')" class="close">+</button>
        <h1 class="gotham_title">¡Ayúdanos a estar en contacto contigo!</h1>
        <p class="yellow_p gotham_p3"><i class="fa fa-phone phone_custom"></i> Teléfono Celular</p>
        <form action="" id="formulario3">
            <div class="row">
                <div class="column-2 left"><select class="custom-select" name="numeroPais" id="numeroPais">
                        <option value="57">+57</option>
                    </select></div>
                <div class="column-2 right"> <input type="number" placeholder="Número de contacto"></div>
            </div>
            <a href="#" class="button gotham_p4">CONFIRMAR Y CONTINUAR</a>
        </form>
    </div>
</div>
<div class="bg-modal-4">
    <div class="modal-contents">
        <button type="button" onclick="clickClose('.bg-modal-4')" class="close">+</button>
        <h1 class="gotham_title">¡Ayúdanos a estar en contacto contigo!</h1>
        <p class="yellow_p gotham_p3"><i class="fa fa-phone phone_custom"></i> Teléfono Fijo</p>
        <form action="" id="formulario3">
            <div class="row">
                <div class="column-2 left"><select class="custom-select" name="numeroPais" id="numeroPais">
                        <option value="57">+57</option>
                    </select></div>
                <div class="column-2 right"> <input type="number" placeholder="Número de contacto"></div>
            </div>
            <a href="#" class="button gotham_p4">CONFIRMAR Y CONTINUAR</a>
        </form>
    </div>
</div>
<div class="bg-modal-5">
    <div class="modal-contents-2">
        <button type="button" onclick="clickClose('.bg-modal-5')" class="close">+</button>
        <h1 class="gotham_title">¡Ayúdanos a estar en contacto contigo!</h1>
        <p class="yellow_p gotham_p3"><i class="fa fa-id-card-o"></i> Estado Laboral</p>
        <form action="" id="formulario3">

            <select class="custom-select-2 gotham_p3" size="7" name="laboral" id="laboral">
                <option value="Desempleado">Desempleado</option>
                <option value="Independiente">Independiente</option>
                <option value="Empleado">Empleado</option>
                <option value="Empresario">Empresario</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Inactivo Laboralmente">Inactivo Laboralmente</option>
                <option value="Jubilado">Jubilado</option>

            </select>
            <a href="#" class="button gotham_p4">CONFIRMAR Y CONTINUAR</a>
        </form>
    </div>
</div>
<div class="bg-modal-6">
    <div class="modal-contents-3">
        <button type="button" onclick="clickClose('.bg-modal-6')" class="close">+</button>
        <h1 class="gotham_title">¡Ayúdanos a estar en contacto contigo!</h1>
        <p class="yellow_p gotham_p3"><i class="fa fa-map-marker phone_custom"></i> Dirección Permanente</p>
        <form action="" id="formulario3">
            <label for="direccionCompleta" class="gotham_p4">Dirección Completa</label><br>
            <input type="text" class="gotham_p5 input-2" id="direccionCompleta" name="direccionCompleta" value="Cra 42G # 90-67"><br>
            <input type="text" class="gotham_p5 input-2" id="direccionCompleta2" name="direccionCompleta2" value="Edificio IVELINDA, Apto 4B"><br>

            <label for="barrio" class="gotham_p4">Barrio</label><br>
            <input type="text" class="gotham_p5 input-2" id="barrio" name="barrio" value="Los Nogales"><br>

            <label for="pais" class="gotham_p4">País</label><br>
            <select class="custom-select-3 gotham_p5" name="pais" id="pais">
                <option value="Colombia">Colombia</option>
            </select><br>

            <label for="departamento" class="gotham_p4">Estado / Departamento</label><br>
            <select class="custom-select-3 gotham_p5" name="departamento" id="departamento">
                <option value="Atlantico">Atlántico</option>
            </select><br>

            <label for="ciudad" class="gotham_p4">Ciudad / Municipio</label><br>
            <select class="custom-select-3 gotham_p5" name="ciudad" id="ciudad">
                <option value="Barranquilla">Barranquilla</option>
            </select><br>

            <a href="#" class="button gotham_p4">CONFIRMAR Y CONTINUAR</a>
        </form>
    </div>
</div>

<div class="bg-modal-7">
    <div class="modal-contents-3">
        <button type="button" onclick="clickClose('.bg-modal-7')" class="close">+</button>
        <h1 class="gotham_title">¡Ayúdanos a estar en contacto contigo!</h1>
        <p class="yellow_p gotham_p3"><i class="fa fa-map-marker phone_custom"></i> Dirección Permanente</p>
        <form action="" id="formulario3">
            <label for="direccionCompleta" class="gotham_p4">Dirección Completa</label><br>
            <input type="text" class="gotham_p5 input-2" id="direccionCompleta" name="direccionCompleta" value="Cra 42G # 90-67"><br>
            <input type="text" class="gotham_p5 input-2" id="direccionCompleta2" name="direccionCompleta2" value="Edificio IVELINDA, Apto 4B"><br>

            <label for="barrio" class="gotham_p4">Barrio</label><br>
            <input type="text" class="gotham_p5 input-2" id="barrio" name="barrio" value="Los Nogales"><br>

            <label for="pais" class="gotham_p4">País</label><br>
            <select class="custom-select-3 gotham_p5" name="pais" id="pais">
                <option value="Colombia">Colombia</option>
            </select><br>

            <label for="departamento" class="gotham_p4">Estado / Departamento</label><br>
            <select class="custom-select-3 gotham_p5" name="departamento" id="departamento">
                <option value="Atlantico">Atlántico</option>
            </select><br>

            <label for="ciudad" class="gotham_p4">Ciudad / Municipio</label><br>
            <select class="custom-select-3 gotham_p5" name="ciudad" id="ciudad">
                <option value="Barranquilla">Barranquilla</option>
            </select><br>

            <a href="#" class="button gotham_p4">CONFIRMAR Y CONTINUAR</a>
        </form>
    </div>
</div>
<!-- END Modal Section -->
<!--- JS Section --->
<script>
    function clickMe(button, modal) {
        document.getElementById(button).addEventListener("click", function() {
            document.querySelector(modal).style.display = "flex";
        });
    }

    function clickClose(modal) {
        document.querySelector(modal).style.display = "none";
    }
</script>
<!--- END JS Section --->

</html>
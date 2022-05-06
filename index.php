<?php require_once 'modal.php'; ?>
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
    <link rel="stylesheet" type="text/css" href="./css/style.css">
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
        <div class="row">
            <div class="column-2 left form-group form-check">
                <input type="checkbox" class="-check-input" id="conditions" name="conditions" value="1" onchange="change()">

            </div>
            <div class="column-check rigth"> <label class="gotham_p2" for="conditions">Aceptar condiciones de uso</label></div>
        </div>
        <div>
            <button type="button" id="button8" onclick="clickActualizar('.button')" form="formulario">ACTUALIZAR</button>
        </div>

    </div>
</body>
<!--- JS Section --->
<script>
    function clickMe(button, modal) {
        var boton = document.getElementById(button);
        var boton_activo = document.querySelector(modal);
        if (boton_activo.style.display = "none" || boton_activo.style.display === "") {
            document.querySelector(modal).style.display = "flex";
        }
    }

    function clickClose(modal) {
        document.querySelector(modal).style.display = "none";
    }

    function clickActualizar(button) {
        var decider = document.getElementById('conditions');
        if (!decider.checked) {
            alert("Aceptar Terminos y Condiciones")
        } else {
            alert("listo para enviar formulario")
        }
    }

    function change() {
        alert("cambiar todo el css")
    }
</script>
<!--- END JS Section --->

</html>
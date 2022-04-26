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
        }

        .gotham_p4 {
            font-family: 'Gotham';
            font-size: 16px;
            color: #1d1d1b;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .gotham_p5 {
            font-family: 'Gotham';
            font-size: 16px;
            color: #d10a11;
            margin-top: 0;
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

        .container_form_2 {
            width: 90%;
            margin: auto;
            border: 2px solid;
            border-color: #b78b1e;
            border-radius: 15px;
            padding: 0px 10px 0px 10px;
            background-color: #fdf7e9;

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
        <p class="yellow_p gotham_p3"><i class="fa fa-envelope"></i> Correos electrónicos <i class="fa fa-angle-up angle_up_custom"></i></p>
        <div class="container_form_2">
            <p class="gotham_p4">Personal <i class="fa fa-angle-right angle_up_custom yellow_p"></i></p>
            <p class="gotham_p5"><i class="fa fa-warning fa_custom"></i> carlos@carvajalino.com</p>
        </div>
        <div class="espacio"></div>
        <div class="container_form_2">
            <p class="gotham_p4">Corporativo <i class="fa fa-angle-right angle_up_custom yellow_p"></i></p>
            <p class="gotham_p5"><i class="fa fa-warning fa_custom"></i> No registrado</p>
        </div>
    </div>
    <br>
    <div class="container_form">
        <p class="yellow_p gotham_p3"><i class="fa fa-phone phone_custom"></i> Teléfonos <i class="fa fa-angle-up angle_up_custom"></i></p>
        <div class="container_form_2">
            <p class="gotham_p4">Celular <i class="fa fa-angle-right angle_up_custom yellow_p"></i></p>
            <p class="gotham_p5"><i class="fa fa-warning fa_custom"></i> +57 3114013218</p>
        </div>
        <div class="espacio"></div>
        <div class="container_form_2">
            <p class="gotham_p4">Fijo <i class="fa fa-angle-right angle_up_custom yellow_p"></i></p>
            <p class="gotham_p5"><i class="fa fa-warning fa_custom"></i> 3732832</p>
        </div>
    </div>
    <br>
    <div class="container_form">
        <p class="yellow_p gotham_p3"><i class="fa fa-id-card-o"></i> Estado laboral <i class="fa fa-angle-up angle_up_custom"></i></p>
        <div class="container_form_2">
            <p class="gotham_p4">Ocupación primaria <i class="fa fa-angle-right angle_up_custom yellow_p"></i></p>
            <p class="gotham_p5"><i class="fa fa-warning fa_custom"></i> Empresario</p>
        </div>
    </div><br>
    <div class="container_form">
        <p class="yellow_p gotham_p3"><i class="fa fa-map-marker phone_custom"></i> Direcciones <i class="fa fa-angle-up angle_up_custom"></i></p>
        <div class="container_form_2">
            <p class="gotham_p4">Permanente <i class="fa fa-angle-right angle_up_custom yellow_p"></i></p>
            <p class="gotham_p5"><i class="fa fa-warning fa_custom"></i> No registrado</p>
        </div>
        <div class="espacio"></div>
        <div class="container_form_2">
            <p class="gotham_p4">Temporal <i class="fa fa-angle-right angle_up_custom yellow_p"></i></p>
            <div class="row">
                <div class="column"><i class="fa fa-warning fa_custom"></i></div>
                <div class="cloumn">
                    <p class="gotham_p5"> Calle 82A N° 41E - 77 Conjunto Residencial Cerrado. La Castellana Casa 2 Ciudad Jardín Barranquilla Atlántico, Colombia</p>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
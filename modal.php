<link rel="stylesheet" type="text/css" href="./css/style.css">
<!-- Modal Section -->
<div class="bg-modal" style='display: none'>
    <div class="modal-contents">

        <button type="button" onclick="clickClose('.bg-modal')" class="close"><i class="fa fa-arrow-left"></i> Regresar</button>
        <h1 class="gotham_title">¡Ayúdanos a estar en contacto contigo!</h1>
        <p class="yellow_p gotham_p3"><i class="fa fa-envelope"></i> Correo Personal</p>
        <form action="" id="formulario1">
            <label for="correoContacto" class="gotham_p4">Correo de contacto</label><br>
            <input type="email" placeholder="Correo de contacto" name="correoContacto">
            <button type="button">CONFIRMAR Y CONTINUAR</button>
        </form>

    </div>
</div>
<div class="bg-modal-2">
    <div class="modal-contents">
        <button type="button" onclick="clickClose('.bg-modal-2')" class="close"><i class="fa fa-arrow-left"></i> Regresar</button>
        <h1 class="gotham_title">¡Ayúdanos a estar en contacto contigo!</h1>
        <p class="yellow_p gotham_p3"><i class="fa fa-envelope"></i> Correo Corporativo</p>
        <form action="" id="formulario2">
            <label for="correoContacto2" class="gotham_p4">Correo de contacto</label><br>
            <input type="email" placeholder="Correo de contacto" name="correoContacto2">
            <button type="button">CONFIRMAR Y CONTINUAR</button>
        </form>

    </div>
</div>
<div class="bg-modal-3">
    <div class="modal-contents">
        <button type="button" onclick="clickClose('.bg-modal-3')" class="close"><i class="fa fa-arrow-left"></i> Regresar</button>
        <h1 class="gotham_title">¡Ayúdanos a estar en contacto contigo!</h1>
        <p class="yellow_p gotham_p3"><i class="fa fa-phone phone_custom"></i> Teléfono Celular</p>
        <form action="" id="formulario3">
            <label for="numeroContacto" class="gotham_p4 padding_left_10">Número de contacto</label><br>
            <div class="row">
                <div class="column-2 left"><select class="custom-select" name="numeroPais" id="numeroPais">
                        <option value="57">+57</option>
                    </select></div>
                <div class="column-2 right"> <input type="number" placeholder="Número de contacto" name="numeroContacto"></div>
            </div>
            <button type="button">CONFIRMAR Y CONTINUAR</button>
        </form>
    </div>
</div>
<div class="bg-modal-4">
    <div class="modal-contents">
        <button type="button" onclick="clickClose('.bg-modal-4')" class="close"><i class="fa fa-arrow-left"></i> Regresar</button>
        <h1 class="gotham_title">¡Ayúdanos a estar en contacto contigo!</h1>
        <p class="yellow_p gotham_p3"><i class="fa fa-phone phone_custom"></i> Teléfono Fijo</p>
        <form action="" id="formulario4">
            <label for="numeroContacto2" class="gotham_p4 padding_left_10">Número de contacto</label><br>
            <div class="row">
                <div class="column-2 left"><select class="custom-select" name="numeroPais" id="numeroPais">
                        <option value="57">+57</option>
                    </select></div>
                <div class="column-2 right"> <input type="number" placeholder="Número de contacto" name="numeroContacto2"></div>
            </div>
            <button type="button">CONFIRMAR Y CONTINUAR</button>
        </form>
    </div>
</div>
<div class="bg-modal-5">
    <div class="modal-contents-2">
        <button type="button" onclick="clickClose('.bg-modal-5')" class="close"><i class="fa fa-arrow-left"></i> Regresar</button>
        <h1 class="gotham_title">¡Ayúdanos a estar en contacto contigo!</h1>
        <p class="yellow_p gotham_p3"><i class="fa fa-id-card-o"></i> Estado Laboral</p>
        <form action="" id="formulario5">

            <select class="custom-select-2 gotham_p3" size="7" name="laboral" id="laboral">
                <option value="Desempleado">Desempleado</option>
                <option value="Independiente">Independiente</option>
                <option value="Empleado">Empleado</option>
                <option value="Empresario">Empresario</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Inactivo Laboralmente">Inactivo Laboralmente</option>
                <option value="Jubilado">Jubilado</option>

            </select>
            <button type="button">CONFIRMAR Y CONTINUAR</button>
        </form>
    </div>
</div>
<div class="bg-modal-6">
    <div class="modal-contents-3">
        <button type="button" onclick="clickClose('.bg-modal-6')" class="close"><i class="fa fa-arrow-left"></i> Regresar</button>
        <h1 class="gotham_title">¡Ayúdanos a estar en contacto contigo!</h1>
        <p class="yellow_p gotham_p3"><i class="fa fa-map-marker phone_custom"></i> Dirección Permanente</p>
        <form action="" id="formulario6">
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

            <button type="button">CONFIRMAR Y CONTINUAR</button>
        </form>
    </div>
</div>
<div class="bg-modal-7">
    <div class="modal-contents-3">
        <button type="button" onclick="clickClose('.bg-modal-7')" class="close"><i class="fa fa-arrow-left"></i> Regresar</button>
        <h1 class="gotham_title">¡Ayúdanos a estar en contacto contigo!</h1>
        <p class="yellow_p gotham_p3"><i class="fa fa-map-marker phone_custom"></i> Dirección Permanente</p>
        <form action="" id="formulario7">
            <label for="direccionCompleta3" class="gotham_p4">Dirección Completa</label><br>
            <input type="text" class="gotham_p5 input-2" id="direccionCompleta3" name="direccionCompleta3" value="Cra 42G # 90-67"><br>
            <input type="text" class="gotham_p5 input-2" id="direccionCompleta4" name="direccionCompleta4" value="Edificio IVELINDA, Apto 4B"><br>

            <label for="barrio2" class="gotham_p4">Barrio</label><br>
            <input type="text" class="gotham_p5 input-2" id="barrio2" name="barrio2" value="Los Nogales"><br>

            <label for="pais2" class="gotham_p4">País</label><br>
            <select class="custom-select-3 gotham_p5" name="pais2" id="pais2">
                <option value="Colombia">Colombia</option>
            </select><br>

            <label for="departamento2" class="gotham_p4">Estado / Departamento</label><br>
            <select class="custom-select-3 gotham_p5" name="departamento2" id="departamento2">
                <option value="Atlantico">Atlántico</option>
            </select><br>

            <label for="ciudad2" class="gotham_p4">Ciudad / Municipio</label><br>
            <select class="custom-select-3 gotham_p5" name="ciudad2" id="ciudad2">
                <option value="Barranquilla">Barranquilla</option>
            </select><br>

            <button type="button">CONFIRMAR Y CONTINUAR</button>
        </form>
    </div>
</div>
<!-- END Modal Section -->
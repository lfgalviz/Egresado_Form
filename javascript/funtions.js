function clickMe(button, modal) {
  //cambiar color a rojo
  var elements = document.getElementsByClassName("fa_custom"); // get all elements
  var elements2 = document.getElementsByClassName("gotham_p5");
  for (var i = 0; i < elements.length; i++) {
    elements[i].style.color = "d10a11";
  }
  for (var i = 0; i < elements2.length; i++) {
    elements2[i].style.color = "d10a11";
  }
  //end
  //desactivar check
  var checkBox = document.getElementById("conditions");
  // If the checkbox is checked
  if (checkBox.checked == true) {
    checkBox.checked = false;
  }
  //end
  var boton = document.getElementById(button);
  var boton_activo = document.querySelector(modal);
  if (
    (boton_activo.style.display = "none" || boton_activo.style.display === "")
  ) {
    document.querySelector(modal).style.display = "flex";
  }
}

function clickClose(modal) {
  document.querySelector(modal).style.display = "none";
}

function clickActualizar(button) {
  var decider = document.getElementById("conditions");
  if (!decider.checked) {
    alert("Aceptar checkbox");
  } else {
    alert("listo para enviar formulario");
  }
}

function change() {
  var checkBox = document.getElementById("conditions");
  // If the checkbox is checked
  if (checkBox.checked == true) {
    var elements = document.getElementsByClassName("fa_custom"); // get all elements
    var elements2 = document.getElementsByClassName("gotham_p5");
    for (var i = 0; i < elements.length; i++) {
      elements[i].style.color = "00a000";
    }
    for (var i = 0; i < elements2.length; i++) {
      elements2[i].style.color = "00a000";
    }
  } else {
    var elements = document.getElementsByClassName("fa_custom"); // get all elements
    var elements2 = document.getElementsByClassName("gotham_p5");
    for (var i = 0; i < elements.length; i++) {
      elements[i].style.color = "d10a11";
    }
    for (var i = 0; i < elements2.length; i++) {
      elements2[i].style.color = "d10a11";
    }
  }

  //  document.getElementById('state').style.color = "00a000";
}

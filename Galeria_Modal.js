// Abrir Modal
function Abrir_Modal() {
  document.getElementById("Galeria_Modal").style.display = "block";
}

// Cerrar Modal
function Cerrar_Modal() {
  document.getElementById("Galeria_Modal").style.display = "none";
}

var Indice_Diapositiva = 1;
Mostrar_Diapositivas(Indice_Diapositiva);

// Next/previous controls
function Cambiar_Diapositiva(n) {
  Mostrar_Diapositivas(Indice_Diapositiva+= n);
}

// Thumbnail image controls
function Diapositva_Actual(n) {
  Mostrar_Diapositivas(Indice_Diapositiva= n);
}

function Mostrar_Diapositivas(n) {
  var i;
  var Diapositivas = document.getElementsByClassName("Diapositivas");
  var NumeroDiapositiva = document.getElementById("DiapositivaNum");
  if (n > Diapositivas .length) 
  {
  	Indice_Diapositiva= 1
  }
  if (n < 1) 
  {
  	Indice_Diapositiva= Diapositivas .length
  }
  
  for (i = 0; i < Diapositivas .length; i++) 
  {
   	Diapositivas [i].style.display = "none";
  }
  Diapositivas [Indice_Diapositiva-1].style.display = "block";
  NumeroDiapositiva .innerHTML =  Indice_Diapositiva + "/" + Diapositivas.length;
 }
 
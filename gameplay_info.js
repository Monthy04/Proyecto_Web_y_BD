function Mostrar_Seccion(n) 
{
  var i;
  var Secciones = document.getElementsByClassName("Contenedor_Informacion");
  
  for (i = 0; i < Secciones .length; i++) 
  {
   	Secciones [i].style.display = "none";
  }
  Secciones [n].style.display = "block";
 }


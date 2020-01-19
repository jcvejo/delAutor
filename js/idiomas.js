function idiomas(){
   
var lenguaje=localStorage.getItem('idioma');
if(lenguaje===null){
var elem=  document.createElement('script');
  elem.src='js/castellano.js';
  document.querySelector('body').appendChild(elem);
}
else{
lenguaje=localStorage.getItem('idioma');
var s=document.createElement('script');
s.src=lenguaje;
document.querySelector('body').appendChild(s);
}
var seleccion=document.getElementById('idiomaSeleccionado');
seleccion.addEventListener('change', function(){
lenguaje=document.getElementById('idiomaSeleccionado').value;
var script=document.createElement('script');
script.src=lenguaje;
document.querySelector('body').appendChild(script);
localStorage.setItem('idioma',lenguaje);
});
}

window.addEventListener('load',idiomas);
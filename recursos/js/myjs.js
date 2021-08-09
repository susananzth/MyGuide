var nombre = "Susana";
var altura = 160;

var concatenacion = nombre + ", tu altuna es: " + altura + " cm.";
// Habilitar tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
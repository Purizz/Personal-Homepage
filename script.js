var i = 0;
var txt = "I’m Priskila, an Informatics Eng student focusing in 3D Design field"; /* Teks yang nmo tulis */
var speed = 50; /* Seberapa cepat dpe animasi (satuan ms) */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("typing").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

window.onload = function() {
  typeWriter();
};
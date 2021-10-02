//require('./bootstrap');

const socket = io.connect('http://192.168.0.54:3030');
console.log(socket);

//eventos click boton
const botones = document.querySelectorAll('.btn');
const cuandoClick = function(ev) {
    console.log(this.dataset.id);
}

botones.forEach(boton => {
    boton.addEventListener('click', cuandoClick);
});
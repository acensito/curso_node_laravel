//require('./bootstrap');

var options = {
    rememberUpgrade:true,
    transports: ['websocket'],
    secure:true, 
    rejectUnauthorized: false
    }

const socket = io.connect('http://192.168.0.8:3030', options);

//const socket = io("https://server-domain.com");

//eventos click boton
const botones = document.querySelectorAll('.btn');
const cuandoClick = function(ev) {
    console.log(this.dataset.id);
}

botones.forEach(boton => {
    boton.addEventListener('click', cuandoClick);
});
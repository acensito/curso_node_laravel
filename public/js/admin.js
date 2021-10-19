var options = {
    rememberUpgrade:true,
    transports: ['websocket'],
    secure:true, 
    rejectUnauthorized: false
    }

const socket = io.connect('http://192.168.0.8:3030', options);

socket.on('order_processed', (data)=>{
    //alert('nuevo pedido ' + data.order_code);
    console.log(data);
    location.reload();
})
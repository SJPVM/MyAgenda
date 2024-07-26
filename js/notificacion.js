function push(argument) {
            //console.log("hola mundo");
            Push.Permission.request();
            Push.create('Hola Mundo',{
                body:'suy tu notificacion',
                icon:"img/icono.png",
                timeout:1500000,
                vibrate: [100,100,100],
                onClick: function() {
                    window.location="https://google.es";
                    console.log(this);
                }
            });
        } 
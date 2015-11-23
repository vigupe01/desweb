    //metodo para realizar la operacion que esta dentro del campo de texto
    function comprobarResultado(){
        var operacionComprobar = document.getElementById("operacion");
        operacionComprobar.value = eval(operacionComprobar.value);
    }
    //metodo para añadir simbolos al campo de texto
    function meterSigno(operador){
            var signo = document.getElementById("operacion");
            signo.value += operador;
    }
    //metodos para añadir el numero de los dados al campo de texto
    function dadoDeSeis1(numero){
            var operacion = document.getElementById("operacion");
            operacion.value += numero;
    }
    function dadoDeSeis2(numero){
            var operacion = document.getElementById("operacion");
            operacion.value += numero;
    }
    function dadoDeSeis3(numero){
            var operacion = document.getElementById("operacion");
            operacion.value += numero;
    }
    function dadoDeTres1(numero){
            var operacion = document.getElementById("operacion");
            operacion.value += numero;
    }
    function dadoDeTres2(numero){
            var operacion = document.getElementById("operacion");
            operacion.value += numero;
    }
    
    
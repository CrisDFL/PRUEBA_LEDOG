//funcion para el boton de dolar
function dolares(){

    var $ = "$";
    var pes = 164.045; 
    var usd = "(USD)";
    var pre = "$41.01";
 
    var tot = pes / 4.000;
    

    tot = tot.toFixed(2); 
    document.convertidor.do.value = $ + tot;  
    document.convertidor.cop.value = usd; 
    document.convertidor.pre.value = pre; 

    
     
}
//funcion para el boton de pesos colombianos
function peso(){

    var $ = "$";
    var pes = 164.045; 
    cop = "(COP)";
    var pre = "$164.045";

    document.convertidor.do.value = $ + pes;
    document.convertidor.cop.value = cop;
    document.convertidor.pre.value = pre;


}




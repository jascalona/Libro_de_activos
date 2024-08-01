function calculo() {
    try {
        var a = parseFloat(document.getElementById("v_solicitud").value) || 0,
         b = parseFloat(document.getElementById("v_renta").value) || 0,
         c = 100;
    
        document.getElementById("v_total_a_p").value = a * b / c;
    }   catch (e) {}
}
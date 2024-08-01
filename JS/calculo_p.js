function calculo_total_porcentaje() {
    try {
        var a = parseFloat(document.getElementById("v_p_solicitud").value) || 0,
         b = parseFloat(document.getElementById("v_p_renta").value) || 0,
         c = 100;
         d = a * b /c,
         e = parseFloat(document.getElementById("total_general").value || 0),
         f = parseFloat(document.getElementById("v_c_prima").value) || 0 ;
    
        document.getElementById("v_total_renta").value = a * b / c;
        document.getElementById("total_general").value = a + d;
        document.getElementById("total_cuotas").value = e / f;
    }   catch (e) {}
}

 


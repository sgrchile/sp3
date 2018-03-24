function cambia_rubro(){
    //tomo el valor del select del rubro elegido
    var rubro
    rubro = document.form1.rubro[document.form1.rubro.selectedIndex].value
    //miro a ver si el pais está definido
    if (rubro != 0) {
        //si estaba definido, entonces coloco las opciones del rubro correspondiente.
        //selecciono el array de subrubro adecuado
        mis_provincias=eval("provincias_" + pais)
        //calculo el numero de provincias
        num_provincias = mis_provincias.length
        //marco el número de provincias en el select
        document.f1.provincia.length = num_provincias
        //para cada provincia del array, la introduzco en el select
        for(i=0;i<num_provincias;i++){
            document.f1.provincia.options[i].value=mis_provincias[i]
            document.f1.provincia.options[i].text=mis_provincias[i]
        }
    }else{
        //si no había provincia seleccionada, elimino las provincias del select
        document.f1.provincia.length = 1
        //coloco un guión en la única opción que he dejado
        document.f1.provincia.options[0].value = "-"
        document.f1.provincia.options[0].text = "-"
    }
    //marco como seleccionada la opción primera de provincia
    document.f1.provincia.options[0].selected = true
}
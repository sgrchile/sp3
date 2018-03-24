/*******************************************************************************
** Fecha Descripcion                                                 Responsable
** 06-01-11 Cambia la definicion de rubro, subrubros y actualiza     C. Martinez
**          actividades
*******************************************************************************/
rubros = new Array();
rubros["A"] = "AGRICULTURA, GANADERÍA, CAZA Y SILVICULTURA";
rubros["B"] = "PESCA";
rubros["C"] = "EXPLOTACIÓN DE MINAS Y CANTERAS";
rubros["D"] = "INDUSTRIAS MANUFACTURERAS NO METÁLICAS";
rubros["E"] = "INDUSTRIAS MANUFACTURERAS METÁLICAS";
rubros["F"] = "SUMINISTRO DE ELECTRICIDAD, GAS Y AGUA";
rubros["G"] = "CONSTRUCCIÓN";
rubros["H"] = "COMERCIO AL POR MAYOR Y MENOR; REP. VEH.AUTOMOTORES/ENSERES DOMÉSTICOS";
rubros["I"] = "HOTELES Y RESTAURANTES";
rubros["J"] = "TRANSPORTE, ALMACENAMIENTO Y COMUNICACIONES";
rubros["K"] = "INTERMEDIACIÓN FINANCIERA";
rubros["L"] = "ACTIVIDADES INMOBILIARIAS, EMPRESARIALES Y DE ALQUILER";
rubros["M"] = "ADM. PÚBLICA Y DEFENSA; PLANES DE SEG. SOCIAL AFILIACIÓN OBLIGATORIA";
rubros["N"] = "ENSEÑANZA";
rubros["O"] = "SERVICIOS SOCIALES Y DE SALUD";
rubros["P"] = "OTRAS ACTIVIDADES DE SERVICIOS COMUNITARIAS, SOCIALES Y PERSONALES";
rubros["Q"] = "CONSEJO DE ADMINISTRACIÓN DE EDIFICIOS Y CONDOMINIOS";
rubros["R"] = "ORGANIZACIONES Y ÓRGANOS EXTRATERRITORIALES";


function cambia_provincia(){
    //tomo el valor del select del pais elegido
    var rubro
    rubro = document.f1.pais[document.f1.pais.selectedIndex].value
    //miro a ver si el pais está definido
    if (pais != 0) {
        //si estaba definido, entonces coloco las opciones de la provincia correspondiente.
        //selecciono el array de provincia adecuado
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
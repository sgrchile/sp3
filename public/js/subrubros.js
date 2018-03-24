/*******************************************************************************
** Fecha Descripcion                                                 Responsable
** 06-01-11 Cambia la definicion de rubro, subrubros y actualiza     C. Martinez
**          actividades
** 01-06-11 Elimina el subgrupo H519                                 C. Martinez
*******************************************************************************/
subrubros = new Array();
subrubros["A"] = new Array();
subrubros["A"]["011"] = "CULTIVOS EN GENERAL; CULTIVO DE PRODUCTOS DE MERCADO; HORTICULTURA";
subrubros["A"]["012"] = "CRÍA DE ANIMALES";
subrubros["A"]["013"] = "CULTIVO PROD. AGRÍCOLAS EN COMBINACIÓN CON CRÍA DE ANIMALES";
subrubros["A"]["014"] = "ACTIVIDADES DE SERVICIOS AGRÍCOLAS Y GANADEROS";
subrubros["A"]["015"] = "CAZA ORDINARIA Y MEDIANTE TRAMPAS, REPOBLACIÓN, ACT. SERVICIO CONEXAS";
subrubros["A"]["020"] = "SILVICULTURA, EXTRACCIÓN DE MADERA Y ACTIVIDADES DE SERVICIOS CONEXAS";
subrubros["B"] = new Array();
subrubros["B"]["051"] = "EXPLT. DE CRIADEROS DE PECES Y PROD. DEL MAR; SERVICIOS RELACIONADOS";
subrubros["B"]["052"] = "PESCA EXTRACTIVA: Y SERVICIOS RELACIONADOS";
subrubros["C"] = new Array();
subrubros["C"]["100"] = "EXTRACCIÓN, AGLOMERACIÓN DE CARBÓN DE PIEDRA, LIGNITO Y TURBA";
subrubros["C"]["111"] = "EXTRACCIÓN DE PETRÓLEO CRUDO Y GAS NATURAL; ACTIVIDADES RELACIONADAS";
subrubros["C"]["120"] = "EXTRACCIÓN DE MINERALES METALÍFEROS";
subrubros["C"]["141"] = "EXPLOTACIÓN DE MINAS Y CANTERAS";
subrubros["D"] = new Array();
subrubros["D"]["151"] = "PRODUCCIÓN, PROCESAMIENTO Y CONSERVACIÓN DE ALIMENTOS";
subrubros["D"]["152"] = "ELABORACIÓN DE PRODUCTOS LÁCTEOS";
subrubros["D"]["153"] = "ELAB. DE PROD. DE MOLINERÍA, ALMIDONES Y PROD. DERIVADOS DEL ALMIDÓN";
subrubros["D"]["154"] = "ELABORACIÓN DE OTROS PRODUCTOS ALIMENTICIOS";
subrubros["D"]["155"] = "ELABORACIÓN DE BEBIDAS";
subrubros["D"]["160"] = "ELABORACIÓN DE PRODUCTOS DEL TABACO";
subrubros["D"]["171"] = "HILANDERÍA, TEJEDURA Y ACABADO DE PRODUCTOS TEXTILES";
subrubros["D"]["172"] = "FABRICACIÓN DE OTROS PRODUCTOS TEXTILES";
subrubros["D"]["173"] = "FABRICACIÓN DE TEJIDOS Y ARTÍCULOS DE PUNTO Y GANCHILLO";
subrubros["D"]["181"] = "FABRICACIÓN DE PRENDAS DE VESTIR; EXCEPTO PRENDAS DE PIEL";
subrubros["D"]["182"] = "PROCESAMIENTO Y FABRICACIÓN DE ARTÍCULOS DE PIEL Y CUERO";
subrubros["D"]["192"] = "FABRICACIÓN DE CALZADO";
subrubros["D"]["201"] = "ASERRADO Y ACEPILLADURA DE MADERAS";
subrubros["D"]["202"] = "FAB. DE PRODUCTOS DE MADERA Y CORCHO,  PAJA Y DE MATERIALES TRENZABLES";
subrubros["D"]["210"] = "FABRICACIÓN DE PAPEL Y PRODUCTOS DEL PAPEL";
subrubros["D"]["221"] = "ACTIVIDADES DE EDICIÓN";
subrubros["D"]["222"] = "ACTIVIDADES DE IMPRESIÓN Y DE SERVICIOS CONEXOS";
subrubros["D"]["231"] = "FABRICACIÓN DE PRODUCTOS DE HORNOS COQUE Y DE REFINACIÓN DE PETRÓLEO";
subrubros["D"]["233"] = "ELABORACIÓN DE COMBUSTIBLE NUCLEAR";
subrubros["D"]["241"] = "FABRICACIÓN DE SUSTANCIAS QUÍMICAS BÁSICAS";
subrubros["D"]["242"] = "FABRICACIÓN DE OTROS PRODUCTOS QUÍMICOS";
subrubros["D"]["243"] = "FABRICACIÓN DE FIBRAS MANUFACTURADAS";
subrubros["D"]["251"] = "FABRICACIÓN DE PRODUCTOS DE CAUCHO";
subrubros["D"]["252"] = "FABRICACIÓN DE PRODUCTOS DE PLÁSTICO";
subrubros["D"]["261"] = "FABRICACIÓN DE VIDRIOS Y PRODUCTOS DE VIDRIO";
subrubros["D"]["269"] = "FABRICACIÓN DE PRODUCTOS MINERALES NO METÁLICOS N.C.P.";
subrubros["E"] = new Array();
subrubros["E"]["271"] = "INDUSTRIAS BÁSICAS DE HIERRO Y ACERO";
subrubros["E"]["272"] = "FAB. DE PRODUCTOS PRIMARIOS DE METALES PRECIOSOS Y METALES NO FERROSOS";
subrubros["E"]["273"] = "FUNDICIÓN DE METALES";
subrubros["E"]["281"] = "FAB. DE PROD. METÁLICOS PARA USO ESTRUCTURAL";
subrubros["E"]["289"] = "FAB. DE OTROS PROD. ELABORADOS DE METAL; ACT. DE TRABAJO DE METALES";
subrubros["E"]["291"] = "FABRICACIÓN DE MAQUINARIA DE USO GENERAL";
subrubros["E"]["292"] = "FABRICACIÓN DE MAQUINARIA DE USO ESPECIAL";
subrubros["E"]["293"] = "FABRICACIÓN DE APARATOS DE USO DOMÉSTICO N.C.P.";
subrubros["E"]["300"] = "FABRICACIÓN DE MAQUINARIA DE OFICINA, CONTABILIDAD E INFORMÁTICA";
subrubros["E"]["311"] = "FAB. Y REPARACIÓN DE MOTORES, GENERADORES Y TRANSFORMADORES ELÉCTRICOS";
subrubros["E"]["312"] = "FABRICACIÓN DE APARATOS DE DISTRIBUCIÓN Y CONTROL; SUS REPARACIONES";
subrubros["E"]["313"] = "FABRICACIÓN DE HILOS Y CABLES AISLADOS";
subrubros["E"]["314"] = "FABRICACIÓN DE ACUMULADORES DE PILAS Y BATERÍAS  PRIMARIAS";
subrubros["E"]["315"] = "FABRICACIÓN Y REPARACIÓN DE LÁMPARAS Y EQUIPO DE ILUMINACIÓN";
subrubros["E"]["319"] = "FABRICACIÓN Y REPARACIÓN DE OTROS TIPOS DE EQUIPO ELÉCTRICO N.C.P.";
subrubros["E"]["321"] = "FABRICACIÓN DE COMPONENTES ELECTRÓNICOS; SUS REPARACIONES";
subrubros["E"]["322"] = "FAB. Y REPARACIÓN DE TRANSMISORES DE RADIO, TELEVISIÓN, TELEFONÍA";
subrubros["E"]["323"] = "FAB. DE RECEPTORES DE RADIO, TELEVISIÓN, APARATOS DE AUDIO/VÍDEO";
subrubros["E"]["331"] = "FAB. DE APARATOS E INSTRUMENTOS MÉDICOS Y PARA REALIZAR MEDICIONES";
subrubros["E"]["332"] = "FAB. Y REPARACIÓN DE INSTRUMENTOS DE ÓPTICA Y EQUIPO FOTOGRÁFICO";
subrubros["E"]["333"] = "FABRICACIÓN DE RELOJES";
subrubros["E"]["341"] = "FABRICACIÓN DE VEHÍCULOS AUTOMOTORES";
subrubros["E"]["351"] = "CONSTRUCCIÓN Y REPARACIÓN DE BUQUES Y OTRAS EMBARCACIONES";
subrubros["E"]["352"] = "FAB. DE LOCOMOTORAS Y MATERIAL RODANTE PARA FERROCARRILES Y TRANVÍAS";
subrubros["E"]["353"] = "FABRICACIÓN DE AERONAVES Y NAVES ESPACIALES; SUS REPARACIONES";
subrubros["E"]["359"] = "FABRICACIÓN DE OTROS TIPOS DE EQUIPO DE TRANSPORTE N.C.P.";
subrubros["E"]["361"] = "FABRICACIÓN DE MUEBLES";
subrubros["E"]["369"] = "INDUSTRIAS MANUFACTURERAS N.C.P.";
subrubros["E"]["371"] = "RECICLAMIENTO DE DESPERDICIOS Y DESECHOS";
subrubros["F"] = new Array();
subrubros["F"]["401"] = "GENERACIÓN, CAPTACIÓN Y DISTRIBUCIÓN DE ENERGÍA ELÉCTRICA";
subrubros["F"]["402"] = "FABRICACIÓN DE GAS; DISTRIBUCIÓN DE COMBUSTIBLES GASEOSOS POR TUBERÍAS";
subrubros["F"]["403"] = "SUMINISTRO DE VAPOR Y AGUA CALIENTE";
subrubros["F"]["410"] = "CAPTACIÓN, DEPURACIÓN Y DISTRIBUCIÓN DE AGUA";
subrubros["G"] = new Array();
subrubros["G"]["451"] = "CONSTRUCCIÓN";
subrubros["H"] = new Array();
subrubros["H"]["501"] = "VENTA DE VEHÍCULOS AUTOMOTORES";
subrubros["H"]["502"] = "MANTENIMIENTO Y REPARACIÓN DE VEHÍCULOS AUTOMOTORES";
subrubros["H"]["503"] = "VENTA DE PARTES, PIEZAS Y ACCESORIOS DE VEHÍCULOS AUTOMOTORES";
subrubros["H"]["504"] = "VENTA, MANTENIMIENTO Y REPARACIÓN DE MOTOCICLETAS Y SUS PARTES";
subrubros["H"]["505"] = "VENTA AL POR MENOR DE COMBUSTIBLE  PARA AUTOMOTORES";
subrubros["H"]["511"] = "VENTA AL POR MAYOR A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATA";
subrubros["H"]["512"] = "VENTA AL POR MAYOR DE MATERIAS PRIMAS AGROPECUARIAS";
subrubros["H"]["513"] = "VENTA AL POR MAYOR DE ENSERES DOMÉSTICOS";
subrubros["H"]["514"] = "VENTA AL POR MAYOR DE PRODUCTOS INTERMEDIOS, DESECHOS NO AGROPECUARIOS";
subrubros["H"]["515"] = "VENTA AL POR MAYOR DE MAQUINARÍA, EQUIPO Y MATERIALES CONEXOS";
subrubros["H"]["521"] = "COMERCIO AL POR MENOR NO ESPECIALIZADO EN ALMACENES";
subrubros["H"]["522"] = "VENTA POR MENOR DE ALIMENTOS, BEBIDAS, TABACOS EN ALMC. ESPECIALIZADOS";
subrubros["H"]["523"] = "COMERCIO AL POR MENOR DE OTROS PROD. NUEVOS EN ALMC. ESPECIALIZADOS";
subrubros["H"]["524"] = "VENTA AL POR MENOR EN ALMACENES DE ARTÍCULOS USADOS";
subrubros["H"]["525"] = "COMERCIO AL POR MENOR NO REALIZADO EN ALMACENES";
subrubros["H"]["526"] = "REPARACIÓN DE EFECTOS PERSONALES Y ENSERES DOMÉSTICOS";
subrubros["I"] = new Array();
subrubros["I"]["551"] = "HOTELES; CAMPAMENTOS Y OTROS TIPOS DE HOSPEDAJE TEMPORAL";
subrubros["I"]["552"] = "RESTAURANTES, BARES Y CANTINAS";
subrubros["J"] = new Array();
subrubros["J"]["601"] = "TRANSPORTE POR FERROCARRILES";
subrubros["J"]["602"] = "OTROS TIPOS DE TRANSPORTE POR VÍA TERRESTRE";
subrubros["J"]["603"] = "TRANSPORTE POR TUBERÍAS";
subrubros["J"]["611"] = "TRANSPORTE MARÍTIMO Y DE CABOTAJE";
subrubros["J"]["612"] = "TRANSPORTE POR VÍAS DE NAVEGACIÓN INTERIORES";
subrubros["J"]["621"] = "TRANSPORTE POR VÍA AÉREA";
subrubros["J"]["630"] = "ACT. DE TRANSPORTE COMPLEMENTARIAS Y AUXILIARES; AGENCIAS DE VIAJE";
subrubros["J"]["641"] = "ACTIVIDADES POSTALES Y DE CORREO";
subrubros["J"]["642"] = "TELECOMUNICACIONES";
subrubros["K"] = new Array();
subrubros["K"]["651"] = "INTERMEDIACIÓN MONETARIA";
subrubros["K"]["659"] = "OTROS TIPOS DE INTERMEDIACIÓN FINANCIERA";
subrubros["K"]["671"] = "ACT. AUX. DE LA INTERMEDIACIÓN FINANCIERA, EXCEPTO PLANES DE SEGUROS";
subrubros["K"]["672"] = "ACT. AUXILIARES DE FINANCIACIÓN DE PLANES DE SEGUROS Y DE PENSIONES";
subrubros["L"] = new Array();
subrubros["L"]["701"] = "ACTIVIDADES INMOBILIARIAS REALIZADAS CON BIENES PROPIOS O ARRENDADOS";
subrubros["L"]["702"] = "ACT. INMOBILIARIAS REALIZADAS A CAMBIO DE RETRIBUCIÓN O POR CONTRATA";
subrubros["L"]["711"] = "ALQUILER EQUIPO DE TRANSPORTE";
subrubros["L"]["712"] = "ALQUILER DE OTROS TIPOS DE MAQUINARIA Y EQUIPO";
subrubros["L"]["713"] = "ALQUILER DE EFECTOS PERSONALES Y ENSERES DOMÉSTICOS N.C.P.";
subrubros["L"]["721"] = "SERVICIOS INFORMÁTICOS";
subrubros["L"]["725"] = "MANTENIMIENTO Y REPARACIÓN DE MAQUINARIA DE OFICINA";
subrubros["L"]["731"] = "ACTIVIDADES DE INVESTIGACIONES Y DESARROLLO EXPERIMENTAL";
subrubros["L"]["741"] = "ACTIVIDADES JURÍDICAS Y DE ASESORAMIENTO EMPRESARIAL EN GENERAL";
subrubros["L"]["742"] = "ACTIVIDADES DE ARQUITECTURA E INGENIERÍA Y OTRAS ACTIVIDADES TÉCNICAS";
subrubros["L"]["743"] = "PUBLICIDAD";
subrubros["L"]["749"] = "ACT. EMPRESARIALES Y DE PROFESIONALES PRESTADAS A EMPRESAS N.C.P.";
subrubros["M"] = new Array();
subrubros["M"]["751"] = "GOBIERNO CENTRAL Y ADMINISTRACIÓN PÚBLICA";
subrubros["M"]["753"] = "ACTIVIDADES DE PLANES DE SEGURIDAD SOCIAL DE AFILIACIÓN OBLIGATORIA";
subrubros["N"] = new Array();
subrubros["N"]["801"] = "ENSEÑANZA PREESCOLAR, PRIMARIA, SECUNDARIA Y SUPERIOR; PROFESORES";
subrubros["O"] = new Array();
subrubros["O"]["851"] = "ACTIVIDADES RELACIONADAS CON LA SALUD HUMANA";
subrubros["O"]["852"] = "ACTIVIDADES VETERINARIAS";
subrubros["O"]["853"] = "ACTIVIDADES DE SERVICIOS SOCIALES";
subrubros["P"] = new Array();
subrubros["P"]["900"] = "ELIMINACIÓN DE DESPERDICIOS Y AGUAS RESIDUALES, SANEAMIENTO";
subrubros["P"]["911"] = "ACT. DE ORGANIZACIONES EMPRESARIALES, PROFESIONALES Y DE EMPLEADORES";
subrubros["P"]["912"] = "ACTIVIDADES DE SINDICATOS Y DE OTRAS ORGANIZACIONES";
subrubros["P"]["921"] = "ACT. DE CINEMATOGRAFÍA, RADIO Y TV Y OTRAS ACT. DE ENTRETENIMIENTO";
subrubros["P"]["922"] = "ACTIVIDADES DE AGENCIAS DE NOTICIAS Y SERVICIOS PERIODISTICOS";
subrubros["P"]["923"] = "ACTIVIDADES DE BIBLIOTECAS, ARCHIVOS Y MUSEOS Y OTRAS ACT. CULTURALES";
subrubros["P"]["924"] = "ACTIVIDADES DEPORTIVAS Y OTRAS ACTIVIDADES DE ESPARCIMIENTO";
subrubros["P"]["930"] = "OTRAS ACTIVIDADES DE SERVICIOS";
subrubros["Q"] = new Array();
subrubros["Q"]["950"] = "CONSEJO DE ADMINISTRACION DE EDIFICIOS Y CONDOMINIOS";
subrubros["R"] = new Array();
subrubros["R"]["990"] = "ORGANIZACIONES Y ÓRGANOS EXTRATERRITORIALES";


function cambia_subrubro(){
    //tomo el valor del select del rubro elegido
    var rubro
    rubro = document.form1.rubro[document.form1.rubro.selectedIndex].value
    //miro a ver si el pais está definido
    //calculo el numero de rubros
    num_rubros = subrubros.length
    if (rubro != 0) {
        for (a=0;a<num_rubros;a++){
            if (rubro = subrubros[a]){
                //calculo el numero de subrubros
                num_subrubros = subrubros[a].length
                //marco el número de provincias en el select
                document.form1.subrubro.length = num_subrubros
                for(i=0;i<num_subrubros;i++){
                    document.form1.subrubro.options[i].value=num_subrubros[i]
                    document.form1.subrubro.options[i].text=num_subrubros[i]
                }
            }
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

function lista(rubro) {
    $('#subrubro option').remove();

    subrubros.forEach(function (valor, indice, array) {

    });

    if (rubro == 1 || rubro == 2 || rubro == 4) {
        $('#ddlCategoria').append('<option value="0" ">Todos...</option>');
        $('#ddlCategoria').append('<option value="1" ">1 Estrella</option>');
        $('#ddlCategoria').append('<option value="2" ">2 Estrellas</option>');
        $('#ddlCategoria').append('<option value="3" ">3 Estrellas</option>');
        $('#ddlCategoria').append('<option value="4" ">4 Estrellas</option>');
        $('#ddlCategoria').append('<option value="5" ">5 Estrellas</option>');
    }
    if (rubro == 3 || rubro == 5) {
        $('#ddlCategoria').append('<option value="0" ">Todos...</option>');
        $('#ddlCategoria').append('<option value="1" ">1 Llave</option>');
        $('#ddlCategoria').append('<option value="2" ">2 Llaves</option>');
        $('#ddlCategoria').append('<option value="3" ">3 Llaves</option>');
        $('#ddlCategoria').append('<option value="4" ">4 Llaves</option>');
        $('#ddlCategoria').append('<option value="5" ">5 Llaves</option>');
    }
}
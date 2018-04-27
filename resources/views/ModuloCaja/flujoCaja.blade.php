@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
      $("#boton1").click(function(){
          $("* #a").fadeToggle();e();

      });
  });

  $(document).ready(function(){
      $("#boton2").click(function(){
          $("* #b").fadeToggle();

      });
  });

  $(document).ready(function(){
      $("#boton3").click(function(){
          $("* #c").fadeToggle();

      });
  });
  $(document).ready(function(){
      $("#boton4").click(function(){
          $("* #d").fadeToggle();

      });
  });

  $(document).ready(function(){
      $("#boton5").click(function(){
          $("* #e").fadeToggle();

      });
  });
  $(document).ready(function(){
      $("#boton6").click(function(){
          $("* #f").fadeToggle();

      });
  });

  $(document).ready(function(){
      $("#boton7").click(function(){
          $("* #g").fadeToggle();

      });
  });

  $(document).ready(function(){
      $("#boton8").click(function(){
          $("* #h").fadeToggle();

      });
  });

  $(document).ready(function(){
      $("#boton9").click(function(){
          $("* #i").fadeToggle();

      });
  });


  $(document).ready(function(){
      $("#boton10").click(function(){
          $("* #j").fadeToggle();

      });
  });

  $(document).ready(function(){
      $("#boton11").click(function(){
          $("* #k").fadeToggle();

      });
  });

  $(document).ready(function(){
      $("#boton12").click(function(){
          $("* #m").fadeToggle();

      });
  });

  $(document).ready(function(){
      $("#boton13").click(function(){
          $("* #n").fadeToggle();

      });
  });

  $(document).ready(function(){
      $("#boton14").click(function(){
          $("* #o").fadeToggle();

      });
  });

  $(document).ready(function(){
      $("#boton15").click(function(){
          $("* #p").fadeToggle();

      });
  });

  $(document).ready(function(){
      $("#boton16").click(function(){
          $("* #q").fadeToggle();

      });
  });

  </script>


<div class="container">
    {{ Form::select('empresas',App\Empresa::pluck('EMP_DESC','EMP_ID'),null,['class'=>'btn btn-default dropdown-toggle','style'=>'width:175px']) }}
<br>
{{ Form::label('periodo','PERIODO :') }}
<input type="date" name="fechaini">
<input type="date" name="fechafin">
    <td><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:30px;"></i></button></td>
</div>

<br>
<!--tabla-->
<div class=" container table-responsive">
<table class="table-responsive .table-hover">
<table class="table-bordered">

  <tbody>
   <tr>
      <td></td>
      <th>Tipo de cuenta</th>
      <th><p>Detalle</p></th>
      <td>{!! 'ENERO' !!}</td>
      <td>{!! 'FEBRERO' !!}</td>
      <td>{!! 'MARZO' !!}</td>
      <td>{!! 'ABRIL' !!}</td>
      <td>{!! 'MAYO' !!}</td>
      <td>{!! 'JUNIO' !!}</td>
      <td>{!! 'JULIO' !!}</td>
      <td>{!! 'AGOSTO' !!}</td>
      <td>{!! 'SEPTIEMBRE' !!}</td>
      <td>{!! 'OCTUBRE' !!}</td>
      <td>{!! 'NOVIEMBRE' !!}</td>
      <td>{!! 'DICIEMBRE' !!}</td>
    </tr>


<!--VENTAS-->
     <tr >
        <td rowspan="5"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton1">+</button></td>
        <td id="a1" rowspan="5">Ventas</td>
        <td id="a1"><p id="a1">Total</p></td>
        <td id="a1">&nbsp;</td>
        <td id="a1">&nbsp;</td>
        <td id="a1">&nbsp;</td>
        <td id="a1">&nbsp;</td>
        <td id="a1">&nbsp;</td>
        <td id="a1">&nbsp;</td>
        <td id="a1">&nbsp;</td>
        <td id="a1">&nbsp;</td>
        <td id="a1">&nbsp;</td>
        <td id="a1">&nbsp;</td>
        <td id="a1">&nbsp;</td>
        <td id="a1">&nbsp;</td>
     </tr>

     <tr >

        <td id="a"><p id="a">Afectas neta</p></td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
     </tr>

     <tr >
        <td id="a"><p id="a">Exentas</p></td>
        <td id="a"></td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
     </tr>

      <tr >
        <td id="a"><p id="a">Proyectadas</p></td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
     </tr>

     <tr >
        <td id="a"><p id="a">Cumplimiento</p></td>
        <td id="a">&nbsp;</td>
        <td id="a" >&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
        <td id="a">&nbsp;</td>
     </tr>

<!--//VENTAS-->

<!--COMISIONES-->
    <tr>
      <td rowspan="3"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton2">+</button></td>
      <td id="b1" rowspan="3">Comisiones</td>
    </tr>

     <tr>
      <td id="b">
          <p id="b">Tipo 1</p>
      </td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
    </tr>

    <tr>
      <td id="b">
          <p id="b">Tipo 2</p>
      </td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
      <td id="b">&nbsp;</td>
    </tr>
<!--//COMISIONES-->

<!--Cuentas por cobrar-->
    <tr>
      <td rowspan="4"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton3">+</button></td>
      <td id="c1"  rowspan="4">Cuentas por cobrar</td>


    </tr>

    <tr>
      <td id="c">
        <p id="c">Brutas</p>

      </td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
    </tr>

    <tr>

      <td id="c">

          <p id="c">Netas</p>

      </td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
    </tr>

    <tr>
      <td id="c">
          <p id="c">Acumuladas(brutas)</p>
      </td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
      <td id="c">&nbsp;</td>
    </tr>

<!--//Cuentas por cobrar-->

<!--Ingresos-->
    <tr>
      <td rowspan="5"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton4">+</button></td>
      <td id="d1" rowspan="5">Ingresos </td>
    </tr>
    <tr>
      <td id="d1">
        <p id="d1">Total</p>
      </td>
      <td id="den">&nbsp;</td>
      <td id="dfe">&nbsp;</td>
      <td id="dmr">&nbsp;</td>
      <td id="dab">&nbsp;</td>
      <td id="dmy">&nbsp;</td>
      <td id="djn">&nbsp;</td>
      <td id="djl">&nbsp;</td>
      <td id="dag">&nbsp;</td>
      <td id="dse">&nbsp;</td>
      <td id="doc">&nbsp;</td>
      <td id="dno">&nbsp;</td>
      <td id="ddi">&nbsp;</td>
    </tr>

    <tr>
      <td id="d">
        <p id="d">Exentos</p>
      </td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
    </tr>

    <tr>
      <td id="d">
       <p id="d">Afectos (brutos)</p>
      </td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
    </tr>

     <tr>
      <td id="d">
         <p id="d">Afectos (netos) </p>
      </td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
      <td id="d">&nbsp;</td>
    </tr>
<!--//Ingresos-->

<!--Costos Variables -->
    <tr>

      <td rowspan="4"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton5">+</button></td>
      <td id="e1" rowspan="4"><p>Costos Variables </p></td>

      <td id="e">
        <p id="e">G operativos </p>

      </td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
    </tr>
    <td id="e">
        <p id="e">Proveedores</p>
      </td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
    </tr>
    <td id="e">
        <p id="e">Impuestos</p>
      </td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
      <td id="e">&nbsp;</td>
    </tr>
    <td id="e1">
        <p id="e1">Total CV </p>
      </td>
      <td id="e1">&nbsp;</td>
      <td id="e1">&nbsp;</td>
      <td id="e1">&nbsp;</td>
      <td id="e1">&nbsp;</td>
      <td id="e1">&nbsp;</td>
      <td id="e1">&nbsp;</td>
      <td id="e1">&nbsp;</td>
      <td id="e1">&nbsp;</td>
      <td id="e1">&nbsp;</td>
      <td id="e1">&nbsp;</td>
      <td id="e1">&nbsp;</td>
      <td id="e1">&nbsp;</td>
    </tr>
<!--//Costos Variables -->

<!--Cuentas por pagar -->
    <tr>
      <td rowspan="3"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton6">+</button></td>
      <td id="f1"  rowspan="3">Cuentas por pagar </td>
    </tr>

    <tr>

      <td id="f">
        <p id="f">Del mes (brutas) </p>

      </td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
    </tr>

    <tr>

      <td id="f">
        <p id="f">Acumuladas (brutas) </p>
      </td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
      <td id="f">&nbsp;</td>
    </tr>


<!--//Cuentas por pagar -->

<!--Costos fijos -->
    <tr>
      <td rowspan="6"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton7">+</button></td>
      <td id="g1" rowspan="6">Costos fijos </td>
    </tr>
    <tr>
      <td id="g">
        <p id="g">Servicios SGR</p>

      </td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
    </tr>
    <tr>

      <td id="g">

        <p>Nomina</p>

      </td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
    </tr>
    <tr>

      <td id="g">

        <p>Imposiciones</p>

      </td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
    </tr>
    <tr>

      <td id="g">

        <p>Costos administrativos</p>

      </td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
      <td id="g">&nbsp;</td>
    </tr>
    <tr>

      <td id="g1">

        <p>Total cf </p>
      </td>
      <td id="g1">&nbsp;</td>
      <td id="g1">&nbsp;</td>
      <td id="g1">&nbsp;</td>
      <td id="g1">&nbsp;</td>
      <td id="g1">&nbsp;</td>
      <td id="g1">&nbsp;</td>
      <td id="g1">&nbsp;</td>
      <td id="g1">&nbsp;</td>
      <td id="g1">&nbsp;</td>
      <td id="g1">&nbsp;</td>
      <td id="g1">&nbsp;</td>
      <td id="g1">&nbsp;</td>
    </tr>


<!--//Costos fijos -->

<!--bonos-->
    <tr>
      <td rowspan="5"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton8">+</button></td>
      <td id="h1" rowspan="5">Bonos </td>
    </tr>

    <tr>
      <td id="h">
        <p id="h">Bono 1</p>
      </td>
      <td id="h">&nbsp;</td>
      <td id="h">&nbsp;</td>
      <td id="h">&nbsp;</td>
      <td id="h">&nbsp;</td>
      <td id="h">&nbsp;</td>
      <td id="h">&nbsp;</td>
      <td id="h">&nbsp;</td>
      <td id="h">&nbsp;</td>
      <td id="h">&nbsp;</td>
      <td id="h">&nbsp;</td>
      <td id="h">&nbsp;</td>
      <td id="h">&nbsp;</td>
    </tr>

     <tr>
        <td id="h">
        <p id="h">Bono 2</p>
        </td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
      </tr>

      <tr>
        <td id="h">
        <p id="h">Bono 3</p>
        </td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
        <td id="h">&nbsp;</td>
      </tr>

      <tr>
        <td id="h1">
        <p id="h1">Total Bonos </p>
        </td>
        <td id="h1">&nbsp;</td>
        <td id="h1">&nbsp;</td>
        <td id="h1">&nbsp;</td>
        <td id="h1">&nbsp;</td>
        <td id="h1">&nbsp;</td>
        <td id="h1">&nbsp;</td>
        <td id="h1">&nbsp;</td>
        <td id="h1">&nbsp;</td>
        <td id="h1">&nbsp;</td>
        <td id="h1">&nbsp;</td>
        <td id="h1">&nbsp;</td>
        <td id="h1">&nbsp;</td>
      </tr>

<!--//bonos-->

<!--Item de gasto-->
    <tr>
      <td rowspan="5"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton9">+</button></td>
      <td id="i1" rowspan="5">Item de gastos </td>

    </tr>

    <tr>

      <td id="i">
        <p id="i">Variables proyectados </p>

      </td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
    </tr>

    <tr>

      <td id="i">

        <p id="i">% de Uso</p>

      </td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
    </tr>

    <tr>
      <td id="i">

        <p id="i">Fijos proyectados</p>

      </td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
    </tr>
      <tr>

      <td id="i">

        <p id="i">% de uso </p>
      </td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
      <td id="i">&nbsp;</td>
    </tr>
<!--//Item de gasto-->

<!--BALANCE-->
   <tr>
   <td rowspan="4"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton10">+</button></td>
   <td id="j1" rowspan="4">Balance</td>

    </tr>

  <tr>

   <td id="j">
      <p id="j">Facturado (Neto + Exento)</p>

    </td>
    <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
    </tr>

  <tr>

   <td id="j">

      <p id="j">Egresos</p>

    </td>
    <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
    </tr>

  <tr>

   <td id="j">

      <p id="j">Margen mensual </p>
    </td>
    <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
      <td id="j">&nbsp;</td>
    </tr>


<!--//BALANCE-->

<!--DISTRIBCION-->
    <tr>
      <td rowspan="4"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton11">+</button></td>
      <td id="k1" rowspan="4">Distribucion </td>

    </tr>

    <tr>

      <td id="k">
      <p id="k">Empresa</p>

      </td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
    </tr>

    <tr>

      <td id="k">

      <p id="k">Socios</p>

      </td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
    </tr>

    <tr>

      <td id="k">


      <p id="k">Administacion</p>
      </td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
      <td id="k">&nbsp;</td>
    </tr>
<!--//DISTRIBCION-->

<!--Retiros-->

    <tr>
      <td rowspan="4"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton12">+</button></td>
      <td id="m1" rowspan="4">Retiros </td>

    </tr>

    <tr>

      <td id="m">
          <p id="m">Retiro del periodo</p>
      </td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
    </tr>

    <tr>

      <td id="m">

          <p id="m">Retiro</p>

      </td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
    </tr>

     <tr>
       <td id="m">
          <p id="m">Retiro Acumulado</p>
      </td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
      <td id="m">&nbsp;</td>
    </tr>


<!--//Retiros-->

<!--prestamos-->
    <tr>
      <td rowspan="4"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton13">+</button></td>
      <td id="n1" rowspan="4">Prestamos </td>
    </tr>

    <tr>

      <td id="n"><p>Ingresados</p></td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
    </tr>

    <tr>

      <td id="n"><p >Egresados</p></td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
      <td id="n">&nbsp;</td>
    </tr>

    <tr>

      <td id="n1"><p>Acumulados</p></td>
      <td id="nen">&nbsp;</td>
      <td id="nfe">&nbsp;</td>
      <td id="nmr">&nbsp;</td>
      <td id="nab">&nbsp;</td>
      <td id="nmy">&nbsp;</td>
      <td id="njn">&nbsp;</td>
      <td id="njl">&nbsp;</td>
      <td id="nag">&nbsp;</td>
      <td id="nse">&nbsp;</td>
      <td id="noc">&nbsp;</td>
      <td id="nno">&nbsp;</td>
      <td id="ndi">&nbsp;</td>
    </tr>
<!--//prestamos-->

<!--impuestos-->
    <tr>
      <td rowspan="6"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton14">+</button></td>
      <td id="o1" rowspan="6">Impuestos </td>
    </tr>

    <tr>

      <td id="o">
          <p id="o">IVA Ventas</p>

      </td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
    </tr>

    <tr>

      <td id="o">

          <p id="o">IVA Compras</p>

      </td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
    </tr>

    <tr>

      <td id="o">

          <p id="o">IVA a Pagar</p>

      </td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
    </tr>

    <tr>

      <td id="o">


          <p id="o">Otros Impuestos</p>

      </td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
      <td id="o">&nbsp;</td>
    </tr>

    <tr>

      <td id="o1">

          <p id="o1">Total impuestos</p>
      </td>
      <td id="oe">&nbsp;</td>
      <td id="of">&nbsp;</td>
      <td id="om">&nbsp;</td>
      <td id="oa">&nbsp;</td>
      <td id="om">&nbsp;</td>
      <td id="oj">&nbsp;</td>
      <td id="ojl">&nbsp;</td>
      <td id="oa">&nbsp;</td>
      <td id="os">&nbsp;</td>
      <td id="oo">&nbsp;</td>
      <td id="on">&nbsp;</td>
      <td id="od">&nbsp;</td>
    </tr>
<!--//impuestos-->

<!--Caja-->
    <tr>
      <td rowspan="5"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton15">+</button></td>
      <td id="p1" rowspan="5">Caja </td>

    </tr>

    <tr>

      <td  id="p">
          <p id="p">Ingresos</p>

      </td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
    </tr>

    <tr>
      <td id="p">
          <p id="p">Egresos</p>

      </td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
button       <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
    </tr>

    <tr>

      <td  id="p">

          <p id="p">Diferencia</p>

      </td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
      <td id="p">&nbsp;</td>
    </tr>

    <tr>

      <td  id="p1">

          <p id="p1">Cuenta</p>
      </td>
      <td id="pen">&nbsp;</td>
      <td id="pfe">&nbsp;</td>
      <td id="pmr">&nbsp;</td>
      <td id="pab">&nbsp;</td>
      <td id="pmy">&nbsp;</td>
      <td id="pjn">&nbsp;</td>
      <td id="pjl">&nbsp;</td>
      <td id="pag">&nbsp;</td>
      <td id="pse">&nbsp;</td>
      <td id="poc">&nbsp;</td>
      <td id="pno">&nbsp;</td>
      <td id="pdi">&nbsp;</td>
    </tr>
<!--//Caja-->

<!--capital-->
    <tr>
      <td rowspan="7"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="boton16">+</button></td>
      <td id="q1" rowspan="7">capital</td>

    </tr>

    <tr>
      <td id="q">
          <p id="q">Empresa</p>
      </td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
       <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
    </tr>

    <tr>
      <td id="q">

          <p id="q">Prestamos</p>
      </td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
       <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
    </tr>

    <tr>
      <td id="q">
          <p id="q">Inversiones</p>
      </td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
       <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
    </tr>
    <tr>
      <td id="q">
          <p id="q">Creditos</p>
      </td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
       <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
    </tr>
    <tr>
      <td id="q">
          <p id="q">Compras</p>
      </td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
       <td id="q">&nbsp;</td>
      <td id="q">&nbsp;</td>
    </tr>
    <tr>
      <td id="q1">
          <p id="q1">TOTAL</p>
      </td>
      <td id="qen">&nbsp;</td>
      <td id="qfe">&nbsp;</td>
      <td id="qmr">&nbsp;</td>
      <td id="qab">&nbsp;</td>
      <td id="qmy">&nbsp;</td>
      <td id="qjn">&nbsp;</td>
      <td id="qjl">&nbsp;</td>
      <td id="qag">&nbsp;</td>
      <td id="qse">&nbsp;</td>
      <td id="qoc">&nbsp;</td>
       <td id="qno">&nbsp;</td>
      <td id="qdi">&nbsp;</td>
    </tr>


  <!--//capital-->
  </tbody>
</table>
</table>

<br>
<br>
<br>

</div>
<!--//tabla-->
<div><a href="index.php"><button type="button" class="btn btn-primary btn-lg">  volver </button></a></div>
@endsection

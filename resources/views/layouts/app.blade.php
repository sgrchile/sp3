  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Plataforma SP3</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('plugins/data-tables/DT_bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/advanced-datatable/css/demo_table.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/advanced-datatable/css/demo_page.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/kalendar/kalendar.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/morris/morris.css') }}" rel="stylesheet" />
  <link href="{{ asset('plugins/scroll/nanoscroller.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/toggle-switch/toggles.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('plugins/checkbox/icheck.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('plugins/checkbox/minimal/blue.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('plugins/dropzone/dropzone.css') }}" rel="stylesheet" rel="stylesheet" type="text/css" />
  <link href="{{ asset('plugins/bootstrap-datepicker/css/datepicker.css') }}" rel="stylesheet" type="text/css"  />
  <link href="{{ asset('plugins/bootstrap-timepicker/compiled/timepicker.css') }}" rel="stylesheet" type="text/css"  />
  <link href="{{ asset('plugins/bootstrap-colorpicker/css/colorpicker.css') }}" rel="stylesheet" type="text/css"  />
</head>

<body class="dark_theme  fixed_header left_nav_fixed">
<div class="wrapper">
<!--\\\\\\\ wrapper Start \\\\\\-->
<div class="header_bar">
  <!--\\\\\\\ header Start \\\\\\-->
  <div class="brand">
    <!--\\\\\\\ brand Start \\\\\\-->
    <div class="logo" style="display:block; background-color:black;"><img src="{{ asset('images/sp3-hor.png') }}" class="img-responsive center-block"></div>
    <div class="small_logo" style="display:none"><img src="{{ asset('images/sp3-hor.png') }}" width="50" height="47" alt="s-logo" /> <img src="{{ asset('images/sp3-hor.png')}}" width="122" height="20" alt="r-logo"/></div>
  </div>
  <!--\\\\\\\ brand end \\\\\\-->
  <div class="header_top_bar">
    <!--\\\\\\\ header top bar start \\\\\\-->
    <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars" style="color:#f9ff00;"></i> </a>
    <div class="top_left">
      <div class="top_left_menu">
        <ul>
          <li class="dropdown"> <a data-toggle="dropdown" href="javascript:void(0);"> <i class="fa fa-th-large" style="color:#f9ff00;"></i> </a>
    <ul class="drop_down_task dropdown-menu" style="margin-top:39px;">
      <div class="top_left_pointer"></div>
      <li> <a href="{{route('error')}}"><i class="fa fa-cog"></i> Configuración</a></li>
      <li> <a href="{{route('error')}}"><i class="fa fa-power-off"></i> Salir</a> </li>
    </ul>
    </li>
        </ul>
      </div>
    </div>
    <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <span>Nueva Tarea</span> </a>
    <div class="top_right_bar">
      <div class="top_right">
        <div class="top_right_menu">
          <ul>
            <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown" style="color:#f9ff00;">  Tareas <span class="badge badge" style="color:#000000;">2</span> </a>
              <ul class="drop_down_task dropdown-menu">
                <div class="top_pointer"></div>
                <li>
                  <p class="number">Tienes 2 tareas pendientes</p>
                </li>
                <li> <a href="{{route('error')}}" class="task">
                  <div class="green_status task_height" style="width:80%;"></div>
                  <div class="task_head"> <span class="pull-left">Tarea 1</span> <span class="pull-right green_label">80%</span> </div>
                  <div class="task_detail">Detalles</div>
                  </a> </li>
                  <li> <a href="{{route('error')}}" class="task">
                    <div class="green_status task_height" style="width:80%;"></div>
                    <div class="task_head"> <span class="pull-left">Tarea 2</span> <span class="pull-right green_label">60%</span> </div>
                    <div class="task_detail">Detalles</div>
                    </a> </li>
                <li> <span class="new"> <a href="{{route('error')}}" class="pull_left">Crear nueva</a> <a href="{{route('error')}}" class="pull-right">Ver todas</a> </span> </li>
              </ul>
            </li>
            <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown" style="color:#f9ff00;"> Correo <span class="badge badge" style="color:#000000;">4</span> </a>
              <ul class="drop_down_task dropdown-menu">
                <div class="top_pointer"></div>
                <li>
                  <p class="number">Tienes 4 correos</p>
                </li>
                <li> <a href="{{route('error')}}" class="mail"> <span class="photo"><img src="{{ asset('images/user.png')}}" /></span> <span class="subject"> <span class="from">Sara</span> <span class="time"></span> </span> <span class="message">Esto es un ejemplo</span> </a> </li>
                <li> <a href="{{route('error')}}" class="mail"> <span class="photo"><img src="{{ asset('images/user.png')}}" /></span> <span class="subject"> <span class="from">Sara</span> <span class="time"></span> </span> <span class="message">Esto es un ejemplo</span> </a> </li>
                <li> <a href="{{route('error')}}" class="mail"> <span class="photo"><img src="{{ asset('images/user.png')}}" /></span> <span class="subject"> <span class="from">Sara</span> <span class="time"></span> </span> <span class="message">Esto es un ejemplo</span> </a> </li>
                <li> <a href="{{route('error')}}" class="mail"> <span class="photo"><img src="{{ asset('images/user.png')}}" /></span> <span class="subject"> <span class="from">Sara</span> <span class="time"></span> </span> <span class="message">Esto es un ejemplo</span> </a> </li>

              </ul>
            </li>
            <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown" style="color:#f9ff00;"> Notificaciones <span class="badge badge" style="color:#000000;">6</span> </a>
              <ul class="drop_down_task dropdown-menu">
                <div class="top_pointer"></div>
                <li>
                  <p class="number">Tienes 6 notificaciones</p>
                </li>
                <li> <a href="{{route('error')}}" class="task">
                  <div class="green_status task_height" style="width:80%;"></div>
                  <div class="task_head"> <span class="pull-left">Tarea 1</span> <span class="pull-right green_label">80%</span> </div>
                  <div class="task_detail">Detalles</div>
                  </a> </li>
                  <li> <a href="{{route('error')}}" class="task">
                    <div class="green_status task_height" style="width:80%;"></div>
                    <div class="task_head"> <span class="pull-left">Tarea 2</span> <span class="pull-right green_label">60%</span> </div>
                    <div class="task_detail">Detalles</div>
                    </a> </li>
                <li> <span class="new"> <a href="{{route('error')}}" class="pull_left">Crear nueva</a> <a href="{{route('error')}}" class="pull-right">Ver todas</a> </span> </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"><img src={{ asset('images/5.png') }} /><span class="user_adminname" style="color:#f9ff00;">{{ Auth::user()->PRO_NOMBRE }} {{ Auth::user()->PRO_APE_PAT }}</span> <b class="caret"></b> </a>
        <ul class="dropdown-menu">
          <div class="top_pointer"></div>
          <li> <a href="{{route('error')}}"><i class="fa fa-user"></i> Perfil</a> </li>
          <li> <a href="{{route('error')}}"><i class="fa fa-question-circle"></i> Ayuda</a> </li>
          <li> <a href="{{route('error')}}"><i class="fa fa-cog"></i> Ajustes </a></li>
          <li> <a href="{{route('error')}}"><i class="fa fa-power-off"></i> Cerrar sesión</a> </li>
        </ul>
      </div>

    </div>
  </div>
  <!--\\\\\\\ header top bar end \\\\\\-->
</div>
<!--\\\\\\\ header end \\\\\\-->
<div class="inner">
  <div class="left_nav">
    <div class="left_nav_slidebar" style="height: 81%;">
      <ul class="nav nav-stacked" id="menu.principal">
      </ul>
    </div>
  </div>
  <!--\\\\\\\left_nav end \\\\\\-->
  <div class="contentpanel">
  <div class="container clear_both padding_fix">
    <div id="main-content">
      <div class="page-content">
        @if (session('error'))
        <div class="row">
            <div class="col-xs-12">
            <div class="alert alert-danger" data-dismiss="alert" aria-label="Close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="text-center">{{ session('error') }}</h5>
            </div>
          </div>
      </div>
        @endif
        @if (session('success'))
        <div class="row">
            <div class="col-xs-12">
            <div class="alert alert-success" data-dismiss="alert" aria-label="Close" >
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="text-center">{{ session('success') }}</h5>
            </div>
          </div>
      </div>
        @endif

        @if (isset($errors) && $errors->any())
          <div class="row">
              <div class="col-xs-12">
                  <div class="alert alert-danger alert-alt">
                      <strong><i class="fa fa-bug fa-fw"></i> Errores encontrados</strong><br>
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              </div>
          </div>
      @endif

@yield('content')


</div>
<!--\\\\\\\ content panel end \\\\\\-->
</div>
<!--\\\\\\\ container end\\\\\\-->
</div>
<!--\\\\\\\ contentpanel end\\\\\\-->
</div>
<!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title" id="myModalLabel">Nueva tarea</h4>
    </div>
    <div class="modal-body"> Contenido </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-primary">Guardar cambios</button>
    </div>
  </div>
</div>
</div>
<!-- Modal -->

<script src="{{ asset('js/jquery-2.1.0.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/common-script.js')}}"></script>
<script src="{{ asset('js/jquery.slimscroll.min.js')}}"></script>
<script src="{{ asset('js/jquery.sparkline.js')}}"></script>
<script src="{{ asset('js/sparkline-chart.js')}}"></script>
<script src="{{ asset('js/graph.js')}}"></script>
<script src="{{ asset('js/edit-graph.js')}}"></script>
<script src="{{ asset('js/jPushMenu.js') }}"></script>
<script src="{{ asset('js/side-chats.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/func.js')}}"></script>
<script src="{{ asset('js/jquery.rut.chileno.js')}}"></script>
<script src="{{ asset('js/menu.controller.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

@section('scripts')

<script src="{{ asset('plugins/kalendar/kalendar.js')}}" type="text/javascript"></script>
<script src="{{ asset('plugins/kalendar/edit-kalendar.js')}}" type="text/javascript"></script>

<script src="{{ asset('plugins/sparkline/jquery.sparkline.js')}}" type="text/javascript"></script>
<script src="{{ asset('plugins/sparkline/jquery.customSelect.min.js')}}" ></script>
<script src="{{ asset('plugins/sparkline/sparkline-chart.js')}}"></script>
<script src="{{ asset('plugins/sparkline/easy-pie-chart.js')}}"></script>
<script src="{{ asset('plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{ asset('plugins/morris/morris-script.js')}}"></script>

<script src="{{ asset('plugins/demo-slider/demo-slider.js')}}"></script>
<script src="{{ asset('plugins/knob/jquery.knob.min.js')}}"></script>


<script src="{{ asset('plugins/scroll/jquery.nanoscroller.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/toggle-switch/toggles.min.js')}}"></script>
<script src="{{ asset('plugins/checkbox/zepto.js')}}"></script>
<script src="{{ asset('plugins/checkbox/icheck.js')}}"></script>
<script src="{{ asset('js/icheck-init.js')}}"></script>
<script src="{{ asset('js/jquery.slimscroll.min.js')}}"></script>
<script src="{{ asset('js/icheck.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/form-components.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/input-mask/jquery.inputmask.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/input-mask/demo-mask.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/dropzone/dropzone.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/ckeditor/ckeditor.js')}}"></script>

<script src="{{ asset('js/jPushMenu.js')}}"></script>
<script src="{{ asset('js/side-chats.js')}}"></script>
<script src="{{ asset('plugins/data-tables/jquery.dataTables.js')}}"></script>
<script src="{{ asset('plugins/data-tables/DT_bootstrap.js')}}"></script>
<script src="{{ asset('plugins/data-tables/dynamic_table_init.js')}}"></script>
<script src="{{ asset('plugins/edit-table/edit-table.js')}}"></script>

@endsection

@yield('scripts')
</body>
</html>

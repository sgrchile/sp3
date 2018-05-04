<?php

Auth::routes();
/**
 * Index
 */
Route::get('/',function(){
   if (Auth::check()){
     return redirect('menu');
     }
     return redirect('login');
   })->name('home');

 Route::get('/login', function () {
       return view('auth/login');
   })->name('login');

   // Registrar
Route::get('/registrar', function () {
    return view('ModuloUsuarios/registerPublic');
})->name('register');

Route::post('/registrar_action', [
    'uses' => 'ProveedoresPublicController@NewProveedor',
    'as' => 'registrar.proveedor.persona',
]);

Route::get('/menu', function () {
         return view('index');
     })->name('menu');

 Route::get('/dashboard', [
      'uses' => 'DashboardController@index',
      'as' => 'dashboard',
  ]);

Route::get('/error', function () {
           return view('errors.404');
       })->name('error');

Route::get('logout', 'Controller@logout');

Route::get('/pdf', function () {
  $pdf = PDF::loadView('pdf.pdf');
            return $pdf->stream('archivo.pdf');
          })->name('pdf');

Route::get('/test', function () {
           return view('test');
       })->name('test');

Route::get('/send', 'EmailController@send');





/**
 * Todas las rutas con prefijo 'modulo'
 */
Route::group(['prefix' => 'modulo'], function () {

    /**
     * Rutas del Modulo de Caja
     */
    Route::group(['prefix' => 'caja'], function () {
        Route::get('/', [
            'uses'  => 'ModuloCajaController@getIndex',
            'as'    => 'moduloCaja',
        ]);

        Route::post('/registro', [
            'uses' => 'ModuloCajaController@postRegistro',
            'as' => 'moduloCaja.registro.post',
        ]);

        Route::get('/historico', [
            'uses' => 'ListaMovimientosController@ListaMovimientos',
            'as' => 'historicoMov',
        ]);

        Route::post('/searchMov', [
            'uses' => 'ListaMovimientosController@PostMovs',
            'as' => 'searchMov',
        ]);

        Route::post('/flujo',[
            'uses' => 'LibrosContablesController@flujodecaja',
            'as' => 'post.flujo',
        ]);


        Route::get('/Finanzas', [
            'uses' => 'ModuloCajaController@financiero',
            'as' => 'Finanzas',
        ]);

        //RUTAS DE CONTABILIDAD
        Route::get('/Contable', function () {
          return view('ModuloCaja.contable');
        })->name('Contable');

        /*Route::get('/librosContables', function () {
          return view('ModuloCaja.librosContables');
        })->name('LibrosContables');*/

        Route::post('/librosContables', [
            'uses' => 'LibrosContablesController@index',
            'as' => 'post.lbs',
        ]);

        Route::post('/BalanceGeneral', [
            'uses' => 'LibrosContablesController@balance',
            'as' => 'post.balance',
        ]);

        /*Route::get('/AsientosContables', function () {
            return view('ModuloCaja.AsientosContables');
        })->name('AsientosContables');*/

        Route::post('/AsientosContables', [
            'uses' => 'AsientoContableController@index',
            'as' => 'post.asients',
        ]);

        /*Route::get('/NuevoAsientoContable', function () {
            return view('ModuloCaja.NuevoAsientoContable');
        })->name('NuevoAsientoContable');*/

        Route::get('/NuevoAsientoContable', [
            'uses' => 'AsientoContableController@create',
            'as' => 'NuevoAsientoContable',
        ]);

        Route::post('/AgregaAsientoContable', [
            'uses' => 'AsientoContableController@store',
            'as' => 'post.asientocontable',
        ]);

        Route::post('/', [
            'uses' => 'AsientoContableController@update',
            'as' => 'post.cuentacontable',
        ]);

        Route::get('EliminarAsiento/{id}', [
            'uses' => 'AsientoContableController@destroy',
            'as' => 'asiento.destroy',
        ]);

        Route::get('EditarAsientoContable/{id}', [
            'uses' => 'AsientoContableController@edit',
            'as' => 'asiento.edit',
        ]);

        Route::get('VerAsientoContable/{id}', [
            'uses' => 'AsientoContableController@show',
            'as' => 'asiento.ver',
        ]);

        /*Route::get('/editarAsientoContable', function () {
            return view('ModuloCaja.editarAsientoContable');
        })->name('editarAsientoContable');*/


        Route::post('/PlanDeCuentas', [
            'uses' => 'CuentaContableController@index',
            'as' => 'post.cta',
        ]);

        Route::post('/CrearCuenta', [
            'uses' => 'CuentaContableController@store',
            'as' => 'post.ctacontable',
        ]);

        Route::put('/EditarCuenta', [
            'uses' => 'CuentaContableController@update',
            'as' => 'put.editarCuenta',
        ]);





// Inicio Rutas del Modulo Solicitud de Fondo
        Route::group(['prefix' => 'solicitud_fondo'], function () {
            Route::get('/', [
                'uses' => 'SolicitudFondoController@index',
                'as' => 'SolFon',
            ]);

            Route::get('/create', [
                'uses' => 'SolicitudFondoController@getAllOts',
                'as' => 'createSolFon',
            ]);

            Route::post('/insert', [
                'uses' => 'SolicitudFondoController@postSolicitudFondo',
                'as' => 'insertSolFon',
            ]);

            Route::group(['prefix' => 'evaluar'], function () {
                Route::get('/','SolicitudFondoController@showEvaluar')->name('verEvaluar');
                Route::get('/{id}','SolicitudFondoController@getModificarEvaluar')->name('get.modificar.evaluar');
                Route::patch('/{id}','SolicitudFondoController@patchModificarEvaluar')->name('patch.modificar.evaluar');
            });

            Route::group(['prefix' => 'transferir'], function () {
                Route::get('/','SolicitudFondoController@showTransferirSf')->name('verTransferir');
                Route::get('/{id}','SolicitudFondoController@getModificarTransferir')->name('get.modificar.transferir');
                Route::patch('/{id}','SolicitudFondoController@patchModificarTransferir')->name('patch.modificar.transferir');
                Route::patch('espera/{id}','SolicitudFondoController@patchModificarEspera')->name('patch.modificar.espera');
            });

            Route::group(['prefix' => 'consolidar'], function () {
                Route::any('/', [
                  'uses' => 'SolicitudFondoController@showConsolidarSf',
                  'as' => 'verConsolidar',
                ]);

                Route::get('/{id}', [
                  'uses' => 'SolicitudFondoController@getModificarConsolidar',
                  'as' => 'get.modificar.consolidar'
                ]);

                Route::patch('/{id}', [
                  'uses' => 'SolicitudFondoController@patchModificarConsolidar',
                  'as' => 'patch.modificar.consolidar'
                ]);
            });

            Route::get('/rendir', [
                'uses' => 'SolicitudFondoController@showRendirSf',
                'as' => 'verRendir',
            ]);

            Route::get('/prepRendicion', [
                'uses' => 'SolicitudFondoController@showPrepRendicionSf',
                'as' => 'verPrepRendicion',
            ]);

            Route::any('/estado', [
                'uses' => 'SolicitudFondoController@showEstadoSf',
                'as' => 'verEstadoSf',
            ]);

            Route::any('/historico', [
                'uses' => 'SolicitudFondoController@showHistorico',
                'as' => 'verHistoricoSf',
            ]);

            Route::any('/verDocumentos/{id}', [
                'uses' => 'SolicitudFondoController@verDocs',
                'as' => 'verDocs',
            ]);

            Route::get('/ingresardocumento/{id}', [
                'uses' => 'SolicitudFondoController@getModIngresarDocSf',
                'as' => 'ingresardocSf',
            ]);

            Route::get('/eliminardocumento/{id}', [
                'uses' => 'SolicitudFondoController@eliminarDocSf',
                'as' => 'eliminarDoc',
            ]);

            Route::post('/createIngdocumento', [
                'uses' => 'SolicitudFondoController@insertIngDoc',
                'as' => 'crearIngDoc.post',
            ]);

            Route::post('/buscarEstado', [
                'uses' => 'SolicitudFondoController@searchEstado',
                'as' => 'searchEstado.post',
            ]);

            Route::patch('/editIngresoDocumento/{id}', [
                'uses' => 'SolicitudFondoController@putModIngDocSf',
                'as' => 'patch.ModIngDocSf',
            ]);
        });
// Fin Rutas del Modulo de Solicitud de Fondo
        Route::group(['prefix' => 'cartola'], function () {
            Route::get('/', [
                'uses'  => 'CartolaBancariaController@getAllCartolas',
                'as'    => 'VisualizarCartola',
            ]);

            Route::get('/create', [
                'uses'  => 'CartolaBancariaController@getIndex',
                'as'    => 'AgregarCartola',
            ]);

            Route::post('/create', [
                'uses'  => 'CartolaBancariaController@postRegistro',
                'as'    => 'AgregarCartola.registro.post',
            ]);

            Route::get('/consolidar', function () {
                return view('ModuloCaja.consolidarCartola');
            })->name('consolidarCartola');
        });
    });

    /**
     * Rutas del Modulo de Orden de Trabajo
     */
    Route::group(['prefix' => 'orden_trabajo'], function () {
        Route::get('/', function () {
            return view('ModuloOt.ModuloOrdenDeTrabajo');
        })->name('ModuloOt');

        Route::get('/show/{id}', [
            'uses' => 'ListaOtController@getVerOt',
            'as' => 'verOT',
        ]);

        Route::get('/create', [
            'uses' => 'OrdenTrabajoController@getAgregarOrdenTrabajo',
            'as' => 'ModuloOt.IngresoOt',
        ]);

        Route::post('/create', [
            'uses' => 'OrdenTrabajoController@postAgregarOrdenTrabajo',
            'as' => 'ordenTrabajo.agregar.post',
        ]);

        Route::get('/lista', [
            'uses' => 'ListaOtController@ListaOt',
            'as' => 'ModuloOt.listaOt',
        ]);

        Route::get('/edit/{id}', [
            'uses' => 'ListaOtController@getModificarOt',
            'as' => 'modificaOt',
        ]);

        Route::patch('/edit/{id}', [
            'uses' => 'ListaOtController@putModificarOt',
            'as' => 'patch.orden_trabajo',
        ]);

        Route::get('/configurar', function () {
            return view('ModuloOt.confOT');
        })->name('confOT');

        Route::get('/graficos', [
            'uses' => 'OrdenTrabajoController@getGrafico',
            'as' => 'Graficos',
        ]);

        Route::group(['prefix' => 'clientes'], function () {
            Route::get('/', [
                'uses' => 'OrdenTrabajoController@getClientes',
                'as' => 'regcli',
            ]);
                Route::get('/{rut}', [
                    'uses' => 'ClientesController@result',
                    'as' => 'result',
                    ]);

            Route::post('/', [
                 'uses' => 'ClientesController@store',
                'as' => 'post.clientes',
            ]);

            Route::post('/', [
                'uses' => 'ProspectoController@store',
                'as' => 'post.prospecto',
            ]);

            Route::post('/cont', [
                /* 'uses' => 'OrdenTrabajoController@postClientes'*/
                'uses' => 'ClientesController@regcontac',
                'as' => 'post.contacto',
            ]);

            Route::get('/create', [
                'uses' => 'ActividadesController@create',
                'as' => 'create.actividad',
            ]);

            Route::post('/act', [
                'uses' => 'ActividadesController@store',
                'as' => 'post.actividad',
            ]);

            Route::get('/edit/{id}', [
                'uses' => 'ActividadesController@edit',
                'as' => 'mod.actividad',
            ]);

            Route::put('/', [
                'uses' => 'ActividadesController@update',
                'as' => 'update.actividad',
            ]);

            Route::get('/Eliminar/{id}', [
                'uses' => 'ActividadesController@destroy',
                'as' => 'actividad.destroy',
            ]);

            /*Route::get('/all', [
                'uses' => 'ClientesController@index',
                'as' => '',
            ]);*/

            Route::resource('clientes','ClientesController');
        });
    });

    /**
     * Rutas del Modulo RRHH
     */

    Route::group(['prefix' => 'rrhh'], function () {
        Route::get('/', function () {
            return view('ModuloRRHH.ModuloRRHH');
        })->name('RRHH');

        Route::group(['prefix' => 'mi_carpeta'], function () {
            Route::get('/', function () {
                return view('ModuloRRHH.MicarpetaRRHH.CarpetaPersonal');
            })->name('CarpetaPersonal');

            Route::get('/datos', function () {
                return view('ModuloRRHH.MicarpetaRRHH.misDatos');
            })->name('misdatos');

            Route::get('/datos_adicionales', function () {
                return view('ModuloRRHH.MicarpetaRRHH.datosAdicionales');
            })->name('datosAdicionales');

            Route::get('/documentos_laborales', function () {
                return view('ModuloRRHH.MicarpetaRRHH.docLaborales');
            })->name('docLaborales');

            Route::get('/reset/password', function () {
                return view('ModuloRRHH.MicarpetaRRHH.cambioContrasena');
            })->name('resetpass');
        });

        Route::group(['prefix' => 'solicitudes'], function () {
            Route::get('/adelanto', function () {
                return view('ModuloRRHH.MicarpetaRRHH.solicitudes.solAdelanto');
            })->name('solAdelanto');

            Route::get('/licencia_medica', function () {
                return view('ModuloRRHH.MicarpetaRRHH.solicitudes.solLcMed');
            })->name('solLM');

            Route::get('/permiso_especial', function () {
                return view('ModuloRRHH.MicarpetaRRHH.solicitudes.solPerEsp');
            })->name('solPerEsp');

            Route::get('/vacaciones', function () {
                return view('ModuloRRHH.MicarpetaRRHH.solicitudes.solVac');
            })->name('solVac');
        });

        Route::group(['prefix' => 'admin'], function () {
            Route::get('/', function () {
                return view('ModuloRRHH.AdmRRHH.admRRHH');
            })->name('admRRHH');

            Route::get('/bonos', function () {
                return view('ModuloRRHH.AdmRRHH.bonos.bonos');
            })->name('bonos');

            Route::get('/remuneracion', function () {
                return view('ModuloRRHH.AdmRRHH.liquidaciones');
            })->name('Liquidaciones');

            Route::get('/consultar/liquidaciones', function () {
                return view('ModuloRRHH.AdmRRHH.consLiquidaciones');
            })->name('consLiquidacion');

            Route::group(['prefix' => 'solicitud'], function () {
                Route::get('/', function () {
                    return view('ModuloRRHH.AdmRRHH.solicitudes');
                })->name('Solicitudes');

                Route::get('/vacaciones', function () {
                    return view('ModuloRRHH.AdmRRHH.solicitudes.Vacaciones');
                })->name('Vacaciones');

                Route::get('/licencia_medica', function () {
                    return view('ModuloRRHH.AdmRRHH.solicitudes.LicenciaMedica');
                })->name('LicenciaMedica');

                Route::get('/permiso_especial', function () {
                    return view('ModuloRRHH.AdmRRHH.solicitudes.PermisoEspecial');
                })->name('PermisoEspecial');

                Route::get('/adelanto', function () {
                    return view('ModuloRRHH.AdmRRHH.solicitudes.Adelanto');
                })->name('Adelanto');
            });

            Route::group(['prefix' => 'bono'], function () {
                Route::get('/asignar', function () {
                    return view('ModuloRRHH.AdmRRHH.bonos.AsignarBonos');
                })->name('AsignarBonos');

                Route::get('/registrar', function () {
                    return view('ModuloRRHH.AdmRRHH.bonos.RegistrarBonos');
                })->name('RegistrarBonos');

                Route::get('/consultar', function () {
                    return view('ModuloRRHH.AdmRRHH.bonos.consultarBonos');
                })->name('consultarBonos');

                Route::get('/all', function () {
                    return view('ModuloRRHH.AdmRRHH.bonos.listaBonos');
                })->name('listaBonos');
            });

            Route::group(['prefix' => 'configuracion'], function () {
                Route::get('/', function () {
                    return view('ModuloRRHH.AdmRRHH.configuracion');
                })->name('configuracion');

                Route::get('/cargos', function () {
                    return view('ModuloRRHH.AdmRRHH.Cargo');
                })->name('Cargos');

                Route::get('/afp', function () {
                    return view('ModuloRRHH.AdmRRHH.AFP');
                })->name('AFP');

                Route::get('/prevision_salud', function () {
                    return view('ModuloRRHH.AdmRRHH.prevSalud');
                })->name('prev');
            });
        });

        Route::group(['prefix' => 'gestion'], function () {
            Route::group(['prefix' => '/'], function () {
              Route::get('api/provincia/{region}','LocationController@getProvincia')->name('get.provincia');
              Route::get('api/ciudad/{provincia}','LocationController@getCiudad')->name('get.ciudad');
              Route::get('personal/new','RrhhAdminController@getNuevoRh')->name('regPersonal');
              Route::post('personal/new','RrhhAdminController@postRegistroRh')->name('post.registrar.rrhh');
              Route::any('/personal/buscar','RrhhAdminController@getConsultaRh')->name('buscarRRHH');
              Route::get('personal/{id}/buscar','RrhhAdminController@getMostrarRh')->name('mostrarRh');
              Route::any('personal/editar','RrhhAdminController@showEditarRh')->name('modPers');
              Route::get('personal/{id}/editar','RrhhAdminController@getEditarRh')->name('modificarRh');
              Route::patch('personal/{id}/editar','RrhhAdminController@patchEditarRh')->name('patchEditarRh');


                Route::get('/personal/reset/password', function () {
                    return view('ModuloRRHH.AdmRRHH.resetPersonal');
                })->name('resetContrasenaPersonal');

                Route::get('/asignar/activo', function () {
                    return view('ModuloRRHH.AdmRRHH.asigACT');
                })->name('asigACT');
            });

            Route::group(['prefix' => 'ofertas/trabajo'], function () {
                Route::group(['prefix' => 'postulaciones'], function () {
                    Route::get('/all', function () {
                        return view('ModuloRRHH.OfertasDeTrabajo.visualizarPostulantes');
                    })->name('visualizarPostulantes');

                    Route::get('/estados', function () {
                        return view('ModuloRRHH.OfertasDeTrabajo.estadoPostulaciones');
                    })->name('EstPost');
                });

                Route::get('/modificar', function () {
                    return view('ModuloRRHH.OfertasDeTrabajo.modOferta');
                })->name('modOf');

                Route::get('/registrar', function () {
                    return view('ModuloRRHH.OfertasDeTrabajo.regOferta');
                })->name('regOferta');

                Route::get('/all', function () {
                    return view('ModuloRRHH.OfertasDeTrabajo.listaOfertasTrabajo');
                })->name('listOf');

                Route::get('/mostrar', function () {
                    return view('ModuloRRHH.OfertasDeTrabajo.datosPostulante');
                })->name('datosPostulante');
            });
        });
    });

    // INICIO RUTAS DE PROVEEDORES
    Route::group(['prefix' => 'proveedores'], function () {
        Route::get('/', function () {
            return view('ModuloProv.provIndex');
        })->name('PROV');

        Route::get('admin', [
            'uses' => 'ProveedoresController@admin',
            'as' => 'get.proveedores.admin',
        ]);
        Route::get('admin/autorizar/{usuario}', [
            'uses' => 'ProveedoresController@altaUsuario',
            'as' => 'get.proveedores.admin.alta',
        ]);

        Route::get('api/provincia/{region}', [
            'uses' => 'LocationController@getProvincia',
            'as' => 'get.provincia',
        ]);

        Route::get('api/ciudad/{provincia}', [
            'uses' => 'LocationController@getCiudad',
            'as' => 'get.ciudad',
        ]);

        Route::any('/ofertas', [
            'uses' => 'ProveedoresController@getEvaluarOfertas',
            'as' => 'Lista',
        ]);

        Route::get('/proveedores', [
            'uses' => 'ProveedoresController@index',
            'as' => 'listapro',
        ]);

        Route::get('evaluarArticulo/{id}', [
            'uses' => 'ProveedoresController@getEvaluarArticulo',
            'as' => 'EvaluarArticulo',
        ]);

        Route::patch('evaluarArticulo/{id}', [
            'uses' => 'ProveedoresController@patchEvaluarArticulo',
            'as' => 'patch.evaluar.articulo'
            ]);

            Route::get('evaluarArriendo/{id}', [
                'uses' => 'ProveedoresController@getEvaluarArriendo',
                'as' => 'EvaluarArriendo',
            ]);

        Route::patch('evaluarArriendo/{id}', [
            'uses' => 'ProveedoresController@patchEvaluarArriendo',
            'as' => 'patch.evaluar.arriendo'
            ]);

        Route::get('evaluarProfesional/{id}', [
            'uses' => 'ProveedoresController@getEvaluarProfesional',
            'as' => 'EvaluarProfesional',
        ]);

        Route::patch('evaluarProfesional/{id}', [
            'uses' => 'ProveedoresController@patchEvaluarProfesional',
            'as' => 'patch.evaluar.profesional'
            ]);

            Route::get('evaluarServicio/{id}', [
                'uses' => 'ProveedoresController@getEvaluarServicio',
                'as' => 'EvaluarServicio',
            ]);

            Route::patch('evaluarServicio/{id}', [
                'uses' => 'ProveedoresController@patchEvaluarServicio',
                'as' => 'patch.evaluar.servicio'
                ]);

        Route::group(['prefix' => 'registrar'], function () {
            Route::get('/empresa', [
                'uses' => 'ProveedoresController@getProveedorEmpresa',
                'as' => 'registroProv',
            ]);
            Route::post('/empresa', [
                'uses' => 'ProveedoresController@postProveedorEmpresa',
                'as' => 'provEmpresa.crear.post',
            ]);

            Route::get('/persona', [
                'uses' => 'ProveedoresController@getProveedorPersona',
                'as' => 'regPerAct',
            ]);

            Route::post('/persona', [
                'uses' => 'ProveedoresController@postProveedorPersona',
                'as' => 'post.registrar.prooveedor.persona',
            ]);
        });

        Route::group(['prefix' => 'perfil'], function () {
            Route::get('/', function () {
                return view('ModuloProv.prov.perfilProv');
            })->name('perfil');


            Route::get('/datosPersona', [
                'uses' => 'ProveedoresController@getMisDatosPersona',
                'as' => 'MisDatosPersona',
            ]);

            Route::get('/datosEmpresa', [
                'uses' => 'ProveedoresController@getMisDatosEmpresa',
                'as' => 'MisDatosEmpresa',
            ]);

            Route::get('/evaluaciones', [
                'uses' => 'ProveedoresController@getMisEvaluaciones',
                'as' => 'misEV',
            ]);

            Route::group(['prefix' => 'ofertas'], function () {
                Route::get('/', function () {
                    return view('ModuloProv.prov.misOfertas');
                })->name('misOfertas');

                Route::get('/registrar', function () {
                    return view('ModuloProv.prov.regOF');
                })->name('registroOferta');

                Route::post('/createServProfesional', [
                    'uses' => 'ProveedoresController@postServicioProfesional',
                    'as' => 'post.registrarServicioProfesional',
                ]);

                Route::post('/createTransMaq', [
                    'uses' => 'ProveedoresController@postArriendoMaquinaria',
                    'as' => 'post.registrarArriendoMaquinaria',
                ]);

                Route::post('/createServicio', [
                    'uses' => 'ProveedoresController@postOfertaServicio',
                    'as' => 'post.registrarOfertaServicio',
                ]);

                Route::post('/createArticulo', [
                    'uses' => 'ProveedoresController@postOfertaArticulo',
                    'as' => 'post.registrarOfertaArticulo',
                ]);

                Route::get('/consultar', [
                    'uses' => 'ProveedoresController@getConsultaOfertas',
                    'as' => 'consultarOferta',
                ]);

                Route::group(['prefix' => 'actualizar'], function () {
                    Route::get('/', [
                      'uses' => 'ProveedoresController@getActualizarOfertas',
                      'as' => 'actualizarOferta',
                      ]);

                Route::get('servicio/{id}', [
                    'uses' => 'ProveedoresController@getModificarServicio',
                    'as' => 'modificarServicio',
                ]);

                Route::patch('servicio/{id}', [
                    'uses' => 'ProveedoresController@patchModificarServicio',
                    'as' => 'patch.modificar.servicio'
                    ]);

                Route::get('articulo/{id}', [
                    'uses' => 'ProveedoresController@getModificarArticulo',
                    'as' => 'modificarArticulo',
                ]);

                Route::patch('articulo/{id}', [
                    'uses' => 'ProveedoresController@patchModificarArticulo',
                    'as' => 'patch.modificar.articulo'
                    ]);

                Route::get('arriendo/{id}', [
                    'uses' => 'ProveedoresController@getModificarArriendo',
                    'as' => 'modificarArriendo',
                ]);

                Route::patch('arriendo/{id}', [
                    'uses' => 'ProveedoresController@patchModificarArriendo',
                    'as' => 'patch.modificar.arriendo'
                    ]);

                    Route::get('profesional/{id}', [
                        'uses' => 'ProveedoresController@getModificarProfesional',
                        'as' => 'modificarProfesional',
                    ]);

                    Route::patch('profesional/{id}', [
                        'uses' => 'ProveedoresController@patchModificarProfesional',
                        'as' => 'patch.modificar.profesional',
                    ]);
                });
            });
        });
    });

    // INICIO RUTAS DE ofertas de trabajo
    Route::group(['prefix' => 'OfertasDeTrabajo'], function () {
        Route::get('/', function () {
            return view('ModuloOfertaTrabajo.licitacionesIndex');
        })->name('OFTRAB');


        Route::get('/OfTrabajo', function () {
            return view('ModuloOfertaTrabajo.OfTrabajo');
        })->name('Ofertas');

        Route::get('/registroPostulante', function () {
            return view('ModuloOfertaTrabajo.regPostulante');
        })->name('registroPostulante');

        Route::get('/PerfilPostulante', function () {
            return view('ModuloOfertaTrabajo.PerfilPostulante.perPostulante');
        })->name('perPostulante');

        Route::get('/editarDatos', function () {
            return view('ModuloOfertaTrabajo.PerfilPostulante.editarDatos');
        })->name('editarDatos');

        Route::get('/InformacionOferta', function () {
            return view('ModuloOfertaTrabajo.ofTrabajo.info');
        })->name('InformacionOferta');

    });

    // INICIO RUTAS DE INVENTARIO
    Route::group(['prefix' => 'Inventario'], function () {
      Route::get('/', function () {
        return view('ModuloInventario.index');
      })->name('inventario');

      Route::get('/Catalogo', function () {
        return view('ModuloInventario.Catalogo');
      })->name('Catalogo');

      Route::get('/GuiasDeDespacho', function () {
        return view('ModuloInventario.GuiasDeDespacho');
      })->name('GuiasDeDespacho');

                // BODEGA

                Route::group(['prefix' => 'Bodega'], function () {
                Route::get('/', function () {
                    return view('ModuloInventario.bodega');
                })->name('Bodega');

                  // INICIO DE ACTIVOS
                  Route::group(['prefix' => 'Activos'], function () {
                      Route::any('/','ActivosController@showActivos')->name('indexActivos');

                      Route::get('/formularioDeRegistro', function () {
                          return view('ModuloInventario.Activos.registrar');
                      })->name('RegistarActivo');

                      Route::any('/registrarActivo','ActivosController@postRegistrarActivo')->name('registrarActivo');


                      Route::any('/ListadoDeActivos','ActivosController@showListaActivos')->name('ModuloInventario.Activos.Listado');
                      Route::post('/ListadoDeActivos','ActivosController@buscadorActivos')->name('buscadorActivos');

                      Route::get('/actualizar','ActivosController@showActualizarActivo')->name('actualizarActivo');
                      Route::any('/lista','ActivosController@showListaGeneralActivos')->name('listar');
                      Route::get('/actualizar/{id}','ActivosController@getModificarActivos')->name('get.modificar.activo');
                      Route::patch('/actualizar/{id}','ActivosController@patchModificarActivos')->name('patch.modificar.activo');

                      Route::get('/asignar','ActivosController@showAsignarActivo')->name('AsignarActivo');

                  });
                  // FIN DE Activos

                  //INICIO INSUMOS
                  Route::group(['prefix' => 'Insumos'], function () {

                    Route::get('/Insumos', function () {
                      return view('ModuloInventario.Insumos.indexInsumos');
                    })->name('insumos');

                    Route::get('/RegistrarInsumo', function () {
                      return view('ModuloInventario.Insumos.registrarInsumo');
                    })->name('RegistrarInsumo');

                    Route::get('/SolicitarInsumo', function () {
                      return view('ModuloInventario.Insumos.SolicitudInsumo');
                    })->name('SolicitudDeInsumo');

                    Route::get('/ConsultarInsumo', function () {
                      return view('ModuloInventario.Insumos.ConsultarInsumo');
                    })->name('ConsultarInsumo');

                    Route::get('/ConsultaDeEntregas', function () {
                      return view('ModuloInventario.Insumos.ConsultaDeEntregas');
                    })->name('ConsultaDeEntregas');

                    Route::get('/EntregarInsumo', function () {
                      return view('ModuloInventario.Insumos.EntregarInsumo');
                    })->name('EntregarInsumo');

                    Route::get('/ActualizarInsumo', function () {
                      return view('ModuloInventario.Insumos.ActualizarInsumo');
                    })->name('ActualizarInsumo');
                  });
                  //FIN INSUMOS

                  // INICIO SERVICIOS
                  Route::group(['prefix' => 'Servicios'], function () {

                    Route::get('/Servicios', function () {
                      return view('ModuloInventario.servicios.indexServicios');
                    })->name('Servicios');

                    Route::get('/fichaDeServicio', function () {
                      return view('ModuloInventario.servicios.fichaDeServicio');
                    })->name('fichaDeServicio');

                    Route::get('/catalogoDeServicios', function () {
                      return view('ModuloInventario.servicios.catalogoServicios');
                    })->name('catalogoServicios');

                    Route::get('/modificarServicio', function () {
                      return view('ModuloInventario.servicios.modificarServicio');
                    })->name('modificarServicio');

                    Route::get('/registrarServicio', function () {
                      return view('ModuloInventario.servicios.registrarServicio');
                    })->name('registrarServicio');

                  });
                  // FIN SERVICIOS

                  // INICIO PRODUCTOS
                  Route::group(['prefix' => 'Productos'], function () {
                    Route::get('/Productos', function () {
                      return view('ModuloInventario.Productos.indexProductos');
                    })->name('Productos');

                    Route::get('/catalogoDeArticulos', function () {
                      return view('ModuloInventario.Productos.catalogoDeArticulos');
                    })->name('catalogoDeArticulos');

                    Route::get('/fichaDeProductos', function () {
                      return view('ModuloInventario.Productos.fichaDeProductos');
                    })->name('fichaDeProducto');

                    /*Route::get('/catalogoDeProductos', function () {
                      return view('ModuloInventario.Productos.catalogoProductos');
                    })->name('catalogoProductos');*/

                      Route::get('/catalogoDeProductos', [
                          'uses' => 'productosController@index',
                          'as' => 'catalogoProductos',
                      ]);

                    Route::get('/modificarProductos', function () {
                      return view('ModuloInventario.Productos.modificarProductos');
                    })->name('modificarProductos');

                    /*Route::get('/registrarProductos', function () {
                      return view('ModuloInventario.Productos.registrarProductos');
                    })->name('registrarProductos');*/

                      Route::get('/registrarProductos', [
                          'uses' => 'productosController@create',
                          'as' => 'registrarProductos',
                      ]);


                  });
                  // FIN PRODUCTOS

                  // INICIO ADQUISICIONES
                  Route::group(['prefix' => 'Adquisiciones'], function () {
                    Route::get('/Adquisiciones', function () {
                      return view('ModuloInventario.Adquisiciones.indexAdquisiciones');
                    })->name('Adquisiciones');

                    Route::get('/ListaGuiasDeDespacho', function () {
                      return view('ModuloInventario.Adquisiciones.ordenesDeCompra.ListaGuiasDeDespacho');
                    })->name('ListaGuiasDeDespacho');

                    Route::get('/Compras', function () {
                      return view('ModuloInventario.Adquisiciones.Compras');
                    })->name('Compras');

                    Route::get('/indexOC', function () {
                      return view('ModuloInventario.Adquisiciones.ordenesDeCompra.indexOC');
                    })->name('indexOC');

                    Route::get('/verificar', function () {
                      return view('ModuloInventario.Adquisiciones.ordenesDeCompra.verificar');
                    })->name('verificar');

                    Route::get('/validar', function () {
                      return view('ModuloInventario.Adquisiciones.ordenesDeCompra.validar');
                    })->name('validar');

                    Route::get('/recibir', function () {
                      return view('ModuloInventario.Adquisiciones.ordenesDeCompra.recibir');
                    })->name('recibir');

                    Route::get('/pedir', function () {
                      return view('ModuloInventario.Adquisiciones.ordenesDeCompra.pedir');
                    })->name('pedir');

                    Route::get('/pedir', function () {
                      return view('ModuloInventario.Adquisiciones.ordenesDeCompra.pedir');
                    })->name('pedir');

                    Route::get('/Liquidar', function () {
                      return view('ModuloInventario.Adquisiciones.ordenesDeCompra.liquidar');
                    })->name('liquidar');

                    Route::get('/SolicitudDeFondoOc', function () {
                      return view('ModuloInventario.Adquisiciones.ordenesDeCompra.solFondoOc');
                    })->name('SolicitudDeFondoOc');

                    Route::get('/DescripcionDeOC', function () {
                      return view('ModuloInventario.Adquisiciones.ordenesDeCompra.DescripcionOC');
                    })->name('DescripcionDeOC');

                    Route::get('/liquidacionDeOc', function () {
                      return view('ModuloInventario.Adquisiciones.ordenesDeCompra.OCparaLiquidar');
                    })->name('OCparaLiquidar');

                    Route::get('/Historico', function () {
                      return view('ModuloInventario.Adquisiciones.ordenesDeCompra.Historico');
                    })->name('Historico');

                  });
                  // FIN ADQUISICIONES

                });
              //FIN BODEGA
      });


    //INICIO CRM

    Route::group(['prefix' => 'CRM'], function () {
        Route::get('/', function () {
            return view('ModuloCrm.indexCRM');
        })->name('CRM');


      Route::get('/Actividades', function () {
        return view('ModuloCrm.actividades');
      })->name('actividades');

      Route::get('/Ajustes', function () {
        return view('ModuloCrm.ajustes');
      })->name('ajustes');

      /*Route::get('/Clientes', function () {
        return view('ModuloCrm.clientes');
      })->name('clientes');*/

        Route::get('/Clientes', [
            'uses' => 'ClientesController@index',
            'as' => 'clientes',
        ]);

        Route::get('/Prospectos', [
            'uses' => 'ProspectoController@index',
            'as' => 'prospectos',
        ]);

        /**
         * Clients
         */
        Route::group(['prefix' => 'clients'], function () {
            Route::resource('clientes','ClientesController');
            Route::get('/data', 'ClientsController@anyData')->name('clients.data');
            Route::post('/create/cvrapi', 'ClientsController@cvrapiStart');
            Route::post('/upload/{id}', 'DocumentsController@upload');
            Route::patch('/updateassign/{id}', 'ClientsController@updateAssign');
            Route::get('/', [
                'uses' => 'ClientesController@index',
                'as' => 'index.clientes',
            ]);
        });
        Route::resource('clients', 'ClientsController');
        Route::resource('documents', 'DocumentsController');

      /*Route::get('/FichaClienteConsolidado/{cliente}', function () {
        return view('ModuloCrm.fichaClienteConsolidado');
      })->name('fichaClienteConsolidado');*/

     //Route::get('/FichaClienteProspecto', function () {
       // return view('ModuloCrm.fichaClienteProspecto');
      //})->name('fichaClienteProspecto');

        Route::get('/FichaClienteConsolidado/{cliente}', [
            'uses' => 'ClientesController@fichaclicons',
            'as' => 'fichaClienteConsolidado',
        ]);

        Route::get('/FichaClienteProspecto/{cliente}', [
            'uses' => 'ClientesController@fichaclipros',
            'as' => 'fichaClienteProspecto',
        ]);

      /*Route::get('/Oportunidades', function () {
        return view('ModuloCrm.oportunidades');
      })->name('Oportunidades');*/

        Route::get('/Oportunidades', [
            'uses' => 'OportunidadController@create',
            'as' => 'Oportunidades',
        ]);

        Route::get('/ListaDeOportunidades', [
            'uses' => 'OportunidadController@index',
            'as' => 'listaOportunidades',
        ]);

        Route::post('/CreateOportunidad', [
            'uses' => 'OportunidadController@store',
            'as' => 'createOportunidad',
        ]);

        Route::get('/EliminarOportunidad/{id}', [
            'uses' => 'OportunidadController@destroy',
            'as' => 'oportunidad.destroy',
        ]);

        Route::get('/EditOportunidad/{id}', [
            'uses' => 'OportunidadController@edit',
            'as' => 'oportunidad.edit',
        ]);

        Route::get('/VerOportunidad/{id}', [
            'uses' => 'OportunidadController@show',
            'as' => 'oportunidad.ver',
        ]);

      /*Route::get('/ListaDeOportunidades', function () {
        return view('ModuloCrm.listaOportunidades');
      })->name('listaOportunidades');*/

     /* Route::resource('/RegistroDeCliente', function () {
        return view('ModuloCrm.regCliente');
      })->name('regCliente');*/

        Route::get('/RegistroDeCliente', [
            'uses' => 'ClientesController@create',
            'as' => 'regCliente',
        ]);

        Route::get('/RegistroDeProspecto', [
            'uses' => 'ProspectoController@create',
            'as' => 'regProspecto',
        ]);

        Route::get('/Registro', function () {
            return view('ModuloCRM.registro');
        })->name('registro');

        Route::get('/EditarCliente,{id}', [
            'uses' => 'ClientesController@edit',
            'as' => 'editarcliente',
        ]);

        Route::post('/,{id}',[
            'uses' => 'ClientesController@update',
            'as' => 'update.cliente',
        ]);

        Route::post('/Convertir,{id}', [
            'uses' => 'ClientesController@convertir',
            'as' => 'convertir',
        ]);


        Route::get('subrubros/{id]', 'ClienteController@getSubRubros');

      Route::get('/RegistroDeContacto', function () {
        return view('ModuloCrm.regContacto');
      })->name('RegistroDeContacto');

        Route::get('/Contacto/{id}', [
            'uses' => 'ContactoController@destroy',
            'as' => 'contacto.destroy',
        ]);

      /*Route::get('/cotizaciones', function () {
        return view('ModuloCrm.cotizaciones');
      })->name('cotizaciones');*/

        Route::get('/cotizaciones', [
            'uses' => 'CotizacionController@create',
            'as' => 'cotizaciones',
        ]);

        Route::get('/listaActividades', [
            'uses' => 'ActividadesController@index',
            'as' => 'listaActividades',
        ]);

        Route::get('/RegistroActividad', [
            'uses' => 'ActividadesController@create',
            'as' => 'RegActividad',
        ]);

      /*Route::get('/listaActividades', function () {
        return view('ModuloCrm.listaActividades');
      })->name('listaActividades');*/

      Route::get('ListaCotizaciones', function () {
        return view('ModuloCrm.listaCotizaciones');
      })->name('listaCotizaciones');

      Route::get('resumen', function () {
        return view('ModuloCrm.resumen');
      })->name('resumen');

        Route::get('/listaClientes', [
            'uses' => 'ClientesController@index',
            'as' => 'listaCli',
        ]);

        Route::get('/delete/{rut}', [
            'uses' => 'ClientesController@destroy',
            'as' => 'cliente.destroy',
        ]);

        Route::get('/delete/{id}', [
            'uses' => 'ProspectoController@destroy',
            'as' => 'prospecto.destroy',
        ]);

      //FIN CRM

    });

      // INICIO DE RUTAS VENTAS

      Route::group(['prefix' => 'Ventas'], function () {
          Route::get('/', function () {
              return view('ModuloVentas.indexVentas');
          })->name('Ventas');

          /*Route::get('historialDeVentas', function () {
            return view('ModuloVentas.historialDeVentas');
          })->name('historialDeVentas');*/

          Route::get('historialDeVentas', [
              'uses' => 'ventasController@index',
              'as' => 'historialDeVentas',
          ]);

          Route::get('fichaDeVenta', function () {
            return view('ModuloVentas.fichaDeVenta');
          })->name('fichaDeVenta');

          /*Route::get('/FichaDeVenta/{id}', [
              'uses' => 'ventasController@show',
              'as' => 'fichaDeVenta',
          ]);

          /*Route::get('formularioDeVentas', function () {
            return view('ModuloVentas.formularioDeVentas');
          })->name('formularioDeVentas');*/

          Route::get('formularioDeVentas', [
              'uses' => 'ventasController@create',
              'as' => 'formularioDeVentas',
          ]);


      // FIN DE RUTAS VENTAS
    });

    // INICIO DE RUTAS DOCUMENTAL

    Route::group(['prefix' => 'Documental'], function () {
        Route::get('/', function () {
            return view('ModuloDocumental.indexDocumental');
        })->name('Documental');

        Route::get('documentosInternos', function () {
          return view('ModuloDocumental.documentosInternos');
        })->name('documentosInternos');



    // FIN DE RUTAS DOCUMENTAL
  });

  // INICIO DE RUTAS RESERVA DE SALA

  Route::group(['prefix' => 'ReservaDeSala'], function () {
      Route::get('/', function () {
          return view('ModuloReservaDeSala.ReservaDeSala');
      })->name('ReservaDeSala');

      Route::get('Horario', function () {
        return view('ModuloReservaDeSala.Horario');
      })->name('horario');

      Route::get('Reservar', function () {
        return view('ModuloReservaDeSala.Reservar');
      })->name('Reservar');

      Route::get('sala', function () {
        return view('ModuloReservaDeSala.sala');
      })->name('sala');

      Route::get('AgregarParticipantes', function () {
        return view('ModuloReservaDeSala.AgregarParticipantes');
      })->name('AgregarParticipantes');

  // INICIO DE RUTAS RESERVA DE SALA
  });
  // INICIO DE RUTAS EVENTOS

  Route::group(['prefix' => 'Eventos'], function () {
      Route::get('/', function () {
          return view('ModuloEventos.eventos');
      })->name('eventos');

      Route::get('listaDeEventos', function () {
        return view('ModuloEventos.listaDeEventos');
      })->name('listaDeEventos');

      Route::get('crearEvento', function () {
        return view('ModuloEventos.crearEvento');
      })->name('crearEvento');

      Route::get('modificarEvento', function () {
        return view('ModuloEventos.modificarEvento');
      })->name('modificarEvento');

  // FIN DE RUTAS EVENTOS
  });
  // INICIO DE RUTAS FORO

  Route::group(['prefix' => 'FORO'], function () {
      Route::get('/', function () {
          return view('ModuloForo.foro');
      })->name('foro');

      //ADMINISTRATIVA
      Route::get('inicioAdministrativa', function () {
        return view('ModuloForo.administrativa.inicio');
      })->name('inicioAdministrativa');

      Route::get('HacerPreguntasAdministrativa', function () {
        return view('ModuloForo.administrativa.HacerPreguntas');
      })->name('HacerPreguntasAdministrativa');

      Route::get('respuestasAdministrativa', function () {
        return view('ModuloForo.Administrativa.respuestas');
      })->name('respuestasAdministrativa');

      //COMERCIAL

      Route::get('inicioComercial', function () {
        return view('ModuloForo.Comercial.inicio');
      })->name('inicioAComercial');

      Route::get('respuestasComercial', function () {
        return view('ModuloForo.Comercial.respuestas');
      })->name('respuestasComercial');

      Route::get('HacerPreguntasComercial', function () {
        return view('ModuloForo.Comercial.HacerPreguntas');
      })->name('HacerPreguntasComercial');

      //TECNICA

      Route::get('inicioTecnica', function () {
        return view('ModuloForo.Tecnica.inicio');
      })->name('inicioTecnica');

      Route::get('respuestasTecnica', function () {
        return view('ModuloForo.Tecnica.respuestas');
      })->name('respuestasTecnica');

      Route::get('HacerPreguntasTecnica', function () {
        return view('ModuloForo.Tecnica.HacerPreguntas');
      })->name('HacerPreguntasTecnica');


  // FIN DE RUTAS FORO
  });

    // INICIO DE RUTAS SOPORTE

    Route::group(['prefix' => 'SOPORTE'], function () {
        Route::get('/Soporte', function () {
            return view('ModuloSoporte.indexSoporte');
        })->name('soporte');

        // FIN DE RUTAS SOPORTE
    });

  // INICIO DE RUTAS LICITACIONES
  Route::group(['prefix' => 'Licitaciones'], function () {
      Route::get('/', function () {
          return view('ModuloLicitaciones.Licitaciones');
      })->name('inicioLicitacion');

      Route::get('Asignar', function () {
        return view('ModuloLicitaciones.Asignar');
      })->name('Asignar');

      Route::get('propietariosLicitacion', function () {
        return view('ModuloLicitaciones.propietariosLicitacion');
      })->name('propietariosLicitacion');

      Route::get('NuevaLicitacion', function () {
        return view('ModuloLicitaciones.NuevaLicitacion');
      })->name('NuevaLicitacion');

      Route::get('fichaLicitacion', function () {
        return view('ModuloLicitaciones.fichaLicitacion');
      })->name('fichaLicitacion');

  // FIN DE RUTAS LICITACIONES
   });

   // INICIO DE RUTAS FINANCIERO
   Route::group(['prefix' => 'Financiero'], function () {
       Route::get('/', function () {
           return view('ModuloFinanciero.cuentasPorCobrar');
       })->name('cuentasPorCobrar');

       Route::get('cuentasPorPagar', function () {
         return view('ModuloFinanciero.cuentasPorPagar');
       })->name('cuentasPorPagar');

       Route::get('panelDeInformes', function () {
         return view('ModuloFinanciero.panelDeInformes');
       })->name('panelDeInformes');

       Route::get('ReporteDeCaja', function () {
         return view('ModuloFinanciero.ReporteDeCaja');
       })->name('ReporteDeCaja');

       Route::get('valorEmpresa', function () {
         return view('ModuloFinanciero.valorEmpresa');
       })->name('valorEmpresa');

   // FIN DE RUTAS FINANCIERO
    });

  // INICIO DE RUTAS lICITACIONES
   Route::group(['prefix' => 'Licitaciones'], function () {
        Route::get('/', function () {
            return view('ModuloLicitaciones.Licitaciones');
        })->name('inicioLicitacion');

        Route::get('Asignar', function () {
          return view('ModuloLicitaciones.Asignar');
        })->name('Asignar');

        Route::get('propietariosLicitacion', function () {
          return view('ModuloLicitaciones.propietariosLicitacion');
        })->name('propietariosLicitacion');

        Route::get('NuevaLicitacion', function () {
          return view('ModuloLicitaciones.NuevaLicitacion');
        })->name('NuevaLicitacion');

        Route::get('fichaLicitacion', function () {
          return view('ModuloLicitaciones.fichaLicitacion');
        })->name('fichaLicitacion');
   });
   // FIN DE RUTAS lICITACIONES

   // INICIO DE RUTAS INFORMES DE GESTION
    Route::group(['prefix' => 'InformesDeGestion'], function () {
         Route::get('/', function () {
             return view('ModuloInformesDeGestion.InformesDeGestionIndex');
         })->name('InformesDeGestion');

         Route::get('nivelAdministracion', function () {
           return view('ModuloInformesDeGestion.nivelAdministracion');
         })->name('nivelAdministracion');

         Route::get('nivelGerencia', function () {
           return view('ModuloInformesDeGestion.nivelGerencia');
         })->name('nivelGerencia');


    });
    // FIN DE RUTAS  INFORMES DE GESTION

    // INICIO DE RUTAS MARKETING
     Route::group(['prefix' => 'Marketing'], function () {
          Route::get('/', function () {
              return view('ModuloMarketing.IndexMarketing');
          })->name('IndexMarketing');

          Route::get('satisfaccionCliente', function () {
            return view('ModuloMarketing.satisfaccionCliente');
          })->name('satisfaccionCliente');

          Route::get('satisfaccionAlProveedor', function () {
            return view('ModuloMarketing.satisfaccionAlProveedor');
          })->name('satisfaccionAlProveedor');

          Route::get('dashBoardMarketing', function () {
            return view('ModuloMarketing.dashBoardMarketing');
          })->name('dashBoardMarketing');

          Route::get('comparativoDeVentas', function () {
            return view('ModuloMarketing.comparativoDeVentas');
          })->name('comparativoDeVentas');

          Route::get('encuesta', function () {
            return view('ModuloMarketing.encuesta');
          })->name('encuesta');


     });
     // FIN DE RUTAS  MARKETING

     // INICIO DE RUTAS MEJORA CONTINUA
      Route::group(['prefix' => 'MejoraContinua'], function () {
           Route::get('/', function () {
               return view('ModuloMejoraContinua.IndexMejoraContinua');
           })->name('IndexMejoraContinua');

           Route::get('resumenEvaluacion', function () {
             return view('ModuloMejoraContinua.resumenEvaluacion');
           })->name('resumenEvaluacion');

           Route::get('evaluaciones', function () {
             return view('ModuloMejoraContinua.evaluaciones');
           })->name('evaluaciones');

           Route::get('FichaDeEvaluacion', function () {
             return view('ModuloMejoraContinua.FichaDeEvaluacion');
           })->name('FichaDeEvaluacion');

           Route::get('mejoramientoContinuo', function () {
             return view('ModuloMejoraContinua.mejoramientoContinuo');
           })->name('mejoramientoContinuo');


      });
      // FIN DE MEJORA CONTINUA;
});

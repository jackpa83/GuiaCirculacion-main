@extends('adminlte::page')

@section('title', 'Solicitud de Guías')

@section('content_header')
    <h1>Solicitud de Guías</h1>
    <script src="{{ asset('jss/bundle.js') }}" defer></script>
    <link href="{{asset('css/datatable.min.css') }}" rel="stylesheet">
    <script src="{{asset('vendor/sweetalert.js') }}"></script>
@stop

@section('content')
    <p></p>

    <div class="">
        <button type="button" class="btn btn-primary  btn-sm" data-bs-toggle="modal" data-bs-target="#modal_new_solicitud"><i class='bx bx-plus'></i>Nueva solicitud</button>
    </div>
    <script type="text/javascript">
  $(document).on("click","#add",function(e){
    alert("Hola");
  });    
</script>
    <div class="row">
        <div class="col-12">
            <br><br>
        <table id="example" class="table display" style="width:100%" >
        <thead class="bg-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Razon social</th>
                    <th scope="col">Rif</th>
                    <th scope="col">Nro. talonario(s)</th>
                    <th scope="col">Tipo de talonario(s)</th>
                    <th scope="col">Monto total</th>
                    <th scope="col">Fecha de emisión</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
        </thead>
        <tbody>
     
        <tr>
                    <td>1</td>
                    <td>Prueba, C.A.</td>
                    <td>J000000001</td>
                    <td>2</td>
                    <td>25 - 50</td>
                    <td>3.522.015,25</td>
                    <td class="text-muted">12/02/2024</td>
                    <td>
                        <span class="badge text-bg-light">Verificando pago</span>
                        <!-- <span class="badge text-bg-danger">Negada</span>
                        <span class="badge text-bg-primary">En proceso</span>
                        <span class="badge" style="background-color: #ef7f00;">Retirar</span>
                        <span class="badge text-bg-success">Retirado</span> -->
                    </td>
                    <td>
                        <span class="badge" style="background-color: #ed0000;" role="button" data-bs-toggle="modal" data-bs-target="#modal_delete_solicitud">
                            <i class='bx bx-trash-alt fs-6'></i>
                        </span>
                    </td>
                </tr>
       
        </tbody>

    </table>

    
    
       
    </div>


      

    
    
  <!--****************** MODALES **************************-->
    <!-- ********* NUEVA SOLICITUD ******** -->
    <div class="modal" id="modal_new_solicitud" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #0072ff">
                    <!-- <i class='bx bxs-file-plus'></i> -->
                        Solicitud de Guías - Talonario
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="font-size:14px;">
                    
                    <div class="text-center mb-2">
                        <span class="fs-6 fw-bold" style="color: #0072ff">Datos de la Solicitud</span>
                    </div>
                    
                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="">Tipo de Talonario</label>
                            <select class="form-select form-select-sm mb-3" aria-label="Default select example">
                                <option selected>Selecciona el tipo de talonario</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="cant_talonario">Cantidad</label>
                            <input class="form-control form-control-sm mb-3" type="number">
                        </div>
                        <div class="col-2 d-flex align-items-center pt-3">
                            <button type="button" class="btn" 
                                    data-bs-toggle="tooltip" data-bs-placement="right" 
                                    data-bs-title="Agregar talonario">
                                    <i class='bx bx-plus fs-4' style='color:#038ae4'></i>
                            </button>
                        </div>
                    </div>  

                    <label for="cant_talonario">Monto Total</label>
                    <input class="form-control form-control-sm mb-3" type="text" value="3522.012,15" aria-label="" disabled>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Referencia del pago</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>

                    <p class="text-muted me-3 ms-3" style="font-size:13px"><span class="fw-bold">Nota:</span> El <span class="fw-bold">Tipo de talonario</span> es definido por el número de guías que contenga este.
                         Y la <span class="fw-bold">Cantidad</span>, es el número de talonarios de este tipo que quiera solicitar</p>

                    <div class="d-flex justify-content-center mt-3 mb-3" >
                        <button type="button" class="btn btn-secondary btn-sm me-3" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success btn-sm">Aceptar</button>
                    </div>
                 </div>  <!-- cierra modal-body -->
            </div>  <!-- cierra modal-content -->
        </div>  <!-- cierra modal-dialog -->
    </div>

    <!-- ********* ELIMINAR SOLICITUD ******** -->
    <div class="modal" id="modal_delete_solicitud" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header p-2 pt-3 d-flex justify-content-center">
                    <div class="text-center">
                        <i class='bx bx-error-circle bx-tada fs-2' style='color:#e40307' ></i>
                        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #0072ff"> Eliminar solicitud</h1>
                    </div>
                    
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body" style="font-size:14px;">
                    
                    <p class="text-center">¿Desea cancelar la solicitus registrada con los siguientes datos?</p>

                    <table class="table">
                        <tr>
                            <th>Nro. Solicitud</th>
                            <td>105</td>
                        </tr>
                        <tr>
                            <th>Solicitante</th>
                            <td>Prueba, C.A.</td>
                        </tr>
                        <tr>
                            <th>Fecha</th>
                            <td>12/02/2024</td>
                        </tr>

                        <tr>
                            <th>Nro. Talonario(s)</th>
                            <td>2</td>
                        </tr>                    
                        <tr>
                            <th>Tipo de talonario(s)</th>
                            <td>25 - 50</td>
                        </tr>  
                    </table>

                    

                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary btn-sm me-3" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                    </div> 


                 </div>  <!-- cierra modal-body -->
            </div>  <!-- cierra modal-content -->
        </div>  <!-- cierra modal-dialog -->
    </div>


<!--************************************************-->



    




@stop





@section('css')
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@stop

@section('js')
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
        const myModal = document.getElementById('myModal');
        const myInput = document.getElementById('myInput');

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus();
        });
    </script>
    <script src="{{ asset('jss/jquery-3.5.1.js') }}" ></script>
    <script src="{{ asset('jss/datatable.min.js') }}" defer ></script>
    <script src="{{ asset('jss/datatable.bootstrap.js') }}" ></script>
    <script src="{{ asset('jss/toastr.js') }}" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" ></script>
    <script type="text/javascript">
                    $(document).ready(function () {
                        $('#example').DataTable(
                        {
        "language": {
            "lengthMenu": " Mostrar  _MENU_  Registros por página",
            "zeroRecords": "No se encontraron registros",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No se encuentran Registros",
            "infoFiltered": "(filtered from _MAX_ total records)",
            'search':"Buscar",
            'paginate':{
                'next':'Siguiente',
                'previous':'Anterior'
            }
        }
    }
                    );
                    
                    });
            </script> 
@stop
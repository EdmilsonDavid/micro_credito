@extends('layouts.include.main')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">



    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/tabler-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />

    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{asset('assets/vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('assets/js/config.js')}}"></script>

@section('content')


  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">DataTables /</span> Advanced</h4>



                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createApp">
                      Registar
                    </button>


              <!-- Ajax Sourced Server-side -->
              <div class="card">
                <h5 class="card-header">Ajax Sourced Server-side</h5>
                <div class="card-datatable text-nowrap">
                <table id="dataTable" class="table table-striped">
                    <thead>
                        <tr>
                            <!-- Add your table headers here -->
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Email</th>

                            <!-- Example columns -->
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                </div>
              </div>
              <!--/ Ajax Sourced Server-side -->







            </div>
            <!-- / Content -->


            <!--Modal para mostrar dados-->


  <div class="modal fade" id="createApp" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-simple modal-upgrade-plan">
      <div class="modal-content p-3 p-md-5">
        <div class="modal-body p-2">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="text-center">
            <h3 class="mb-2">Registar Cliente</h3>

          </div>
          <div id="wizard-create-app" class="bs-stepper vertical mt-2 shadow-none">
            <div class="bs-stepper-header border-0 p-1">
              <div class="step" data-target="#details">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle"><i class=" ti ti-user ti-sm"></i></span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title text-uppercase">IDENTI. CLIENTE</span>
                    <span class="bs-stepper-subtitle">Dados do Cliente</span>
                  </span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#frameworks">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle"><i class="ti ti-box ti-sm"></i></span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title text-uppercase">CONTAC. CLIENTE</span>
                    <span class="bs-stepper-subtitle">Telefones e morada</span>
                  </span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#database">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle"><i class="ti ti-file-text ti-sm"></i></span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title text-uppercase">AFINIDADE</span>
                    <span class="bs-stepper-subtitle">Info. Parentesco</span>
                  </span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#billing">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle"><i class="ti ti-credit-card ti-sm"></i></span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title text-uppercase">TRABALHO</span>
                    <span class="bs-stepper-subtitle">Info. Trabalho</span>
                  </span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#submit">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle"><i class="ti ti-check ti-sm"></i></span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title text-uppercase">Submit</span>
                    <span class="bs-stepper-subtitle">Submit</span>
                  </span>
                </button>
              </div>
            </div>
            <div class="bs-stepper-content p-1">
              <form onSubmit="return false">
                <!-- Details -->
                <div id="details" class="content pt-3 pt-lg-0">



                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nome Completo</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="nome_completo">

                        </div>
                      </div>
                      <hr>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Data de Nascimento</label>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                          <input type="date" class="form-control" name="data_de_nascimento">

                         </div>

                         <label class="col-form-label col-md-2 col-sm-2 label-align">Sexo</label>
                        <div class="col-md-3 col-sm-3 ">
                            <div id="gender">
                                <label>
                                    <input type="radio" name="sexo" value="M" class="join-btn"> &nbsp; M &nbsp;
                                </label>
                                <label >
                                    <input type="radio" name="sexo" value="F" class="join-btn">  &nbsp; F &nbsp;
                                </label>
                            </div>
                        </div>

                      </div>
                      <hr>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Identificação</label>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                          <select class="form-control" name="tipo_de_identificacao">
                              <option value="BI">B.I</option>
                              <option value="Passaport">Passaport</option>
                          </select>
                        </div>

                        <div class="col-md-5 col-sm-5 col-xs-5">
                          <input type="text" class="form-control" name="numero_identificacao" placeholder="BI/Passaport Nr.">

                      </div>
                      </div>
                      <hr>
                      <div class="form-group row">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Emitido Em</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="local_emissao">

                          </div>
                        </div>
                        <hr>

                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Data Emi.-Vali.</label>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                          <input type="date" class="form-control" name="data_emissao" >

                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-5">
                          <input type="date" class="form-control" name="data_validade" >

                        </div>
                      </div>
                      <hr>

                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">NUIT</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="nuit" >

                        </div>
                      </div>
                      <hr>
                      <div class="form-group row">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Anexar Doc</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="file" class="form-control" name="url_anexo_documento">

                          </div>
                        </div>
<hr>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Localização</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="localizacao">

                        </div>
                      </div>


                  <div class="col-12 d-flex justify-content-between mt-4">
                    <button class="btn btn-label-secondary btn-prev" disabled>
                      <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Anterior</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                      <span class="align-middle d-sm-inline-block d-none me-sm-1">Proximo</span>
                      <i class="ti ti-arrow-right ti-xs"></i>
                    </button>
                  </div>
                </div>

                <!-- Frameworks -->
                <div id="frameworks" class="content pt-3 pt-lg-0">
                    <div class="form-group row">
                        <label class="control-label col-md-5 col-sm-5 col-xs-5">O cliente vive em arrendamento?</label>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="vive_em_arrendamento" value="1" class="join-btn"> &nbsp; SIM &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="vive_em_arrendamento" value="0" class="join-btn">  &nbsp; NÃO &nbsp;
                                </label>
                            </div>
                        </div>
                      </div>
                      <br>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Provincia</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="provincia_cliente">

                        </div>
                      </div>
                      <br>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Endereço</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea class="form-control" rows="2" name="endereco_cliente" placeholder="Distrito Municipal/ Avinida / Rua / Quarteirão /Casa nr"></textarea>

                        </div>
                      </div>
                      <br>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Telefone-1</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="telefone_1_cliente">

                        </div>
                      </div>
                      <br>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Telefone-2</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="telefone_2_cliente">

                        </div>
                      </div>
                      <br>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="email_cliente">

                        </div>
                      </div>
<br>

                  <div class="col-12 d-flex justify-content-between mt-4">
                    <button class="btn btn-label-secondary btn-prev">
                      <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Anterior</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                      <span class="align-middle d-sm-inline-block d-none me-sm-1">Proximo</span>
                      <i class="ti ti-arrow-right ti-xs"></i>
                    </button>
                  </div>
                </div>

                <!-- Database -->
                <div id="database" class="content pt-3 pt-lg-0">

                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nome</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="nome_pessoa_proxima">

                        </div>

                      </div>
<br>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Contacto</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="contacto_pessoa_proxima">

                        </div>
                      </div>
                      <br>

                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Outras Informações relevantes:</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea class="form-control" rows="2" name="informacao_pessoa_proxima" placeholder="Relação pessoal/ Outros números/ ocupação/ Local de trabalho/ morada/ email, etc"></textarea>

                        </div>
                      </div>

                      <br>
                  <div class="col-12 d-flex justify-content-between mt-4">
                    <button class="btn btn-label-secondary btn-prev">
                      <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Anterior</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                      <span class="align-middle d-sm-inline-block d-none me-sm-1">Proximo</span>
                      <i class="ti ti-arrow-right ti-xs"></i>
                    </button>
                  </div>
                </div>

                <!-- billing -->
                <div id="billing" class="content">


                    <div class="row">

                        <div class='col-sm-12'>
                            Nome da Empresa
                            <div class="form-group">
                                <div class='input-group date' id='myDatepicker'>
                                    <input type='text' class="form-control" name="nome_da_empresa" />
                                    <span class="input-group-addon">
                                       <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
<br>
                        <div class='col-sm-12'>
                            Morada
                            <div class="form-group">
                                <div class='input-group date' id='myDatepicker2'>
                                    <input type='text' class="form-control" name="morada_empresa" />
                                    <span class="input-group-addon">
                                       <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
<br>
                         <div class='col-sm-12'>
                            Ocupação/Cargo
                            <div class="form-group">
                                <div class='input-group date' id='myDatepicker3'>
                                    <input type='text' class="form-control" name="ocupacao_cargo" />
                                    <span class="input-group-addon">
                                       <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
<br>
                        <div class='col-sm-12'>
                            Contacto da Empresa-1
                            <div class="form-group">
                                <div class='input-group date' id='myDatepicker4'>
                                    <input type='text' class="form-control" name="contacto_1_empresa" />
                                    <span class="input-group-addon">
                                       <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
<br>
                         <div class='col-sm-12'>
                            Contacto da Empresa-2
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker6'>
                                    <input type='text' class="form-control" name="contacto_2_empresa" />
                                    <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                      <br>
                        <div class='col-sm-12'>
                            Email
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker7'>
                                    <input type='text' class="form-control" name="email_empresa" />
                                    <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
<br>
                        <div class='col-sm-12'>
                           Website
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker7'>
                                    <input type='text' class="form-control" name="website_empresa" />
                                    <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>

                  <div class="col-12 d-flex justify-content-between mt-5">
                    <button class="btn btn-label-secondary btn-prev">
                      <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Anterior</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                      <span class="align-middle d-sm-inline-block d-none me-sm-1">Proximo</span>
                      <i class="ti ti-arrow-right ti-xs"></i>
                    </button>
                  </div>
                </div>

                <!-- submit -->
                <div id="submit" class="content text-center pt-3 pt-lg-0">
                  <h5 class="mb-2 mt-3">Submit</h5>
                  <p>Submit to kick start your project.</p>
                  <!-- image -->
                  <img
                    src="../../assets/img/illustrations/girl-with-laptop.png"
                    class="img-fluid"
                    alt="Create App img"
                    width="175" />
                  <div class="col-12 d-flex justify-content-between mt-4 pt-2">
                    <button class="btn btn-label-secondary btn-prev">
                      <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Anterior</span>
                    </button>
                    <button
                      class="btn btn-success btn-next btn-submit"
                      data-bs-dismiss="modal"
                      aria-label="Close">
                      <span class="align-middle d-sm-inline-block d-none me-sm-1">Submit</span>
                      <i class="ti ti-check ti-xs"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

            <!--Final de modal-->

 @endsection

 @section('script')

 <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

 <script type="text/javascript">


        //Inicio de Listar cliente
        $(document).ready(function() {
                    $('#dataTable').DataTable({
                        serverSide: true,
                        ajax: "{{ route('all.clientes') }}",
                        columns: [
                            // Add your columns here (should match the table headers)
                            { data: 'id', name: 'id' },
                            { data: 'nome_completo', name: 'nome_completo' },
                            { data: 'nuit', name: 'nuit' },
                            { data: 'localizacao', name: 'localizacao' },
                            // Example columns
                        ]
                    });
        });

        //FIM de Listar cliente

        //
        //Mostrar modal para criar novo registro
           $('#novo_registo').on('click',function () {
            $('#id').val("");

            $('#enviar').show();
            $('#updatebutton').hide();
            $('#RegistoModal').modal('show');
        });
        //Mostrar modal para criar novo registro
        //


</script>


<script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>

<!-- Vendors JS -->
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('assets/js/modal-add-new-cc.js')}}"></script>
<script src="{{asset('assets/js/modal-add-new-address.js')}}"></script>
<script src="{{asset('assets/js/modal-edit-user.js')}}"></script>
<script src="{{asset('assets/js/modal-enable-otp.js')}}"></script>
<script src="{{asset('assets/js/modal-share-project.js')}}"></script>
<script src="{{asset('assets/js/modal-create-app.js')}}"></script>
<script src="{{asset('assets/js/modal-two-factor-auth.js')}}"></script>

@endsection

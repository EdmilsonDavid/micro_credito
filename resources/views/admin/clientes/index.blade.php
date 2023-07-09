@extends('layouts.include.main')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@section('content')


  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">DataTables /</span> Advanced</h4>

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

@endsection

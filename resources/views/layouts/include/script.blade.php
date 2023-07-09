<!-- jQuery 2.2.3 -->
<script src="{{ asset('assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/dist/js/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/moment.min.js')}}"></script>
<!-- datepicker -->
<script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>

<!-- FastClick -->
<script src="{{ asset('assets/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/app.min.js') }}"></script>

<!-- Chart -->
<script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>

<script src="{{ asset('assets/dist/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

<script src="{{ asset('assets/plugins/bootstrap-confirm-delete.js') }}"></script>
<script src="{{ asset('assets/dist/js/jquery.PrintArea.js') }}"></script>

 


<script type="text/javascript">
  $.ajaxSetup({
     headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
  });
</script>

<script src="{{ asset('assets/plugins/highchart/highcharts.js') }}"></script>

<script>

     linguaV='{{Session::get('dflt_lang')}}'; 


     if(linguaV=="po"){

        var lingua = {
          "lengthMenu": "Mostrar _MENU_ total por pagina",
          "zeroRecords": "Sem resultados para a pesquisa",
          "info": "Mostrando a pagina _PAGE_ no total de _PAGES_",
          "infoEmpty": "Sem resultados",
          "sSearch":         "Procurar:",
          "infoFiltered": "(Fitrados no total de _MAX_ resultados)",
          "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Proximo",
                    "sPrevious": "Anterior"
                },
        }
     }else{

        var lingua = {
         
        }
     }

 





  var ar = {
                "sProcessing":   "جارٍ التحميل...",
                "sLengthMenu":   "أظهر _MENU_ مدخلات",
                "sZeroRecords":  "لم يعثر على أية سجلات",
                "sInfo":         "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
                "sInfoEmpty":    "يعرض 0 إلى 0 من أصل 0 سجل",
                "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
                "sInfoPostFix":  "",
                "sSearch":       "ابحث:",
                "sUrl":          "",
                "oPaginate": {
                    "sFirst":    "الأول",
                    "sPrevious": "السابق",
                    "sNext":     "التالي",
                    "sLast":     "الأخير"
                }
            }

  var ch = {
              "sProcessing":   "处理中...",
              "sLengthMenu":   "显示 _MENU_ 项结果",
              "sZeroRecords":  "没有匹配结果",
              "sInfo":         "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
              "sInfoEmpty":    "显示第 0 至 0 项结果，共 0 项",
              "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
              "sInfoPostFix":  "",
              "sSearch":       "搜索:",
              "sUrl":          "",
              "sEmptyTable":     "表中数据为空",
              "sLoadingRecords": "载入中...",
              "sInfoThousands":  ",",
              "oPaginate": {
                  "sFirst":    "首页",
                  "sPrevious": "上页",
                  "sNext":     "下页",
                  "sLast":     "末页"
              },
              "oAria": {
                  "sSortAscending":  ": 以升序排列此列",
                  "sSortDescending": ": 以降序排列此列"
              }
          }

  var en = {
              "decimal":        "",
              "emptyTable":     "No data available in table",
              "info":           "Showing _START_ to _END_ of _TOTAL_ entries",
              "infoEmpty":      "Showing 0 to 0 of 0 entries",
              "infoFiltered":   "(filtered from _MAX_ total entries)",
              "infoPostFix":    "",
              "thousands":      ",",
              "lengthMenu":     "Show _MENU_ entries",
              "loadingRecords": "Loading...",
              "processing":     "Processing...",
              "search":         "Search:",
              "zeroRecords":    "No matching records found",
              "paginate": {
                  "first":      "First",
                  "last":       "Last",
                  "next":       "Next",
                  "previous":   "Previous"
              },
              "aria": {
                  "sortAscending":  ": activate to sort column ascending",
                  "sortDescending": ": activate to sort column descending"
              }
          };

    var fr = {
                "lengthMenu": "Afficher _MENU_ records par page",
                "zeroRecords": "Rien n'a été trouvé - Pardon",
                "infoEmpty": "Aucun enregistrement disponible",
                "search":         "Chercher:",
                "paginate": {
                    "first":      "Premier",
                    "last":       "Dernier",
                    "next":       "Prochain",
                    "previous":   "précédent"
                },
                "info": "présentation _START_ to _END_ of _TOTAL_ entrées"
              }

    var jp = {
                "sEmptyTable":     "テーブルにデータがありません",
                "sInfo":           " _TOTAL_ 件中 _START_ から _END_ まで表示",
                  "sInfoEmpty":      " 0 件中 0 から 0 まで表示",
                  "sInfoFiltered":   "（全 _MAX_ 件より抽出）",
                "sInfoPostFix":    "",
                "sInfoThousands":  ",",
                  "sLengthMenu":     "_MENU_ 件表示",
                "sLoadingRecords": "読み込み中...",
                  "sProcessing":     "処理中...",
                "sSearch":         "検索:",
                  "sZeroRecords":    "一致するレコードがありません",
                  "oPaginate": {
                      "sFirst":    "先頭",
                      "sLast":     "最終",
                      "sNext":     "次",
                      "sPrevious": "前"
                  },
                "oAria": {
                      "sSortAscending":  ": 列を昇順に並べ替えるにはアクティブにする",
                      "sSortDescending": ": 列を降順に並べ替えるにはアクティブにする"
                  }
              }

    var rs = {
                "processing": "Подождите...",
                "search": "Поиск:",
                "lengthMenu": "Показать _MENU_ записей",
                "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
                "infoEmpty": "Записи с 0 до 0 из 0 записей",
                "infoFiltered": "(отфильтровано из _MAX_ записей)",
                "infoPostFix": "",
                "loadingRecords": "Загрузка записей...",
                "zeroRecords": "Записи отсутствуют.",
                "emptyTable": "В таблице отсутствуют данные",
                "paginate": {
                  "first": "Первая",
                  "previous": "Предыдущая",
                  "next": "Следующая",
                  "last": "Последняя"
                },
                "aria": {
                  "sortAscending": ": активировать для сортировки столбца по возрастанию",
                  "sortDescending": ": активировать для сортировки столбца по убыванию"
                }
              }

    var sp = {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
    


       var po2= {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
	<!-- //Dialog show event handler -->

  $('#confirmDelete').on('show.bs.modal', function (e) {
      $message = $(e.relatedTarget).attr('data-message');
      $(this).find('.modal-body p').text($message);
      $title = $(e.relatedTarget).attr('data-title');
      $(this).find('.modal-title').text($title);

      // Pass form reference to modal for submission on yes/ok
      var form = $(e.relatedTarget).closest('form');
      $(this).find('.modal-footer #confirm').data('form', form);
  });

  <!--// Form confirm (yes/ok) handler, submits form -->
  $('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
      $(this).data('form').submit();
  });


  $('.lang').on('click', function() {
    var lang = $(this).attr('id');
    var url = "{{url('change-lang')}}";
    var token = "{{csrf_token()}}";


    
    $.ajax({
            url   :url,
            async : false,
            data:{                  // data that will be sent
                _token:token,
                lang:lang
            },
            type:"POST",            // type of submision
            success:function(data){
                console.log("sucess "+data);
                if(data == 1) {
                    location.reload();

                }
                
            },
             error: function(xhr, desc, err) {
                
                return 0;
            }
        });
  });

$("#notifications").fadeTo(2000, 500).slideUp(500, function(){
    $("#notifications").slideUp(500);
});

// Google analytics start

  //end


  var indice=0;

$('.treeview').ready(function(){
  indice =  $('.treeview ul li.active').index();
})
$('.treeview').click(function(){
//  var menu_nome = $.trim($('.treeview ul li.active').text());
        $(".treeview ul li ").eq(indice).addClass("active").delay(520).queue(function(next){
          $(this).addClass('active');
        next();
    });
  
})


</script>
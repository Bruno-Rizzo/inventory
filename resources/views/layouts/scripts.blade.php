<script src="{{asset('/vendor/bootstrap/dist/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('/vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>

<!-- js for this page only -->
<script src="../vendor/chart.js/dist/Chart.min.j')}}">></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{asset('/assets/js/page/index.js')}}"></script>
<!-- ======= -->
<script src="{{asset('/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/vendor/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/assets/js/page/datatables.js')}}"></script>
<script src="{{asset('/assets/js/main.js')}}"></script>
<script>
    Main.init()
</script>
<script>
    DataTable.init()
</script>
<!-- Visualizar Imagem a ser substituída  -->
<script>
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

<script>

$(function(){
    $(document).on('change','#supplier_id',function(){
        var supplier_id = $(this).val();
        $.ajax({
            url:"{{route('categories.get')}}",
            type:"GET",
            data:{supplier_id:supplier_id},
            success:function(data){
                var html = ' <option value=""> Selecione </option>'
                $.each(data,function(key,v){
                    html += '<option value=" '+v.category_id' "> '+v.category.name+' </option>'
                });
                $('#category_id').html(html);
            }
        })
    });
});

</script>

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

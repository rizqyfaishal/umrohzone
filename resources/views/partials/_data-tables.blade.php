@section('data-tables-css')
    <link rel="stylesheet" href="{{ URL::asset('/css/datatables.min.css') }}">
@endsection

@section('data-tables-js')
    <script src="{{ URL::asset('/js/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#dataTables').DataTable();
        });
    </script>
@endsection


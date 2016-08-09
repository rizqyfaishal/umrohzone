@section('select2-css')
    <link rel="stylesheet" href="{{ URL::asset('css/select2.min.css') }}">
@endsection

@section('select2-js')
    <script src="{{ URL::asset('js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("select").select2();
        });
    </script>
@endsection


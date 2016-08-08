<div id="template" style="display: none" >
    <div class="form-group {{ $errors->has('hotel_fasilitas_details') ? ' has-error' : '' }}">
        {!! Form::text('hotel_fasilitas_details[]',old('hotel_fasilitas_detail[]'),['class' => 'form-control','placeholder' => 'Nama Hotel','multiple' => 'multiple']) !!}
        @if ($errors->has('hotel_fasilitas_detail'))
            <span class="help-block">
                    <strong>{{ $errors->first('hotel_fasilitas_detail') }}</strong>
                </span>
        @endif
    </div>
</div>
<script>
    $(document).ready(function () {
        var con = $('#form-text-con');
        $('#add').on('click',function () {
            var text = $('#template').html();
            console.log(text);
            $(con).append(text);
        })
    });
</script>
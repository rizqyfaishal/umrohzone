{!! Form::model($pesawat,['method' => 'PATCH', 'action' => ['PesawatController@update',$pesawat->id], 'enctype' => 'multipart/form-data']) !!}
@include('data-entry.pesawat.partials._pesawat-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Edit data pesawat" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
<div class="row">
    <div class="col-lg-12">
        <h3>List photo pesawat</h3>
    </div>
    <div class="hotel-photos">
        @foreach($pesawat->photos as $photo)
            <div class="col-lg-4">
                <div class="photo-section">
                    <img src="{{ action('AttachmentController@get',$photo->hashcode) }}" alt="Photo" height="120">
                </div>
                {!! Form::open(['method' => 'DELETE','action' => ['AttachmentController@delete',$photo->hashcode]]) !!}
                <button type="submit" class="btn btn-orange"><i class="fa fa-trash">&nbsp;</i>Delete</button>
                {!! Form::close() !!}
            </div>
        @endforeach
    </div>
</div>


@extends('layouts.app')
@section('content')
       <div class="container">

        @if($errors->all())
          <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                 <li>
                     {{$error}}
                 </li>
            @endforeach
             </ul>
        @endif

       {!! Form::open(['action' => ['invoie_datacontroller@update',$data->id],'method'=> 'PUT']) !!}
              <div class="col-md-6">
                     <div class="form-group">
                     {!! Form::label('Name') !!}
                     {!! Form::text('name',$data->name,["class"=>"form-control"]) !!}
                     </div>
                     <div class="form-group">
                     {!! Form::label('Price') !!}
                     {!! Form::text('price',$data->price,["class"=>"form-control" ]) !!}
                     </div>
                     <div class="form-group">
                     {!! Form::label('ID') !!}
                     {!! Form::text('contact_id',$data->contact_id,["class"=>"form-control"]) !!}
                     </div>
                     {{-- <div class="form-group">
                        {!! Form::label('ID') !!}
                        {!! Form::text('contact_id',$data->contact_id,["class"=>"form-control"]) !!}
                    </div> --}}
                     <input type="submit" value="อัพเดต" class="btn btn-primary">
                     <a href="/invoie" class="btn btn-success">กลับ</a>
              </div>
       {!! Form::close() !!}
       </div>
@endsection





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
              <div class="col-md-6">
                     <div class="form-group">
                     {!! Form::label($data->name) !!}
                     {!! Form::text('name',$data->name,["class"=>"form-control"]) !!}
                     </div>
                     <div class="form-group">
                     {!! Form::label('Price') !!}

                     </div>
                     <div class="form-group">
                     {!! Form::label('IMG') !!}
                     {!! Form::text('img',$data->phone,["class"=>"form-control"]) !!}
                     </div>
                     <input type="submit" value="อัพเดต" class="btn btn-primary">
                     <a href="/invoie" class="btn btn-success">กลับ</a>
              </div>
       </div>
@endsection





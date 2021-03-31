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

       {!! Form::open(['action' => 'invoie_datacontroller@store','method'=> 'POST']) !!}
              <div class="col-md-6">
                     <div class="form-group">
                     {!! Form::label('Name') !!}
                     {!! Form::text('name',null,["class"=>"form-control" ]) !!}
                     </div>
                     <div class="form-group">
                     {!! Form::label('Price') !!}
                     {!! Form::text('price',null,["class"=>"form-control"]) !!}
                     </div>
                     <div class="form-group">
                     {!! Form::label('ID') !!}
                     {!! Form::text('contact_id',null,["class"=>"form-control"]) !!}
                     </div>
                     <input type="submit" value="บันทึก" class="btn btn-primary">
                     <a href="/invoie_data" class="btn btn-success">กลับ</a>

                     {{-- <a href="{{route('contact_data.show',$row->id)}}"class="btn btn-success" >กลับ</a> --}}
              </div>
       {!! Form::close() !!}
       </div>
@endsection




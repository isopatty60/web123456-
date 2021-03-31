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

       {!! Form::open(['action' => ['Customer_controller@update',$data->id],'method'=> 'PUT']) !!}
              <div class="col-md-6">
                     <div class="form-group">
                     {!! Form::label('Name') !!}
                     {!! Form::text('name',$data->name,["class"=>"form-control"]) !!}
                     </div>
                     <div class="form-group">
                     {!! Form::label('Price') !!}
                     {!! Form::text('last_name',$data->last_name,["class"=>"form-control"]) !!}
                     </div>
                     <div class="form-group">
                     {!! Form::label('note') !!}
                     {!! Form::text('list',$data->list,["class"=>"form-control"]) !!}
                     </div>

                     {{-- <div class="form-group">
                        {!! Form::label('Note') !!}
                        {!! Form::select('Note',
                       [
                           'รายรับ' => ['รายรับ' => 'รายรับ'],
                           'รายจ่าย' => ['รายจ่าย' => 'รายจ่าย']
                       ]
                       );!!}
                       </div> --}}
                     <input type="submit" value="อัพเดต" class="btn btn-primary">
                     <a href="/customer" class="btn btn-success">กลับ</a>
              </div>
       {!! Form::close() !!}
       </div>
@endsection





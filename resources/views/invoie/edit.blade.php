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

       {!! Form::open(['action' => ['invoiecontroller@update',$data1->id],'method'=> 'PUT']) !!}
              <div class="col-md-6">
                     <div class="form-group">
                     {!! Form::label('Name') !!}
                     {!! Form::text('name',$data1->name,["class"=>"form-control"]) !!}
                     </div>
                     <div class="form-group">
                     {!! Form::label('Price') !!}
                     {!! Form::text('price',$data1->price,["class"=>"form-control"]) !!}
                     </div>
                     {{-- <div class="form-group">
                     {!! Form::label('note') !!}
                     {!! Form::text('Note',$data1->Note,["class"=>"form-control"]) !!}
                     </div> --}}
                     <div class="form-group">
                        {!! Form::label('updated_at') !!}
                        {!! Form::text('date',$data1->updated_at,["class"=>"form-control"]) !!}
                    </div>

                     <div class="form-group">
                        {!! Form::label('Note') !!}
                        {!! Form::select('Note',
                       [
                           'รายรับ' => ['รายรับ' => 'รายรับ'],
                           'รายจ่าย' => ['รายจ่าย' => 'รายจ่าย']
                       ]
                       );!!}
                       </div>
                     <input type="submit" value="อัพเดต" class="btn btn-primary">
                     <a href="/invoie" class="btn btn-success">กลับ</a>
              </div>
       {!! Form::close() !!}
       </div>
@endsection





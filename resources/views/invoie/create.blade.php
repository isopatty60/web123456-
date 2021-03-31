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

       {!! Form::open(['action' => 'invoiecontroller@store','method'=> 'POST']) !!}
              <div class="col-md-6">
                     <div class="form-group">
                     {!! Form::label('Name') !!}
                     {!! Form::text('name',null,["class"=>"form-control" , "placeholder"=>"Enter Name"]) !!}
                     </div>
                     <div class="form-group">
                     {!! Form::label('Price') !!}
                     {!! Form::text('price',null,["class"=>"form-control", "placeholder"=>"Enter Price"]) !!}
                     </div>
                     {{-- <div class="form-group">
                     {!! Form::label('Note') !!}
                     {!! Form::text('Note',null,["class"=>"form-control"]) !!}
                     </div> --}}
                     <div class="form-group">
                     {!! Form::label('Note') !!}
                     {!! Form::select('Note',
                    [
                        'รายรับ' => ['รายรับ' => 'รายรับ'],
                        'รายจ่าย' => ['รายจ่าย' => 'รายจ่าย'],
                    ]
                    );!!}
                    </div>
                     <input type="submit" value="บันทึก" class="btn btn-primary">
                     <a href="/invoie" class="btn btn-success">กลับ</a>
              </div>
            {{-- {!! Form::close() !!} --}}
       {!! Form::close() !!}
       </div>
@endsection




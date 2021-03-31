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

       {!! Form::open(['action' => 'Customer_controller@store','method'=> 'POST']) !!}
              <div class="col-md-6">
                     <div class="form-group">
                     {!! Form::label('Name') !!}
                     {!! Form::text('name',null,["class"=>"form-control"]) !!}
                     </div>
                     <div class="form-group">
                     {!! Form::label('Last_name') !!}
                     {!! Form::text('last_name',null,["class"=>"form-control"]) !!}
                     </div>
                     <div class="form-group">
                     {!! Form::label('List') !!}
                     {!! Form::text('list',null,["class"=>"form-control"]) !!}
                     </div>
                     {{-- <div class="form-group">
                     {!! Form::label('Note') !!}
                     {!! Form::select('Note',
                    [
                        'รายรับ' => ['รายรับ' => 'รายรับ'],
                        'รายจ่าย' => ['รายจ่าย' => 'รายจ่าย'],
                    ]
                    );!!}
                    </div> --}}
                     <input type="submit" value="บันทึก" class="btn btn-primary">
                     <a href="/customer" class="btn btn-success">กลับ</a>
              </div>
            {{-- {!! Form::close() !!} --}}
       {!! Form::close() !!}
       </div>
@endsection




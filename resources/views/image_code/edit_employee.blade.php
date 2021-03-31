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

        <div class="container">
            <div class="jumbotron">
                <form action="/updateimage/{{$employees->id}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <h1>แก้ไข</h1>
                    <input type="hidden" name="id" id="id" value="{{ $employees->id}}">

                    <div class="from-grop">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $employees->name}}" placeholder="Enter Name">
                    </div>

                    <div class="from-grop">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="{{ $employees->email}}" placeholder="Enter email">
                    </div>

                    <div class="from-grop">
                        <label>Post</label>
                        <input type="text" name="post" class="form-control" value="{{ $employees->post}}" placeholder="Enter post">
                    </div>

                    <label>Image</label>
                    <div class="input-grop">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" value="{{ $employees->image}}">
                            <label class="custom-file-label">choose file</label>
                        </div>
                    </div>
                    <br><br>
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">upload image</button>
                    <a href="/show_employee" class="btn btn-success">กลับ</a>

                </form>
            </div>
        </div>
@endsection





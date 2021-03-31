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
                    <h1>เพิ่มรูปภาพ</h1>
                <form action="{{ route('addimage')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email ID">
                    </div>

                    <div class="form-group">
                        <label>Note</label>
                        <input type="text" name="post" class="form-control" placeholder="Enter Post">
                    </div>

                    <div class="input-group my-4">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input-primary">
                            <label class="custom-file-input">Choose file</label>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Save data</button>
                    <a href="/invoie" class="btn btn-success">กลับหน้าหลัก</a>
                    <a href="/show_employee" class="btn btn-success">ดูรูปภาพ</a>
                </form>
            </div>
        </div>
       </div>
@endsection





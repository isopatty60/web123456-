
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
    // dd($data);
?>
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}
.modal form label {
	font-weight: normal;
}
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;
			});
		} else{
			checkbox.each(function(){
				this.checked = false;
			});
		}
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
    @extends('layouts.app')
    @section('content')
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
                        <h2>รายการ</h2>
                        <tbody>
                            @foreach ($data  as $item)
                            <tr>
                                {{-- <td>{{$item->id}}</td> --}}
                            </tr>
                        @endforeach

					</div>
					<div class="col-sm-6">
                        <a href="{{route('createForUser',$id)}}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                        <a href="/data/{{$id}}" class="btn btn-success" ><i class="material-icons">&#xE8AD;</i> <span>Report</span></a>
                        {{-- <a href="/employees" class="btn btn-danger" ><i class="material-icons">&#xe3f4;</i>  <span>เพิ่มรูปภาพ</span></a> --}}
                        <tbody>

                            {{-- @foreach ($data as $i=>$row)
                            <tr>
                                <a href="{{route('data/',$row->coutact_id)}}" class="report" > <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            </tr>
                            @endforeach --}}
						{{-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a> --}}
					</div>
				</div>
            </div>
            <div class="container">

                {{-- <h2 align="center">ข้อมูล</h2>
                <a href="/contact/create" class="btn btn-primary">เพิ่มข้อมูล</a> --}}
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">PRICE(Bath)</th>
                        <th scope="col">IMG</th>
                        <th scope="col">Date_created</th>
                        <th scope="col">Date_updated</th>
                        <th scope="col">แก้ไข</th>
                        <th scope="col">ลบ</th>
                        <th scope="col">อื่นๆ</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $i=>$row)
                        <?php
                            // dd($data);
                        ?>
                            <tr>
                                    {{-- <div class="form-group">
                                        {!! Form::label($data->name) !!}
                                        {!! Form::text('name',$data->name,["class"=>"form-control"]) !!}
                                        </div> --}}
                                <th scope="row">{{$i+1}}</th>
                                <td>{{$row->name}}</td>
                                <td>{{$row->price}}</td>
                                <td>{{$row->img}}</td>
                                <td>{{$row->created_at}}</td>
                                <td>{{$row->updated_at}}</td>

                                <td>
                                    {{-- <a href="{{route('contact.edit',$row->id)}}" class="btn btn-success">แก้ไข</a> --}}
                                    <a href="{{route('invoie_data.edit',$row->id)}}" class="edit" > <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                </td>
                                <td>
                                    <form action="{{route('invoie_data.destroy',$row->id)}}" method="post">
                                        @csrf @method('DELETE')

                                        {{-- <input type="submit" value="ลบ"   class="btn btn-success deleteForm" > --}}
                                        <a  data-toggle="{{$row->name}}" class="delete" > <i class="material-icons deleteForm" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                    </form>
                                </td>
                                <td>


                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
		    </div>
	    </div>
    </div>
</div>
<!-- Edit Modal HTML -->

@endsection









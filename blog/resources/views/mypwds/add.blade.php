@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
				<div class="panel-body">
<!--Display Validation Errors-->
@include('common.errors')
<!--New Mypwd From-->
<form action="/mypwd" method="POST" class="form-horizontal">
	{{csrf_field()}}
	<!--Mypwd Name-->
	<div class="form-group">
		<label for="mypwd"class="col-sm-3 control-label">Name</label>
		<div class="col-sm-6">
		<input type="text" name="name" id="mypwd-name" class="form-control">
		</div>
	</div>	

    <!--Mypwd User-->
	<div class="form-group">
		<label for="mypwd"class="col-sm-3 control-label">Username</label>
		<div class="col-sm-6">
		<input type="text" name="username" id="mypwd-user" class="form-control">
		</div>
	</div>
	<!--Mypwd Password-->
	<div class="form-group">
		<label for="mypwd"class="col-sm-3 control-label">Password</label>
		<div class="col-sm-6">
		<input type="text" name="password" id="mypwd-password" class="form-control">
		</div>
	</div>
	<!--Mypwd Remark-->
	<div class="form-group">
		<label for="mypwd"class="col-sm-3 control-label">Remark</label>
		<div class="col-sm-6">
		<input type="text" name="remark" id="mypwd-remark" class="form-control">
		</div>
	</div>
    <!--Add Mypwd Button-->
    <div class="form-group">
	<div class="col-sm-offset-3 col-sm-6"> 
	<button type="submit" class="btn btn-default">
	<i class="fa fa-plus"></i>Add Mypwd
</button>
	</div>
	</div>
</form>
	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

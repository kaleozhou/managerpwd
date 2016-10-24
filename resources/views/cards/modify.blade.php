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
<!--New card From-->
<form action="/card_modify" method="POST" class="form-horizontal">
	{{csrf_field()}}
	<!--card Name-->
	<div class="form-group">
		<label for="card"class="col-sm-3 control-label">Name</label>
		<div class="col-sm-6">
		<input type="text" name="name" id="card-name" class="form-control" value="{{$card->name}}">
		<input type="hidden" name="id" id="card-id" class="form-control" value="{{$card->id}}" >
		</div>
	</div>	

    <!--card billamount-->
	<div class="form-group">
		<label for="card"class="col-sm-3 control-label">Billamount</label>
		<div class="col-sm-6">
		<input type="text" name="billamount" id="card-user" class="form-control"value="{{$card->billamount}}">
		</div>
	</div>	

	<!--card repayment-->
	<div class="form-group">
		<label for="card"class="col-sm-3 control-label">Repayment</label>
		<div class="col-sm-6">
		<input type="text" name="repayment" id="card-repayment" class="form-control"value="{{$card->repayment}}">
		</div>
	</div>
	<!--card totalamount-->
	<div class="form-group">
		<label for="card"class="col-sm-3 control-label">Totalamount</label>
		<div class="col-sm-6">
		<input type="text" name="totalamount" id="card-totalamount" class="form-control"value="{{$card->totalamount}}">
		</div>
	</div>
	<!--card balance-->
	<div class="form-group">
		<label for="card"class="col-sm-3 control-label">Balance</label>
		<div class="col-sm-6">
		<input type="text" name="balance" id="card-balance" class="form-control"value="{{$card->balance}}">
		</div>
	</div>
	<!--card Remark-->
	<div class="form-group">
		<label for="card"class="col-sm-3 control-label">Remark</label>
		<div class="col-sm-6">
		<input type="text" name="remark" id="card-remark" class="form-control"value="{{$card->remark}}">
		</div>
	</div>
    <!--Add card Button-->
    <div class="form-group">
	    <div class="col-sm-offset-3 col-sm-6"> 
	        <button type="submit" class="btn btn-default">
	        <i class="fa fa-plus"></i>Add card
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

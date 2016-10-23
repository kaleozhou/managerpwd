@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <a href="/card" class="panel-heading">添加信用卡</a>
                <a href="/cards" class="panel-heading">我的信用卡</a>
				<div class="panel-body">
<!--Display Validation Errors-->
@include('common.errors')
<!--New card From-->
<form action="/card" method="POST" class="form-horizontal">
	{{csrf_field()}}
	<!--card Name-->
	<div class="form-group">
		<label for="card"class="col-sm-3 control-label">信用卡名称</label>
		<div class="col-sm-6">
		<input type="text" name="name" id="card-name" class="form-control">
		</div>
	</div>	

    <!--card billamount-->
	<div class="form-group">
		<label for="card"class="col-sm-3 control-label">本期账单</label>
		<div class="col-sm-6">
		<input type="text" name="billamount" id="card-user" class="form-control">
		</div>
	</div>
	<!--card repayment-->
	<div class="form-group">
		<label for="card"class="col-sm-3 control-label">还款日</label>
		<div class="col-sm-6">
		<input type="text" name="repayment" id="card-repayment" class="form-control">
		</div>
	</div>
	<!--card totalamount-->
	<div class="form-group">
		<label for="card"class="col-sm-3 control-label">额度</label>
		<div class="col-sm-6">
		<input type="text" name="totalamount" id="card-totalamount" class="form-control">
		</div>
	</div>
	<!--card balance-->
	<div class="form-group">
		<label for="card"class="col-sm-3 control-label">可用余额</label>
		<div class="col-sm-6">
		<input type="text" name="balance" id="card-balance" class="form-control">
		</div>
	</div>
	<!--card Remark-->
	<div class="form-group">
		<label for="card"class="col-sm-3 control-label">备注</label>
		<div class="col-sm-6">
		<input type="text" name="remark" id="card-remark" class="form-control">
		</div>
	</div>
    <!--Add card Button-->
    <div class="form-group">
	<div class="col-sm-offset-3 col-sm-6"> 
	<button type="submit" class="btn btn-default">
	<i class="fa fa-plus"></i>确定提交
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

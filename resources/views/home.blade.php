@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
					You are logged in!
				<a href='/mypwd'>添加密码表</a>
				<a href='/mypwds'>我的密码表</a>
				<a href='/card'>添加银行卡</a>
				<a href='/cards'>我的银行列表</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

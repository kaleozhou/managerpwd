@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div href="/cards" class="panel-heading">我的银行卡</div>
				<div class="panel-body">
@if(count($cards)>0)
		<div class="panel panel-default">
			<div class="panel-heading">
				我的银行卡
            </div>

			<div class="panel-body">
				<table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>信用卡名</th>
                        <th>信用卡名</th>
                        <th>信用卡名</th>
                        <th>信用卡名</th>
                        <th>信用卡名</th>
                        <th>信用卡名</th>
                        <th>信用卡名</th>
                        <th>信用卡名</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
					@foreach ($cards as $card)
						 <tr>
                            <!-- Card Name -->	
                            <td class="table-text">
                                <div>{{$card->name }}</div>
                            </td>
                            <!-- Card billamount -->
                             <td class="table-text">
                                <div>{{$card->billamount }}</div>
							</td>
                            <!-- Card repayment -->
                             <td class="table-text">
                                <div>{{$card->repayment }}</div>
                             <td class="table-text">
                            <!-- Card totalamount -->
                             <td class="table-text">
                                <div>{{$card->totalamount }}</div>
                             <td class="table-text">
                            <!-- Card balance -->
                             <td class="table-text">
                                <div>{{$card->balance }}</div>
                             <td class="table-text">
                            <!-- Card remark -->
                            <td class="table-text">
                                <div>{{$card->remark }}</div>
                            </td> 
                            <!-- Card Delete -->
                            <td class="table-text">
                            <form action="/cards/{{ $card->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button>删除</button>
                            </form>
							</td>
                            <!-- Card Delete -->
                            <td class="table-text">
                            <form action="/card_modify/{{ $card->id }}" method="get">
                                {{ csrf_field() }}
                                <button>Modify Card</button>
                            </form>
							</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

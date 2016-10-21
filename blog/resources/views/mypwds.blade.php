@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
				<div class="panel-body">
@if(count($mypwds)>0)
		<div class="panel panel-default">
			<div class="panel-heading">
                Current Mypwds
            </div>

			<div class="panel-body">
				<table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Mypwd</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
					@foreach ($mypwds as $mypwd)
						 <tr>
							<!-- Mypwd Name -->															<td class="table-text">
                                <div>{{$mypwd->name }}</div>
                            </td>
                            <td>
                                <!-- TODO: Delete Button -->
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

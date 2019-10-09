
<title>Ticket Details</title>
<!-- 	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
 -->

 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">


            <?php  foreach ($data as $value): ?>
				<div class="panel-heading">
                <a href="{{ route('dashboard') }}" class="btn btn-info">&nbsp;Go Back</a>
                 &nbsp; &nbsp; &nbsp; &nbsp;<b>{{$value->ticket_name}}</b></div>
				<div class="text-success"><center><?php echo @$su; ?></center></div>
                <div class="panel-body">
				<div class=" bg-success">
					<div class="col-md-6">
                    {{$value->ticket_description}}
					</div>
                    <div class="col-md-6">Posted on : {{$value->created_at}}</div>

				</div>
                
                <!-- <div class=" pull-right bg-info">
					<div class="col-md-6">
                    {{$value->ticket_description}}
					</div>
                    <div class="col-md-6">Posted on : {{$value->created_at}}</div>

				</div> -->
                </div>
                <div class="panel-body bg-success">
                 Click <a>here</a> to Leave a Comment.
                </div>
				</div>
            <?php  endforeach; ?>

		</div>
	</div>
</div>

@endsection
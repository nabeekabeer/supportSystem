
<title>Create Ticket</title>
<!-- 	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
 -->

 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
				<div class="panel-heading"><a href="{{ route('dashboard') }}" class="btn btn-info">&nbsp;Go Back</a> &nbsp; &nbsp; &nbsp; &nbsp;Create New Ticket</div>
				<div class="text-success"><center><?php echo @$su; ?></center></div>
				<div class="panel-body">
					<div class="col-md-6">
						<form method="post" action="store_ticket">
							{{ csrf_field() }}
							<div class="form-group">
								<input type="text" name="ticket_name" class="form-control" placeholder="Subject" required="true">
						   </div>
						   <div class="form-group">
								<textarea name="ticket_description" class="form-control" placeholder="Description" required></textarea>
						   </div>
						   <div class="form-group pull-right">
								<input type="submit" name="ticket_submit" value="Create" class="btn btn-success">
						   </div>
						</form>
					</div>
				</div>
				</div>


		</div>
	</div>
</div>

@endsection
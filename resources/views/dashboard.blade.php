@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('create_ticket') }}">
                         <div class="btn btn-primary">Create New Ticket</div>
                    </a>
                   <hr>
                   <div>
                       <table class="table" id="data-table">
                           <tr>
                                <td>Ticket No</td> 
                                <td>Owner</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>Action</td>
                            </tr>
                            <?php $i=1; foreach ($data as $value): ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $value->name; ?></td>
                                <td><?php echo $value->ticket_name; ?></td>
                                <td><?php echo $value->ticket_description; ?></td>
                                <td>
                                    <a href="">edit</a>||<a href="">delete</a>||<a href="">View Detail</a>
                                </td>
                            </tr>
                            <?php $i++; endforeach; ?>
                            
                       </table>
                     <?php 
                      // print_r(Auth::user()->id);
                        ?>
                   </div>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection
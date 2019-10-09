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
                   <div class="">
                       <table class="table" id="data-table">
                           <tr>
                                <td>Ticket No</td> 
                                <td>Owner</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>Action</td>
                            </tr>
                            <?php $id = Auth::user()->id;
                                $i=1; foreach ($data as $value): ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $value->name; ?></td>
                                <td><?php echo $value->ticket_name; ?></td>
                                <td><?php echo $value->ticket_description; ?></td>
                                <td>
                                    <?php if($id==$value->user_id):?>
                                        <a href="edit_ticket/<?php echo $value->ticket_id;?>">edit</a> ||
                                        <a style="color:red;" onClick="if(confirm('Do you want to delete this one?')){return true;}else{return false;}" href="{{ url('destroy_ticket'.'/'.$value->ticket_id) }}">delete</a> ||
                                    <?php endif;?>
                                    <a href="ticket_details/<?php echo $value->ticket_id;?>">View Detail</a>
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
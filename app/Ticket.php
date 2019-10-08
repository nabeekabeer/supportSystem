<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $fillable = ['ticket_name', 'ticket_description', 'user_id'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RefreshToken extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_ticket_id',
        'reason'
    ];

    public function userTickets()
    {
        return $this->belongsTo('App\UserTicket', 'user_ticket_id');
    }
}

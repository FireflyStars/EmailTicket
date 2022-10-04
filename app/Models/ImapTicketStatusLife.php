<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImapTicketStatusLife extends Model
{
    use HasFactory;

    public function ticketStatus()
    {
        return $this->belongsTo(TicketStatus::class);
    }

    public function ticket()
    {
        return $this->belongsTo(ImapTicket::class);
    }

    public function assignedTo()
    {
        return $this->belongsTo(User::class);
    }
}

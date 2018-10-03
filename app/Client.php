<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'client_name',
        'client_status',
        'address',
        'city',
        'state',
        'postal_code',
        'notes'
    ];

    public function contacts()
    {
        return $this->belongsTo(Contact::class);
    }
}

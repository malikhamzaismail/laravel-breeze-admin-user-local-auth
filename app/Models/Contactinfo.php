<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactinfo extends Model
{
    use HasFactory;

    protected $fillable = ['contact_id', 'city', 'state', 'country'];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }



}

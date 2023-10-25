<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezerwacja extends Model {
    public $table = 'rezerwacje';
    public $primaryKey = 'id';
    public $incrementing = 'true';
    public $timestamps='false';
}

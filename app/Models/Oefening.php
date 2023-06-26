<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oefening extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['naam', 'beschrijving'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "oefeningen";

    /**
     * The roles that belong to the album.
     */
}

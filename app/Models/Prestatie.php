<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestatie extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['oefening_id' ,'naam', 'beschrijving'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "prestaties";

    /**
     * The roles that belong to the album.
     */

    public function oefening() {
        return $this->belongsTo(Oefening::Class);
    }
}

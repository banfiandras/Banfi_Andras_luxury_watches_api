<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Watch extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];  //enable all fields (to create a new instance)
    //cam do $fillable as well, have to speciy ecach field with fillable

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class, "Brand_Id");  // Id capital I laravel does not recognise as deault id
    }
}

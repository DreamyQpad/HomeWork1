<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processor extends Model {
    use HasFactory;
    protected $table = 'processor';
    protected $primaryKey = 'id';

    protected $fillable = ['manufacturer', 'type'];

    public function laptop(){
        return $this->hasMany(Laptop::class, 'foreign_key');
    }
}

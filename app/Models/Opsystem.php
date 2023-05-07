<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opsystem extends Model {
    use HasFactory;
    protected $table = 'opsystem';
    protected $primaryKey = 'id';

    protected $fillable = ['osname'];

    public function laptop(){
        return $this->hasMany(Laptop::class, 'foreign_key');
    }
}

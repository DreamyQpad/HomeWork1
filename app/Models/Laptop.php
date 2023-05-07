<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Laptop extends Model {
    use HasFactory;
    protected $table = 'notebook';
    protected $primaryKey = 'id';

    protected $fillable = ['manufacturer', 'type', 'display', 'harddisk', 'videocontroller', 'price' , 'processorid' , 'opsystemid' , 'pieces'];

    public function opsystem(): \Illuminate\Database\Eloquent\Relations\BelongsTo {
        return $this->belongsTo(Opsystem::class);
    }

    public function processor(): \Illuminate\Database\Eloquent\Relations\BelongsTo {
        return $this->belongsTo(Processor::class);
    }

    public static function storeLaptop ($request): bool {

        $validated = $request->validate([
            'manufacturer' => 'required',
            'type' => 'required',
            'display' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'memory' => 'required',
            'harddisk' => 'required',
            'Videocontroller' => 'required',
            'price' => 'required',
            'pieces' => 'required',
        ]);

        $data = $request->all();

        $query = DB::insert('insert into notebook (manufacturer, type, display, memory, harddisk, videocontroller, price, pieces, processorid, opsystemid) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            $data['manufacturer'],
            $data['type'],
            $data['display'],
            $data['memory'],
            $data['harddisk'],
            $data['Videocontroller'],
            $data['price'],
            $data['pieces'],
            $data['processorid'],
            $data['opsystemid']
        ]);
        return ($query);
    }
}

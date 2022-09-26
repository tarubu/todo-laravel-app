<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = [];
    use HasFactory;

    protected $table = 'todos';
    protected $primaryKey = 'id';

    public function getById($id) {
        return self::where('id', $id)->get();
    }
}

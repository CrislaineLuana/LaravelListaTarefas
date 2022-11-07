<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    use HasFactory;
    protected $fillable = ['tarefa'];

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('tarefa', 'like', '%'.request('search').'%');
        }
    }

}

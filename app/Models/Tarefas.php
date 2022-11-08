<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    use HasFactory;
    protected $fillable = ['tarefa', 'user_id'];

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('tarefa', 'like', '%'.request('search').'%');
        }
    }

    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    }

}

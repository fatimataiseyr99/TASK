<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable=[  "id" , "created_at" , "updated_at" , "name" , " completed" , " description" , "long-description"];
    
    public function toggleComplete()
    {
        $this->completed = !$this->completed;
        $this->save();
    }
    
    
    

public function getNameRoute(){
    return " slug";

}
}

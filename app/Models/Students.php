<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function savestudents($data) {
        return $this->create($data);
    }
    public function getstudents(){
        return $this->all();
    }
    public function deletestudents($id){
        $students = $this->find($id);
        $students->delete();
    }
    public function updatestudents($id){
        return $this->find($id);
    }
    public function updatedstudents($data, $id){
        $students = $this->find($id);
        $students->update($data);
    }

}

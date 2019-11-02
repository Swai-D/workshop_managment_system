<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewField extends Model
{
     protected $guarded = [];



   public function setNewMachineAttribute($value)
    {

        $this->attributes['new_machine'] = strtoupper($value);
        
    }

    public function setNewDepartmentAttribute($value)
    {

        $this->attributes['new_department'] = strtoupper($value);
       
    }

    public function setNewLocationAttribute($value)
    {

 
        $this->attributes['new_location'] = strtoupper($value);
    }
}

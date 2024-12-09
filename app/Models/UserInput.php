<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserInput extends Model
{
    use HasFactory;
    protected $fillable = ['input_1', 'input_2'];

    public function hitungPersentase()
    {
        $matches = 0;
        $input1 = strtoupper($this->input_1) or strtolower($this->input1);
        $input2 = strtoupper($this->input_2) or strtolower($this->input2);

        if(strlen($input1) > 0 && strlen($input2) > 0 ) {
            for($i = 0; $i < strlen($input1); $i++) {
                for($j = 0; $j < strlen($input2); $j++) {
                    if($input1[$i] == $input2[$j]) {
                        $matches++;
                        break;
                    }
                }
            }
            return ($matches / strlen($input1)) * 100;
        }
        return 0;
    }
}
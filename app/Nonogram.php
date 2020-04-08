<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nonogram extends Model
{
    
    function jsonSolution(): string {

        $solution = explode(';', $this->solution);

        for ($i = 0; $i < count($solution); $i++) {
            $solution[$i] = '[' . $solution[$i] . ']';
        }

        $solution = join(',', $solution);
        $solution = '[' . $solution . ']';
        return $solution;
    }
}

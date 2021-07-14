<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function generateArray(Request $request)
    {
        return collect(range(1, 5))->map(function() {
            return collect($this->generatePattern())->implode('.');
        })->toArray();
    }

    private function generatePattern()
    {
        $array = [];
        for ($i = 0; $i < 3; $i++) {
            do {
                if ($i == 0) {
                    $newElement = $this->generateEven();
                } else {
                    $newElement = $this->generateRandom();
                }
            } while (in_array($newElement, $array));
            $array[] = $newElement;
        }
        return $array;
    }

    private function generateRandom()
    {
        return rand(0, 9);
    }

    private function generateEven()
    {
        do {
            $result = rand(0, 9);
        } while ($result % 2 != 0);
        return $result;
    }

}

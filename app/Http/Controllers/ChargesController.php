<?php

namespace App\Http\Controllers;

use App\Payments\Charge;
use Illuminate\Http\Request;

class ChargesController extends Controller
{
    public function __invoke(Request $request)
    {
        // print_r($request->transId);
        $request->validate([
            'transId' => 'required|numeric|min:100|max:599'
        ]);
        $charge = new Charge($request->transId);
        $charge->markIsCharged();

        session([
            "transId-$request->transId" => 'Charge marked as Charged'
        ]);

        return response()->json([
            'transId' => $request->transId,
            'status' => $charge->getStatus(),
        ]);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepositoController extends Controller
{
    public function update(Request $request)
    {
        $saldo = DB::table('saldos')->where('id', $request->id)->first();

        $valor = $saldo->saldo + floatval($request->deposito);

        DB::table('saldos')->where('id', $request->id)->update(['saldo' => $valor]);

        DB::table('depositos')->insert([
            'valor' => $request->deposito,
            'user_id' => auth()->user()->id,
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return response()->json([''], 200);
    }
}

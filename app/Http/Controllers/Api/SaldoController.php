<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Saldo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaldoController extends Controller
{

    public function index()
    {
        $saldo = DB::table('saldos')
            ->where('user_id', auth()->user()->id)->first();

        return response()->json(['saldo' => $saldo, 'user' => auth()->user()]);
    }
}

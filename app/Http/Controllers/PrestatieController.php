<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestatie;
use Illuminate\Support\Facades\Log;

class PrestatieController extends Controller
{
    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Prestatie  $book
     * @return \Illuminate\Http\Response
     */
    public function indexFunctie(Request $request, $id)
    {
        Log:: info('prestaties: ', ['ip' => $request->ip()]);;
        return Prestatie::where('oefening_id',$id)->get();

    }
}

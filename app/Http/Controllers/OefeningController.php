<?php

namespace App\Http\Controllers;

use App\Models\Oefening;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class OefeningController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('naam')) return Oefening::where('naam', 'like', '%'.$request->naam.'%')->get();
        if ($request->has('beschrijving')) return Oefening::orderBy($request->sort)->get();
        Log:: info('oefeningen: ', ['ip' => $request->ip()]);

        return Oefening::All();
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'naam' => 'required',
            'beschrijving' => 'required'
        ]);
        if ($validator->fails()) {
            Log:: info('oefeningen: ', ['ip' => $request->ip()]);
            return response('{"Foutmelding":"Data niet correct"}', 400)
                ->header('Content-Type','application/json');
        }
        else {
            Log:: info('oefeningen: ', ['ip' => $request->ip()]);
            return Oefening::create($request->all());
        }
    }

    /**
     * Display the specified resource.
     * @param  \App\Models\Oefening  $oefeningen
     * @return \Illuminate\Http\Response
     */
    public function show(Oefening $oefeningen)
    {
        return response($oefeningen);
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oefening  $oefeningen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oefening $oefeningen)
    {
        $validator = Validator::make($request->all(), [
            'naam' => 'required',
            'beschrijving' => 'required'
        ]);
        if ($validator->fails()) {
            return response('{"Foutmelding":"Data niet correct"}', 400)
                ->header('Content-Type','application/json');
        }
        else {
            Log:: info('oefeningen: ', ['ip' => $request->ip()]);
            $oefeningen->update($request->all());
        }
        return response($oefeningen);
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Oefening  $oefeningen
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Oefening $oefeningen)
    {
        $oefeningen->delete();
            Log:: info('oefeningen: ', ['ip' => $request->ip()]);
            return response('{"Oefening verwijderd"}');
    }
}

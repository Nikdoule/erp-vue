<?php

namespace App\Http\Controllers\Api\v1a;

use App\Developper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class businessDevelopperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $developpers = Developper::all();

            if (!$developpers->isEmpty()) {
                return response()->json([
                    'developpers'  => $developpers,
                ], 200);
            } else {
                return response()->json([
                    'error' => "No business developpers found",
                ], 404);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't list business developpers",
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $developpers = Developper::create($request->all());

            return response()->json([
                'error' => false,
                'developper'  => $developpers,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't create this business developpers",
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($developperId)
    {
        try {
            $developper = Developper::find($developperId);
            if (empty($developper)) {
                return response()->json([
                    'error' => "business developpers " . $developperId . " not found",
                ], 404);
            }
            return response()->json([
                'developper'  => $developper,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can not see this business developpers",
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $developperId)
    {
        try {
            $developper = Developper::find($developperId);
            if (empty($developper)) {
                return response()->json([
                    'error' => "business developper" . $developperId . " not found",
                ], 404);
            }
            $developper->first_name = $request->input('first_name');
            $developper->last_name = $request->input('last_name');
            $developper->title = $request->input('title');
            $developper->email = $request->input('email');
            $developper->company = $request->input('company');
            $developper->siret = $request->input('siret');
            $developper->adress = $request->input('adress');
            $developper->zip_code = $request->input('zip_code');
            $developper->city = $request->input('city');
            $developper->country = $request->input('country');
            $developper->laguage = $request->input('laguage');
            $developper->naf = $request->input('naf');
            $developper->phone = $request->input('phone');
            $developper->kbis = $request->input('kbis');
            $developper->mark = $request->input('mark');
       
            if ($developper->save()) {
                return response()->json([
                    '$developper'  => $developper,
                ], 200);
            } else {
                return response()->json([
                    'error' => "Database error : can't update business developper " . $developperId,
                ], 500);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't update this business developper",
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($developperId)
    {
        try {
            $developper = Developper::find($developperId);
            if (empty($developper)) {
                return response()->json([
                    'error' => "business developper" . $developperId . " not found",
                ], 404);
            }

            if ($developper->delete()) {
                return response()->json([
                    'message'  => "The business developper $developper->developperId has successfully been deleted.",
                ], 200);
            } else {
                return response()->json([
                    'error' => "Database error : can't delete business developper " . $developperId,
                ], 500);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't delete this business developper",
            ], 500);
        }
    }
}

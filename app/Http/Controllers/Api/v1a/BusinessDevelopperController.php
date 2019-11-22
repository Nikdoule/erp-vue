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
            $business_developpers = Developper::all();

            if (!$business_developpers->isEmpty()) {
                return response()->json([
                    'business developpers'  => $business_developpers,
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
            $business_developpers = Developper::create($request->all());

            return response()->json([
                'error' => false,
                'business_developper'  => $business_developpers,
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
    public function show($id)
    {
        try {
            $business_developper = Developper::find($id);
            if (empty($business_developper)) {
                return response()->json([
                    'error' => "business developpers " . $id . " not found",
                ], 404);
            }
            return response()->json([
                'business_developper'  => $business_developper,
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
    public function update(Request $request, $id)
    {
        try {
            $business_developper = Developper::find($id);
            if (empty($business_developper)) {
                return response()->json([
                    'error' => "business developper" . $id . " not found",
                ], 404);
            }
            $business_developper->first_name = $request->input('first_name');
            $business_developper->last_name = $request->input('last_name');
            $business_developper->title = $request->input('title');
            $business_developper->email = $request->input('email');
            $business_developper->company = $request->input('company');
            $business_developper->siret = $request->input('siret');
            $business_developper->adress = $request->input('adress');
            $business_developper->zip_code = $request->input('zip_code');
            $business_developper->city = $request->input('city');
            $business_developper->country = $request->input('country');
            $business_developper->laguage = $request->input('laguage');
            $business_developper->naf = $request->input('naf');
            $business_developper->phone = $request->input('phone');
            $business_developper->kbis = $request->input('kbis');
            $business_developper->mark = $request->input('mark');
       
            if ($business_developper->save()) {
                return response()->json([
                    '$business_developper'  => $business_developper,
                ], 200);
            } else {
                return response()->json([
                    'error' => "Database error : can't update business developper " . $id,
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
    public function destroy($id)
    {
        try {
            $business_developper = Developper::find($id);
            if (empty($business_developper)) {
                return response()->json([
                    'error' => "business developper" . $id . " not found",
                ], 404);
            }

            if ($business_developper->delete()) {
                return response()->json([
                    'message'  => "The business developper $business_developper->id has successfully been deleted.",
                ], 200);
            } else {
                return response()->json([
                    'error' => "Database error : can't delete business developper " . $id,
                ], 500);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't delete this business developper",
            ], 500);
        }
    }
}

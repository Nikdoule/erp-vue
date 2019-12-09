<?php

namespace App\Http\Controllers\Api\v1a;

use App\Deal;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $deals = Deal::all();

            if (!$deals->isEmpty()) {
                return response()->json([
                    'deals'  => $deals,
                ], 200);
            } else {
                return response()->json([
                    'error' => "No deal found",
                ], 404);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't list deals",
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
        request()->validate([
            'contact_id' => ['required']
        ]);
        try {

            $deals = Deal::create($request->all());

            return response()->json([
                'error' => false,
                'deal'  => $deals,
            ], 200);

        }catch (Exception $ex) {
            return response()->json([
                'error' => "Can't add deal",
            ], 500);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($dealId)
    {
        try {
            $deal = Deal::find($dealId);
            if (empty($deal)) {
                return response()->json([
                    'error' => "deal" . $dealId . " not found",
                ], 404);
            }
            return response()->json([
                'deal'  => $deal,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't see this deal",
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
    public function update(Request $request, $dealId)
    {
        try {
            $deal = Deal::find($dealId);
            if (empty($deal)) {
                return response()->json([
                    'error' => "deal " . $dealId . " not found",
                ], 404);
            }
            $request->validate([
                'denomination' => 'nullable',
                'reference' => 'nullable',
                'designation' => 'nullable',
                'amount' => 'nullable',
                'dropbox' => 'nullable',
                'contact_id' => 'nullable'

             ]);
             $deal->update($request->all());

            if ($deal->save()) {
                return response()->json([
                    'deal'=> $deal,  
                    'message'  => "The deal has successfully been save.",
                ], 200);
            } else {
                return response()->json([
                    'error' => "Database error : can't upadate deal to deal " . $dealId,
                ], 500);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't update deal $dealId",
            ], 500);
        }
        
    }

}

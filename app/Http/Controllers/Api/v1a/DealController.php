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
    public function index($developperId, $contactId)
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
    public function store(Request $request, $developperId, $contactId)
    {
        try {
            $contact = Contact::find($contactId);
            if (empty($contact)) {
                return response()->json([
                    'error' => "contact " . $contactId . " not found",
                ], 404);
            }
            if ($deal = $contact->deals()->create([
                'designation' => $request->input('designation'),
                'denomination' => $request->input('denomination'),
                'amount' => $request->input('amount'),
                'reference' => $request->input('reference'),
                'dropbox' => $request->input('dropbox'),
            ])) {
                return response()->json([
                    'deal'  => $deal,
                ], 200);
            } else {
                return response()->json([
                    'error' => "Database error : can't add deal to contact " . $contactId,
                ], 500);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't add deal to this contact",
            ], 500);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($developperId, $dealId, $contactId)
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
                'error' => "Can't see this business developper",
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
    public function update(Request $request, $developperId, $dealId, $contactId)
    {
        try {
            $deal = Deal::find($dealId);
            if (empty($deal)) {
                return response()->json([
                    'error' => "deal " . $dealId . " not found",
                ], 404);
            }

            $deal->designation = $request->input('designation');
            $deal->denomination = $request->input('denomination');
            $deal->amount = $request->input('amount');
            $deal->reference = $request->input('reference');
            $deal->dropbox = $request->input('dropbox');

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
                'error' => "Can't update task $dealId to project $developperId",
            ], 500);
        }
        
    }

}

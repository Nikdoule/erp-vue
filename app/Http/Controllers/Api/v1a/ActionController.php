<?php

namespace App\Http\Controllers\Api\v1a;

use App\Deal;
use App\Action;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($dealId)
    {
        try {
            $actions = Deal::find($dealId)->actions()->get();
             if (!empty($dealId)) {
                return response()->json([
                    'actions' => $actions
                ], 200);
             }
             return response()->json([
                'error' => "deal " . $dealId . " not found",
             ], 404);
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't list actions",
            ], 500);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $dealId)
    {
        try {
            $deal = Deal::find($dealId);
            if (empty($deal)) {
                return response()->json([
                    'error' => "Deal " . $dealId . " not found",
                ], 404);
            }
            if ($action = $deal->actions()->create([
                'name' => $request->input('name'),
                'started_at' => $request->input('started_at'),
                'stopped_at' => $request->input('stopped_at'),
            ])) {
                return response()->json([
                    'action'  => $action,
                ], 200);
            } else {
                return response()->json([
                    'error' => "Database error : can't add action to deal " . $dealId,
                ], 500);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't add action to this deal",
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($dealId, $actionId)
    {
        try {
            $action = Action::find($actionId);
            if (empty($action)) {
                return response()->json([
                    'error' => "action" . $actionId . " not found",
                ], 404);
            }
            return response()->json([
                'action'  => $action,
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
    public function update(Request $request, $actionId, $dealId)
    {
        try {
            $action = Action::find($actionId);
            if (empty($action)) {
                return response()->json([
                    'error' => "action " . $actionId . " not found",
                ], 404);
            }
            $request->validate([
                'name' => 'nullable',
                'started_at' => 'nullable',
                'stopped_at' => 'nullable',
             ]);
             $action->update($request->all());

            if ($action->save()) {
                return response()->json([
                    'action'=> $action,  
                    'message'  => "The action has successfully been save.",
                ], 200);
            } else {
                return response()->json([
                    'error' => "Database error : can't upadate action to action " . $actionId,
                ], 500);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't update action $actionId to deal $dealId",
            ], 500);
        }
        
    }
}

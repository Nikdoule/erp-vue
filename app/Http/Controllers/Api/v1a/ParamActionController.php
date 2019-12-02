<?php

namespace App\Http\Controllers\Api\v1a;

use App\Param_action;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParamActionController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $param_actions = Param_action::all();

            if (!$param_actions->isEmpty()) {
                return response()->json([
                    'param_actions'  => $param_actions,
                ], 200);
            } else {
                return response()->json([
                    'error' => "No param_actions found",
                ], 404);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't list param_actions",
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
            $param_actions = Param_action::create($request->all());

            return response()->json([
                'error' => false,
                'param_action'  => $param_actions,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't create this param_actions",
            ], 500);
        }
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($param_actionId)
    {
        try {
            $param_action = Param_action::find($param_actionId);
            if (empty($param_action)) {
                return response()->json([
                    'error' => "param_actions " . $param_actionId . " not found",
                ], 404);
            }
            return response()->json([
                'param_action'  => $param_action,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can not see this param_actions",
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
    public function update(Request $request, $param_actionId)
    {
        try {
            $param_action = Param_action::find($param_actionId);
            if (empty($param_action)) {
                return response()->json([
                    'error' => "param_action" . $param_actionId . " not found",
                ], 404);
            }
            $param_action->title = $request->input('title');
            $param_action->description = $request->input('description');
            
       
            if ($param_action->save()) {
                return response()->json([
                    '$param_action'  => $param_action,
                ], 200);
            } else {
                return response()->json([
                    'error' => "Database error : can't update param_action " . $param_actionId,
                ], 500);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't update this param_action",
            ], 500);
        }
    }
}

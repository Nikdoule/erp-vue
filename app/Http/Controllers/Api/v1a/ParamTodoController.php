<?php

namespace App\Http\Controllers\Api\v1a;

use App\Param_todo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParamTodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $param_todos = Param_todo::all();

            if (!$param_todos->isEmpty()) {
                return response()->json([
                    'param_todos'  => $param_todos,
                ], 200);
            } else {
                return response()->json([
                    'error' => "No param_todos found",
                ], 404);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't list param_todos",
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
            $param_todos = Param_todo::create($request->all());

            return response()->json([
                'error' => false,
                'param_todo'  => $param_todos,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't create this param_todos",
            ], 500);
        }
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($param_todoId)
    {
        try {
            $param_todo = Param_todo::find($param_todoId);
            if (empty($param_todo)) {
                return response()->json([
                    'error' => "param_todos " . $param_todoId . " not found",
                ], 404);
            }
            return response()->json([
                'param_todo'  => $param_todo,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can not see this param_todo",
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
    public function update(Request $request, $param_todoId)
    {
        try {
            $param_todo = Param_todo::find($param_todoId);
            if (empty($param_todo)) {
                return response()->json([
                    'error' => "param_todo" . $param_todoId . " not found",
                ], 404);
            }
            $request->validate([
                'title' => 'nullable',
                'description' => 'nullable',

             ]);
             $param_todo->update($request->all());
       
            if ($param_todo->save()) {
                return response()->json([
                    '$param_todo'  => $param_todo,
                ], 200);
            } else {
                return response()->json([
                    'error' => "Database error : can't update param_todo " . $param_todoId,
                ], 500);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't update this param_todo",
            ], 500);
        }
    }
}

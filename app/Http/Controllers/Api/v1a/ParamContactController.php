<?php

namespace App\Http\Controllers\Api\v1a;

use App\Param_contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParamContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $param_contacts = Param_contact::all();

            if (!$param_contacts->isEmpty()) {
                return response()->json([
                    'param_contacts'  => $param_contacts,
                ], 200);
            } else {
                return response()->json([
                    'error' => "No param_contacts found",
                ], 404);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't list param_contacts",
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
            $param_contacts = Param_contact::create($request->all());

            return response()->json([
                'error' => false,
                'param_contact'  => $param_contacts,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't create this param_contacts",
            ], 500);
        }
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($param_contactId)
    {
        try {
            $param_contact = Param_contact::find($param_contactId);
            if (empty($param_contact)) {
                return response()->json([
                    'error' => "param_contacts " . $param_contactId . " not found",
                ], 404);
            }
            return response()->json([
                'param_contact'  => $param_contact,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can not see this param_contacts",
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
    public function update(Request $request, $param_contactId)
    {
        try {
            $param_contact = Param_contact::find($param_contactId);
            if (empty($param_contact)) {
                return response()->json([
                    'error' => "param_contact" . $param_contactId . " not found",
                ], 404);
            }
            $param_contact->title = $request->input('title');
            $param_contact->description = $request->input('description');
            
       
            if ($param_contact->save()) {
                return response()->json([
                    '$param_contact'  => $param_contact,
                ], 200);
            } else {
                return response()->json([
                    'error' => "Database error : can't update param_contact " . $param_contactId,
                ], 500);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't update this param_contact",
            ], 500);
        }
    }
}

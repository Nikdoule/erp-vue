<?php

namespace App\Http\Controllers\Api\v1a;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $contacts = Contact::all();

            if (!$contacts->isEmpty()) {
                return response()->json([
                    'contacts'  => $contacts,
                ], 200);
            } else {
                return response()->json([
                    'error' => "No contact found",
                ], 404);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't list contacts",
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
            $contacts = Contact::create($request->all());

            return response()->json([
                'error' => false,
                'contact'  => $contacts,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't create this contact",
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
            $contact = Contact::find($id);
            if (empty($contact)) {
                return response()->json([
                    'error' => "Contact " . $id . " not found",
                ], 404);
            }
            return response()->json([
                'contact'  => $contact,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can not see this contact",
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
            $contact = Contact::find($id);
            if (empty($contact)) {
                return response()->json([
                    'error' => "Contact" . $id . " not found",
                ], 404);
            }

            $contact->first_name = $request->input('first_name');
            $contact->last_name = $request->input('last_name');
            $contact->title = $request->input('title');
            $contact->email = $request->input('email');
            $contact->company = $request->input('company');
            $contact->siret = $request->input('siret');
            $contact->adress = $request->input('adress');
            $contact->zip_code = $request->input('zip_code');
            $contact->city = $request->input('city');
            $contact->country = $request->input('country');
            $contact->laguage = $request->input('laguage');
            $contact->naf = $request->input('naf');
            $contact->phone = $request->input('phone');
            $contact->kbis = $request->input('kbis');
            $contact->mark = $request->input('mark');
       
            if ($contact->save()) {
                return response()->json([
                    'contact'  => $contact,
                ], 200);
            } else {
                return response()->json([
                    'error' => "Database error : can't update contact " . $id,
                ], 500);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't update this contact",
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
            $contact = Contact::find($id);
            if (empty($contact)) {
                return response()->json([
                    'error' => "contact " . $id . " not found",
                ], 404);
            }

            if ($contact->delete()) {
                return response()->json([
                    'message'  => "The contact $contact->id has successfully been deleted.",
                ], 200);
            } else {
                return response()->json([
                    'error' => "Database error : can't delete contact " . $id,
                ], 500);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't delete this contact",
            ], 500);
        }
    }
}

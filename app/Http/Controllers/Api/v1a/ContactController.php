<?php

namespace App\Http\Controllers\Api\v1a;

use App\Contact;
use App\Developper;
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
        request()->validate([
            'developper_id' => ['required']
        ]);
        
        try {
            $contacts = Contact::create($request->all());

            return response()->json([
                'error' => false,
                'contact'  => $contacts,
            ], 200);

        }catch (Exception $ex) {
            return response()->json([
                'error' => "Can't add contact",
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($contactId)
    {
        try {
            $contact = Contact::find($contactId);
            if (empty($contact)) {
                return response()->json([
                    'error' => "Contact " . $contactId . " not found",
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
    public function update(Request $request, $contactId)
    {
        try {
            $contact = Contact::find($contactId);
            if (empty($contact)) {
                return response()->json([
                    'error' => "Contact" . $contactId . " not found",
                ], 404);
            }
            $request->validate([
                'first_name' => 'nullable',
                'last_name' => 'nullable',
                'title' => 'nullable',
                'email' => 'nullable',
                'company' => 'nullable',
                'siret' => 'nullable',
                'adress' => 'nullable',
                'zip_code' => 'nullable',
                'time_zone' => 'nullable',
                'money' => 'nullable',
                'status' => 'nullable',
                'city' => 'nullable',
                'country' => 'nullable',
                'laguage' => 'nullable',
                'naf' => 'nullable',
                'phone' => 'nullable',
                'kbis' => 'nullable',
                'mark' => 'nullable',
                'developper_id' => 'nullable'

             ]);
             $contact->update($request->all());

            if ($contact->save()) {
                return response()->json([
                    'contact'  => $contact,
                    'message'  => "The contact has successfully been save.",
                ], 200);
            } else {
                return response()->json([
                    'error' => "Database error : can't update contact " . $contactId,
                ], 500);
            }
        } catch (Exception $ex) {
            return response()->json([
                'error' => "Can't update this contact $contactId",
            ], 500);
        }
    }

}

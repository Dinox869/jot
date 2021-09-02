<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Resources\Contact as ContactResource;
use phpDocumentor\Reflection\Types\Collection;

class ContactController extends Controller
{

    public function index()
    {

        $this->authorize('viewAny', Contact::class);


         return  ContactResource::collection(Contact::all())->response()->setStatusCode(201);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $this->authorize('create', Contact::class);


       $contacts= Contact::create([
            'name'=> request('name'),
            'email'=> request('email'),
            'date'=> DateTime::createFromFormat('MM/DD/YYYY',request('date')),
            'company'=> request('company')
        ]);

       return new ContactResource($contacts);
    }

    public function data(Contact  $contact)
    {
        return request()->validate([
            'name'=> 'required',
            'email'=> 'required',
            'date'=> 'required',
            'company'=> 'required'
        ]);
    }


    public function show($contact)
    {
       return Contact::findOrFail($contact);
    }


    public function update(Contact $contact)
    {
       $attributes = $this->data($contact);
       info('Data to update', $attributes);
       info('Contact to be updated', [$contact]);

       info('Did succeed updating', [$contact->update($attributes)]);
    }


    public function destroy(Contact $id)
    {
        $id->delete();
    }

}

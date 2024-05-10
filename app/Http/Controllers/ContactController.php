<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'affair' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Crear un nuevo contacto en la base de datos
        $contact = new Contact();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->affair = $validatedData['affair'];
        $contact->description = $validatedData['description'];
        $contact->save();

        // Redirigir de vuelta al formulario con un mensaje de éxito
        return redirect()->route('contact.index')->with('success', '¡El formulario se ha enviado correctamente!');
    }

    public function show(Contact $contact)
    {
        //
    }


    public function edit(Contact $contact)
    {
        //
    }


    public function update(Request $request, Contact $contact)
    {
        //
    }


    public function destroy(Contact $contact)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $msg = ContactForm::all();
        return view('admin.pages.contact_form', compact('msg'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'subject' => ['required'],
            'message' => ['required'],
        ],[
            'name.required' => 'İsim alanı doldurulmalıdır.',
            'phone.required' => 'Telefon alanı doldurulmalıdır. Doğru olduğundan emin olunuz.',
            'subject.required' => 'Konu alanı doldurulmalıdır.',
            'message.required' => 'Mesaj alanı doldurulmalıdır.',
        ]);

        $form = new ContactForm();
        $form->name = $request->name;
        $form->phone = $request->phone;
        $form->subject = $request->subject;
        $form->message = $request->message;
        $form->email = $request->email;
        $form->save();
        return redirect()->back()->with('success', 'Mesajınız başarıyla gönderilmiştir.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $msg = ContactForm::find($id);
        return view('admin.pages.contact_form_detail', compact('msg'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactForm $contactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactForm $contactForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $msg = ContactForm::find($id);
        $msg->delete();
        return redirect()->route('admin.mesajlar')->with('success', 'Mesaj başarıyla silinmiştir.');
    }
}

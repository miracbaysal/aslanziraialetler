<?php

namespace App\Http\Controllers;

use App\Models\Communication;
use Illuminate\Http\Request;

class CommConntroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comm = Communication::all();
        return view('admin.pages.communication', compact('comm'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.add_communication');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ->validate([
            'address' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'workingHours' => ['required'],
        ], [
            'address.required' => 'Adres alanı girilmelidir.',
            'email.required' => 'E-mail alanı girilmelidir.',
            'phone.required' => 'Telefon alanı girilmelidir.',
            'workingHours.required' => 'Çalışma Saatleri alanı girilmelidir.',
        ]);

        $comm = new Communication();
        $comm->address = $request->address;
        $comm->email = $request->email;
        $comm->phone = $request->phone;
        $comm->workingHours = $request->workingHours;
        $comm->save();
        return redirect()->route('admin')->with('success', 'İLetişim Bilgileri Başarıyle Eklendi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Communication $comm)
    {
        $comm = Communication::all();
        return view('pages.contact', compact('comm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $comm = Communication::find($id);
        return view('admin.pages.edit_communication', compact('comm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'address' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'workingHours' => ['required'],
        ], [
            'address.required' => 'Adres alanı girilmelidir.',
            'email.required' => 'E-mail alanı girilmelidir.',
            'phone.required' => 'Telefon alanı girilmelidir.',
            'workingHours.required' => 'Çalışma saatleri alanı girilmelidir.',
        ]);

        $comm = Communication::find($id);
        $comm->address = $request->address;
        $comm->email = $request->email;
        $comm->phone = $request->phone;
        $comm->workingHours = $request->workingHours;
        $comm->save();


        return redirect()->route('admin')->with('success', 'İletişim başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comm = Communication::find($id);
        $comm->delete();
        return redirect()->route('admin')->with('success', 'İletişim başarıyla silindi.');
    }
}

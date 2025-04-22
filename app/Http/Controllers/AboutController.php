<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('admin.pages.about', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.add_about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'aboutTitle' => ['required'],
            'aboutDescription' => ['required'],
            'title1' => ['required', 'string'],
            'description1' => ['required', 'string'],
            'title2' => ['required', 'string'],
            'description2' => ['required', 'string'],
            'title3' => ['required', 'string'],
            'description3' => ['required', 'string'],
            'title4' => ['required', 'string'],
            'description4' => ['required', 'string'],
        ],[
            'aboutTitle.required' => 'Başlık girmeniz gereklidir.',
            'aboutDescription.required' => 'Hakkımda alanını girmeniz gereklidir.',
            'title1.required' => 'Alt başlığı girmeniz gereklidir.',
            'description1.required' => 'Açıklama girmeniz gereklidir.',
            'title2.required' => 'Alt başlığı girmeniz gereklidir.',
            'description2.required' => 'Açıklama girmeniz gereklidir.',
            'title3.required' => 'Alt başlığı girmeniz gereklidir.',
            'description3.required' => 'Açıklama girmeniz gereklidir.',
            'title4.required' => 'Alt başlığı girmeniz gereklidir.',
            'description4.required' => 'Açıklama girmeniz gereklidir.',
        ]);

        $about = new About();
        $about->aboutTitle = $request->aboutTitle;
        $about->aboutDescription = $request->aboutDescription;
        $about->title1 = $request->title1;
        $about->description1 = $request->description1;
        $about->title2 = $request->title2;
        $about->description2 = $request->description2;
        $about->title3 = $request->title3;
        $about->description3 = $request->description3;
        $about->title4 = $request->title4;
        $about->description4 = $request->description4;
        
        $about->save();
        return redirect()->route('admin.about')->with('success', 'Hakkımda başarıyla güncellendi');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        $about = About::all();
        return view('pages.about', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.pages.edit_about', compact('about'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'aboutTitle' => ['required'],
            'aboutDescription' => ['required'],
            'title1' => ['required', 'string'],
            'description1' => ['required', 'string'],
            'title2' => ['required', 'string'],
            'description2' => ['required', 'string'],
            'title3' => ['required', 'string'],
            'description3' => ['required', 'string'],
            'title4' => ['required', 'string'],
            'description4' => ['required', 'string'],
        ],[
            'aboutTitle.required' => 'Başlık girmeniz gereklidir.',
            'aboutDescription.required' => 'Hakkımda alanını girmeniz gereklidir.',
            'title1.required' => 'Alt başlığı girmeniz gereklidir.',
            'description1.required' => 'Açıklama girmeniz gereklidir.',
            'title2.required' => 'Alt başlığı girmeniz gereklidir.',
            'description2.required' => 'Açıklama girmeniz gereklidir.',
            'title3.required' => 'Alt başlığı girmeniz gereklidir.',
            'description3.required' => 'Açıklama girmeniz gereklidir.',
            'title4.required' => 'Alt başlığı girmeniz gereklidir.',
            'description4.required' => 'Açıklama girmeniz gereklidir.',
        ]);

        $about = About::find($id);
        $about->aboutTitle = $request->aboutTitle;
        $about->aboutDescription = $request->aboutDescription;
        $about->title1 = $request->title1;
        $about->description1 = $request->description1;
        $about->title2 = $request->title2;
        $about->description2 = $request->description2;
        $about->title3 = $request->title3;
        $about->description3 = $request->description3;
        $about->title4 = $request->title4;
        $about->description4 = $request->description4;
        
        $about->save();
        return redirect()->route('admin.about')->with('success', 'Hakkımda başarıyla güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();
        return redirect()->route('admin.about')->with('success', 'Hakkımda başarıyla silindi.');
    }
}

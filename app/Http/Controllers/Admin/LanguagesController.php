<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::paginate(PAGINATION_COUNT);
        return view('admin.languages.index',compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LanguageRequest $request)
    {
        $active = $request->input('active');
        $data = $request->all();
        (! $active)? $data['active'] = 0 : $data['active'] = 1;
        $language = Language::create($data);
        if($language)
            return redirect()->route('cp.languages')->with(['success' => 'Language Added successfully']);
        else
            return redirect()->back()->with(['error'    => 'Error Please add Again Later']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $language = Language::findOrFail($id);
        return view('admin.languages.edit',compact('language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LanguageRequest $request,$id)
    {
        $language = Language::findOrFail($id);
        if (!$request->has('active'))
                $request->request->add(['active' => 0]);
        $language->update($request->all());
        return redirect()->back()->with(['success'=> 'تم تعديل البيانات بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $language = Language::findOrFail($id);
        $language->delete();
        return redirect()->back()->with(['success'=>'تم الحذف بنجاح']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;
use App\Models\Optional;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreAutoRequest;
use App\Http\Requests\UpdateAutoRequest;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = Auto::all();
        return view('admin.autos.index', compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $optionals = Optional::all();
        return view('admin.autos.create', compact('optionals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutoRequest $request)
    {
        $form_data = $request->validated();
        if ($request->hasFile('image')) {
            $path = Storage::disk('public')->put('image', $form_data['image']);
            $form_data['image'] = $path;
        }
        else {
            $form_data['image'] = 'https://placehold.co/600x400?text=immagine+copertina';
        }
        $auto = new Auto();
        $auto->fill($form_data);
        $auto->save();

        if ($request->has('optionals')) {

            $optionals = $request->input('optionals');
            $auto->optionals()->sync($optionals);
        }

        return redirect()->route('admin.autos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Auto $auto)
    {
        return view('admin.autos.show', compact('auto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Auto $auto)
    {
        $optionals = Optional::all();
        return view('admin.autos.edit', compact('auto', 'optionals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutoRequest $request, Auto $auto)
    {
        $form_data = $request->validated();
        if ($request->hasFile('image')) {
            if(Str::startsWith($auto->image, 'https') === false){
                Storage::disk('public')->delete($auto->image);
            }
            $path = Storage::disk('public')->put('image', $form_data['image']);
            $form_data['image'] = $path;
        }
        $auto->update($form_data);

        if ($request->has('optionals')) {
            $auto->optionals()->sync($request->optionals);
         }
         else{
             $project->optionals()->sync([]);
         }

        return redirect()->route('admin.autos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auto $auto)
    {
        $auto->optionals()->sync([]);
        $auto->delete();

        return redirect()->route('admin.autos.index');
    }
}

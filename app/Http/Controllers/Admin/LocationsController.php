<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use App\Http\Controllers\Controller;
use App\Http\Requests\storeMediaRequest;
use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();
        

        return view('admin.locations.index', compact('locations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocationRequest $request)
    {
        // $request->validated();
        
        // $location = Location::create([
        //      'name' =>  $request->input('name'),
        //      'slug' =>  $request->input('slug'),
               
        // ]);
        
        $location = Location::create($request->all());

        
        // if($request->file('photo')) {
        //     foreach ($request->file('photo') as $phot) {
        //         $location->addMedia($phot)->toMediaCollection('photo');
        //     }
        // }
     

        
        if ($request->input('photo', false)) {
            $location->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }
       
         return redirect()->route('admin.locations.index')->with('success', 'User Created Successfully');;
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return view('admin.locations.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocationRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeMedia(storeMediaRequest $request)
{
    $path = storage_path('tmp/uploads');

    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    $file = $request->file('file');

    $name = uniqid() . '_' . trim($file->getClientOriginalName());

    $file->move($path, $name);

    return response()->json([
        'name'          => $name,
        'original_name' => $file->getClientOriginalName(),
    ]); 
}


}

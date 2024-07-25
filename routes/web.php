<?php

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $n = "Notice";
    
    return view('home', compact('n'));
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/search/{q}', function ($q) {
    return ($q);
});

Route::post('/school/store', function (Request $request) {
    $school = new School();
    $school->email = $request->email;
    $school->tel_one = $request->tel_one;
    $school->tel_two = $request->tel_two;
    $school->address = $request->address;
    $school->name = $request->name;
    $school->map = $request->map;
    $school->logo = $request->logo;
    $school->save();
    return redirect()->back();

    if ($request->hasFile('logo')) {
        $file = $request->file('logo');
        $filename = time() .".". $file->getClientOriginalName();
        $file->move('images/', $filename);
        $school->logo = 'images/' . $filename;
    }
    $school->save();
    return redirect()->back();
});

<?php

namespace App\Http\Controllers\VanPhongKhoa;

use App\Models\Khoa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VanPhongKhoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function truyVanThongTin()
    {
        return view('vanphongkhoa.truyvanthongtin');
    }
    public function capnhatketqua()
    {
        return view('vanphongkhoa.capnhatketqua');
    }
    public function tintuc()
    {
        return view('vanphongkhoa.tintuc');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Khoa $khoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Khoa $khoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Khoa $khoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Khoa $khoa)
    {
        //
    }
}
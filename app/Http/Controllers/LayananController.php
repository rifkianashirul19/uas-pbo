<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayananController extends Controller
{

    public function index()
    {
        $layanan = Layanan::all();
        return view('admin.layanan', [
            'title' => 'Layanan',
            'layanan' => $layanan
        ], compact('layanans'));
    }

    public function store(Request $request)
    {
        $request->Validate([
            'nama' => 'required',
            'harga' => 'required',
        ]);

        Layanan::create($request->all());

        return redirect()->route('/admin/dashboard/layanan');
    }

    public function show($id)
    {
        $layanans = Layanan::find($id);
        return view('admin.layanan', compact('layanan'));
    }

    public function edit($id)
    {
        $layanans = Layanan::find($id);
        return view('admin.layanan', compact('layanan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'reg' => 'required',
            'email' => 'required',
        ]);

        Layanan::find($id)->Update([
            'name' => $request['name'],
            'reg' => $request['reg'],
            'email' => $request['email'],
        ]);

        return redirect()->route('/admin/dashboard/layanan');
    }

    public function destroy($id)
    {
        Layanan::find($id)->delete();
        return redirect()->route('/admin/dashboard/layanan');
    }
}

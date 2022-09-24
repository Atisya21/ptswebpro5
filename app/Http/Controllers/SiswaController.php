<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
  {
    $siswa = Siswa::all();
    return view('siswa.index', compact('siswa'));
  }
    
  public function create()
  {
    return view('siswa/create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'siswa' => 'required',
      'amount'=>'required' ,
    ]); 

    Siswa::create($request->all());

    return redirect()->route('siswa.index')->with('success', 'Berhasil menambahkan.');
  }
  public function edit(Siswa $siswa)

    {

        return view('siswa.edit',compact('siswa'));

    }
    public function destroy(Product $product)

    {
        $grade->delete();
        return redirect()->route('siswa.index')->with('success', 'kelas berhasil dihapus');

    }
    public function update(Request $request, Product $product)

    {

        $request->validate([
            'name' => 'required',
            'detail' => 'required', ]);
        $product->update($request->all());

        return redirect()->route('products.index') ->with('success','Product updated successfully');

    }
}
  

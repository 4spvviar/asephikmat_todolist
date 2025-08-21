<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TugasController extends Controller
{
     public function index()
    {
        $data = Tugas::where('user_id',auth()->id())->orderBy('tanggal', 'asc')
            ->get()
            ->groupBy('tanggal');

        return view('home', ['tugas' => $data]);
    }

    public function store(Request $request)
    {
        $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'tanggal' => 'required|date',
    ]);

    Tugas::create([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'user_id' => Auth::id(),
        'tanggal' => $request->tanggal,
        'status' => '0'
    ]);

        return redirect()->route('dashboard');
    }

    public function tombol($id)
    {
    $tugas = Tugas::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
    $tugas->status = $tugas->status == '1' ? '0' : '1';
    $tugas->save();

    return redirect()->route('dashboard');
    }

    public function hapus($id)
    {
    $tugas = Tugas::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
    $tugas->delete();

    return redirect()->route('dashboard');
    }
}

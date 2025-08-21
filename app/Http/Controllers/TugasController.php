<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TugasController extends Controller
{
     public function index()
    {
    $tasks = Tugas::where('user_id', Auth::id())->get();
    return view('home', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
        'title' => 'required|string|max:255',
        'status' => 'required|string',
    ]);

    $task = new Tugas();
    $task->title = $request->title;
    $task->status = $request->status;
    $task->user_id = auth()->id();
    $task->save();

    return redirect()->route('home')->with('success', 'Task created successfully!');

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
        $tugas = Tugas::findOrFail($id);
        $tugas->status = $tugas->status == '1' ? '0' : '1';
        $tugas->save();

        return redirect()->route('dashboard');
    }

    public function hapus($id)
    {
        $tugas = Tugas::findOrFail($id);
        $tugas->delete();

        return redirect()->route('dashboard');
    }

    public function create()
    {
        return view('tasks.create');
    }
}

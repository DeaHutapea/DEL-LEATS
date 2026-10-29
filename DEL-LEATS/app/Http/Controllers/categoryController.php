<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class categoryController extends Controller
    public function index() {
        $mahasiswas = category::with('equipment')->latest()->paginate(10);
        return view('category.index', compact('category'));
    }

    public function store(Request $request) {
    $validated = $request->validate([
    'asset_code' => 'required|unique:equipment',
    'name' => 'required|string|min:5|max:150',
    'category_id' => 'required|exits:categorys,id',
    'daily_rental_fee' => 'required|numeric|min:0',
    'image' => 'required|image|mimes:jpeg, png, webp|max:2048 KB',
    ]);
    category::create($validated);
    return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil
    ditambahkan!');
    }



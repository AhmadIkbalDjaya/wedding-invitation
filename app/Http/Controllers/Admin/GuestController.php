<?php

namespace App\Http\Controllers\Admin;

use App\Models\Guest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;

class GuestController extends Controller
{
    public function index () {
        return view("admin.guest.index", [
            "title" => "Admin Undangan",
            "guests" => Guest::all(),
        ]);
    }

    public function create () {
        return view("admin.guest.create", [
            "title" => "Tambah Undangan",
        ]);
    }

    public function store (Request $request) {
        $validated = $request->validate([
            "name" => "required",
            "slug" => "required|unique:guests",
            "address" => "required",
            "information" => "nullable",
        ]);
        Guest::create($validated);

        return redirect('/admin/guest/index')->with("success", "Undangan Berhasil Ditambahkan");
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Guest::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}

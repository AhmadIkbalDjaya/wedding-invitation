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
            "guests" => Guest::latest()->get(),
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

        return redirect('/admin/guest/')->with("success", "Undangan Berhasil Ditambahkan");
    }

    public function edit (Guest $guest) {
        return view("admin.guest.edit", [
            "title" => "Edit Guest",
            "guest" => $guest,
        ]);
    }

    public function update (Request $request, Guest $guest) {
        $validated = $request->validate([
            "name" => "required",
            "slug" => "required|unique:guests,slug,$guest->id",
            "address" => "required",
            "information" => "nullable",
        ]);
        $guest->update($validated);
        return redirect('/admin/guest/')->with("success", "Undangan Berhasil Diedit");
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Guest::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}

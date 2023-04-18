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
            "phone" => "nullable|numeric|digits_between:10,12",
            "information" => "nullable",
        ]);
        Guest::create($validated);

        return redirect('/admin/guest/')->with("success", "Undangan Berhasil Ditambahkan");
    }

    public function show(Guest $guest)
    {
        return view("admin.guest.show", [
            "title" => "Detail Tamu",
            "guest" => $guest,
        ]);
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
            "phone" => "nullable|numeric|digits_between:10,12",
            "information" => "nullable|",
        ]);
        $guest->update($validated);
        return redirect('/admin/guest/')->with("success", "Undangan Berhasil Diedit");
    }

    public function destroy(Guest $guest)
    {
        $guest->delete();
        return redirect('/admin/guest/')->with("success", "Undangan Berhasil Dihapus");
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Guest::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
    
    public function send(Request $request, Guest $guest)
    {
        $validated = $request->validate([
            "isSend" => "required",
        ]);
        $guest->update($validated);
        return back();
    }
}

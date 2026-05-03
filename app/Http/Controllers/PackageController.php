<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    // Tampilkan daftar paket di dashboard
    public function index()
    {
        $packages = Package::latest()->get();
        return view('admin.packages.index', compact('packages'));
    }

    // Form tambah paket
    public function create()
    {
        return view('admin.packages.create');
    }

    // Simpan paket baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'capacity' => 'required|string',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('packages', 'public');
        }

        Package::create($validated);

        return redirect()->route('packages.index')->with('success', 'Paket berhasil ditambahkan!');
    }

    // Form edit paket
    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
    }

    // Update data paket
    public function update(Request $request, Package $package)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'capacity' => 'required|string',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            if ($package->image) Storage::disk('public')->delete($package->image);
            $validated['image'] = $request->file('image')->store('packages', 'public');
        }

        $package->update($validated);

        return redirect()->route('packages.index')->with('success', 'Paket berhasil diupdate!');
    }

    // Hapus paket
    public function destroy(Package $package)
    {
        if ($package->image) Storage::disk('public')->delete($package->image);
        $package->delete();

        return redirect()->route('packages.index')->with('success', 'Paket berhasil dihapus!');
    }
}

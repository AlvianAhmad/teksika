<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Booking;
use App\Models\Worker;
use App\Models\Request as RequestModel; // gunakan alias agar tidak bentrok dengan Illuminate\\Http\\Request
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all(); // ambil semua data
        $admin = auth()->guard('admin')->user();
        $totalBooking = RequestModel::count();
        $activeWorkers = Worker::where('status', 'aktif')->count();
        return view('dashboard_admin', compact('services', 'admin', 'totalBooking', 'activeWorkers'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'harga_min' => 'required|numeric',
            'harga_max' => 'required|numeric',
            'status' => 'required|in:aktif,nonaktif'
        ]);
        Service::create($request->all());
        return redirect()->back()->with('success', 'Layanan berhasil ditambah!');
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga_min' => 'required|numeric|min:0',
            'harga_max' => 'required|numeric|min:0|gte:harga_min',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $service->update($data);
        return response()->json(['success' => true, 'service' => $service]);
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return response()->json(['success' => true]);
    }
}

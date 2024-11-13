<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Mengambil data dari tabel supplier, grup berdasarkan kota dan hitung jumlah supplier di setiap kota
        $suppliers = DB::table('table_supplier')
            ->select('kota', DB::raw('count(*) as total'))
            ->groupBy('kota')
            ->get();

        // Jika tidak ada data, buat default kosong untuk menghindari error di view
        $kota = $suppliers->isNotEmpty() ? $suppliers->pluck('kota') : collect([]);
        $total = $suppliers->isNotEmpty() ? $suppliers->pluck('total') : collect([]);

        // Kirim data ke view
        return view('home', compact('kota', 'total'));
    }
    
}

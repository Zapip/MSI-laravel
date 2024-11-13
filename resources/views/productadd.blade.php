@extends('layouts.index', ['title' => 'Product Add'])

@section('content')
    <section class="h-screen w-full flex items-center justify-center">
        <section class="w-full max-w-md p-8 glassmorphism-card">
            <section class="text-center mb-6">
                <h3 class="text-2xl font-bold text-white">Tambah data baru</h3>
            </section>
            <div class="w-full">
                <form action="{{ route('add') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="produk" class="block text-white">Produk</label>
                        <input type="text" name="produk" id="produk"
                            class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-transparent text-white">
                    </div>
                    <div class="mb-4">
                        <label for="harga" class="block text-white">Harga</label>
                        <input type="text" name="harga" id="harga"
                            class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-transparent text-white">
                    </div>
                    <div class="mb-4">
                        <label for="jumlah" class="block text-white">Jumlah</label>
                        <input type="text" name="jumlah" id="jumlah"
                            class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-transparent text-white">
                    </div>
                    <div class="text-right">
                        <button type="submit"
                            class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </section>
@endsection

<style>
    .glassmorphism-card {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 2rem;
    }
</style>

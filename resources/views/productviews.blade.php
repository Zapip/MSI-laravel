@extends('layouts.index', ['title' => 'Product Views'])
@section('title', 'Product Views')

@section('content')
    <section class="flex flex-col items-center h-full justify-center p-6 bg-white">
        @if (session('success'))
            <div id="toast-success"
                class="fixed top-5 right-5 bg-green-500 text-white p-4 rounded-lg shadow-lg transition-opacity duration-500 ease-in-out opacity-0 glassmorphism">
                {{ session('success') }}
            </div>
        @endif
        <div class="flex justify-center mt-5 absolute flex-col top-20 right-6 gap-4 text-white">
            <a href="{{ route('add') }}" class="bg-green-800 no-underline p-4 rounded-lg glassmorphism">
                Tambah Data</a>
            <a href="{{ route('chatbot') }}" class="bg-green-800 no-underline p-4 rounded-lg glassmorphism">Chat Bot</a>
        </div>
        <section class="w-1/2 h-1/2 glassmorphism">
            <canvas class="h-1/2 w-1/2" id="myChart"></canvas>
        </section>
        <section class="h-1/2 w-full glassmorphism">
            <table class="m-5 mx-auto border-collapse w-1/2 border border-gray-300 glassmorphism">
                <tr class="bg-gray-200 glassmorphism">
                    <th class="p-2 border border-gray-300">No</th>
                    <th class="p-2 border border-gray-300">Produk</th>
                    <th class="p-2 border border-gray-300">Harga</th>
                    <th class="p-2 border border-gray-300">Jumlah</th>
                    <th class="p-2 border border-gray-300">Action</th>
                </tr>
                @foreach ($products as $product)
                    <tr class="glassmorphism">
                        <td class="p-2 text-center border border-gray-300">{{ $loop->iteration }}</td>
                        <td class="p-2 border border-gray-300">{{ $product->produk }}</td>
                        <td class="p-2 border border-gray-300 text-center">{{ $product->harga }}</td>
                        <td class="p-2 border border-gray-300 text-center">{{ $product->jumlah }}</td>
                        <td class="p-2 text-center border border-gray-300">
                            <form action="{{ route('edit', $product->id) }}" method="get" class="inline">
                                @csrf
                                <button type="submit"
                                    class="bg-green-500 text-white rounded-lg border-none p-4 py-2 cursor-pointer glassmorphism">Edit</button>
                            </form>
                            <form action="{{ route('destroy', $product->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white rounded-lg border-none p-4 py-2 cursor-pointer glassmorphism">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>
        <section class="w-1/2 h-1/2 glassmorphism">
            <canvas class="h-1/2 w-1/2" id="myChart2"></canvas>
        </section>
        <section class="h-1/2 w-full glassmorphism">
            <table class="m-5 mx-auto border-collapse w-1/2 border border-gray-300 glassmorphism">
                <tr class="bg-gray-200 glassmorphism">
                    <th class="p-2 border border-gray-300">No</th>
                    <th class="p-2 border border-gray-300">Produk</th>
                    <th class="p-2 border border-gray-300">Harga</th>
                    <th class="p-2 border border-gray-300">Jumlah</th>
                    <th class="p-2 border border-gray-300">Action</th>
                </tr>
                @foreach ($products2 as $product)
                    <tr class="glassmorphism">
                        <td class="p-2 text-center border border-gray-300">{{ $loop->iteration }}</td>
                        <td class="p-2 border border-gray-300">{{ $product->produk }}</td>
                        <td class="p-2 border border-gray-300 text-center">{{ $product->harga }}</td>
                        <td class="p-2 border border-gray-300 text-center">{{ $product->jumlah }}</td>
                        <td class="p-2 text-center border border-gray-300">
                            <form action="{{ route('edit', $product->id) }}" method="get" class="inline">
                                @csrf
                                <button type="submit"
                                    class="bg-green-500 text-white rounded-lg border-none p-4 py-2 cursor-pointer glassmorphism">Edit</button>
                            </form>
                            <form action="{{ route('destroy', $product->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white rounded-lg border-none p-4 py-2 cursor-pointer glassmorphism">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>
    </section>
@endsection

@section('localJS')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar', // Jenis chart, bisa disesuaikan (misal: 'line', 'bar', 'pie', dll.)
                data: {
                    labels: {!! json_encode($products->pluck('produk')) !!}, // Label produk
                    datasets: [{
                            label: 'Jumlah Produk',
                            data: {!! json_encode($products->pluck('jumlah')) !!}, // Data jumlah produk
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            yAxisID: 'y' // Menggunakan skala Y pertama (default)
                        },
                        {
                            label: 'Harga Produk',
                            data: {!! json_encode($products->pluck('harga')) !!}, // Data harga produk
                            backgroundColor: 'rgba(255, 159, 64, 0.2)',
                            borderColor: 'rgba(255, 159, 64, 1)',
                            borderWidth: 1,
                            type: 'line', // Menggunakan garis untuk dataset harga
                            yAxisID: 'y1' // Menggunakan skala Y kedua
                        }
                    ]
                },
                options: {
                    responsive: true, // Agar chart responsif
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            position: 'left', // Skala Y untuk jumlah produk di kiri
                            title: {
                                display: true,
                                text: 'Jumlah Produk'
                            }
                        },
                        y1: {
                            beginAtZero: true,
                            position: 'right', // Skala Y untuk harga produk di kanan
                            title: {
                                display: true,
                                text: 'Harga Produk (Rupiah)'
                            },
                            grid: {
                                drawOnChartArea: false // Menghindari grid ganda di area chart
                            }
                        }
                    }
                }
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            const ctx2 = document.getElementById('myChart2').getContext('2d');
            const myChart = new Chart(ctx2, {
                type: 'bar', // Jenis chart, bisa disesuaikan (misal: 'line', 'bar', 'pie', dll.)
                data: {
                    labels: {!! json_encode($products2->pluck('produk')) !!}, // Label produk
                    datasets: [{
                            label: 'Jumlah Produk',
                            data: {!! json_encode($products2->pluck('jumlah')) !!}, // Data jumlah produk
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            yAxisID: 'y' // Menggunakan skala Y pertama (default)
                        },
                        {
                            label: 'Harga Produk',
                            data: {!! json_encode($products2->pluck('harga')) !!}, // Data harga produk
                            backgroundColor: 'rgba(255, 159, 64, 0.2)',
                            borderColor: 'rgba(255, 159, 64, 1)',
                            borderWidth: 1,
                            type: 'line', // Menggunakan garis untuk dataset harga
                            yAxisID: 'y1' // Menggunakan skala Y kedua
                        }
                    ]
                },
                options: {
                    responsive: true, // Agar chart responsif
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            position: 'left', // Skala Y untuk jumlah produk di kiri
                            title: {
                                display: true,
                                text: 'Jumlah Produk'
                            }
                        },
                        y1: {
                            beginAtZero: true,
                            position: 'right', // Skala Y untuk harga produk di kanan
                            title: {
                                display: true,
                                text: 'Harga Produk (Rupiah)'
                            },
                            grid: {
                                drawOnChartArea: false // Menghindari grid ganda di area chart
                            }
                        }
                    }
                }
            });
        });



        document.addEventListener('DOMContentLoaded', function() {
            const toast = document.getElementById('toast-success');
            toast.classList.remove('opacity-0');
            setTimeout(() => {
                toast.classList.add('opacity-0');
            }, 3000);
        });
    </script>
@endsection

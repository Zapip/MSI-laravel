@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <section class="size-2/3 glassmorphism">
        <canvas id="supplierChart" width="100" height="50"></canvas>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Ambil data dari controller (kota dan total supplier)
        let kota = @json($kota);
        let total = @json($total);

        // Konfigurasi Chart.js
        let ctx = document.getElementById('supplierChart').getContext('2d');
        let supplierChart = new Chart(ctx, {
            type: 'bar', // Tipe chart (bisa diganti ke 'line', 'pie', dll.)
            data: {
                labels: kota,
                datasets: [{
                    label: 'Jumlah Supplier per Kota',
                    data: total,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Warna batang chart
                    borderColor: 'rgba(75, 192, 192, 1)', // Warna border chart
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@stop

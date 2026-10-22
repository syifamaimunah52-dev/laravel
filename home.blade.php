<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'Sawah Villa - Sewa Villa Mewah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FCF9] font-sans">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">D'SAWAH <span class="text-orange-500">VILLA</span></h1>
            <div class="hidden md:flex gap-6 text-sm">
                <a href="#" class="font-semibold">Beranda</a>
                <a href="#" class="text-gray-500">Villa</a>
                <a href="#" class="text-gray-500">Kontak</a>
            </div>
            <a href="#" class="bg-black text-white px-5 py-2 rounded-full text-sm">Login</a>
        </div>
    </nav>

    <!-- HERO -->
    <section class="max-w-7xl mx-auto px-6 py-12 md:py-20 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <p class="text-orange-500 font-semibold text-sm mb-3">● Tersedia Hari Ini</p>
            <h2 class="text-4xl md:text-5xl font-bold leading-tight">Nikmati Ketenangan<br>Di Tengah Sawah</h2>
            <p class="text-gray-500 mt-4">Booking villa realtime, tanpa takut double booking. Cek kalender ketersediaan langsung.</p>
            <div class="mt-6 flex gap-3">
                <a href="#villa" class="bg-orange-500 text-white px-6 py-3 rounded-full text-sm font-semibold">Lihat Villa</a>
                <a href="#" class="bg-white border px-6 py-3 rounded-full text-sm">Cara Booking?</a>
            </div>
        </div>
        <div class="rounded-[2rem] overflow-hidden h-[350px] bg-gray-200">
            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9" class="w-full h-full object-cover" alt="Villa">
        </div>
    </section>

    <!-- LIST VILLA -->
    <section id="villa" class="max-w-7xl mx-auto px-6 pb-20">
        <div class="flex justify-between items-end mb-8">
            <div>
                <h3 class="text-2xl font-bold">Pilihan Villa Terbaik</h3>
                <p class="text-gray-500 text-sm mt-1">4 Villa Eksklusif dengan view sawah</p>
            </div>
            <p class="text-sm text-gray-400 hidden md:block">Total: {{ count($villas) }} Villa</p>
        </div>

        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($villas as $villa)
            <div class="bg-white rounded-[1.5rem] shadow-sm border overflow-hidden hover:shadow-lg transition">
                <div class="relative h-52">
                    <img src="{{ $villa['foto'] }}" class="w-full h-full object-cover">
                    <!-- STATUS BADGE -->
                    @if($villa['status'] == 'Ready')
                        <span class="absolute top-3 left-3 bg-green-500 text-white text-[11px] px-3 py-1 rounded-full">● Ready</span>
                    @else
                        <span class="absolute top-3 left-3 bg-red-500 text-white text-[11px] px-3 py-1 rounded-full">● Booked</span>
                    @endif
                </div>
                <div class="p-5">
                    <h4 class="font-bold text-[15px]">{{ $villa['nama'] }}</h4>
                    <p class="text-[12px] text-gray-500 mt-1">{{ $villa['fasilitas'] }}</p>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <p class="text-[11px] text-gray-400">Mulai dari</p>
                            <p class="font-bold text-orange-500">Rp {{ number_format($villa['harga'], 0, ',', '.') }} <span class="text-[11px] font-normal text-gray-500">/malam</span></p>
                        </div>
                        <a href="{{ route('villa.show', $villa['id']) }}" class="bg-black text-white text-xs px-4 py-2 rounded-full">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</body>
</html>
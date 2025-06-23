<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Singgah Kepri</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-green-50 to-blue-50 min-h-screen flex flex-col items-center">

    <!-- Gambar Header -->
    <div class="w-full">
        <img src="{{ asset('images/header.jpg') }}" alt="Jembatan dan pemandangan" class="w-full shadow-md object-cover max-h-96" />
    </div>

    <!-- Judul dan Subjudul -->
    <div class="text-center mt-8">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800">Singgah Kepri</h1>
        <p class="text-sm md:text-base text-gray-500 mt-1">Tourism Digital Map</p>
        <p class="mt-4 text-blue-700 font-semibold text-lg md:text-xl">Wujudkan Liburan Impianmu di Kepulauan Riau!</p>
    </div> 

    <!-- Statistik -->
    <div class="w-full bg-gradient-to-r from-green-200 via-green-300 to-blue-200 shadow-lg mt-8 grid grid-cols-3 text-center py-6 text-blue-800 font-semibold">
        <div>
            <p class="text-2xl">500</p>
            <p class="text-sm font-normal">Tempat wisata</p>
        </div>
        <div>
            <p class="text-2xl">1,500</p>
            <p class="text-sm font-normal">Hotel</p>
        </div>
        <div>
            <p class="text-2xl">2,731</p>
            <p class="text-sm font-normal">Restaurant</p>
        </div>
    </div>

    <!-- Lokasi Pariwisata -->
    <section class="max-w-6xl w-full mt-10 px-4">
        <h2 class="text-blue-800 font-bold text-xl mb-6">Lokasi Pariwisata</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @php
                $locations = [
                    ['name' => 'Karimun', 'image' => 'karimun.jpg'],
                    ['name' => 'Natuna', 'image' => 'natuna.jpg'],
                    ['name' => 'Bintan', 'image' => 'bintan.jpg'],
                    ['name' => 'Batam', 'image' => 'batam.jpg'],
                    ['name' => 'Tanjung Pinang', 'image' => 'tanjungpinang.jpg'],
                    ['name' => 'Anambas', 'image' => 'anambas.jpg'],
                    ['name' => 'Lingga', 'image' => 'lingga.jpg'],
                ];
            @endphp

            @foreach($locations as $loc)
                <div class="relative rounded-lg overflow-hidden shadow-md cursor-pointer group">
                    <img src="{{ asset('images/'.$loc['image']) }}" alt="{{ $loc['name'] }}" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <h3 class="text-white font-bold text-lg">{{ $loc['name'] }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</body>
</html>

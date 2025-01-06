<a href="{{ route('textos.show_one', ['id' => $nota-> id]) }}" class="transform transition duration-300 hover:scale-105">
    <div class="bg-pink-50 rounded-lg shadow-sm p-6 hover:shadow-md">
        <div class="mb-4 flex items-center justify-center">
            @if ($nota->img == null)
                <img src="{{ asset('img/ISAU_COLLAGE.jpg') }}" class="w-auto max-h-96 rounded-lg" alt="No hay imagen">
            @else
                <img src="{{ asset($nota->img) }}" class="w-auto max-h-96 rounded-lg" alt="No hay imagen">
            @endif
        </div>
        <h3 class="text-xl text-pink-500 font-serif mb-2">{{ $nota->titulo }}</h3>
        <span class="text-gray-500 text-sm block mb-3">{{ $nota->fecha }}</span>
        <p class="text-gray-700 line-clamp-3">{{ $nota->contenido }}</p>
    </div>
</a>
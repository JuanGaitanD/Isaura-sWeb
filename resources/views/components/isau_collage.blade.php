@if (isset($mobile))
    <div class="flex md:hidden w-96 bg-white shadow-lg border-8 border-yellow-100 rounded-lg items-center justify-center mb-4">
        <img src="{{ asset('img/ISAU_COLLAGE.jpg') }}" alt="No se ha encontrado la imagen">
    </div>
@else
    <div class="hidden md:flex w-96 bg-white shadow-lg border-8 border-yellow-100 rounded-lg items-center justify-center mb-4">
        <img src="{{ asset('img/ISAU_COLLAGE.jpg') }}" alt="No se ha encontrado la imagen">
    </div>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <x-head />
</head>
<body>
    <x-nav :title="'home'"/>

    <div class="flex flex-col items-center justify-center min-h-screen bg-white">
        <h1 class="text-4xl font-bold mb-4">Con amor, estamos construyendo algo especial para ti...</h1>
        <p class="text-xl text-gray-600 mb-8">Como una rosa que florece lentamente, está página esta tomando forma.</p>

        <div class="mb-8">
            <i class="fas fa-heart text-red-500 text-5xl"></i>
        </div>
        
        <p class="text-lg text-gray-700">Vuelve pronto para descubrir la magia.</p>

        <button class="bg-pink-300 text-white px-6 py-2 rounded-full hover:bg-pink-400 w-fit mt-4" onclick="window.history.back();">Volver</button>
    </div>
</body>
</html>
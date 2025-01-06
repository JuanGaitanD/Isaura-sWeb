<!DOCTYPE html>
<html lang="en">
<head>
    <x-head />
</head>
<body>
    <div class="min-h-screen bg-pink-50">
        <x-nav :title="'home'"/>
    
        <div class="container mx-auto py-12 px-4 bg-white shadow-lg rounded-lg mt-8">
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4 text-center px-4">Con amor, estamos construyendo algo especial para ti...</h1>
            <p class="text-lg md:text-xl text-gray-600 mb-8 text-center px-4">Como una rosa que florece lentamente, está página esta tomando forma.</p>
    
            <div class="mb-8 mx-auto text-center">
                <i class="fas fa-heart text-red-500 text-5xl"></i>
            </div>
            
            <div class="text-center ">
                <p class="text-lg text-gray-700">Vuelve pronto para descubrir la magia.</p>
        
                <button class="bg-pink-300 text-white px-6 py-2 rounded-full hover:bg-pink-400 w-fit mt-4" onclick="window.history.back();">Volver</button>
            </div>
        </div>
    </div>
</body>
</html>
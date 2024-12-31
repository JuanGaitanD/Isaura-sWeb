<!DOCTYPE html>
<html lang="en">
<head>
    <x-head />
<body>
    <div class="min-h-screen bg-pink-50">
        <x-nav :title="'home'"/>        

        <main class="container mx-auto py-12 px-4 bg-white shadow-lg rounded-lg mt-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col justify-center px-6">
                    <h2 class="text-4xl text-pink-400 mb-1 font-serif">A wonderfull story</h2>
                    <h3h class="text-gray-400 mb-6 text-l">Donde las margaritas florecen y los sueños se hacen realidad</h3h>
                    <p class="text-gray-600 mb-6">Hey! Moon girl, It’s wonderfull having you back in those old streets. Ven, siéntate en ese columpio, aquí puedes ver, todo lo que haces sentir, todo lo que me haces sentir. </p>

                    <a href="{{ route('wonder') }}">
                        <button class="bg-pink-300 text-white px-6 py-2 rounded-full hover:bg-pink-400 w-fit">
                            Comencemos!
                        </button>
                    </a>    
                </div>
                <div class="flex justify-center items-center">
                    <div class="w-96 h-96 bg-white shadow-lg border-8 border-yellow-100 flex items-center justify-center">
                        <x-isau_collage />
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
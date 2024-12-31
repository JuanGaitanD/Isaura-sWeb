<nav class="bg-yellow-100 p-4">
    <div class="container mx-auto flex justify-between items-center">
        @php
            if(isset($title)) {
                switch ($title) {
                    case "Dashboard":
                        @endphp
                            <h1h class="text-pink-400 text-2xl font-cursive">
                                Dashboard
                            </h1h>

                            <div class="hidden md:flex space-x-4">
                                <a href="{{ route('dashboard')}}" class="text-pink-500 hover:text-pink-600">Dashboard</a>
                                <a href="{{ route('text.index') }}" class="text-pink-500 hover:text-pink-600">Textos</a>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="text-red-500 hover:text-pink-600" type="submit">Leave</button>
                                </form>
                            </div>

                            <!-- Mobile menu button -->
                            <button class="md:hidden text-pink-500 hover:text-pink-600" onclick="toggleMenu()">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                            </button>

                            <!-- Mobile menu (hidden by default) -->
                            <div id="mobileMenu" class="hidden md:hidden absolute top-16 right-0 left-0 bg-yellow-100 p-4">
                                <div class="flex flex-col space-y-4">
                                    <a href="{{ route('dashboard')}}" class="text-pink-500 hover:text-pink-600">Dashboard</a>
                                    <a href="{{ route('text.index') }}" class="text-pink-500 hover:text-pink-600">Textos</a>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button class="text-red-500 hover:text-pink-600" type="submit">Leave</button>
                                    </form>
                                </div>
                            </div>

                            <script>
                                function toggleMenu() {
                                    const menu = document.getElementById('mobileMenu');
                                    menu.classList.toggle('hidden');
                                }
                            </script>
                        @php
                        break;
                    case "home":
                        @endphp
                        <h1h class="text-pink-400 text-2xl font-cursive">
                            <b><a href="{{ route('home') }}">Isaura's Web</a> <a href="{{ route('login') }}">🌼</a></b>
                        </h1h>

                        <div class="hidden md:flex space-x-4">
                            <a href="{{ route('home') }}" class="text-pink-500 hover:text-pink-600">Inicio</a>
                            <a href="{{ route('textos.get') }}" class="text-pink-500 hover:text-pink-600">Textos</a>
                            <a href="{{ route('wonder') }}" class="text-pink-500 hover:text-pink-600">Wonder</a>
                            <a href="{{ route('proximamente') }}" class="text-pink-500 hover:text-pink-600">Galeria</a>
                        </div>
                        <!-- Mobile menu button -->
                        <button class="md:hidden text-pink-500 hover:text-pink-600" onclick="toggleMenu()">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>

                        <!-- Mobile menu (hidden by default) -->
                        <div id="mobileMenu" class="hidden md:hidden absolute top-16 right-0 left-0 bg-yellow-100 p-4">
                            <div class="flex flex-col space-y-4">
                                <a href="{{ route('home') }}" class="text-pink-500 hover:text-pink-600">Inicio</a>
                                <a href="{{ route('textos.get') }}" class="text-pink-500 hover:text-pink-600">Textos</a>
                                <a href="{{ route('wonder') }}" class="text-pink-500 hover:text-pink-600">Wonder</a>
                                <a href="{{ route('proximamente') }}" class="text-pink-500 hover:text-pink-600">Galeria</a>
                            </div>
                        </div>

                        <script>
                            function toggleMenu() {
                                const menu = document.getElementById('mobileMenu');
                                menu.classList.toggle('hidden');
                            }
                        </script>
                        @php
                        break;
                    default:
                        echo "Home";
                        break;
                }
            } else {
                echo "Home";
            }
        @endphp
    </div>
</nav>
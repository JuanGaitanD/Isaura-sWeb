<span onclick="ver_imagen(this)" class="transform transition duration-300 hover:scale-105">
    <div class="bg-pink-50 rounded-lg shadow-sm p-6 hover:shadow-md">
        <div class="mb-4 flex items-center justify-center">
            <img src="{{ asset($picture->img) }}" class="w-auto max-h-96 rounded-lg" alt="No hay imagen">
            <input type="hidden" name="id" value="{{$picture->id}}">
        </div>
    </div>
</span>

<script>
    function ver_imagen(e) {
        let img = e.querySelector('img').src;
        let id = e.querySelector('input').value;
        let modal = document.createElement('div');
        modal.classList.add('fixed', 'top-0', 'left-0', 'w-full', 'h-full', 'bg-black', 'bg-opacity-50', 'flex', 'items-center', 'justify-center', 'z-50');
        modal.innerHTML = `
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="${img}" alt="imagen" class="w-auto max-h-[80vh] rounded-lg">

                <button onclick="cerrar_modal(this)" class="bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded mt-4">Cerrar</button>
            </div>
        `;
        document.body.appendChild(modal);
    }

    function cerrar_modal(e) {
        e.parentElement.parentElement.remove();
    }
</script>
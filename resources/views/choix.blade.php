<x-app-layout>
    <div class="w-full h-screen bg-gradient-to-tl from-violet-800 via-purple-800 to-fuchsia-600">
        <div class="mx-8">
            {{-- Bouton retour --}}
            <div class="flex justify-between items-center pt-16">
                <a href="{{ route('profilage') }}">
                    <svg class="size-6 ml-4 mb-1" id="back-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z"
                            fill="#FFFFFF" />
                    </svg>
                </a>
            </div>

            <div class="flex flex-col items-center text-white -mt-10 gap-1 ml-3">
                <h1 class="mb-16">Tu préfères :</h1>
            </div>

            {{-- Formulaire --}}
            <form action="{{ route('user.storeOrderPreference') }}" method="POST">
                @csrf
                <div class="flex flex-col items-center gap-16">
                    <button type="submit" name="order_preference" value="desc"
                        class="bg-white w-full py-4 rounded-full font-black text-sm outline outline-2 outline-offset-4 outline-[#a632db] text-purple-600 text-center">
                        Te perfectionner
                    </button>

                    <button type="submit" name="order_preference" value="asc"
                        class="bg-white w-full py-4 rounded-full font-black text-sm outline outline-2 outline-offset-4 outline-[#a632db] text-purple-600 text-center">
                        Corriger tes faiblesses
                    </button>

                    <button type="submit" name="order_preference" value="random"
                        class="bg-white w-full py-4 rounded-full font-black text-sm outline outline-2 outline-offset-4 outline-[#a632db] text-purple-600 text-center">
                        Être plus polyvalent
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

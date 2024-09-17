<x-app-layout>
    <div class="mx-8 my-8">
        <a href="{{ route('accueil') }}">
            <svg class="size-6 ml-4 mb-3" id="back-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" />
            </svg></a>
        <div class="flex justify-end">
            <div
                class="flex justify-end items-center bg-violet-100 rounded outline outline-1 outline-offset-2 outline-[#a632db] text-custom-violet w-14 h-6 gap-1 pr-2 pl-2">
                <x-diamond />
                <p class="text-sm font-bold">50</p>
            </div>
        </div>
        <div class="flex flex-row items-center">
            <h1 class="text-2xl pb-3">{{ ucfirst($domaine->name) }}</h1>
            <!-- Vérifier si l'utilisateur est admin -->
                

        </div>



        <!-- 1ere partie -->



        <div class="bg-gradient-to-r from-violet-700 via-purple-700 to-fuchsia-800 text-white rounded-lg pl-4 py-2">
            <div class="flex flex-row items-center gap-1 ml-2 pb-2">
                <svg fill="#ffffff" width="20px" height="20px" viewBox="0 0 32 32" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M8.999 3.567c0.98 0 2.753 0.469 5.628 3.301l1.425 1.403 1.404-1.426c1.996-2.028 4.12-3.288 5.543-3.288 1.919 0 3.432 0.656 4.907 2.128 1.39 1.386 2.156 3.23 2.156 5.191 0.001 1.962-0.764 3.807-2.169 5.209-0.114 0.116-6.156 6.634-11.218 12.097-0.238 0.227-0.511 0.26-0.656 0.26-0.143 0-0.412-0.032-0.65-0.253-1.233-1.372-10.174-11.313-11.213-12.351-1.391-1.388-2.157-3.233-2.157-5.194s0.766-3.804 2.158-5.192c1.353-1.352 2.937-1.885 4.842-1.885zM8.999 1.567c-2.392 0-4.5 0.715-6.255 2.469-3.659 3.649-3.659 9.566 0 13.217 1.045 1.045 11.183 12.323 11.183 12.323 0.578 0.578 1.336 0.865 2.093 0.865s1.512-0.287 2.091-0.865c0 0 11.090-11.97 11.208-12.089 3.657-3.652 3.657-9.57 0-13.219-1.816-1.813-3.845-2.712-6.319-2.712-2.364 0-5 1.885-6.969 3.885-2.031-2-4.585-3.874-7.031-3.874v0z">
                        </path>
                    </g>
                </svg>
                <h3 class="text-base">Citation inspirante</h3>
            </div>
            <p class="text-sm">Les vidéos ne créent pas seulement des souvenirs, elles forgent des compétences.
            </p>
            <p class="text-sm">Plonge-toi dans
                l'apprentissage du foot.</p>
        </div>





        <!-- 2eme partie -->


        <div class="flex items-center pt-5">
            <h2 class="text-base mb-2">Vidéos d'apprentissage</h2>
            <hr class="flex-grow border-t-1 border-gray-300 ml-2">
        </div>



        @foreach ($entrainements as $entrainement)
            <div class="relative">
                {{-- <iframe class="w-full h-48 object-cover rounded-2xl"
                    src="https://www.youtube.com/embed/Asmzihl4qww?si=1avxzRICvH-tuiIf"
                    title="{{ $entrainement->title }}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe> --}}
                <img class="w-full h-48 object-cover rounded-2xl" src="/images/minia.jpg">
                <span
                    class="absolute top-4 left-4 bg-gray-200 outline outline-2 outline-offset-2 outline-gray-200 text-black text-xs font-bold px-2 py-1 rounded">{{ ucfirst($entrainement->difficulte) }}</span>
                    @if(auth()->user()->role === 'admin')
                    <form action="{{ route('delete', $entrainement->id) }}" method="post" class="inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="absolute top-4 left-64 bg-gray-200 outline outline-2 outline-offset-2 outline-gray-200 text-black text-xs font-bold px-2 py-1 rounded">
                            Delete
                        </button>
                    </form>
                    <a href="{{ route('edit', $entrainement->id) }}"><span
                    class="absolute top-4 left-48 bg-gray-200 outline outline-2 outline-offset-2 outline-gray-200 text-black text-xs font-bold px-2 py-1 rounded">Edit</span></a>
                @endif
                    
            </div>




            <div class="flex items-center justify-between mt-2 {{ $loop->last ? 'mb-24' : 'mb-3' }}">
                <div>
                    <h3 class="text-base font-bold">{{ $entrainement->title }}</h3>
                    <div class="flex items-center text-sm mt-1 text-gray-600">
                        <svg class="w-4 h-4 mr-1 -mt-1" fill="grey" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.35 4.148a1 1 0 00.95.69h4.384c.969 0 1.371 1.24.588 1.81l-3.548 2.577a1 1 0 00-.364 1.118l1.35 4.148c.3.922-.755 1.688-1.54 1.118l-3.548-2.577a1 1 0 00-1.176 0l-3.548 2.577c-.785.57-1.84-.196-1.54-1.118l1.35-4.148a1 1 0 00-.364-1.118L2.537 9.575c-.783-.57-.38-1.81.588-1.81h4.384a1 1 0 00.95-.69l1.35-4.148z">
                            </path>
                        </svg>
                        <span>5.5</span>
                        <span class="mx-2">•</span>
                        <span>{{ $entrainement->durée }}</span>
                    </div>
                </div>
                <button
                    class="bg-white w-24 h-6 rounded-full font-black text-sm outline outline-2 outline-offset-4 outiline-[#a632db] text-purple-600 flex justify-center items-center ml-auto mr-2"
                    type="button">
                    <a href="{{ route('video', $entrainement->id) }}">Commencer</a>
                </button>


            </div>
        @endforeach

    </div>





</x-app-layout>

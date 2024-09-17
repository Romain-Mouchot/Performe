<x-app-layout>
    <div class="mx-8 my-16">

        @php
            $questions = '';
            $ii = 1;
            foreach ($domaines as $key => $domaine) {
                if ($ii === 1) {
                    $questions .= 'question_' . $ii . ': true, ';
                } else {
                    $questions .= 'question_' . $ii . ': false, ';
                }
                $ii++;
            }
        @endphp
        <div id="questions" x-data="{ {{ $questions }} }">
            <form id="main-form" action="{{ route('stats.store') }}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                @php
                    $i = 1;
                @endphp
                @foreach ($domaines as $domaine)
                    <div x-cloak x-show="question_{{ $i }}" id="question_{{ $i }}"
                        class="question">

                        <div class="flex justify-between items-center">
                            <div>
                                @if ($i !== 1)
                                    <svg @click="question_{{ $i }} = false, question_{{ $i - 1 }} = true"
                                        class="size-6 ml-4 mb-3" id="back-button" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 32 32">
                                        <path
                                            d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" />
                                    </svg>
                                @else
                                    <div class="size-6 ml-4 mb-3"></div>
                                @endif
                                <h1>Profilage</h1>
                            </div>
                            <div>
                                @php
                                    $percent = ($i * 100) / $domaines->count();
                                @endphp
                                <div class="flex size-14 relative items-center justify-center rounded-full before:content-[''] before:size-4/5 before:bg-white before:rounded-full before:absolute"
                                    style="background: conic-gradient(#360e6f 0% {{ $percent }}%, #d3d3d3 {{ $percent }}% 100%);">
                                    <div class="text-xl text-gray-900 relative z-10">
                                        {{ $i }}/{{ $domaines->count() }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 relative">
                            <div class="bg-violet-100 rounded-lg p-3 text-sm font-semibold">
                                <p class="tuto">{{ $domaine->description }}</p>
                            </div>
                            <img class="size-20 absolute -bottom-10 right-0" src="/images/avatar.png">
                        </div>

                        <div
                            class="mt-12 bg-gray-100 rounded-2xl border border-violet-100 p-3 flex flex-col items-center">
                            <div class="flex flex-col items-center my-8">
                                <h2>{{ ucfirst($domaine->name) }}</h2>
                                <div class="mt-2">
                                    <div class="star-group">
                                        @php
                                            // Récupérer la note pour le domaine en cours
                                            $stat = $stats->where('domaine_id', $domaine->id)->first();
                                            $note = $stat ? $stat->note : 0; // Si pas de note, par défaut à 0
                                        @endphp
                                    
                                        <input type="radio"
                                            class="one star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none ring-0 border-transparent ring-transparent bg-transparent"
                                            name="{{ $domaine->id }}" id="one" value="1" {{ $note == 1 ? 'checked' : '' }}>
                                    
                                        <input type="radio"
                                            class="two star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none ring-0 border-transparent ring-transparent bg-transparent"
                                            name="{{ $domaine->id }}" id="two" value="2" {{ $note == 2 ? 'checked' : '' }}>
                                    
                                        <input type="radio"
                                            class="three star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none ring-0 border-transparent ring-transparent bg-transparent"
                                            name="{{ $domaine->id }}" id="three" value="3" {{ $note == 3 ? 'checked' : '' }}>
                                    
                                        <input type="radio"
                                            class="four star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none ring-0 border-transparent ring-transparent bg-transparent"
                                            name="{{ $domaine->id }}" id="four" value="4" {{ $note == 4 ? 'checked' : '' }}>
                                    
                                        <input type="radio"
                                            class="five star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none ring-0 border-transparent ring-transparent bg-transparent"
                                            name="{{ $domaine->id }}" id="five" value="5" {{ $note == 5 ? 'checked' : '' }}>
                                    
                                        <input type="radio"
                                            class="six star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none ring-0 border-transparent ring-transparent bg-transparent"
                                            name="{{ $domaine->id }}" id="six" value="6" {{ $note == 6 ? 'checked' : '' }}>
                                    
                                        <input type="radio"
                                            class="seven star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none ring-0 border-transparent ring-transparent bg-transparent"
                                            name="{{ $domaine->id }}" id="seven" value="7" {{ $note == 7 ? 'checked' : '' }}>
                                    
                                        <input type="radio"
                                            class="eight star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none ring-0 border-transparent ring-transparent bg-transparent"
                                            name="{{ $domaine->id }}" id="eight" value="8" {{ $note == 8 ? 'checked' : '' }}>
                                    
                                        <input type="radio"
                                            class="nine star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none ring-0 border-transparent ring-transparent bg-transparent"
                                            name="{{ $domaine->id }}" id="nine" value="9" {{ $note == 9 ? 'checked' : '' }}>
                                    
                                        <input type="radio"
                                            class="ten star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none ring-0 border-transparent ring-transparent bg-transparent"
                                            name="{{ $domaine->id }}" id="ten" value="10" {{ $note == 10 ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                            @if ($loop->last)
                                <button
                                    class="bg-white w-full py-4 rounded-full font-black text-sm outline outline-2 outline-offset-4 outiline-[#a632db] text-purple-600"
                                    type="submit">
                                    Generer profil
                                </button>
                            @else
                                <button
                                    class="bg-white w-full py-4 rounded-full font-black text-sm outline outline-2 outline-offset-4 outiline-[#a632db] text-purple-600"
                                    type="button"
                                    @click="question_{{ $i }} = false, question_{{ $i + 1 }} = true">
                                    Domaine Suivant
                                </button>
                            @endif
                        </div>
                    </div>
                    @php
                        $i++;
                    @endphp
                @endforeach

                <!-- Toutes les questions sont maintenant dans un seul formulaire -->
                <!--
                <div x-show="question1" id="question1" class="question">

                    <div class="flex justify-between items-center">
                        <div>
                            <svg class="size-6 ml-4 mb-3" id="back-button" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 32 32">
                                <path
                                    d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" />
                            </svg>
                            <h1>Profilage</h1>

                        </div>
                        <div>
                            <div
                                class="flex size-14 relative items-center justify-center rounded-full before:content-[''] before:size-4/5 before:bg-white before:rounded-full before:absolute pc-12">
                                <div class="text-xl text-gray-900 relative z-10">1/8</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 relative">
                        <div class="bg-violet-100 rounded-lg p-3 text-sm font-semibold">
                            <p class="tuto">Quand le ballon monte dans les airs, tu te sens comme un mur
                                infranchissable ou il y a des ajustements à faire ?</p>
                        </div>
                        <img class="size-20 absolute -bottom-10 right-0" src="/images/avatar.png">
                    </div>

                    <div class="mt-12 bg-gray-100 rounded-2xl border border-violet-100 p-3 flex flex-col items-center">
                        <div class="flex flex-col items-center my-8">
                            <h2>Défense aerienne</h2>
                            {{-- <x-starrating name="defense_aerienne" stat="{{ $stat->defense_aerienne ?? 0 }}" /> --}}
                            <x-crashtest value="9" stat="{{ $notes[9] ?? 0 }}" />
                        </div>
                        <button
                            class="bg-white w-full py-4 rounded-full font-black text-sm outline outline-2 outline-offset-4 outiline-[#a632db] text-purple-600"
                            type="button" @click="question1 = false, question2 = true">Domaine Suivant</button>
                    </div>
                </div>

                <div x-show="question2" id="question2" class="question">

                    <div class="flex justify-between items-center">
                        <div>
                            <svg @click="question1 = true, question2 = false" class="size-6 ml-4 mb-3" id="back-button"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path
                                    d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" />
                            </svg>
                            <h1>Profilage</h1>
                        </div>
                        <div>
                            <div
                                class="flex size-14 relative items-center justify-center rounded-full before:content-[''] before:size-4/5 before:bg-white before:rounded-full before:absolute pc-25">
                                <div class="text-xl text-gray-900 relative z-10">2/8</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 relative">
                        <div class="bg-violet-100 rounded-lg p-3 text-sm font-semibold">
                            <p class="tuto">Est-ce que tu te sens serein dans les un contre un au sol ou tu aimerais
                                encore affiner ton jeu défensif ?</p>
                        </div>
                        <img class="size-20 absolute -bottom-10 right-0" src="/images/avatar.png">
                    </div>

                    <div class="mt-12 bg-gray-100 rounded-2xl border border-violet-100 p-3 flex flex-col items-center">
                        <div class="flex flex-col items-center my-8">
                            <h2>Défense au sol</h2>
                            {{-- <x-starrating name="defense_au_sol" stat="{{ $stat->defense_au_sol ?? 0 }}" /> --}}
                            <x-crashtest value="10" />
                        </div>
                        <button
                            class="bg-white w-full py-4 rounded-full font-black text-sm outline outline-2 outline-offset-4 outiline-[#a632db] text-purple-600"
                            type="button" @click="question2 = false, question3 = true">Domaine Suivant</button>
                    </div>
                </div>

                <div x-show="question3" id="question3" class="question">

                    <div class="flex justify-between items-center">
                        <div>
                            <svg @click="question2 = true, question3 = false" class="size-6 ml-4 mb-3" id="back-button"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path
                                    d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" />
                            </svg>
                            <h1>Profilage</h1>
                        </div>
                        <div>
                            <div
                                class="flex size-14 relative items-center justify-center rounded-full before:content-[''] before:size-4/5 before:bg-white before:rounded-full before:absolute pc-37">
                                <div class="text-xl text-gray-900 relative z-10">3/8</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 relative">
                        <div class="bg-violet-100 rounded-lg p-3 text-sm font-semibold">
                            <p class="tuto">Est-ce que tu es le premier sur chaque ballon perdu ou tu penses qu'il te
                                manque un peu de mordant ?</p>
                        </div>
                        <img class="size-20 absolute -bottom-10 right-0" src="/images/avatar.png">
                    </div>

                    <div class="mt-12 bg-gray-100 rounded-2xl border border-violet-100 p-3 flex flex-col items-center">
                        <div class="flex flex-col items-center my-8">
                            <h2>Récuperation</h2>
                            {{-- <x-starrating name="recuperation" stat="{{ $stat->recuperation ?? 0 }}" /> --}}
                            <x-crashtest value="11" />
                        </div>
                        <button
                            class="bg-white w-full py-4 rounded-full font-black text-sm outline outline-2 outline-offset-4 outiline-[#a632db] text-purple-600"
                            type="button" @click="question3 = false, question4 = true">Domaine Suivant</button>
                    </div>
                </div>

                <div x-show="question4" id="question4" class="question">

                    <div class="flex justify-between items-center">
                        <div>
                            <svg @click="question3 = true, question4 = false" class="size-6 ml-4 mb-3" id="back-button"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path
                                    d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" />
                            </svg>
                            <h1>Profilage</h1>
                        </div>
                        <div>
                            <div
                                class="flex size-14 relative items-center justify-center rounded-full before:content-[''] before:size-4/5 before:bg-white before:rounded-full before:absolute pc-50">
                                <div class="text-xl text-gray-900 relative z-10">4/8</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 relative">
                        <div class="bg-violet-100 rounded-lg p-3 text-sm font-semibold">
                            <p class="tuto">Tu te sens à l’aise pour organiser le jeu et relancer proprement ou tu
                                penses qu’il y a encore du boulot ?</p>
                        </div>
                        <img class="size-20 absolute -bottom-10 right-0" src="/images/avatar.png">
                    </div>

                    <div class="mt-12 bg-gray-100 rounded-2xl border border-violet-100 p-3 flex flex-col items-center">
                        <div class="flex flex-col items-center my-8">
                            <h2>Distribution</h2>
                            {{-- <x-starrating name="distribution" stat="{{ $stat->distribution ?? 0 }}" /> --}}
                            <x-crashtest value="12" />
                        </div>
                        <button
                            class="bg-white w-full py-4 rounded-full font-black text-sm outline outline-2 outline-offset-4 outiline-[#a632db] text-purple-600"
                            type="button" @click="question4 = false, question5 = true">Domaine Suivant</button>
                    </div>
                </div>

                <div x-show="question5" id="question5" class="question">

                    <div class="flex justify-between items-center">
                        <div>
                            <svg @click="question4 = true, question5 = false" class="size-6 ml-4 mb-3"
                                id="back-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path
                                    d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" />
                            </svg>
                            <h1>Profilage</h1>
                        </div>
                        <div>
                            <div
                                class="flex size-14 relative items-center justify-center rounded-full before:content-[''] before:size-4/5 before:bg-white before:rounded-full before:absolute pc-62">
                                <div class="text-xl text-gray-900 relative z-10">5/8</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 relative">
                        <div class="bg-violet-100 rounded-lg p-3 text-sm font-semibold">
                            <p class="tuto">Est-ce que tu arrives à casser les lignes par ta vitesse et tes dribbles
                                ou tu souhaites encore peaufiner cette arme ?</p>
                        </div>
                        <img class="size-20 absolute -bottom-10 right-0" src="/images/avatar.png">
                    </div>

                    <div class="mt-12 bg-gray-100 rounded-2xl border border-violet-100 p-3 flex flex-col items-center">
                        <div class="flex flex-col items-center my-8">
                            <h2>Percussion</h2>
                            {{-- <x-starrating name="percussion" stat="{{ $stat->percussion ?? 0 }}" /> --}}
                            <x-crashtest value="13" />
                        </div>
                        <button
                            class="bg-white w-full py-4 rounded-full font-black text-sm outline outline-2 outline-offset-4 outiline-[#a632db] text-purple-600"
                            type="button" @click="question5 = false, question6 = true">Domaine Suivant</button>
                    </div>
                </div>

                <div x-show="question6" id="question6" class="question">

                    <div class="flex justify-between items-center">
                        <div>
                            <svg @click="question5 = true, question6 = false" class="size-6 ml-4 mb-3"
                                id="back-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path
                                    d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" />
                            </svg>
                            <h1>Profilage</h1>
                        </div>
                        <div>
                            <div
                                class="flex size-14 relative items-center justify-center rounded-full before:content-[''] before:size-4/5 before:bg-white before:rounded-full before:absolute pc-75">
                                <div class="text-xl text-gray-900 relative z-10">6/8</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 relative">
                        <div class="bg-violet-100 rounded-lg p-3 text-sm font-semibold">
                            <p class="tuto">Quand tu es près de la surface, est-ce que tu as le flair pour créer des
                                occasions ou tu penses que tu pourrais être encore plus menaçant ?</p>
                        </div>
                        <img class="size-20 absolute -bottom-10 right-0" src="/images/avatar.png">
                    </div>

                    <div class="mt-12 bg-gray-100 rounded-2xl border border-violet-100 p-3 flex flex-col items-center">
                        <div class="flex flex-col items-center my-8">
                            <h2>Mise en danger</h2>
                            {{-- <x-starrating name="mise_en_danger" stat="{{ $stat->mise_en_danger ?? 0 }}" /> --}}
                            <x-crashtest value="14" />
                        </div>
                        <button
                            class="bg-white w-full py-4 rounded-full font-black text-sm outline outline-2 outline-offset-4 outiline-[#a632db] text-purple-600"
                            type="button" @click="question6 = false, question7 = true">Domaine Suivant</button>
                    </div>
                </div>

                <div x-show="question7" id="question7" class="question">

                    <div class="flex justify-between items-center">
                        <div>
                            <svg @click="question6 = true, question7 = false" class="size-6 ml-4 mb-3"
                                id="back-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path
                                    d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" />
                            </svg>
                            <h1>Profilage</h1>
                        </div>
                        <div>
                            <div
                                class="flex size-14 relative items-center justify-center rounded-full before:content-[''] before:size-4/5 before:bg-white before:rounded-full before:absolute pc-87">
                                <div class="text-xl text-gray-900 relative z-10">7/8</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 relative">
                        <div class="bg-violet-100 rounded-lg p-3 text-sm font-semibold">
                            <p class="tuto">Est-ce que tu te sens comme un tueur devant le but ou il te manque encore
                                un peu de sang-froid pour faire la différence à chaque fois ?</p>
                        </div>
                        <img class="size-20 absolute -bottom-10 right-0" src="/images/avatar.png">
                    </div>

                    <div class="mt-12 bg-gray-100 rounded-2xl border border-violet-100 p-3 flex flex-col items-center">
                        <div class="flex flex-col items-center my-8">
                            <h2>Finition</h2>
                            {{-- <x-starrating name="finition" stat="{{ $stat->finition ?? 0 }}" /> --}}
                            <x-crashtest value="15" />
                        </div>
                        <button
                            class="bg-white w-full py-4 rounded-full font-black text-sm outline outline-2 outline-offset-4 outiline-[#a632db] text-purple-600"
                            type="button" @click="question7 = false, question8 = true">Domaine Suivant</button>
                    </div>
                </div>

                <div x-show="question8" id="question8" class="question">

                    <div class="flex justify-between items-center">
                        <div>
                            <svg @click="question7 = true, question8 = false" class="size-6 ml-4 mb-3"
                                id="back-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path
                                    d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" />
                            </svg>
                            <h1>Profilage</h1>
                        </div>
                        <div>
                            <div
                                class="flex size-14 relative items-center justify-center rounded-full before:content-[''] before:size-4/5 before:bg-white before:rounded-full before:absolute pc-100">
                                <div class="text-xl text-gray-900 relative z-10">8/8</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 relative">
                        <div class="bg-violet-100 rounded-lg p-3 text-sm font-semibold">
                            <p class="tuto">Les attaques aériennes, ça dit quoi ? Tu t'en sens capable ou c'est
                                encore
                                une notion sur laquelle tu souhaites progresser ?</p>
                        </div>
                        <img class="size-20 absolute -bottom-10 right-0" src="/images/avatar.png">
                    </div>

                    <div class="mt-12 bg-gray-100 rounded-2xl border border-violet-100 p-3 flex flex-col items-center">
                        <div class="flex flex-col items-center my-8">
                            <h2>Attaque aerienne</h2>
                            {{-- <x-starrating name="attaque_aerienne" stat="{{ $stat->attaque_aerienne ?? 0 }}" /> --}}
                            <x-crashtest value="16" />
                        </div>
                        <button
                            class="bg-white w-full py-4 rounded-full font-black text-sm outline outline-2 outline-offset-4 outiline-[#a632db] text-purple-600"
                            type="submit">Generer profil</button>
                    </div>
                </div>
                -->
            </form>
        </div>


</x-app-layout>

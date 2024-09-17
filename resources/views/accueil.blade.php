<x-app-layout>
    <div class="mx-8 my-8">
        <div class="flex flex-row space-x-24 items-center">
            <h1 class="text-2xl">Mes domaines</h1>
            <div
                class="flex flex-row items-center bg-violet-100 rounded outline outline-1 outline-offset-2 outline-[#a632db] text-custom-violet w-14 h-6 gap-1 pr-2 pl-2">
                <x-diamond />
                <p class="text-sm font-bold">50</p>
            </div>
        </div>
        <div class="flex items-center pt-5">
            <h2 class="text-base mb-2">Ce que je dois travailler en priorité</h2>
            <hr class="flex-grow border-t-1 border-gray-300 ml-2">
            @if(auth()->user()->role === 'admin')
                <div class="flex align-center -mt-3 ml-2">
                    <a href="{{ route('create') }}" class="bg-gradient-to-r from-violet-700 via-purple-700 to-fuchsia-800 text-white px-2 rounded-full text-xl">+</a>
                </div>
                @endif
        </div>

    </div>

    <!-- resources/views/accueil.blade.php -->

    <!-- SCROLL HORIZONTAL -->
    <div class="relative overflow-hidden ml-8">
        <!-- Conteneur des éléments avec scroll horizontal -->
        <div class="flex overflow-x-auto">
            @foreach ($topThree as $stat)
                <!-- Partie correspondante à un domaine -->
                <div
                    class="relative w-11/12 flex-shrink-0 @if (!$loop->first) ml-4 @endif @if ($loop->last) mr-8 @endif">
                    <!-- Tester w-full -->
                    <div class="relative">
                        <img class="w-full h-48 object-cover rounded-2xl" src="/images/minia.jpg">
                        <span
                            class="absolute top-4 left-4 bg-gray-200 outline outline-2 outline-offset-2 outline-gray-200 text-black text-xs font-bold px-2 py-1 rounded">Difficile</span>
                    </div>

                    <div
                        class="relative -mt-10 bg-gradient-to-r from-violet-700 via-purple-700 to-fuchsia-800 text-white p-3 flex items-center justify-between mx-4 rounded-3xl z-10">
                        <div>
                            <h3 class="text-base font-semibold">{{ ucfirst($domains[$stat->domaine_id]->name) }}</h3>
                            <div class="flex items-center text-sm mt-1">
                                <svg class="w-4 h-4 mr-1 -mt-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.35 4.148a1 1 0 00.95.69h4.384c.969 0 1.371 1.24.588 1.81l-3.548 2.577a1 1 0 00-.364 1.118l1.35 4.148c.3.922-.755 1.688-1.54 1.118l-3.548-2.577a1 1 0 00-1.176 0l-3.548 2.577c-.785.57-1.84-.196-1.54-1.118l1.35-4.148a1 1 0 00-.364-1.118L2.537 9.575c-.783-.57-.38-1.81.588-1.81h4.384a1 1 0 00.95-.69l1.35-4.148z">
                                    </path>
                                </svg>
                                <span>{{ $stat->note }}</span>
                                <span class="mx-2">•</span>
                                <span>{{ $trainingsCount[$stat->domaine_id] ?? 0 }} vidéos</span>
                            </div>
                        </div>
                        <button class="bg-white text-black text-sm font-semibold px-2 py-1 rounded-xl shadow ml-3">
                            <a href="{{ route('domaine.show', ['id' => $stat->domaine_id]) }}">Commencer</a>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>








    <div class="mx-8">
        <div class="flex items-center pt-5">
            <h2 class="text-base mb-2">Pas encore visionné</h2>
            <hr class="flex-grow border-t-1 border-gray-300 ml-2">
        </div>
        <div class="grid gap-y-2">
            @foreach ($others as $stat)
                <a href="{{ route('domaine.show', ['id' => $stat->domaine_id]) }}" 
                   class="max-w-sm bg-violet-50 rounded-lg border-solid border border-gray-300 p-2 flex items-center justify-between @if ($loop->last) mb-24 @endif">
                    <div>
                        <h3 class="text-lg font-semibold">{{ ucfirst($domains[$stat->domaine_id]->name) }}</h3>
                        <div class="flex items-center text-gray-500 text-sm mt-2">
                            <svg class="w-4 h-4 mr-1 mb-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.35 4.148a1 1 0 00.95.69h4.384c.969 0 1.371 1.24.588 1.81l-3.548 2.577a1 1 0 00-.364 1.118l1.35 4.148c.3.922-.755 1.688-1.54 1.118l-3.548-2.577a1 1 0 00-1.176 0l-3.548 2.577c-.785.57-1.84-.196-1.54-1.118l1.35-4.148a1 1 0 00-.364-1.118L2.537 9.575c-.783-.57-.38-1.81.588-1.81h4.384a1 1 0 00.95-.69l1.35-4.148z">
                                </path>
                            </svg>
                            <span>{{ $stat->note }}</span>
                            <span class="mx-2">•</span>
                            <span>8 min</span>
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <svg class="mb-1 transform translate-x-2" fill="#a632db" height="22px" width="22px"
                            viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke="#a632db" stroke-width="2">
                            <path id="Diamond"
                                d="M63.6870499,18.5730648L48.7831497,4.278266c-0.1855011-0.1758003-0.4316025-0.4813001-0.6870003-0.4813001 H15.9037514c-0.2553005,0-0.5014,0.3054998-0.6870003,0.4813001l-14.9038,14.1908998 c-0.374,0.3535004-0.4184,0.9855995-0.1025,1.3917999c0.21,0.2703991,30.8237991,39.7256012,31.0517006,39.9812012 c0.1022987,0.1149979,0.2402992,0.2215996,0.3428001,0.266098c0.2763996,0.1206017,0.5077,0.1296997,0.7900982,0.0065002 c0.1025009-0.0444984,0.2404022-0.1348991,0.3428001-0.2499008c0.0151024-0.0168991,0.0377007-0.0224991,0.0517006-0.0404968 L63.789547,19.9121666C64.1054459,19.5058651,64.0610504,18.9265652,63.6870499,18.5730648z M15.6273508,6.4344659 l4.9945002,11.3625011H3.6061509L15.6273508,6.4344659z M24.0795517,17.7969666l7.9203987-11.2617006l7.9204979,11.2617006 H24.0795517z M40.7191467,19.7969666l-8.7191963,34.8769989l-8.719099-34.8769989H40.7191467z M33.9257507,5.7969656h12.5423012 l-4.8240013,10.9746008L33.9257507,5.7969656z M22.3559513,16.7715664L17.53195,5.7969656h12.5423012L22.3559513,16.7715664z M21.2191505,19.7969666l8.6596012,34.638401L2.975451,19.7969666H21.2191505z M42.7808495,19.7969666h18.2436981 l-26.9032974,34.638401L42.7808495,19.7969666z M43.3781471,17.7969666l4.9944992-11.3625011l12.0212021,11.3625011H43.3781471z">
                            </path>
                        </svg>
                        <p class="text-sm font-bold text-custom-violet ml-2">+ 50 XP</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

</x-app-layout>

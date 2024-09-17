<x-app-layout>
    <div class="w- w-full h-screen bg-gradient-to-tl from-violet-800 via-purple-800 to-fuchsia-600">
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
                <h1 class="uppercase">BRAVO {{ auth()->user()->name }}</h1>
                <h3>tu es donc...</h3>
                <h2 class="uppercase">{{ $profile->name }}</h2>
                <div class="w-60 h-80 flex items-center justify-center">
                    <img class="w-full h-full object-cover" src="{{ asset($profile->image) }}" alt="Profil Image">
                </div>
                <h3 class="mb-2">Tu viens d'obtenir</h3>

            </div>
            <div class=" flex flex-col items-center gap-7">
                <button
                    class="bg-transparent flex flex-row justify-center items-center gap-3	 w-full	 py-4 rounded font-black text-sm outline outline-2 outline-[#af30af] text-white"
                    type="button">+5 Diamants <svg class="size-6 " fill="#ffffff" height="200px" width="200px"
                        version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64"
                        xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path id="Diamond"
                                d="M63.6870499,18.5730648L48.7831497,4.278266c-0.1855011-0.1758003-0.4316025-0.4813001-0.6870003-0.4813001 H15.9037514c-0.2553005,0-0.5014,0.3054998-0.6870003,0.4813001l-14.9038,14.1908998 c-0.374,0.3535004-0.4184,0.9855995-0.1025,1.3917999c0.21,0.2703991,30.8237991,39.7256012,31.0517006,39.9812012 c0.1022987,0.1149979,0.2402992,0.2215996,0.3428001,0.266098c0.2763996,0.1206017,0.5077,0.1296997,0.7900982,0.0065002 c0.1025009-0.0444984,0.2404022-0.1348991,0.3428001-0.2499008c0.0151024-0.0168991,0.0377007-0.0224991,0.0517006-0.0404968 L63.789547,19.9121666C64.1054459,19.5058651,64.0610504,18.9265652,63.6870499,18.5730648z M15.6273508,6.4344659 l4.9945002,11.3625011H3.6061509L15.6273508,6.4344659z M24.0795517,17.7969666l7.9203987-11.2617006l7.9204979,11.2617006 H24.0795517z M40.7191467,19.7969666l-8.7191963,34.8769989l-8.719099-34.8769989H40.7191467z M33.9257507,5.7969656h12.5423012 l-4.8240013,10.9746008L33.9257507,5.7969656z M22.3559513,16.7715664L17.53195,5.7969656h12.5423012L22.3559513,16.7715664z M21.2191505,19.7969666l8.6596012,34.638401L2.975451,19.7969666H21.2191505z M42.7808495,19.7969666h18.2436981 l-26.9032974,34.638401L42.7808495,19.7969666z M43.3781471,17.7969666l4.9944992-11.3625011l12.0212021,11.3625011H43.3781471z">
                            </path>
                        </g>
                    </svg></button>
                <a href="{{ route('choix') }}"
                    class="bg-white w-full py-4 rounded-full font-black text-sm outline outline-2 outline-offset-4 outline-[#a632db] text-purple-600 text-center">
                    Découvrir l'application
                </a>
            </div>
            </form>
        </div>
</x-app-layout>

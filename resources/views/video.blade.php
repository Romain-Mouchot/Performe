<x-app-layout>
    <div class="relative mx-8 my-8">
        
        <a href="{{ route('domaine.show', ['id' => $domaine->id]) }}" class="inline-block">
            <svg class="ml-4 w-6 h-6 text-gray-700 hover:text-gray-900 transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" />
            </svg>
        </a>

        
        <div class="relative ">
            <iframe class="w-full h-[90vh] rounded-lg" id="youtube-video" class="absolute top-0 left-0 w-full h-full" 
                    src="{{ $entrainement->link }}"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
            </iframe>
        </div>
    </div>
</x-app-layout>

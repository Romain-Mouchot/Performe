<x-app-layout>
    <div class="mx-8 my-8">
        <a href="{{ route('accueil') }}">
            <svg class="size-6 ml-4 mb-9" id="back-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" />
            </svg></a>
    
            <div class="flex flex-row items-center">
                <h1 class="text-2xl pb-3">Ajouter un entraînement</h1>
                <!-- Vérifier si l'utilisateur est admin -->
                    
    
            </div>

    <form action="{{ route('store') }}" method="post">
        @method ('POST')
        @csrf

        
        <div class="left mb-4">
            <label for="domaine_id">Choisissez un domaine</label>
            <select class="bg-violet-50 rounded-lg border-solid border border-gray-300" name="domaine_id">
                <option value="">Choisissez un domaine</option>
                @foreach ($domaines as $domaine)
                    <option value="{{ $domaine->id }}">{{ $domaine->name }}</option>
                @endforeach
            </select>
        </div>

       
        <div class="flex flex-col mb-4">
            <label for="link">Lien de la vidéo</label>
            <p>(Ajouter &autoplay=1 à la fin de cette URL)</p>
            <input class="bg-violet-50 rounded-lg border-solid border border-gray-300" type="text" name="link" required />
        </div>

        
        <div class="flex flex-col mb-4">
            <label for="titre">Titre de l'entraînement</label>
            <input class="bg-violet-50 rounded-lg border-solid border border-gray-300" type="text" name="title" required />
        </div>

        
        <div class="flex flex-col mb-4">
            <label for="durée">Durée de la vidéo</label>
            <input class="bg-violet-50 rounded-lg border-solid border border-gray-300" type="text" name="durée" required />
        </div>

        
        <div class="flex flex-col mb-6">
            <label for="difficulte">Choisissez la difficulté</label>
            <select class="bg-violet-50 rounded-lg border-solid border border-gray-300" name="difficulte">
                <option value="Facile">Facile</option>
                <option value="Moyen">Moyen</option>
                <option value="Difficile">Difficile</option>
            </select>
        </div>

        
        <div class="flex justify-evenly">
            <button class="bg-white w-24 h-6 rounded-full font-black text-sm outline outline-2 outline-offset-4 outiline-[#a632db] text-purple-600" type="button"><a href="{{ route('accueil') }}">Cancel</a></button>
            <button class="bg-white w-24 h-6 rounded-full font-black text-sm outline outline-2 outline-offset-4 outiline-[#a632db] text-purple-600" type="submit">Create</button>
        </div>
    </form>
    </div>
</x-app-layout>

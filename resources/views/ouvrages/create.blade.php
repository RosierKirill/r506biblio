<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ouvrages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-lg font-medium text-gray-900">Nouvel usager</h2>
                    @if(session('status'))
                        <p class="mt-1 text-sm text-gray-600">
                            {{ session('status') }}
                        </p>
                    @endif

                    <form action="{{ route('ouvrages.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="titre">
                                Titre
                            </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="titre" name="titre" type="text" value="{{ old('titre') }}" required="required" autofocus="autofocus" autocomplete="titre">
                            @error('titre')
                                <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="auteur">
                                Auteur
                            </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="auteur" name="auteur" type="text" value="{{ old('auteur') }}" required="required" autocomplete="auteur">
                            @error('auteur')
                                <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="editeur">
                                Editeur
                            </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="editeur" name="editeur" type="text" value="{{ old('editeur') }}" required="required" autocomplete="editeur">
                            @error('editeur')
                                <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="publication">
                                Publication
                            </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="publication" name="publication" type="date" value="{{ old('images') }}" required="required" autocomplete="publication">
                            @error('publication')
                                <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
                                                <div>
                            <label class="block font-medium text-sm text-gray-700" for="images">
                                Image
                            </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="images" name="images" type="file" value="{{ old('images') }}" required="required" autocomplete="images">
                            @error('images')
                                <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
                        <button type="submit" class="inline-flex items-right px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest" style="margin-top:20px;background-color:#3B71CA;">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="inline-flex items-right px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest" href="{{ route('ouvrages.index') }}">
                Retour
            </a>
        </div>
    </div>
</x-app-layout>

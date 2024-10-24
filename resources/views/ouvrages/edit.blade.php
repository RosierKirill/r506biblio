<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h2 class="text-lg font-medium text-gray-900">Compte ouvrage</h2>
                @if(session('status'))
                    <p class="mt-1 text-sm text-gray-600">
                        {{ session('status') }}
                    </p>
                @endif

                <form action="{{ route('ouvrages.update', $ouvrage->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    

                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="id">
                                Identifiant
                            </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="id" name="id" type="text" value="{{ old('id') }}" required="required" autofocus="autofocus" autocomplete="id">
                            @error('id')
                                <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
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
                            <label class="block font-medium text-sm text-gray-700" for="isbn">
                                Isbn
                            </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="isbn" name="isbn" type="text" value="{{ old('isbn') }}" required="required" autocomplete="isbn">
                            @error('isbn')
                                <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="pages">
                                Pages
                            </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="pages" name="pages" type="text" value="{{ old('pages') }}" required="required" autocomplete="pages">
                            @error('pages')
                                <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="publication">
                                Publication
                            </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="publication" name="publication" type="text" value="{{ old('publication') }}" required="required" autocomplete="publication">
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

<a href="{{ route('ouvrages.index') }}" class="text-sm text-gray-600 hover:underline">Retour</a>

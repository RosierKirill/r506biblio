<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usagers') }}
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

                    <form action="{{ route('usagers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="nom">
                                Nom
                            </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="nom" name="nom" type="text" value="{{ old('nom') }}" required="required" autofocus="autofocus" autocomplete="nom">
                            @error('nom')
                                <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="prenom">
                                Prénom
                            </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="prenom" name="prenom" type="text" value="{{ old('prenom') }}" required="required" autocomplete="prenom">
                            @error('prenom')
                                <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="identifiant">
                                Identifiant
                            </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="identifiant" name="identifiant" type="text" value="{{ old('identifiant') }}" required="required" autocomplete="identifiant">
                            @error('identifiant')
                                <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="email">
                                Adresse mail
                            </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="email" name="email" type="email" value="{{ old('email') }}" required="required" autocomplete="email">
                            @error('email')
                                <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="password">
                                Mot de passe
                            </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="password" name="password" type="password" required="required" autocomplete="new-password">
                            @error('password')
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
            <a class="inline-flex items-right px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest" href="{{ route('usagers.index') }}">
                Retour
            </a>
        </div>
    </div>
</x-app-layout>

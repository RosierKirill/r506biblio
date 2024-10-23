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
                    <h2 class="text-lg font-medium text-gray-900">Ouvrages</h2>
                    @if ($message = Session::get('success'))
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $message }}
                        </p>
                    @endif
                    
                    <table class="min-w-full text-left text-sm font-light" style="width:100%;margin-bottom:20px;">
                        <thead class="border-b font-medium">
                            <tr>
                                <th scope="col" class="px-6 py-4">Identifiant</th>
                                <th scope="col" class="px-6 py-4">Titre</th>
                                <th scope="col" class="px-6 py-4">Auteur</th>
                                <th scope="col" class="px-6 py-4">Editeur</th>
                                <th scope="col" class="px-6 py-4">Isbn</th>
                                <th scope="col" class="px-6 py-4">Pages</th>
                                <th scope="col" class="px-6 py-4">Publication</th>
                                <th scope="col" class="px-6 py-4">Image</th>
                                <th scope="col" class="px-6 py-4">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ouvrages as $ouvrage)
                                <tr class="border-b">
                                    <td class="whitespace-nowrap px-6 py-4">{{ $ouvrage->id }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $ouvrage->titre }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $ouvrage->auteur }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $ouvrage->editeur }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $ouvrage->isbn }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $ouvrage->pages }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $ouvrage->publication }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $ouvrage->image }}</td>
                                    <td class="whitespace-nowrap px-6 py-4" style="text-align:right;">
                                        <form action="{{ route('ouvrages.destroy', $ouvrage->id) }}" method="POST" style="display:inline;">
                                            <a class="px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest" style="background-color:#3B71CA;" href="{{ route('ouvrages.edit', $ouvrage->id) }}">Modifier</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-4 py-2 bg-danger border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest" style="background-color:#DC4C64;">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
        
                    {!! $ouvrages->links() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="inline-flex items-right px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest" href="{{ route('ouvrages.create') }}">
                Nouvel ouvrage
            </a>
        </div>
    </div>

</x-app-layout>

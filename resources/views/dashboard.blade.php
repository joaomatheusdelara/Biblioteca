<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                @foreach ($livros as $livro)
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden">
                        @if($livro->foto)
                            <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $livro->foto) }}" alt="{{ $livro->titulo }}">
                        @else
                            <img class="w-full h-48 object-cover" src="/images/default-book-cover.jpg" alt="Sem imagem">
                        @endif
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">{{ $livro->titulo }}</h3>
                            <p class="text-gray-600 dark:text-gray-300">{{ $livro->autor }}</p>
                            <div class="mt-2">
                                <a href="{{ route('livros.edit', $livro->id) }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">
                                    Editar
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

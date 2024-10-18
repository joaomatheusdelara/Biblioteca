@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Adicionar Novo Livro</h1>

                    <form action="{{ route('livros.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
                            <input type="text" name="titulo" id="titulo" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                        </div>

                        <div class="mb-4">
                            <label for="autor" class="block text-sm font-medium text-gray-700">Autor</label>
                            <input type="text" name="autor" id="autor" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                        </div>

                        <div class="mb-4">
                            <label for="isbn" class="block text-sm font-medium text-gray-700">ISBN</label>
                            <input type="text" name="isbn" id="isbn" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                        </div>

                        <div class="mb-4">
                            <label for="editora" class="block text-sm font-medium text-gray-700">Editora</label>
                            <input type="text" name="editora" id="editora" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                        </div>

                        <div class="mb-4">
                            <label for="ano_publicacao" class="block text-sm font-medium text-gray-700">Ano de Publicação</label>
                            <input type="number" name="ano_publicacao" id="ano_publicacao" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                        </div>

                        <div class="mb-4">
                            <label for="foto" class="block text-sm font-medium text-gray-700">Capa do Livro (Imagem)</label>
                            <input type="file" name="foto" id="foto" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" accept="image/*">
                        </div>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Adicionar Livro</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

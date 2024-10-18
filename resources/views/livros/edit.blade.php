@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="py-6">
        <h1 class="text-2xl font-bold mb-4">Editar Livro</h1>

        <form action="{{ route('livros.update', $livro->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="titulo" class="block text-gray-700">Título:</label>
                <input type="text" name="titulo" id="titulo" value="{{ $livro->titulo }}" class="w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label for="autor" class="block text-gray-700">Autor:</label>
                <input type="text" name="autor" id="autor" value="{{ $livro->autor }}" class="w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label for="isbn" class="block text-gray-700">ISBN:</label>
                <input type="text" name="isbn" id="isbn" value="{{ $livro->isbn }}" class="w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label for="editora" class="block text-gray-700">Editora:</label>
                <input type="text" name="editora" id="editora" value="{{ $livro->editora }}" class="w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label for="ano_publicacao" class="block text-gray-700">Ano de Publicação:</label>
                <input type="number" name="ano_publicacao" id="ano_publicacao" value="{{ $livro->ano_publicacao }}" class="w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label for="foto" class="block text-gray-700">Foto (opcional):</label>
                <input type="file" name="foto" id="foto" class="w-full border rounded">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Salvar Alterações</button>
        </form>
    </div>
</div>
@endsection

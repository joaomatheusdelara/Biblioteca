<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;

class LivroController extends Controller
{
    public function index()
    {
        $livros = livros::paginate(10);
        return view('livros.index', compact('livros'));
    }

   // Exibir o formulário de criação
public function create() {
    return view('livros.create');
}

// Processar o formulário e salvar no banco de dados
public function store(Request $request) {
    // Validação dos dados
    $request->validate([
        'titulo' => 'required',
        'autor' => 'required',
        'isbn' => 'required|unique:livros',
        'editora' => 'required',
        'ano_publicacao' => 'required|numeric',
        'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Criação de novo livro
    $livro = new Livros();
    $livro->titulo = $request->titulo;
    $livro->autor = $request->autor;
    $livro->isbn = $request->isbn;
    $livro->editora = $request->editora;
    $livro->ano_publicacao = $request->ano_publicacao;

    // Se houver uma imagem de capa
    if ($request->hasFile('foto')) {
        $imageName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('images'), $imageName);
        $livro->foto = $imageName;
    }

    $livro->save();

    return redirect()->route('livros.index')->with('success', 'Livro adicionado com sucesso!');
}
// Exibir o formulário de edição
public function edit($id) {
    $livro = Livros::findOrFail($id);
    return view('livros.edit', compact('livro'));
}

// Processar a atualização
public function update(Request $request, $id) {
    $request->validate([
        'titulo' => 'required',
        'autor' => 'required',
        'isbn' => 'required|unique:livros,isbn,'.$id,
        'editora' => 'required',
        'ano_publicacao' => 'required|numeric',
        'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $livro = Livros::findOrFail($id);
    $livro->titulo = $request->titulo;
    $livro->autor = $request->autor;
    $livro->isbn = $request->isbn;
    $livro->editora = $request->editora;
    $livro->ano_publicacao = $request->ano_publicacao;

    if ($request->hasFile('foto')) {
        $imageName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('images'), $imageName);
        $livro->foto = $imageName;
    }

    $livro->save();

    return redirect()->route('livros.index')->with('success', 'Livro atualizado com sucesso!');
}
public function destroy($id) {
    $livro = Livros::findOrFail($id);
    $livro->delete();

    return redirect()->route('livros.index')->with('success', 'Livro removido com sucesso!');
}

    public function painel()
{
    $livros = Livros::all(); // Pega todos os livros
    return view('dashboard', compact('livros')); // Passa os livros para a view
}



}

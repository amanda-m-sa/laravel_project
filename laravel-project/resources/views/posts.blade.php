@extends('layouts.app')
@section('title', 'Listagem de Posts')
@section('header', 'Gerenciando Postagens')
@section('content')

<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">Novo post</a>
    @foreach ($posts as $post)
        <h2>#{{ $post['id'] }} {{ $post['title'] }} - 
            <a href="{{ route('posts.edit', ['post' => $post['id']]) }}">editar</a>
            <form action="{{ route('posts.destroy', ['post' => $post['id']]) }}" method="post">
                @csrf 
                @method('delete')
                <input type="submit" value="excluir">
            </form>
        </h2>
    @endforeach
</div>

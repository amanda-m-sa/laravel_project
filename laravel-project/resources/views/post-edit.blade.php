<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
     <h1>Atualizando Post</h1>
     <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" id="title" placeholder="Título" value="{{ $post['title'] }}"/>
        <br/><br/>
        <textarea name="content" id="content" placeholder="Conteúdo">{{ $post['content'] }}
        </textarea><br/><br/>
        <button type="submit">Salvar Post</button>
    </form>
</div>

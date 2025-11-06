<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    <h1>Novo Post</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <input type="text" name="title" id="title" placeholder="Título"/><br/><br/>
        <textarea name="content" id="content" placeholder="Conteúdo"></textarea>
        <br/><br/>
        <button type="submit">Criar Post</button>
    </form>
</div>

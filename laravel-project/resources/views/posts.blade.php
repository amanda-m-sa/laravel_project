<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">Novo post</a>
    @foreach ($posts as $post)
     <h2>#{{ $post['id'] }} {{ $post['title'] }} - 
        

</div>

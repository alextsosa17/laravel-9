<x-layouts.app 
:title="'Blog'" 
:meta-description="'Blog-description'">
    <h1>Blog</h1>
    {{--  @dump($posts);  --}}
    @foreach($posts as $post)
       <h2>
       
       <a href="/blog/{{$post->id}}"> {{$post->title}} </a>
        </h2> 
    
    @endforeach  
</x-layouts.app> 
   
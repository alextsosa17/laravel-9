<x-layouts.app 
:title="'Blog'" 
:meta-description="'Blog-description'">
    <h1>Blog</h1>
    @dump($posts);
    {{--  @foreach($posts as $post)  --}}
     {{--  {{$post['title']}}   --}}
    {{--  @endforeach    --}}
</x-layouts.app>

@foreach ( $posts as $post )
<div class="mt-4">
    <a href="#" class="text-lg font-semibold">{{$post->user->name}}</a>
    <p class="mt-1 text-xs">
        <em>
            {{$post->created_at->diffForHumans()}}
        </em>
        <br>
        {{ $post->body }}
    </p>
</div>
@endforeach

<div class="mt-4">
    {{ $posts->links() }}
</div>
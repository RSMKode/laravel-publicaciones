<a href="#" class="text-lg font-semibold">{{$post->user->name}}</a>
<p class="mt-1 text-xs">
    {{ $post->body }}
    <br>
    <em class="text-gray-400">
        {{$post->created_at->diffForHumans()}}
    </em>
</p>

@can('delete', $post)
<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button class="text-indigo-600 text-xs">{{__('Delete')}}</button>
</form>
@endcan
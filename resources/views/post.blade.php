<x-layout>




    <ol class="list-group list-group">
            <li class="list-group-item">
                <article>
                    <h1>{{ $post->title }}</h1>     <!-- Escape and use blade -->
                    <p>
                        By <a href="#">{{ $post->user->name }}</a> in {{ $post->category->name }}</a>
                    </p>
                    <div>
                        {!! $post->body !!}         <!-- Not escape just use blade -->
                    </div>
                </article>

                <a href="/post" class="btn btn-primary">Go back</a>
            </li>
    </ol>
</x-layout>

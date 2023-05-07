<x-layout>
    <ol class="list-group list-group">
        @foreach ($posts as $post)
            <li class="list-group-item">
                <article>
                    <h1>
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>

                    <p>
                       {{ $post->category->name }}
                    </p>
                    <div>
                        {{ $post->excerpt }}
                    </div>
                </article>
            </li>
        @endforeach
    </ol>
</x-layout>

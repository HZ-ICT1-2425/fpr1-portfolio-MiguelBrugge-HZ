<x-layout.main>
    <section class="blog-post page">
        <a class="post-return-link position-absolute mt-5" href="{{ route('posts.index') }}">
            <button class="ghost-button fw-bold rounded-3 px-5 py-2 border-none">
                <p class="m-0">&lt;- Blog</p>
            </button>
        </a>
        <article>
            <h1>{{ $post->title }}</h1>
            <br>
            <div class="row justify-content-between w-100 position-relative">
                <div class="col-md-7">
                    <p>{!! $post->body !!}</p>
                    <br>
                    @if($post->link != '')
                        <a href="{{ $post->link }}" target="_blank" class="d-block position-absolute bottom-0">
                            <button class="button fw-bold rounded-pill px-5 py-2 border-3">{{ $post->link_title }}</button>
                        </a>
                    @endif
                </div>
                @if($post->image_path != '')
                    <img class="col-md-5 rounded-3 p-0" src="{{ asset($post->image_path) }}"
                         alt="Monitor's with code open" height="400">
                @endif
            </div>
        </article>
    </section>
    </x-layout.main>

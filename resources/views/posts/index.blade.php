<x-layout.main>
    <section id="blog">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Recent blog posts</h1>
            <x-ui.button :link="route('posts.create')" class="text-dark">
                Create Post
            </x-ui.button>
        </div>
        <br>
        <section id="blog-posts" class="row justify-content-between d-flex p-0">
            <x-ui.alert/>
            @foreach($posts as $post)
                <x-ui.blog-item :post="$post"/>
            @endforeach
            @if($posts->isEmpty())
                This blog is empty
            @endif
        </section>
    </section>
</x-layout.main>

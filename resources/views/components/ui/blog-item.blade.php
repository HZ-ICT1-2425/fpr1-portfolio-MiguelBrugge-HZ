<div onclick="window.location.href='{{ route('posts.show', $post) }}'"
        class="blog-item col-md-6 p-2 rounded-3 text-start d-flex flex-column gap-2">
    <div class="d-flex align-items-center gap-3 w-100">
        <img class="rounded-3" src="{{ asset($post->icon_path) }}" alt="Image" width="50">
        <h4 class="text-white">{{ $post->title }}</h4>
        <x-ui.action-buttons :editRoute="route('posts.edit', $post)" :deleteRoute="route('posts.delete', $post)" itemName="Blog post" :itemDescription="$post->title" class="py-3 ms-auto mb-auto" :itemId="$post->id"/>
    </div>
    <div class="w-100">
        <p class="m-0 text-secondary text-wrap">
            @php
            // Only display max 30 words
            $maxWordCount = 30;
            $words = explode(" ",$post->body);
            for($i = 0; $i < $maxWordCount; $i++){
                if($i < count($words) - 1){
                    echo "$words[$i] ";
                }else{
                    break;
                }
            }
            @endphp
        </p>
        <a class="text-secondary" href="">Read more..</a>
    </div>
</div>


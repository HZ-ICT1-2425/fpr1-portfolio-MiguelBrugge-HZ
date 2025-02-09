<button onclick="window.location.href={{ $link }};"
        class="col-md-6 p-2 rounded-3 text-start d-flex flex-column gap-2">
    <div class="d-flex align-items-center gap-3">
        <img class="rounded-3" src="{{ asset('images/' . $image) }}" alt="HZ logo" width="50">
        <h4 class="text-white">{{ $title }}</h4>
    </div>
    <div class="w-100">
        <p class="m-0 text-secondary text-wrap">
            {{ $description }}
        </p>
        <a class="text-secondary" href="">Read more..</a>
    </div>
</button>

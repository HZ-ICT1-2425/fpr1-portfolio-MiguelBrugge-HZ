<nav class="py-3 d-flex justify-content-between align-items-center position-fixed w-100">
    <a href={{ route('home') }}>
        <button class="d-flex gap-2 align-items-center rounded-3 p-1">
            <img class="rounded-pill" src={{ asset('images/profile-picture.png') }} alt="Miguel's profile picture" width="40">
            <p class="m-0">Miguel Brugge</p>
        </button>
    </a>
    <ul class="list-unstyled d-flex gap-5 m-0">
        <x-ui.nav-item route="home">
            Home
        </x-ui.nav-item>
        <x-ui.nav-item route="profile">
            Profile
        </x-ui.nav-item>
        <x-ui.nav-item route="dashboard">
            Dashboard
        </x-ui.nav-item>
        <x-ui.nav-item route="faq">
            FAQ
        </x-ui.nav-item>
        <x-ui.nav-item route="blogs">
            Blogs
        </x-ui.nav-item>
    </ul>
</nav>

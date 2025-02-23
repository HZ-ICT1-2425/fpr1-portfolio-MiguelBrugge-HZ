<x-layout.main>
    <!-- Hero Section -->
    <section id="home" class="d-flex flex-column justify-content-center align-items-center gap-5">
        <h1 class="text-center">Why HBO-ICT is my pathway <br> to success</h1>
        <h3 class="fw-light">Exploring My Passion for Technology and Innovation</h3>
        <div id="cta" class="d-flex justify-content-center gap-4">
            <x-ui.button :link="route('posts.index')" ghostButton>
                Blog
            </x-ui.button>
            <x-ui.button :link="route('profile')">
                My Profile
            </x-ui.button>
        </div>
    </section>
    <!-- Educations -->
    <section id="content" class="row justify-content-between pb-5">
        <article class="col-lg-6 d-flex gap-3 flex-column align-items-start ">
            <img class="rounded-3" src="{{ asset('images/scalda-flag.png') }}" alt="Flag with Scalda on it">
            <h3>My former education</h3>
            <div>
                <p>
                    In my previous education, I completed a level 4 software development program at Scalda in
                    Vlissingen. I'm eager to continue developing my skills in this field.
                    <br>
                    What i liked about coding:
                </p>
                <ul class="text-start">
                    <li>Problem solving using code</li>
                    <li>Working together with others</li>
                    <li>Learning new IT skills</li>
                    <li>Improving my coding</li>
                    <li>Making an impact</li>
                </ul>
            </div>
        </article>
        <article class="col-lg-6 d-flex gap-3 flex-column align-items-start">
            <img class="rounded-3" src="{{ asset('images/hz-building.png') }}" alt="The building of HZ">
            <h3>HZ HBO-ICT</h3>
            <p>
                I am continuing my journey by pursuing an HBO-ICT program at HZ University. This program allows me
                to further enhance my programming skills, deepen my understanding of software development, and stay
                updated with the latest advancements in the tech industry. I'm excited to keep growing in this field
                and develop more advanced solutions through coding.</p>
        </article>
    </section>
</x-layout.main>

<x-layout.main>
    <section id="profile" class="page row align-items-center justify-content-between">
        <article class="col-md-6">
            <h1>Profile</h1><br>
            <p>
                I am Miguel and I am 20 years old. I live in Zeeland. My quality is that I work critically and I
                like to help others. I go to school to become a Software Developer. I chose this path because I
                really like to code.
            </p>
            <p>
                My end goal is to become a real Software developer and be able to create whatever I want or need to.
                My main hobbies are gaming and watching films.
            </p>
            <ul>
                <li>Hardworking</li>
                <li>Team player</li>
                <li>Creative</li>
                <li>Detail-oriented</li>
                <li>Communicative</li>
            </ul>
            <x-ui.button link="https://github.com/MiguelBrugge-HZ" targetBlank>
                My Github
            </x-ui.button>
            <br><br>
        </article>
        <img class="col-md-5 rounded-3 p-0" src="{{ asset('images/profile-image.png') }}" alt="Miguel and his friends on a boat">
    </section>
</x-layout.main>

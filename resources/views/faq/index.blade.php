<x-layout.main>
    <section id="faq">
        <div class="d-flex justify-content-between mx-auto align-items-center">
            <h1 class="">Frequently asked questions</h1>
            <x-ui.button :link="route('faq.create')" class="px-3">
                Create FAQ
            </x-ui.button>
        </div>
        <br>
        <div id="questions-wrapper" class="d-flex flex-column gap-4 mx-auto mt-2">
            <x-ui.alert/>
            @foreach($faq as $faqItem)
                <x-ui.faq-item :faq="$faqItem">
                    {{ $faqItem->answer }}
                </x-ui.faq-item>
            @endforeach
            @if($faq->isEmpty())
                There are no FAQs
            @endif
        </div>
    </section>
</x-layout.main>

<div class="d-flex justify-content-between gap-3">
    <details class="rounded-3 p-2 w-100">
        <summary>{{ $faq->question }}</summary>
        <p class="m-0 mt-2">{{ $slot }}</p>
        <a href="{{ $faq->link ?? ''}}" target="_blank">{{ $faq->link_title ?? '' }}</a>
    </details>
    <x-ui.action-buttons :editRoute="route('faq.edit', $faq)" :deleteRoute="route('faq.delete', $faq)" itemName="FAQ" :itemDescription="$faq->question" :itemId="$faq->id"/>
</div>


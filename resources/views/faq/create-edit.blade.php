<x-layout.create-edit :action="$action" itemName="FAQ" :cancelRoute="route('faq.index')" :submitRoute="$action ? route('faq.update', $faq ?? '') : route('faq.create')">
    <x-ui.form-item field="question" fieldName="Question" :value="old('question', $faq->question ?? '')"/>
    <x-ui.form-item field="answer" fieldName="Answer" textarea :value="old('answer', $faq->answer ?? '')" required/>
    <x-ui.form-item field="link_title" fieldName="Link title" :value="old('link_title', $faq->link_title ?? '')"/>
    <x-ui.form-item field="link" fieldName="Link" :value="old('link', $faq->link ?? '')"/>
</x-layout.create-edit>


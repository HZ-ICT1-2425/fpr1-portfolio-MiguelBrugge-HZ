<x-layout.create-edit :action="$action" itemName="Blog Post" :cancelRoute="route('posts.index')" :submitRoute="$action ? route('posts.update', $post ?? '') : route('posts.create')">
    <x-ui.form-item field="title" fieldName="Title" :value="old('title', $post->title ?? '')" required/>
    <x-ui.form-item field="slug" fieldName="Slug" :value="old('slug', $post->slug ?? '')" required/>
    <x-ui.form-item field="body" fieldName="Body" :value="old('body', $post->body ?? '')" textarea required/>
    <x-ui.form-item field="link_title" fieldName="Link title" :value="old('link_title', $post->link_title ?? '')"/>
    <x-ui.form-item field="link" fieldName="Link" :value="old('link', $post->link ?? '')"/>
    <x-ui.form-item field="icon_path" fieldName="Post icon" :value="old('icon_path', $post->icon_path ?? '')" file/>
    <x-ui.form-item field="image_path" fieldName="Post image" :value="old('image_path', $post->image_path ?? '')" file/>
</x-layout.create-edit>


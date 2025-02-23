{{-- This is a way to define required and default properties without having to add
  -- an additional PHP class
  --}}
@props(['value' => '', 'name', 'height' => 400, 'field', 'fieldName', 'required'])

<div>
    {{-- Definition of the textarea that serves as the form input. CKEditor will hide this
      -- using JavaScript and adds the DOM structure for the editor --}}
    <textarea id="ckeditor-{{ $field }}" type="text" name="{{ $field }}" class="rounded px-3 py-2 w-100" @if($required ?? '') required @endif placeholder="{{ $fieldName }}" rows="{{ empty($value) ? 10 : count(explode(' ', $value)) / 10 }}">{!! $value !!}</textarea>
</div>

@push('scripts')
    {{-- External link to the CKEditor JavaScript --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script>
        {{-- This will hide the textarea and adds the editor DOM --}}
        ClassicEditor
            .create(document.querySelector('#ckeditor-{{ $field }}'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush

@push('styles')
    <style>
        {{-- Set the height of the editor --}}
        .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>
@endpush

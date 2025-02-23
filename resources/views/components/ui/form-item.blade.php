<div>
    <label for="{{ $field }}" class="mb-0 d-block fs-5 mb-1 form-label">@error($field) <i class="text-danger fa-solid fa-xmark fs-5 me-2"></i> @enderror{{ $fieldName }}</label>
    @if($textarea ?? '')
        <x-ui.wysiwyg field="{{ $field }}" required="{{ $required }}" fieldName="{{ $fieldName }}" value="{{ $value }}"></x-ui.wysiwyg>

{{--        <textarea id="{{ $field }}" type="text" name="{{ $field }}" class="rounded px-3 py-2 w-100" @if($required ?? '') required @endif placeholder="{{ $fieldName }}" rows="{{ empty($value) ? 10 : count(explode(' ', $value)) / 10 }}">{{ $value }}</textarea>--}}
    @elseif($file ?? '')
        <input id="{{ $field }}" type="file" name="{{ $field }}" class="form-control py-2 rounded w-100 text-white" @if($required ?? '') required @endif>
        @if($value)
            <img class="ms-auto mt-3" src="{{ asset($value) }}" height="100" alt="Image">
        @endif
    @else
        <input id="{{ $field }}" type="text" name="{{ $field }}" class="rounded px-3 py-2 w-100" value="{{ $value }}" @if($required ?? '') required @endif placeholder="{{ $fieldName }}">
    @endif
</div>


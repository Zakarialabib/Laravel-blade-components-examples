@props(['value'])

@php
    $editorId = 'medium-editor-' . uniqid();
    $wireModel = $attributes->wire('model')->value();
@endphp

<div wire:ignore>
    <div id="{{ $editorId }}" class="editable">{{ $value }}</div>
    <textarea style="display: none;" wire:model.lazy="{{ $wireModel }}">{{ $value }}</textarea>
</div>

@pushOnce('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/css/medium-editor.min.css"
        integrity="sha512-QUQ9f+O/FsPNfSV3HSCMq3FUpVqtb/5SFSjFMh8Jh3hL2z1yEJj7gdwBx83Zkq6fTJN9B8alzT1AM4iC5nFsNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endPushOnce

@pushOnce('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/js/medium-editor.min.js"
        integrity="sha512-kk+tSKtm3cnZ2xbrGS3kQwv6yUry0CFA8jjI1iHHn2bKlMTNV6JmHvwn5RiIc/WzWY+4u9URci0HP6D3z3p76A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endPushOnce

@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            const editor = new MediumEditor('#{{ $editorId }}', {
                toolbar: {
                    buttons: ['bold', 'italic', 'underline', 'anchor', 'h2', 'h3', 'quote']
                },
                paste: {
                    forcePlainText: false,
                    cleanPastedHTML: true,
                    cleanReplacements: [],
                    cleanAttrs: ['class', 'style', 'dir'],
                    cleanTags: ['meta'],
                    unwrapTags: []
                }
            });

            const textarea = document.querySelector('#{{ $editorId }} + textarea');
            const initialValue = textarea.value;

            editor.subscribe('editableInput', function (event, editable) {
                const content = editor.getContent();
                textarea.value = content;
                @this.set('{{ $wireModel }}', content);
            });

            Livewire.on('{{ $wireModel }}Updated', function (content) {
                editor.setContent(content);
                textarea.value = content;
            });

            Livewire.on('resetEditors', function () {
                editor.setContent(initialValue);
                textarea.value = initialValue;
            });
        });
    </script>
@endpush


<dialog class="image-dialog p-0" style="max-width: min(1024px, 90vw); max-height: 90vh;">
    <img class="max-w-full select-none" style="max-height: inherit">
</dialog>

@push('script')
    <script>
        document.addEventListener('click', e => {
            if(e.target && e.target.closest('[data-image-dialog]') && e.target.matches('img')) {
                document.querySelector('dialog img').src = e.target.src;
                document.querySelector('dialog').showModal();
            }
        });

        document.querySelector('dialog')
            .addEventListener('click', e => {
                if(e.target.matches('dialog')) {
                    e.target.close();
                }
            });
    </script>
@endpush

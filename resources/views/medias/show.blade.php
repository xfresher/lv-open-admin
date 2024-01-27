@push('scripts')
    {{-- This will be second... --}}
@endpush

@prepend('scripts')
    {{-- This will be first... --}}
@endprepend

<x-media-layout>
    <x-slot:title>
        Media detail
    </x-slot>

    {{ $item->title }}
</x-media-layout>

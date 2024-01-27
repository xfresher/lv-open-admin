<x-media-layout>
    <x-slot:title>
        Media detail
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <ul class="underline">
                        @foreach ($items as $item)
                            <li>
                                <a href="{{ route('medias.show', ['media' => $item->slug]) }}">{{ $item->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-media-layout>

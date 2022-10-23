<x-layout>
    <div class="grid grid-cols-2 gap-5">
        @foreach ($data as $item)
            <div class="border-b">


                <a href="story/{{ $item['id'] }}" class="font-bold text-orange-500 underline hover:no-underline active:no-underline"><x-title :title="$item['title']" /></a><br>
                {{ $item['description'] }}
                <div class="font-bold text-gray-500 mb-5"><small>{{ $item['author'] }} - {{ date_format (new DateTime($item['post_date']), 'j F Y') }}</small></div>
            </div>
        @endforeach
    </div>
</x-layout>


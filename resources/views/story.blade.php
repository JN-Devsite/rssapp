<x-layout>
    <h2 class="font-bold text-orange-500 text-2xl"><x-title :title="$data['title']" /></h2>
    <div class="mb-3">
        <div id="permalink"><a href="{{ $data['permalink'] }}" target="_blank" class="font-bold text-gray-500 text-sm underline hover:no-underline active:no-underline">ARS Technica link</a></div>

        <div class="mt-2 font-bold text-gray-500 underline hover:no-underline active:no-underline"><a href="{{ url()->previous() }}">&lt;&lt; Back</a></div>
    </div>
    <hr class="border ">
    <div class="story-content my-5">
        {!! $data['content'] !!}
    </div>
    {{-- @dd($data) --}}
</x-layout>

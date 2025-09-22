<x-layouts.app>

    <x-slot:head>
        <meta name="robots" content="index, nofollow">
    </x-slot:head>

    <x-slot:breadcrumb>
        <li><a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/" alt="Manuals for '{{$brand->name}}'" title="Manuals for '{{$brand->name}}'">{{ $brand->name }}</a></li>
    </x-slot:breadcrumb>


    <h1>{{ $brand->name }}</h1>

    <p>{{ __('introduction_texts.type_list', ['brand'=>$brand->name]) }}</p>

    <h2>{{ __('misc.popular_manuals') }}:</h2>

<div class="manuals-ranking">
    @foreach ($top5Manuals as $manual)
    <div class="manual-ranked">
        <div>{{ $manual->name }}:</div> <div>{{$manual->views}} {{ __('misc.views')}}</div>
    </div>
    @endforeach
</div>

<div class="manuals-grid">
    @foreach ($manuals as $manual)

        @if ($manual->locally_available)
            <a class="manual-button" onclick="trackClick({{ $manual->id }})" href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/{{ $manual->id }}/" alt="{{ $manual->name }}" title="{{ $manual->name }}">{{ $manual->name }}</a>
            ({{$manual->filesize_human_readable}})
        @else
            <a class="manual-button" onclick="trackClick({{ $manual->id }})" href="{{ $manual->url }}" target="new" alt="{{ $manual->name }}" title="{{ $manual->name }}">{{ $manual->name }}</a>
    @endif
    @endforeach
</div>

    <script>
        function trackClick(id) {
            fetch("/addView/" + id, {
                method: "post",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                keepalive: true
            });
        }
    </script>
</x-layouts.app>

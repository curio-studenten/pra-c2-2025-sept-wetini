<x-layouts.app>

    <x-slot:head>
        <meta name="robots" content="index, nofollow">
    </x-slot:head>

    <x-slot:breadcrumb>
        <li><a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/" alt="Manuals for '{{$brand->name}}'" title="Manuals for '{{$brand->name}}'">{{ $brand->name }}</a></li>
    </x-slot:breadcrumb>


    <h1>{{ $brand->name }}</h1>

    <p>{{ __('introduction_texts.type_list', ['brand'=>$brand->name]) }}</p>


    @foreach ($manuals as $manual)

        @if ($manual->locally_available)
            <a onclick="trackClick({{ $manual->id }})" href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/{{ $manual->id }}/" alt="{{ $manual->name }}" title="{{ $manual->name }}">{{ $manual->name }}</a>
            ({{$manual->filesize_human_readable}})
        @else
            <a onclick="trackClick({{ $manual->id }})" href="{{ $manual->url }}" target="new" alt="{{ $manual->name }}" title="{{ $manual->name }}">{{ $manual->name }}</a>
    @endif

    <br />
    @endforeach
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

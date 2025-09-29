<x-layouts.app>

    <x-slot:head>
        <meta name="robots" content="index, nofollow">
    </x-slot:head>

    <h1>{{ $letter }}</h1>

    <ul>
        @foreach ($brands as $brand)
            @if (Str::startsWith($brand->name, $letter))
                <li>
                    <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/">{{ $brand->name }}</a>
                </li>
            @endif
        @endforeach
    </ul>
</x-layouts.app>

<x-layouts.app>

    <x-slot:introduction_text>
        <p><img src="img/afbl_logo.png" align="right" width="100" height="100">{{ __('introduction_texts.homepage_line_1') }}</p>
        <p>{{ __('introduction_texts.homepage_line_2') }}</p>
        <p>{{ __('introduction_texts.homepage_line_3') }}</p>
    </x-slot:introduction_text>

    <h1>
        <x-slot:title>
            {{ __('misc.all_brands') }}
        </x-slot:title>
    </h1>
    <div class="recommended">
        <h3>{{ __('misc.suggested_brand') }}:</h3>
        <a href="/{{ $suggestedBrand->id }}/{{ $suggestedBrand->getNameUrlEncodedAttribute() }}/">{{ $suggestedBrand->name }}</a>
    </div><br>

    <div class="top10">
        <h3>{{__('misc.popular_manuals') }}:</h3>
        <ol>
            @foreach ( $popularManuals as $manual )
                 <li>{{ $brands->where('id', $manual->brand_id)->first()->name }}</li>
            @endforeach
        </ol>
    </div>

    <div class="container">
        <div class="column">
            <?php $letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"]; ?>

            <div class="row">
                @foreach ($letters as $letter)
                <h2><a href="{{ $letter }}">{{$letter}}</a></h2>
                    @if ($letter != "Z")
                    <h2>-</h2>
                    @endif
                @endforeach
            </div>
        </div>

    </div>
</x-layouts.app>

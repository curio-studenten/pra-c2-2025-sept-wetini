<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <a href="/" title="{{ __('misc.home_alt') }}" alt="{{ __('misc.home_alt') }}">
            <h1>{{ __('misc.homepage_title') }}</h1>
        </a>
        {{ $introduction_text ?? '' }}
    </div>
</div>


<form action="{{ route('locale.switch') }}" method="POST" class="ml-4 inline-block">
    @csrf
    <button type="submit" name="locale" value="{{ app()->getLocale() === 'en' ? 'nl' : 'en' }}"
        class="px-3 py-1 rounded border text-sm hover:bg-gray-100 transition">
        {{ app()->getLocale() === 'en' ? 'NL' : 'EN' }}
    </button>
</form>
<br>

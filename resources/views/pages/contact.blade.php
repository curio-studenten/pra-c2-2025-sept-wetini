<x-layouts.app>
    @if(isset($message))
    {{ $message }}
    @endif
    <form action="{{ route('contact.send') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            @error('name')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            @error('email')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message"></textarea>
            @error('message')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" value="Send">
    </form>
</x-layouts.app>

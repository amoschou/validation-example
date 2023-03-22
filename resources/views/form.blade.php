<form method="post" action="{{ route('words.receive') }}">
    @csrf
    <input type="text" name="word" value="{{ old('word') }}">
    @foreach ($errors->get('word') as $error)
        @if ($loop->first) <ul> @endif
        <li>{{ $error }}</li>
        @if ($loop->last) </ul> @endif
    @endforeach
    <button type="submit">Submit</button>
</form>

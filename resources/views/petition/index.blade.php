@foreach($petitions as $petition)
    <a href="{{ $petition->id }}/show">{{ $petition->id }}
    {{ $petition->title }}</a>
    <br>
@endforeach

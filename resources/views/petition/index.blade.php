@foreach($petitions as $petition)
    <a href="/petition/{{ $petition->id }}/show">{{ $petition->id }}
    {{ $petition->title }}</a>
    <br>
@endforeach

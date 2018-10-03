@foreach($petitions as $petition)
    {{ $petition->id }} | {{ $petition->title }} <br>
@endforeach

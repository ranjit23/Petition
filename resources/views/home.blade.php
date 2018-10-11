@foreach($petitions as $petition)
    {{ $petition->id }} | {{ $petition->title }} <br> created by {{ $petition->user->name }} <br />
    {{ $petition->body  }}
@endforeach

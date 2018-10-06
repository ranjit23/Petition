{{ $petition->id }}<br>
{{ $petition->title }}
<br>
Created by {{ $petition->user->name }}
<?php $actionurl = url('/petition/'.$petition->id.'/vote') ?>
<form method="POST" action="{{ $actionurl }}">
@csrf
    <button type="submit" class="btn btn-primary">
        {{ __('Vote') }}
    </button>
</form>

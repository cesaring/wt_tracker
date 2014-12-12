@extends('/layouts/default');

@section('content')
<H1> {{ $userEvents['user'][0]->name}}'s</H1>
<H3><U>EVENTS:</U></H3>

@foreach($userEvents['events'] as $event)
	<LI>  {{$event->event_dt}} {{$event->weight}}</LI>
@endforeach

@for($x=1;$x<5;$x++)
	<br>
@endfor

{{Form::open(array('url' => 'event')) }}
{{Form::hidden('id_user',$userEvents['user'][0]->id)}}
<div>New Event for :</div>
<div>
{{Form::label('Date:')}} {{Form::text('event_dt')}}
</div> 
<div>{{Form::label('weight:')}} {{Form::text('weight')}}
</div>
{{Form::submit('ADD EVENT')}}


{{Form::close()}}


@stop

@extends('/layouts/default');

@section('content')

<H1><U>USERS:</U></H1>

@foreach($users as $user)
	<LI> <a href= {{URL::action('user.show',$user->id)}}> {{$user->name}} </a></LI>
@endforeach
<br>
<br>
<br>
<br>
<br>
<br>
<br>

{{Form::open(array('url' => 'user')) }}

{{Form::label('Create New User:')}} {{Form::text('name')}}
{{Form::submit('CREATE USER')}}


{{Form::close()}}


@stop

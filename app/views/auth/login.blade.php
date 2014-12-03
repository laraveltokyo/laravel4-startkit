<html>
<head>
</head>
<body>
@if (count($errors))
<p>
@foreach ($errors->all() as $error)
{{ $error }}<br>
@endforeach
</p>
@endif

{{ Form::open() }}
<div>{{ Form::text('username', '', ['placeholder' => trans('forms.login.attributes.username').': user1']) }}</div>
<div>{{ Form::password('password', ['placeholder' => trans('forms.login.attributes.password').': pass']) }}</div>
<div>{{ Form::submit(trans('forms.login.attributes.submit')) }}</div>
{{ Form::close() }}
</body>
</html>

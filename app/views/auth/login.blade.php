<html>
<head>
</head>
<body>
@if (count($errors))
<p>
@foreach ($errors as $error)
{{ print_r($error, true) }}<br>
@endforeach
</p>
@endif

{{ Form::open() }}
<div>{{ Form::text('username', '', ['placeholder' => 'ユーザー: user1']) }}</div>
<div>{{ Form::password('password', ['placeholder' => 'パスワード: pass']) }}</div>
<div>{{ Form::submit('ログイン') }}</div>
{{ Form::close() }}
</body>
</html>

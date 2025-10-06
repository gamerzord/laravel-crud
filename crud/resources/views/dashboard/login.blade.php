<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('crud.login') }}">
        @csrf
        @method('post')
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email"/>
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="password" placeholder="Password"/>
        </div>
        <div><input type="submit" value="Login"/></div>
    </form>
</body>
</html>
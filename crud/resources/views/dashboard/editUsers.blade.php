<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <form method="post" action="{{ route('user.update', ['user'=>$user]) }}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{ $user->name }}"/>
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" value="{{ $user->email }}"/>
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="password" placeholder="Password" value="{{ $user->password }}"/>
        </div>
        <div>
            <input type="submit" value="Update User"/>
        </div>
    </form>
</body>
</html>
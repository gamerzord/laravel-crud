<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form method="post" action="{{ route('user.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name"/>
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email"/>
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="password" placeholder="Password"/>
        </div>
        <div><input type="submit" value="Register"/></div>
    </form>
</body>
</html>
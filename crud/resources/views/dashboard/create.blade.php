<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name"/>
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty"/>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price"/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description"/>
        </div>
        <div>
            <input type="submit" value="Save a New Product"/>
        </div>
    </form>

    <h1>Create Users</h1>
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
        <div><input type="submit" value="Create a New User"/></div>
    </form>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create New milk</h1>
    <ul>
        <li>
            <a href="/admin/milk/create">Create New</a>
        </li>
        <li>
            <a href="/admin/milk/list">List milk</a>
        </li>
    </ul>
    <form action="{{$action}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$milk -> id}}">
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{$milk -> name}}">
        </div>
        <div>
            <label>Category</label>
            <select name="categoryId" value="{{$milk -> categoryId}}">
                <option value="1">Whey</option>
                <option value="2">Pre-work out</option>
                <option value="3">Vitamin</option>
            </select>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" value="{{$milk -> price}}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" value="{{$milk -> description}}">
        </div>
        <div>
            <label>Image</label>
            <input type="text" name="images" value="{{$milk -> images}}">
        </div>
        <div>
            <label>Detail</label>
            <textarea name="content" cols="30" rows="10">{{$milk -> content}}</textarea>
        </div>
        <div>
            <label>Note</label>
            <input type="text" name="note" value="{{$milk -> note}}">
        </div>
        <div>
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
</html>
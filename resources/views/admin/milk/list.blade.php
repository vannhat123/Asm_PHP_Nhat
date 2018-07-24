<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<h1 style="color: red; font-size: 40px">LIST MILK</h1>
<ul>
    <li style="font-size: 30px">
        <a href="/admin/milk/create">Create New</a>
    </li>
    <li style="font-size: 30px">
        <a href="/admin/milk">List</a>
    </li>
</ul>
<ul>
    <div class="row">
        @foreach($list_obj as $item)
            <div class="col-sm-3">
                <div style="margin-top: 10px ">
                    <img  src="{{$item -> images}}" alt="" style="width: 100px; border-radius:1; height: 100px">
                    <div style="background: #545b62; width: 100px;height: 80px; text-align: center">
                        <div><a  href="/admin/milk/{{$item -> id}}">{{$item -> name}}</a></div>
                        <div><a style="color:#2a9055" href="/admin/milk/{{$item -> id}}/edit">Edit</a>&nbsp;&nbsp;</div>
                        <div><a href=""><span style="color:red" class="btn-delete" id="{{$item-> id}}">Delete </span></a></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</ul>
<script>

    var listDeleteButton = document.getElementsByClassName('btn-delete');
    for (var i = 0; i < listDeleteButton.length; i++) {
        listDeleteButton[i].onclick = function () {
            if (confirm('Are you sure ?')) {
                var params = '_token={{csrf_token()}}';
                var currentId = this.id;
                //  alert(this.id);
                var xhttp = new XMLHttpRequest();
                xhttp.open("DELETE", "/admin/milk/" + currentId, true);
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        alert('Delete success!');
                        window.location.reload();
                    }
                };
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send(params);
            }
        }
    }
</script>
</body>
</html>
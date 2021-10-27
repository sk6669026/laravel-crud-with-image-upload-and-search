<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    </head>
    <body>
        <center>
            <h1>Edit Page</h1>
            <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <label>Name</label>
                <input type="text" name="name" value="{{$data->name}}">
                <br><br>
                <label>Email</label>
                <input type="email" name="email" value="{{$data->email}}">
                <br><br>
                <img height="120" width="120" src="/stortage/{{$data->file}}">
                <br><br>
                <label>Change Image</label>
                <input type="file" name="file">
                <br><br>
                <input type="submit" name="" value="update">
            </form>
        </center>
    </body>
</html>
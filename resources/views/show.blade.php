<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    </head>
    <body>
        <form action="{{url('/search')}}" method="get" align="center">
            <input type="text" name="search">
            <input type="submit" name="" value="Search">
        </form>
        <br>
        <table border="1px" align="center">
            <tr  align="center">
                <th>Id_no</th>
                <th>Name</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Action Type</th>
            <tr>
            @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>
                        <img height="120" width="120" src="/stortage/{{$data->file}}">
                    </td>
                    <td>
                        <a class="btn-success" href="{{url('/editpage',$data->id)}}">Edit</a>
                        <a class="btn-danger" href="{{url('/delete',$data->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
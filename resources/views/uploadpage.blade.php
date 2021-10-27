<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    </head>
    <body>
        <form action="{{url('/UploadData')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Name">
            </div>
    
            <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Email">
            </div>
    
            <div>
                <label>Photo</label>
                <input type="file" name="file">
            </div>
    
            <input type="submit" name="submit">
        </form>
    </body>
</html>
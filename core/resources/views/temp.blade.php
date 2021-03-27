<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- {{public_path()}}
    <form action="{{route('fileuploadfun')}}" enctype="multipart/form-data">
        
        <label for="myfile">Select a file:</label>
        <input type="file" id="fileid" name="file"><br><br>
        <input type="submit" value="Submit">
    </form> --}}
    <form action="{{route('fileuploadfun')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" />
        <input type="submit"/>
     </form>
</body>
</html>
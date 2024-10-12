<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Students</title>
</head>
<body>
    <h1>Create a Student</h1>
    <form action="{{route('students.store')}}" method="post">
        @csrf
        @method('post')
    <input type="text" name="name" placeholder="Student name"> 
    <input type="text" name="address" placeholder="Student address"> 
    <input type="text" name="age" placeholder="Student age"> 
    <input type="submit" value="Create student">
    </form>
    </body>
</body>
</html>
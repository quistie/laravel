<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Students</title>
</head>
<body>
    <hi>List of Students</hi>
    <div>
        <table border ="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Age</th>
            </tr>
                @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->age}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>

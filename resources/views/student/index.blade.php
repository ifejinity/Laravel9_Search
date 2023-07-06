<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jeffrey Lonzanida</title>
    <link rel="stylesheet" href="/resources/css/app.css">
</head>
<body>
    <form action="{{ route('students.search') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="searchHolder">
            <input type="number" name="input" placeholder="Search ID">
            <button type="submit">Search</button>
            <a href="{{route('students.index')}}" >reset</a>
        </div>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->first_name}}</td>
                <td>{{$student->last_name}}</td>
            </tr>
        @endforeach
    </table>
    {{ $students->links() }}
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        th{
            text-align: start;

        }
    </style>
</head>
<body>
    <h2>Student Lists</h2>

    <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            @foreach ($students as $stu)
                
                <tr>
                    <td>
                        <a href="/student-detail/{{$stu['id']}}">{{ $stu['id'] }}</a>
                    </td>
                    <td>{{ $stu['name'] }}</td>
                </tr>
                
            @endforeach
    </table>
</body>
</html>

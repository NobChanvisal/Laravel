<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <style>
        th{
            text-align: start;

        }
    </style>
</head>
<body>
    <h2>Student Information</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        
            <tr>
                <th>ID</th>
                <td>{{ $student['id'] }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $student['name'] }}</td>
            </tr>
            <tr>
                <th>Deparment</th>
                <td>{{ $student['deparment'] }}</td>
            </tr>
     
    </table>
</body>
</html>

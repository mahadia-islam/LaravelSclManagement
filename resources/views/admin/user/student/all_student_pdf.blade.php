<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
    <html>

    <head>
        <style>
            body{
                font-family: 'Poppins',sans-serif !important;
            }
            #customers {
                border-collapse: collapse;
                width: 100%;
            }

            #customers td,
            #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            #customers tr:hover {
                background-color: #ddd;
            }

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #1559F7;
                color: white;
            }
        </style>
    </head>

    <body>

        <table id='customers'>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Religion</th>
                <th>Gender</th>
                <th>Code</th>
                <th>Id No</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{$student['name']}}</td>
                    <td>{{$student['email']}}</td>
                    <td>{{$student['mobile']}}</td>
                    <td>{{$student['religion']}}</td>
                    <td>{{$student['gender']}}</td>
                    <td>{{$student['code']}}</td>
                    <td>{{$student['id_no']}}</td>
                </tr>
            @endforeach
        </table>
    </body>

    </html>
</body>
</html>

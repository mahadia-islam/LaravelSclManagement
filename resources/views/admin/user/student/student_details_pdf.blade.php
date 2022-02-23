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
            .img_div{
                height: 500px;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                padding-top: 50px;
            }
            .img_div img{
                width: 300px;
                margin:auto;
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
            <tr>
                <td>{{$name}}</td>
                <td>{{$email}}</td>
                <td>{{$mobile}}</td>
                <td>{{$religion}}</td>
                <td>{{$gender}}</td>
                <td>{{$code}}</td>
                <td>{{$id_no}}</td>
            </tr>
        </table>
        <div class='img_div'>
            <img src='https://res.cloudinary.com/dfbrogqf4/image/upload/v1645190667/undraw_teacher_re_sico_w8ffeg.svg' alt=''>
        </div>

    </body>

    </html>
</body>
</html>

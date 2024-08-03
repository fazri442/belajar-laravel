<html>
    <head>
        <title>User Profile</title>
    </head>
    <body>
        <form action="" method="get">
        <table border="1">
            <thead>
            <tr>
                <td>nama</td>
                <td>umur</td>
                <td>jenis kelamin</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $data)
            <tr>
                <td>
                    {{$data['name']}}
                </td>
                <td>
                    {{$data['age']}}
                </td>
                <td>
                    {{$data['kelamin']}}
                </td>
                <td><a href="/detail/1">Details</a></td>
            </tr>
            @endforeach
            <tr>
                <td>Raihan</td>
                <td>raihan@gmaail.com</td>
                <td>Laki-laki</td>
                <td><a href="/detail/2">Details</a></td>
            </tr>
        </tbody>
        </table>
    </body>
</form>
</html>

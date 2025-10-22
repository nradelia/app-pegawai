<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Departemen</title>
</head>
<body>
    @extends('master') 
    @section('title', 'Detail Department')
    @section('content')
    <h1>Detail Departemen</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <td><strong>Nama Departemen</strong></td>
            <td>{{ $department->nama_department }}</td>
        </tr>
        <tr>
            <td><strong>Tanggal Dibuat</strong></td>
            <td>{{ $department->created_at->format('d M Y H:i') }}</td>
        </tr>
        <tr>
            <td><strong>Tanggal Diubah</strong></td>
            <td>{{ $department->updated_at->format('d M Y H:i') }}</td>
        </tr>
    </table>
    @endsection
</body>
</html>
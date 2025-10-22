<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Jabatan</title>
</head>
<body>
    @extends('master')
    @section('title', 'Detail Jabatan')
    @section('content')
    <h1>Detail Jabatan</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <td><strong>Nama Jabatan</strong></td>
            <td>{{ $position->nama_jabatan }}</td>
        </tr>
        <tr>
            <td><strong>Gaji Pokok</strong></td>
            <td>{{ $position->gaji_pokok }}</td>
        </tr>
        <tr>
            <td><strong>Dibuat</strong></td>
            <td>{{ $position->created_at }}</td>
        </tr>
        <tr>
            <td><strong>Diupdate</strong></td>
            <td>{{ $position->updated_at }}</td>
        </tr>
    </table>
    @endsection
</body>
</html>
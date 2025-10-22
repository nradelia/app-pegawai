<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Pegawai</title>
</head>
<body>
    @extends('master')
    @section('title', 'Detail Pegawai')
    @section('content')
    <h1>Detail Pegawai</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <td><strong>Nama Lengkap</strong></td>
            <td>{{ $employee->nama_lengkap }}</td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td>{{ $employee->email }}</td>
        </tr>
        <tr>
            <td><strong>Nomor Telepon</strong></td>
            <td>{{ $employee->nomor_telepon }}</td>
        </tr>
        <tr>
            <td><strong>Tanggal Lahir</strong></td>
            <td>{{ $employee->tanggal_lahir }}</td>
        </tr>
        <tr>
            <td><strong>Alamat</strong></td>
            <td>{{ $employee->alamat }}</td>
        </tr>
        <tr>
            <td><strong>Tanggal Masuk</strong></td>
            <td>{{ $employee->tanggal_masuk }}</td>
        </tr>
         <tr>
            <td><strong>Department</strong></td>
            <td>{{ $employee->department->nama_department}}</td>
        </tr>
         <tr>
            <td><strong>Jabatan</strong></td>
            <td>{{ $employee->position->nama_jabatan }}</td>
        </tr>
        <tr>
            <td><strong>Jabatan</strong></td>
            <td>{{ $employee->status }}</td>
        </tr>
    </table>
    @endsection
</body>
</html>
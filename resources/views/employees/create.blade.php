<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Pegawai</title>
</head>
<body>
    @extends('master')
    @section('title', 'Input Pegawai')
    @section('content')
    <h1 class="mb-4">Form Pegawai</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="nama_lengkap">Nama Lengkap:</label></td>
                <td><input type="text" id="nama_lengkap" name="nama_lengkap"></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email"></td>
            </tr>
            <tr>
                <td><label for="nomor_telepon">Nomor Telepon:</label></td>
                <td><input type="text" id="nomor_telepon" name="nomor_telepon"></td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir:</label></td>
                <td><input type="date" id="tanggal_lahir" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat:</label></td>
                <td><input type="alamat" id="alamat" name="alamat"></textarea></td>
            </tr>
            <tr>
                <td><label for="tanggal_masuk">Tanggal Masuk:</label></td>
                <td><input type="date" id="tanggal_masuk" name="tanggal_masuk"></td>
            </tr>
            <tr>
                <td><label for="department_id">Department:</label></td>
                <td>
                    <select name="department_id" id="department_id">
                        @foreach($departments as $dept)
                        <option value="{{ $dept->id }}">{{ $dept->nama_department }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="jabatan_id">Jabatan:</label></td>
                <td>
                    <select name="jabatan_id" id="jabatan_id">
                        @foreach ($positions as $pos)
                        <option value="{{ $pos->id }}">{{ $pos->nama_jabatan }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="status">Status</label></td>
                <td>
                    <select name="status" id="status">
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Nonaktif</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right;">
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
    @endsection
</body>
</html>
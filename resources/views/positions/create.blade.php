<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input Jabatan</title>
</head>
<body>
    @extends('master')
    @section('title', 'Input Jabatan')
    @section('content')
    <h1 class="mb-4">Form Jabatan</h1>
    <form action="{{ route('positions.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="nama_jabatan">Nama Jabatan</label></td>
                <td><input type="text" id="nama_jabatan" name="nama_jabatan"></td>
            </tr>
            <tr>
                <td><label for="gaji_pokok">Gaji Pokok</label></td>
                <td><input type="number" id="gaji_pokok" name="gaji_pokok" step="0.01" inputmode="decimal" pattern="[0-9]+([.,][0-9]{1,2})?"></td>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Jabatan</title>
</head>
<body>
    @extends('master')
    @section('title', 'Edit Jabatan')
    @section('content')
    <h2>Edit Data Jabatan</h2>
    <form action="{{ route('positions.update', $position->id ) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Nama jabatan</td>
                <td><input type="text" name="nama_jabatan" value="{{ old('nama_jabatan', $position->nama_jabatan) }}"></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td><input type="number" name="gaji_pokok" step="0.01" value="{{ old('gaji_pokok', $position->gaji_pokok) }}"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">update</button>
                </td>
            </tr>
        </table>
    </form>
    @endsection
</body>
</html>
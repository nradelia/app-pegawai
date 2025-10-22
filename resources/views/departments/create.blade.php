<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input Departemen</title>
</head>
<body>
    @extends('master') 
    @section('title', 'Input Department')
    @section('content')
    <h1 class="mb-4">Form Departemen</h1>
    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="nama_department">Nama Departemen:</label></td>
                <td><input type="text" id="nama_department" name="nama_department"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right">
                    <button type="submit">Simpan</button>
            </tr>
        </table>
    </form>
    @endsection
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Departemen</title>
</head>
<body>
    @extends('master') 
    @section('title', 'Edit Department')
    @section('content')
    <h2>Edit Data Departemen</h2>
    <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Nama Departemen</td>
                <td><input type="text" name="nama_department" value="{{ old('nama_department', $department->nama_department) }}"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Update</button>
                </td>
            </tr>
        </table>
    </form>
    @endsection
</body>
</html>
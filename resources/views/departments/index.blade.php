<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('master') 
    @section('title', 'Daftar Department')
    @section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Departemen</h1>
        <button type="button" onclick="window.location='{{ route('departments.create') }}'">Tambah Departemen</button>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Departemen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $department->nama_department }}</td>
                    <td>
                        <a href="{{ route('departments.show', $department->id) }}">Detail</a> |
                        <a href="{{ route('departments.edit', $department->id) }}">Edit</a> |
                        <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {{ $departments->links() }}
    </div>
    @endsection
</body>
</html>
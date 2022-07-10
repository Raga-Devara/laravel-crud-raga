<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/crud1.css">
    <title>Laravel | CRUD</title>
</head>
<body>
    <div class="judul">
        <h1>Data Mahasiswa </h1>
    </div>

    <div class="main">
        <div class="card">
            <table>
                <tr class="add">
                    <td colspan="4">
                        <a href="/tambah">Tambah Data</a>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($dtmahasiswa as $item)
                <tr>
                    <td>{{ $item->Nama }}</td>
                    <td>{{ $item->NIM }}</td>
                    <td>{{ $item->Jurusan }}</td>
                    <td>
                        <a href="/edit/{{ $item->id }}">update</a> || <a href="/delete/{{ $item->id }}">delete</a>
                    </td>
                </tr>
                @endforeach
                
            </table>
        </div>
    </div>
</body>
</html>
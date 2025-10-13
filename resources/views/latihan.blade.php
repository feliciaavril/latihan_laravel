<!DOCTYPE html>
<html>
<head>
    <title>Latihan Form & Tabel</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            width: 300px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
        }
        input[type="submit"] {
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h2>Form Mahasiswa</h2>
    <form>
        <label>NIM</label>
        <input type="text" name="nim">

        <label>Nama Lengkap</label>
        <input type="text" name="nama">

        <label>Kelas</label>
        <input type="text" name="kelas">

        <input type="submit" value="Simpan">
    </form>

    <h2>Data Mahasiswa</h2>
    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        @foreach($mahasiswa as $index => $mhs)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $mhs['nim'] }}</td>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['kelas'] }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>

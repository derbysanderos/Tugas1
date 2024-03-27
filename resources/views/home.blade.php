<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1</title>
</head>
<style>
    table, th, td {
        border: 0.5px solid black;
    }
</style>
<body>
    <h1 >Biodata Mahasiswa</h1>
    <form action="/store" method="POST">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama"><br>
        <label for="nim">NIM:</label><br>
        <input type="text" name="nim"><br>
        <label for="hoby">Hoby:</label><br>
        <input type="text" name="hoby"><br>
        <button>Kirim</button>
    </form>
    <br>
    <br>
    <table  style="width: 50%">
        <center>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Hoby</th>
        </tr>
        </center>
    </table>
    @foreach ($data as $item)
    <table style="width: 50%">
        <center>
        <tr>
            <td>{{ $item['nama'] }}</td>
            <td>{{ $item['nim'] }}</td>
            <td>{{ $item['hoby'] }}</td>
        </tr>
        </center>
    </table>
    
    @endforeach
</body>
</html>
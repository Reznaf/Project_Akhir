<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/main.js" defer></script>
</head>
<body>
    <header class="header" data-header>
        <div class="container">
            <img src="images/Logo1.png" alt="" class="logo">
        </div>
        <img src="/images/bg-pattern2.png" width="1920" height="840" role="presentation"
        class="bg-pattern">
    </header>
    <section class="main">
        <div class="container">
            <div class="box">
                <a href="/add" class="button"> + Tambah data obat</a>
                <br />
                <br />
                <table>
                    <tr>
                        <th>Nama</th>
                        <th>Kuantitas</th>
                    </tr>
                    @foreach ($obat as $obt)
                        <tr>
                            <td>{{ $obt->nama}}</td>
                            <td>{{ $obt->kuantitas}}</td>
                            <td>
                                <a href="/edit/{{ $obt->nama }}">Edit</a>
                                |
                                <a href="/delete/{{ $obt->nama }}">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <a href="/" class="button">Kembali</a>
            </div>
        </div>
    </section>
</body>

</html>

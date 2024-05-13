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
        <img src="/images/bg-pattern2.png" width="1920" height="840" role="presentation" class="bg-pattern">
    </header>
    <section class="main">
        <div class="container">
            <h1 class="large-font">Tambah daftar</h1>
            <form action="/delete" method="post">
                {{ csrf_field() }}
                Nama <input type="text" name="nama" required="required"> <br />
                Kuantitas <input type="text" name="kuantitas" required="required"> <br />
                <input class="button" type="submit" value="Simpan Data">
            </form>
            <a href="/">keluar</a>
        </div>
    </section>
</body>

</html>

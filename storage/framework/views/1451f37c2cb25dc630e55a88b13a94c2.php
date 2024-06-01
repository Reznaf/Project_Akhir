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
            <div class="box secondary">
                <h1 class="large-font">Tambah daftar</h1>
                <form action="/addsave" method="post" class="box secondary" id="form">
                    <?php echo e(csrf_field()); ?>

                    Nama <input type="text" name="nama" required="required" class="input-box"> <br />
                    Kuantitas <input type="text" name="kuantitas" required="required" class="input-box"> <br />
                    <input class="button" type="submit" value="Simpan Data">
                </form>
                <a href="/" class="button">Kembali</a>
            </div>
        </div>
    </section>
</body>

</html>
<?php /**PATH C:\Users\muham\Documents\Kuliah\sem 6\pemweb\project\Project_Akhir-main\resources\views/add.blade.php ENDPATH**/ ?>
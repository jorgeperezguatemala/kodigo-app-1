<?php require('templates/Header.php'); ?>
    <h1 class="text-center">Welcome to Kodigo app</h1>
    <h2 class="text-center">All bootcamps</h2>

    <div class="container">
        <div class="row">
            <?php foreach ($bootcamps as $bootcamp): ?>
                <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://blog.u-erre.mx/hubfs/funciones%20del%20desarrollador%20web.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $bootcamp['title']; ?></h5>
                        <p class="card-text"><?php echo $bootcamp['description']; ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
    </div>
<?php require('templates/Footer.php'); ?>
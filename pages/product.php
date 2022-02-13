<?php include 'header.php';?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product){ ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="assets/img/st1.jpg" alt="" class="card-img-top"/>
<!--                            <div class="card-body">-->
                                <a href="" class="btn btn-outline-success">Details</a>
<!--                            </div>-->
                            <hr/>
                            <img src="assets/img/st4.jpg" alt="" class="card-img-top"/
                                <hr/>
                                <a href="" class="btn btn-outline-success">Details</a>
                            <hr/>
                            <img src="assets/img/st3.jpg" alt="" class="card-img-top"/>
                            <div class="card-body">
                                <hr/>
                                <a href="" class="btn btn-outline-success">Details</a>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>
<?php include 'footer.php';?>
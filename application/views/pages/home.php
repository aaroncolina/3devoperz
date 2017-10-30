<div class="row">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <?php $i = 0; ?>
        <?php foreach ($events as $key => $event): ?>
            <div class="carousel-item <?php echo ($i == 0)?'active':''; ?>">
                <img class="d-block w-100" src="<?php echo $event['img']; ?>" alt="<?php echo $event['title']; ?>">
            </div>
        <?php $i++; ?>
        <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
<br><br>
<div class="row">
    <?php foreach ($events as $key => $event): ?>
    <div class="col-md-4">
        <div class="card text-white bg-secondary">
            <img class="card-img-top" src="<?php echo $event['img']; ?>" alt="<?php echo $event['title']; ?>">
            <div class="card-body">
                <h4 class="card-title"><?php echo $event['title']; ?></h4>
                <p class="card-text"><?php echo $event['desc']; ?></p>
                <a href="<?php echo site_url('home/registration/'.$key); ?>" class="btn btn-dark">Register Now</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
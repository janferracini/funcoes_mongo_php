<div class="container mt-5">

    <div class="row">
        <?php foreach ($menu as $m) { ?>
            <div class="col-sm-3 text-center" style="margin: 3px 0">
                <a href="<?php echo $m['url'] ?>">
                    <img src="<?php echo $m['icon'] ?>" style="width:8em;height:auto">
                    <h4> <?php echo $m['title'] ?></h4>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
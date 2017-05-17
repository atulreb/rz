<aside class="col-md-4">
    <div class="widget search">
        <form action="<?php echo base_url() ?>search_blog/" method="post">
            <div class="form-group">
                <input class="font_Color_Grey form-control" name="search" placeholder="Enter Your Keyword" type="text">
                <button type="submit" name="submit" id="searchblog" class="btn"><i class="fa fa-search" aria-hidden="true"></i> </button>
            </div>
        </form>
    </div>

    <div id="accordion1" style="">
        <h4>Archives</h4><hr>
        <?php $sr = 0;
        foreach ($archive_dates as $year => $months): $sr++;
            ?>
            <div>
                <div class="accordionInner">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel<?php echo $sr; ?>"><i class="glyphicon glyphicon-minus"></i><?php echo $year; ?></a>
                    </h4>

                </div>

                <div id="panel<?php echo $sr; ?>" class="panel-collapse collapse <?php if ($sr == 1) echo 'in'; ?>">
    <?php foreach ($months as $archive) : ?>
                        <div>

                            <div class="month"><a href="<?php echo base_url() ?>blog/<?php echo $archive->year; ?>/<?php echo $archive->month; ?>"><?php echo $archive->month . " " . $year; ?></a></div><hr>
                        </div>
    <?php endforeach; ?>
                </div>

            </div>
<?php endforeach; ?>

    </div>
</aside>
<?php foreach($posts as $p):?>
    <div class="card">
        <div class="card__container card__container--closed">
            <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
				<defs>
				    <clipPath id="clipPath1">
                        <!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
				        <circle class="clip" cx="960" cy="250" r="992"></circle>
				    </clipPath>
				</defs>
				<image clip-path="url(#clipPath1)" width="1920" height="500" xlink:href="img/a.jpg"></image>
            </svg>
            <div class="card__content">
				<i class="card__btn-close fa fa-times"></i>
				<div class="card__caption">
				    <h2 class="card__title"><a href="<?php echo $p->url?>"><?php echo $p->title ?></a></h2>
				</div>
				<div class="card__copy" id="card0">
                    <div class="meta">
                        <img class="meta__avatar" src="img/authors/1.png" alt="author01" />
                        <span class="meta__author">Passenger Avenue</span>
                        <span class="meta__date"><?php echo date('d F Y', $p->date)?></span>
                    </div>
                    <?php echo $p->body?>
				</div>
            </div>
        </div>
    </div>
<?php endforeach;?>

<?php if ($has_pagination['prev']):?>
	<a href="?page=<?php echo $page-1?>" class="pagination-arrow newer">Newer</a>
<?php endif;?>

<?php if ($has_pagination['next']):?>
	<a href="?page=<?php echo $page+1?>" class="pagination-arrow older">Older</a>
<?php endif;?>
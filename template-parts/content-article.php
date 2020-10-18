<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <span class="date">
                <?php the_date( 'F j, Y' ); ?>
            </span>
            <?php
                the_tags( '<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>' );
            ?>
            <span class="tag"><i class='fa fa-tag'></i> category</span>
            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?></a>
            </span>
        </div>
    </header>
    <?php the_content( __( 'Continue Reading' ) ); ?>
    <?php comments_template(); ?>
</div>


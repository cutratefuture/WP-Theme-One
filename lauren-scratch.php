<div id="primary">
    <main id="main" class="site-main" role="main">
        <?php
        if (have_posts()) {
        ?>
            <div class="container">
                <?php
                if (is_home() && !is_front_page()) {
                ?>
                    <header>
                        <h1>
                            <?php
                            single_post_title();
                            ?>
                        </h1>
                    </header>
                <?php

                }
                ?>

                <div class="row">
                    <?php
                    // TODO: make pagination
                    $index         = 0;
                    $no_of_columns = 3;

                    // start the loop
                    while (have_posts()) : the_post();
                        if (0 === $index % $no_of_columns) {
                    ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <?php
                        }
                            ?>
                            <h3><?php the_title(); ?></h3>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                            <?php
                            $index++;
                            if (0 !== $index && 0 === $index % $no_of_columns) {
                            ?>
                            </div>
                    <?php
                            }

                        endwhile;


                    ?>
                </div>
            </div>
        <?php
        }
        ?>
    </main>
</div>
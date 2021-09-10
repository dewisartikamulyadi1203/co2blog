<?php get_header(); ?>
    <div class="banner">
        <div class="kiri">
        <h3>Kumpulan Artikel dan Berita Terkini</h3>
        </div>
        <div class="kanan">
            <img src="<?php echo get_template_directory_uri();?>/image/perpus.jpg" alt="">
        </div>
    </div>
    <div class="container">
        <h3>SELAMAT DATANG DIKUMPULAN ARTIKEL DAN BERITA</h3>
        <h5>Terupdate dan Terpercaya</h5>
        <p class="mt-3">Kami hadir untuk mengumpulkan artiikel dan berita terpercaya dan terupdate yang bersumber
            dari narasumber yang terpercaya. Berita yang kami tampilkan dari mulai berita lokal, nasional maupun internasional.
        </p>
    </div>
<div class="artikel">
<h3>Artikel</h3>
        <p>Artikel paling banyak dibaca : </p>
        <?php
			$recent = new WP_Query(
				array(
					'post_type' => 'post',
					'posts_per_page' => '2',
					'order'=> 'DESC',
				)
			);
			if($recent->have_posts()) :
				while ($recent->have_posts()):$recent->the_post();
					if ($recent->current_post == 0) :
						echo "Post Tidak Ditemukan";
						echo "<div style='clear:both'></div>";
					else :
						?>
                            <article id="post-<?php the_ID(); ?>" class="post-outer" itemprop="mainEntity" itemscope itemtype="http://schema.org/BlogPosting">
                            <meta content="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" itemprop="image"/>
                            <meta content="<?php the_time('c'); ?>" itemprop="datePublished"/>
                            <meta content="<?php the_modified_date('c'); ?>" itemprop="dateModified"/>
                            <meta content="<?php echo get_the_author(); ?>" itemprop="name author"/>
                            <meta content="<?php echo esc_html( get_the_excerpt() ); ?>" itemprop="description"/>
                            <div class="post-inner">
                            <div class="entry-thumbnail">
                                <a class="thumb-link" href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="<?php the_title(); ?>"/>
                                </a>
                            </div>
                            <div class="entry-content">
                                <h2 class="entry-title" itemprop="headline">
                                    <?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
                                </h2>
                                <div class="entry-footer">
                                    <span class="tags"><?php 
                                    $ytag = get_the_category();
                                    if(!empty($ytag)){
                                        echo '<a href="' . esc_url( get_category_link( $ytag[0]->term_id ) ) . '">' . esc_html( $ytag[0]->name ) . '</a>';
                                    }
                                    ?></span>
                                    <span class="date"><?php the_time('d M, Y'); ?></span>
                                </div>
                            </div>
                            <div class='clear'></div>
                            </div>
                        </article>
                        <?php
					endif;
				endwhile;
				else :
					echo "<div class='content-error'><p>No posts available</p></div>";
				endif;
			wp_reset_query();
		?>
</div>
<?php get_footer(); ?>


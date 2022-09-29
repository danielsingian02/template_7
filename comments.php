<div class="comments" id="comments" style="background-image:url('<?php echo get_theme_mod('Background_image',get_bloginfo('template_directory').'/assets/images/Asset 7 1.png' ); ?>')">

		<?php
		$comments_number = absint( get_comments_number() );
		?>

		<div class="comments-header section-inner small max-percentage">

			<h2 class="comment-reply-title">
			<?php
			if ( ! have_comments() ) {
				_e( 'Leave a comment');
			} elseif ( 1 === $comments_number ) {
				/* translators: %s: Post title. */
				// printf( _x( 'One Response on &ldquo;%s&rdquo;', 'comments title', 'twentytwenty' ), get_the_title() );
                echo "There is ". get_comments_number(). " Response on ". get_the_title() ;
			} else {
                echo "There are ". get_comments_number(). " Response on ". get_the_title() ;
			}

			?>
			</h2><!-- .comments-title -->

		</div><!-- .comments-header -->

		<div class="comments-inner section-inner thin max-percentage">

			<?php
			wp_list_comments(
				array(
					'avatar_size' => 120,
					'style'       => 'div',
				)
			);

		
			?>

		</div><!-- .comments-inner -->

	</div><!-- comments -->
    <hr class="" aria-hidden-="true">

	<?php
        if(comments_open() ) {
            comment_form(
                array(
                    'class_form' => '',
                    'title_reply'=> '<h1 class="lreply"> Leave a Reply</h1>',
                    'title_reply_before' => '<p id="reply-title" class="comment-reply"></p>',
                    'title_reply_after' => '<p id="reply-title" class="comment-reply"> </p>',

                )
            );
        }
	?>
</div>

<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humblelion
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( comments_open() ) : ?>
		<?php
			//printf( // WPCS: XSS OK.
				//esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'lion' ) ),
				//number_format_i18n( get_comments_number() ),
				//'<span>' . get_the_title() . '</span>'
			//);
		?>
		<?php
			printf( // WPCS: XSS OK.				
				'<h2 class="comments-title">' . 'Join the ' . '<i>' . 'conversation' . '</i>' . '</h2>'
			);
		?>
		<!-- .comments-title -->

		<?php 

		$comments_args = array(
        // change the title of send button 
        'label_submit'=>'Post',
        // change the title of the reply section
        'title_reply'=>'',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'fields' => apply_filters( 'comment_form_default_fields', array(

			'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .

		        '<input id="author" name="author" type="text" placeholder="Name" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . '  /></p>',   

		    'email'  => '<p class="comment-form-email">' .

		               	'<label for="email">' . __( 'Your Email Please' ) . '</label> ' .

		                ( $req ? '<span>*</span>' : '' ) .

		                '<input id="email" name="email" type="text" placeholder="Email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',

		    'url'    => '<p class="comment-form-website">' .

		               	'<label for="website">' . __( 'Website' ) . '</label> ' .

		                ( $req ? '<span>*</span>' : '' ) .

		                '<input id="website" name="website" type="text" placeholder="Website" value="' . esc_attr(  $commenter['comment_author_link'] ) . '" />'.'</p>', 

        ) ),

        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" rows="8" aria-required="true" placeholder="Comment"></textarea></p>',
		);

		comment_form($comments_args);

		?>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'lion' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'lion' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'lion' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ul class="comment-list">

		<?php wp_list_comments( 'type=comment&callback=lion_comment' ); ?>

		</ul><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'lion' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'lion' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'lion' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	else :

		comment_form($comments_args);

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'lion' ); ?></p>
	<?php
	endif; ?>

</div><!-- #comments -->

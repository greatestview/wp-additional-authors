<?php
/**
 * @var \AdditionalAuthors\Render $this
 * @var int $author_id
 */

printf(
	'<a href="%1$s" title="%2$s" rel="author">%3$s</a>',
	esc_url( get_author_posts_url( $author_id ) ),
	sprintf(
		esc_attr__( 'Posts by %s' ),
		get_the_author_meta( 'display_name', $author_id )
	),
	get_the_author_meta( 'display_name', $author_id )
);

<aside class="comments">
    <?php comment_form( array( 
        'comment_notes_before' => '',
        'comment_field' => '<div class="comment-field><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>'
     ) ); ?>

    <?php 
        wp_list_comments( array() );
    ?>

</aside>
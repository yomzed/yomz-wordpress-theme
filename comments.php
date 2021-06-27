<aside class="comments">
    <?php comment_form( array( 
        'comment_notes_before' => ''
     ) ); ?>

    <?php 
        wp_list_comments( array() );
    ?>

</aside>
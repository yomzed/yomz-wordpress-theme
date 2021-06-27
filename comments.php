<aside class="comments">
    <?php comment_form( array( 
        'comment_notes_before' => '',
        'submit_field' => '<div class="form-submit">%1$s %2$s</div>'
     ) ); ?>

    <?php 
        wp_list_comments( array(
            'style' => 'div'
        ) );
    ?>

</aside>
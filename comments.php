<aside class="comments">
    <?php comment_form( array( 
        'comment_notes_before' => '',
        'submit_field' => '<div class="form-submit">%1$s %2$s</div>'
     ) ); ?>

    <div class="comments-list">
        <?php 
            wp_list_comments( array(
                'style' => 'div',
                'callback' => 'yomzpress_comments_list'
            ) );
        ?>
    </div>
</aside>
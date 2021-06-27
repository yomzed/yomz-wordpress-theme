<aside class="comments">
    <h3>Laisser un commentaire</h3>
    <?php comment_form( array( 
        'comments_notes_before' => ''
     ) ); // Le formulaire d'ajout de commentaire ?>

    <?php 
        wp_list_comments( array() );
    ?>

</aside>
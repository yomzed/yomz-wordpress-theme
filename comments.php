<aside class="comments">
    <h3>Laisser un commentaire</h3>
    <?php comment_form(); // Le formulaire d'ajout de commentaire ?>

    <?php 
        wp_list_comments( array() );
    ?>

</aside>
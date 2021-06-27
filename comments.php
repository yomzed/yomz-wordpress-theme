<aside class="comments">
    <h3>Laisser un commentaire</h3>
    <?php comment_form(); // Le formulaire d'ajout de commentaire ?>

    <?php 
        wp_list_comments( array(
            'style'       => 'ol',
            'short_ping'  => true,
            'avatar_size' => 74,
        ) );
    ?>

</aside>
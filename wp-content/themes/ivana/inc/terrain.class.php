<?php
class CTerrain {

    private static $_elements;

    public function __construct() {

    }

    /**
     * fonction qui prend les informations son Id.
     *
     * @param type $pid
     */
    public static function getById($pid) {
        $pid = intval($pid);

        //On essaye de charger l'element
        if(!isset(self::$_elements[$pid])) {
            self::_load($pid);
        }
        //Si on a pas réussi à chargé l'article (pas publiée?)
        if(!isset(self::$_elements[$pid])) {
            return FALSE;
        }

        return self::$_elements[$pid];
    }

    /**
     * fonction qui charge toutes les informations dans le variable statique $_elements.
     *
     * @param type $pid
     */
    private static function _load($pid) {
        $pid = intval($pid);
        $p = get_post($pid);

        if($p->post_type == "terrains") {
            $element = new stdClass();

            //traitement des donn�es
            $element->id = $pid;
            $element->title = $p->post_title;

            $element->permalink = get_permalink($p);
            $element->surface = get_field('surface', intval($pid));
            $element->prix_du_m = get_field('prix_du_m', intval($pid));
            $element->distance = get_field_object('distance', intval($pid));
            $element->duree = get_field('duree', intval($pid));
            $element->jirama = get_field('jirama', intval($pid));
            $element->acces_voiture = get_field('acces_voiture', intval($pid));
            $element->centre_commercial_a_proximite = get_field_object('centre_commercial_a_proximite', intval($pid));
            $element->etablissement_au_alentour = get_field('etablissement_au_alentour', intval($pid));
            $element->longitude = get_field('longitude', intval($pid));
            $element->latitude = get_field('latitude', intval($pid));
            $element->gallery_images  =self::getTerrainGallery($pid) ;
            $element->extrait = substr($p->content, 0,100);
           // $element->description = self::getDescription($pid);
            //stocker dans le tableau statique
            self::$_elements[$pid] = $element;
        }
    }
    public static function getDescription($id){
        $terrain = self::getById($id);
       
         $description = "Terrain à vendre à "; //.  $terrain->title ; . "de ".$terrain->surface;." de surface à partir de ".$terrain->prix_du_m;
         return $description;
    }

    public static function getTerrainGallery($id, $size = null) {
    //Get the images ids from the post_metadata
        $images = acf_photo_gallery('gallery_images', $id);

        //Check if return array has anything in it
        if( count($images) ) {

        //Cool, we got some data so now let's loop over it
            foreach($images as $image) {
                $id = $image['id']; // The attachment id of the media
                $title = $image['title']; //The title
                $caption= $image['caption']; //The caption
                $full_image_url= $image['full_image_url']; //Full size image url

                $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                $thumbnail_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160);
                $url= $image['url']; //Goto any link when clicked
                $target= $image['target']; //Open normal or new tab
                $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
            }
        }

        return $images;
    }
    /**
     * fonction qui retourne une liste filtrée
     *
     */
    public static function getBy($numberposts = -1, $orderby = 'date', $order = 'DESC', $meta_key = null) {
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

        $args = array(
            'post_type' => 'terrains',
            'post_status' => 'publish',
            'paged'=> $paged,
            'posts_per_page' => $numberposts,
            'order' => $order,
            'orderby' => $orderby,
            'fields' => 'ids'
        );

        if (!is_null($meta_key)) {
            $args['meta_key'] = $meta_key;
        }

        $elements = new WP_Query ( $args );

        $GLOBALS['wp_query'] = $elements;

        $elts = array ();
        if ( $elements->have_posts () ) {

            $elements = $elements->posts;

            foreach ( $elements as $id ) {
                $elt = self::getById ( intval ( $id ) );
                $elts [] = $elt;
            }
        }

        wp_reset_postdata ();

        return $elts;
    }
}
?>

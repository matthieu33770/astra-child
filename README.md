# child-theme-empty

### Description :

Il s'agit du thème enfant du thème astra afin de pouvoir modifier à souhait le thème.

### Installation :

Nous avons installé le thème parent astra. Puis nous avons créer un dossier "astra-child" dans le quel nous avons intégrer un fichier functions.php et style.css. Dans le fichier style.css nous avons déclarer le thème parent : 
/*
 Theme Name:   Astra Child
 Theme URI:    http://example.com/astra-child/
 Description:  Astra Child Theme for GlobeTrotter
 Author:       Matthieu LONDEIX
 Author URI:   http://example.com
 Template:     astra
 Version:      1.0.0
 License:      GNU General Public License v2 or later
 License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 Tags: one-column, two-columns, left-sidebar, e-commerce, right-sidebar, custom-colors, custom-menu, editor-style, featured-images, full-width-template, microformats, post-formats, rtl-language-support, theme-options, threaded-comments, translation-ready, blog
 Text Domain:  astra-child
*/
Ainsi que la charte de couleurs : 
/* White */
.has-white-color {
	color: #FFFFFF;
}

.has-white-background-color {
	background-color: #FFFFFF;
}

/* Mine Shaft */
.has-mine-shaft-color {
	color: #4A4A4A;
}

.has-mine-shaft-background-color {
	background-color: #4A4A4A;
}

/* Mongoose */
.has-mongoose-color {
	color: #B09F82;
}

.has-mongoose-background-color {
	background-color: #B09F82;
}

/* Pickled Bean */
.has-pickled-bean-color {
	color: #8B572A;
}

.has-pickled-bean-background-color {
	background-color: #8B572A;
}

Et dans le fichier functions.php nous indiquons que le thème enfant hérite du thème parent et nous avons ajouté le thème de charte graphique : 
<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'astra-style'; // This is 'astra-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_theme_support( 'editor-color-palette', array(
    array(
        'name' => __('White', 'genesis-sample' ),
        'slug' => 'white',
        'color' => '#FFFFFF',
    ),
    array(
        'name' => __( 'Mine Shaft', 'genesis-sample' ),
        'slug' => 'mine-shaft',
        'color' => '#4A4A4A',
    ),
    array(
        'name' => __( 'Mongoose', 'genesis-sample' ),
        'slug' => 'mongoose',
        'color' => '#B09F82',
    ),
	array(
        'name' => __( 'Pickled Bean', 'genesis-sample' ),
        'slug' => 'pickled-bean',
        'color' => '#8B572A',
    )
) );
?>

Pour finir l'installation, nous avons compresser en zip tout cela, et téléversé ce zip sur Wordpress.

### Utilisation :

L'utilisation de ce thème enfant permet de pouvoir appliquer la charte graphique demandé spécifiquement pour ce site. Il va permettre également de pouvoir ajouter et modifier des fonctionnalités bien spécifiques pour ce site exclusivement et ne pas craindre de perdre tout le travail en cas de mise à jours du thème parent par exemple.


### Ressources :

Liens URL : 

- https://github.com/pehaa/astra-child
- https://developer.wordpress.org/themes/advanced-topics/child-themes/#2-create-a-stylesheet-style-css
- https://developer.wordpress.org/themes/advanced-topics/child-themes/#3-enqueue-stylesheet
- https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/ 
- https://www.gregoirenoyelle.com/creer-couleurs-sur-mesure-editeur-moderne-wordpress-gutenberg/
- https://company-45185.frontify.com/d/fVRpz7xGUu30/blog-trotter-style-guide
- https://wpformation.com/roles-droits-privileges-utilisateurs-wordpress/

Extensions :

- All-in-one WP Migration : pour faire des imports/exports du projet.
- amr shortcode any widget : inclure un widget en ligne de code.
- Contact form 7 : créer un formulaire de contact.
- NextGen Gallery : afficher une galerie d'images.
- SMNTCS Google Webmaster Tools : utiliser les outils Google pour le référencement et analyse du site.
- Ultimate social media : pour créer des accés directs aux réseaux sociaux.
- WP Google Maps : Pour insérer les cartes.
- Yoast SEO : Analyse des pages et concéption du Sitemap.xml.

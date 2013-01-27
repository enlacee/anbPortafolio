<?php get_header(); ?>

<?php
/*
  content_url($path);
  includes_url

 */
$pagina = TEMPLATEPATH . '/';
$file = $pagina;

if (!empty($_REQUEST['op'])) {
    $file .= $_REQUEST['op'] . '.php';

    if (!file_exists($file)) {
        $pagina .= '404.php';
    } else {
        $pagina .= $_REQUEST['op'] . '.php';
    }
} else {
    $pagina .= 'portafolio.php';
}
load_template($pagina);
?>

<?php get_footer(); ?>



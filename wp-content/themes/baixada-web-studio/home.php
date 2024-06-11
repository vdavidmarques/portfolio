<?php 
 function checkEnvironment()
    {
        $serverUrl = $_SERVER['HTTP_HOST'];

        $productionUrl = 'baixadawebstudio.net';
        $localhostUrl = 'localhost';

        if ($serverUrl === $productionUrl) {
            return '115';
        }

        if ($serverUrl === $localhostUrl) {
            return '11';
        }

        return 'Ambiente desconhecido';
    }

    $environment = checkEnvironment();
    $id = $environment;
    
    get_header();
?>

    <div class="home">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="page home">
            <?php include 'components/banner.php'; ?>
            <?php /*include 'components/about.php';*/ ?>
            <?php /*include 'components/works.php';*/ ?>
            </div>
            <?php endwhile;
        endif; ?>
    </div>

<?php get_footer(); ?>
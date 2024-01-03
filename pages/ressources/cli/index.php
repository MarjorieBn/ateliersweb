<?php
    // config
    $title = "Ressources → Ligne de commande";
    $description = "Une interface en ligne de commande (ou terminal, ou console, ou CLI – Command line interface) est un outil qui permet de donner des instructions à un ordinateur en mode texte.";
    $section="ressources";
    $subsection="cli";
    $mdfile = "./cli.md";
    $nav = "/web/snippets/ressources/_resources.php"; // specific subnav
    // $custom_css = "custom.css"; // relative or absolute file URL
    // $custom_js = "custom.js"; // relative or absolute file URL

    // includes
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

    // nav snippet
    if(isset($nav)) include_once $_SERVER["DOCUMENT_ROOT"] . $nav;

    // markdown!
    $Parsedown = new ParsedownExtra();

?>

    <main class="pane active" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>

<?php
    // config
    $title = "Projets: Code is law";
    $section="projets";
    $subsection="textedit";
    // $nav = "/web/snippets/ressources/NAV.php"; // specific subnav
    $mdfile = "./textedit.md";

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

<style>
    @font-face {
        font-family: "Sprat";
        src: url("/web/assets/fonts/Sprat_Variable.woff2") format("woff2 supports variations"), 
            url("/web/assets/fonts/Sprat_Variable.woff2") format("woff2-variations");
        font-style: normal;
        font-weight: 100 200;
    }
    main h1, main h2, main h3, main h4 {
        text-align:center;
        font-family: "Sprat";
        margin: 0;
        font-weight: 100;
        font-variation-settings: 'wdth' 115;
        font-size: 2em;
    }
    main h1 { font-size: calc(4vw + 1em); font-variation-settings: 'wdth' 200; text-transform: uppercase;}
    main h2 { font-variation-settings: 'wdth' 150; font-size:1.5em }
    main h3 { font-variation-settings: 'wdth' 100; border:none; padding:0; margin-bottom:3em}
    hr {
        margin:4em auto;
        width:4em;
        background:none;
        border:none;
        border-top:3px solid black; 
    }
    
    #cil { font-size:.7em }
    #cil h1 { font-size: calc(2vw + 1em); font-variation-settings: 'wdth' 120; }
    main p { 
        margin: 1em auto
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    li a { text-decoration: none;}
    h6 {
        text-align:center;
        font-weight:normal;
        font-family: "Sprat";
        font-size:2.5em;
        margin:0
    }
    h6 em {
        font-variation-settings: 'wdth' 150, 'wght' 100; font-style:normal
    }
    h6:last-of-type{
        margin-bottom:4em
    }
    .objectif{
        font-variation-settings: 'wdth' 150; font-size:1.5em 
    }
    .objectif1{
        font-variation-settings: 'wdth' 200, 'wght' 100; font-size:2.5em;  text-transform: uppercase;
    }
    .objectif2{
        font-variation-settings: 'wdth' 50, 'wght' 900; font-size:4.5em 
    }
    .objectif3{
        font-variation-settings: 'wdth' 50, 'wght' 100; font-size:2.5em ;  text-transform: uppercase;
    }
</style>

    <main class="pane active" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>

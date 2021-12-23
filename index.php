<?php
// echo JText::_("TPL_COMPANYLOGO_CUSTOM");
defined("_JEXEC") or die();
$doc = JFactory::getDocument();
$doc->addStyleSheet(JUri::base(TRUE)."/templates/".$doc->template."/css/bootstrap.min.cssstyle.css");
$doc->addStyleSheet(JUri::base(TRUE)."/templates/".$doc->template."/css/magnific-popup.css");
$doc->addStyleSheet(JUri::base(TRUE)."/templates/".$doc->template."/css/templatemo-style.css");
?>
<!DOCTYPE html>
<html>
<head>
    <jdoc:include type="head"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="tm-left-right-container">
            <!-- Left column: logo and menu -->
            <div class="tm-blue-bg tm-left-column">
                <div class="tm-logo-div text-xs-center">
                    <img src="<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/img/tm-neaty-logo.png" alt="Logo">
                    <h1 class="tm-site-name">Neaty</h1>
                </div>
                <nav class="tm-main-nav">
                    <jdoc:include type="modules" name="position-0" />
                </nav>
                <nav class="tm-main-nav">
                    
                    <ul class="tm-main-nav-ul">
                        <h3>Категории</h3>
                        <jdoc:include type="modules" name="position-1"/>
                    </ul>
                </nav>
            </div> <!-- Left column: logo and menu -->
            <!-- Right column: content -->
            <div class="tm-right-column">
                <figure>
                    <img src="<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/img/neaty-01.jpg" alt="Header image" class="img-fluid">
                </figure>
                <div class="tm-content-div">
                    <!-- Welcome section -->
                    <section id="welcome" class="tm-section">
                        <!-- <header>
                            <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Welcome to Neaty Design</h2>
                        </header>
                        <p>Neaty is simple and clean design HTML CSS template for any kind of website. Feel free to
                            use this layout. Please tell your friends about templatemo website. Thank you.
                            Suspendisse imperdiet, felis eu hendrerit pretium, sapien mauris blandit arcu, et
                            accumsan neque est ut erat. Vivamus eget tellus euismod, interdum nibh at, eleifend
                            justo. Quisque placerat ante in ex tempor, ultrices bibendum nunc finibus. Etiam luctus
                            nec eros vel pulvinar.</p> -->
                            <jdoc:include type="component"/>
                    </section>
                    <footer>
                        <p class="tm-copyright-p">Copyright &copy; <span class="tm-current-year">2017</span> Your
                            Company
                            | Designed by <a href="http://www.templatemo.com" target="_parent">templatemo</a></p>
                    </footer>
                </div>
            </div> <!-- Right column: content -->
        </div>
    </div> <!-- row -->
</div> <!-- container -->
<!-- load JS files -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>
<script>
$(document).ready(function () {
    // Single page nav
    $('.tm-main-nav').singlePageNav({
        'currentClass': "active",
        offset: 20
    });
    // Magnific pop up
    $('.tm-gallery-1').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery: {
            enabled: true
        }
        // other options
    });
    $('.tm-gallery-2').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery: {
            enabled: true
        }
        // other options
    });
    $('.tm-gallery-3').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery: {
            enabled: true
        }
        // other options
    });
    $('.tm-current-year').text(new Date().getFullYear());
});
</script>
</body>
</html>
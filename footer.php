<?php
/**
 * The template for displaying the footer
 * Now that blocks can go into widgets, no reason to have multiple footer areas
 */
?>

<footer>
	<?php dynamic_sidebar( 'footer_area' ); ?>
</footer>
<?php wp_footer(); ?>
<script>
function googleTranslateElementInit() { new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');}</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
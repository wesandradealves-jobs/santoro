<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package Acme Themes

 * @subpackage Lawyer Zone

 */



/**

 * lawyer_zone_action_after_content hook

 * @since Lawyer Zone 1.0.0

 *

 * @hooked null

 */

do_action( 'lawyer_zone_action_after_content' );



/**

 * lawyer_zone_action_before_footer hook

 * @since Lawyer Zone 1.0.0

 *

 * @hooked null

 */

do_action( 'lawyer_zone_action_before_footer' );



/**

 * lawyer_zone_action_footer hook

 * @since Lawyer Zone 1.0.0

 *

 * @hooked lawyer_zone_footer - 10

 */

do_action( 'lawyer_zone_action_footer' );



/**

 * lawyer_zone_action_after_footer hook

 * @since Lawyer Zone 1.0.0

 *

 * @hooked null

 */

do_action( 'lawyer_zone_action_after_footer' );



/**

 * lawyer_zone_action_after hook

 * @since Lawyer Zone 1.0.0

 *

 * @hooked lawyer_zone_page_end - 10

 */

do_action( 'lawyer_zone_action_after' );



wp_footer();

?>

<!-- Owl Stylesheets -->
<link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
<!-- javascript -->
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script>
	$(document).ready(function () {
		$('.owl-carousel').owlCarousel({
		    loop: true,
		    nav: false,
		    autoplay: true,
		    auto: true,
		   	dots: false,
		    items: 1
		})			
	});
</script>
<style>
	.item {
	    background-size: cover;
	    background-position: center center;
	    background-repeat: no-repeat;
	  position: relative;
	   overflow: hidden;
	}
	.item .container {
	    height: 35vw;
	    display: block;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    z-index: 2;
	    flex-flow: column wrap;
	}
	.item .btn {
	    width: 100%;
	    max-width: 140px;
	    margin: 15px auto 0;
	    border: 2px white solid;
	    line-height: 1;
	    color: white;
	}
	.item .container * {position:relative; z-index: 2;}
	.item::after {
		position: absolute;
		content: '';
		display: block;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		background-color: rgba(39, 55, 192, 0.7);
	}
	#lawyer_zone_service-3{
		z-index: 9;
		position: relative;
	}
	.item h2{
		font-family: 'Source Sans Pro', sans-serif !important;
		color: white !important;
		font-size: 4rem !important;		
	}
	#home-services {
	    padding: 0 75px;
	    font-family: 'Source Sans Pro', sans-serif !important;
	    margin-top: -90px;
	    z-index: 9;
	    position: relative;
	    align-items: stretch !important;
	}	
	#home-services .panel-grid-cell{
		background: white;
		padding: 30px;
		color: gray;
		box-shadow: 0px 10px 30px -24px black;
	}
	#home-services h2 {
	    max-width: 230px;
	    margin: 0 auto 15px;
	    text-align: center;
	}	
	.at-navbar .featured-button {
		background: #44465d;
    	margin-top: 15px;
	}
	.home .acme-teams .featured-entries-col{
		background: white
	}
	.home #team .row {
	    justify-content: center;
	    display: flex;
	    flex-flow: row;
	    /* background: whitesmoke; */
	}	
	div.wpforms-container-full .wpforms-form input.wpforms-field-medium, div.wpforms-container-full .wpforms-form select.wpforms-field-medium, div.wpforms-container-full .wpforms-form .wpforms-field-row.wpforms-field-medium{
		width: 100%!important;
		max-width: 100%!important;
	}
	aside#lawyer_zone_service-5 .single-list .icon {
	    display: none;
	}	
	aside#lawyer_zone_service-5 .single-list .single-item {
	    padding: 55px 0;
	    margin: 0;
	}	
	section#lawyer_zone_service-5 .title {
	    margin: 0;
	}	
	section#lawyer_zone_contact-16410001 form {
	    max-width: 568px;
	    margin: 0 auto;
	}	
	.whatsapp {
		position: fixed;
		bottom: 0;
		right: 0;
		margin: 20px;	
		z-index: 50;	
	}
	.whatsapp img {
		width: 50px;
	}
	a.sm-up-container {
	    display: none !important;
	}	
	#team-area img {
	    width: 100%;
	}	
	aside#lawyer_zone_contact-3 {
	    background: whitesmoke;
	}	
	.info-icon-box-wrapper {
	    display: inline-block;
	    vertical-align: middle;		
	}
	.btn.atendimento {
	    line-height: initial;
	    width: auto;
	    background-color: #23282d!important;
	    padding: 8px 10px;
	    border: 0;
	}
	.main-navigation a {
		font-size: 16px;
	}
	.home .acme-services.feature{
		margin-top: 0
	}
	section#lawyer_zone_gallery-3 .row {
	    display: flex;
	    flex-flow: row wrap;
	    align-items: stretch;
	}
	section#lawyer_zone_gallery-3 .row > * {
	    position: relative !important;
	    flex: 0 0 33.333%;
	    top: 0 !important;
	    left: 0 !important;
	}	
	@media only screen and (max-width: 737px) {
		section#lawyer_zone_gallery-3 .row > * {
		    flex: 0 0 50%;
		}	
		@media only screen and (max-width: 414px) {
			section#lawyer_zone_gallery-3 .row > * {
			    flex: 0 0 100%;
			}	
		}
	}
	section#lawyer_zone_gallery-3 .row > * > * {
		height: 100%;
	}	
	.at-gallery-item img {
		height: 100%;
		object-fit: cover;
	}
	.socio {
	    max-width: 840px;
	    margin: 15px auto 0;
	    text-align: center;		
	    font-family: 'Source Sans Pro', sans-serif !important;
	}
	.top-header {
		font-family: 'Source Sans Pro', sans-serif !important;
	}
	.socio .avatar {
	    border-radius: 50%;
	    height: 320px;
	    display: block;
	    float: none;
	    width: 320px;
	    margin: 0 auto 30px;
	    box-shadow: 0px 30px 25px -25px rgba(0,0,0,.5);
	}
	body h1, body h2, body h3, body h4, body li, body p, body label {
		font-family: 'Source Sans Pro', sans-serif !important
	}
	.socio strong{
		display: block;
		font-size: 3rem;
		margin-top: 50px
	}
	h1,h2,h3,h4,h5{
		font-weight: bold!important
	}
</style>
<a target="_blank" class="whatsapp" href="https://api.whatsapp.com/send?phone=5521999947662&text=Ol%C3%A1!%20Gostaria%20de%20Informa%C3%A7%C3%B5es">
	<!-- <i class="fa fa-whatsapp"></i> -->
	<img src="https://cdn3.iconfinder.com/data/icons/social-network-30/512/social-01-512.png" width="90" alt="">
</a>
</body>

</html>
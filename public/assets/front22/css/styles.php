<?php
header("Content-type: text/css; charset: UTF-8");
if(isset($_GET['color']))
{
	$color = '#'.$_GET['color'];
}
else {
	$color = '#0363D1';
}

?>

/*Loader Design*/
            #cover {
                position: fixed;
                height: 100%;
                width: 100%;
                z-index: 9999;
                background-repeat: no-repeat !important;
                background-position: center !important;
                background-color: #fff !important;
            }

/*Loader Design Ends*/

/* -----------------Pagination Part Will Remain Default----------------- */

            .pagination>.disabled>a:focus, 
            .pagination>.disabled>a:hover, 
            .pagination>.disabled>span, 
            .pagination>.disabled>span:focus, 
            .pagination>.disabled>span:hover {
                color: <?php echo $color; ?>;
            }

            .pagination>.disabled>a, 
            .pagination>.disabled>a:focus, 
            .pagination>.disabled>a:hover, 
            .pagination>.disabled>span, 
            .pagination>.disabled>span:focus, 
            .pagination>.disabled>span:hover {
                border-color: <?php echo $color; ?>;
            }

            .pagination>.active>a, 
            .pagination>.active>a:focus, 
            .pagination>.active>a:hover, 
            .pagination>.active>span, 
            .pagination>.active>span:focus, 
            .pagination>.active>span:hover {
                background-color: <?php echo $color; ?>;
                border-color: <?php echo $color; ?>;

            }
            .pagination>li>a, .pagination>li>span {
                border: 1px solid <?php echo $color; ?>;

            }
            .pagination>li>a, .pagination>li>span {
                color: <?php echo $color; ?>;
                border: 1px solid <?php echo $color; ?>;
            }
.pagination>li>a:focus, .pagination>li>a:hover, .pagination>li>span:focus, .pagination>li>span:hover {
    border-color: <?php echo $color; ?>;
}

/* -----------------Pagination Part Ends----------------- */


.mybtn1 {
  background-color: <?php echo $color; ?>;
}
.section-title .title {
  color: <?php echo $color; ?>;
}
.input-field.error {
  border: 1px solid <?php echo $color; ?>;
}

.input-field.error::-webkit-input-placeholder {
  /* WebKit browsers */
  color: <?php echo $color; ?>;
}

.input-field.error:-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  color: <?php echo $color; ?>;
}

.input-field.error::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  color: <?php echo $color; ?>;
}

.input-field.error:-ms-input-placeholder {
  /* Internet Explorer 10+ */
  color: <?php echo $color; ?>;
}

.input-field.error:focus {
  border-color: <?php echo $color; ?>;
}

.video-play-btn {
  background-color: <?php echo $color; ?>;
}
.checkbox-inner input:checked ~ .checkmark {
  background-color: <?php echo $color; ?>;
}
.preloader-inner {
  background: <?php echo $color; ?>;
}
.preloader-inner .cancel-preloader a {
  color: <?php echo $color; ?>;
}
.preloader-inner .cancel-preloader a:hover {
  background-color: <?php echo $color; ?>;
}
.navigation .dropdown-menu .dropdown-item:hover {
  background: <?php echo $color; ?>;
}
.navigation .navbar #mainmenu .contact-btn {
  background: <?php echo $color; ?>;
}
.heroarea .title {
  color: <?php echo $color; ?>;
}
.heroarea .link {
  background: <?php echo $color; ?>;
}
.service .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-prev,
.service .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-next {
  background: <?php echo $color; ?>;
}
.about .about-slider .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-prev,
.about .about-slider .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-next {
  background: <?php echo $color; ?>;
}
.ui-accordion .ui-accordion-header {
  background: <?php echo $color; ?>;
}
.packages .single-packages .content-wrapper .left-content .buy-btn {
  background: <?php echo $color; ?>;
}
.packages .single-packages .content-wrapper .right-content .price {
  color: <?php echo $color; ?>;
}
.gallery .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-prev,
.gallery .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-next {
  background: <?php echo $color; ?>;
}

.gallery .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-prev:hover,
.gallery .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-next:hover {
  color: <?php echo $color; ?>;
}

.testimonials .item .review .right .address {
  color: <?php echo $color; ?>;
}
.testimonials .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-prev,
.testimonials .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-next {
  background: <?php echo $color; ?>;
}
.testimonials .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-prev:hover,
.testimonials .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-next:hover {
  color: <?php echo $color; ?>;
}
.blog .blog-box .blog-images .date {
  background: <?php echo $color; ?>;
}
.blog .blog-box .details .read-more-btn {
  background: <?php echo $color; ?>;
}
.subscribe .subscribe-form form button {
  background: <?php echo $color; ?>;
}
.footer-area .copyright-area .right-atea .fotter-social-links li a {
  color: <?php echo $color; ?>;
  border: 1px solid <?php echo $color; ?>;
}
.packges-details .overview-area .link {
  color: <?php echo $color; ?>;
}
.packges-details .highlights-area .list li p i {
  color: <?php echo $color; ?>;
}

.packges-details .highlights-area .link {
  color: <?php echo $color; ?>;
}
.packges-details .package-details-tab .tab-top-sub-title {
  color: <?php echo $color; ?>;
}
.packges-details .in-ex-area .content-area .list li p i {
  color: <?php echo $color; ?>;
}
.packges-details .right-content-start .book-now-area .total-area .left .price {
  color: <?php echo $color; ?>;
}
.packges-details .right-content-start .book-now-area .total-area .right a,
.packges-details .right-content-start .book-now-area .total-area .right button[type=submit] {
  background-color: <?php echo $color; ?>;
}
.packges-details .right-content-start .how-it-work .list li .box .left .num {
  background: <?php echo $color; ?>;
}

.packges-details .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-prev,
.packges-details .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-next {
  color: <?php echo $color; ?>;
}
.packges-details .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-prev:hover,
.packges-details .owl-carousel.owl-theme .owl-controls .owl-nav div.owl-next:hover {
  background: <?php echo $color; ?>;
}
.packges-details .ui-state-active {
  background: <?php echo $color; ?>;
}
.blog-details .blog-content .content .post-meta li a:hover {
  color: <?php echo $color; ?>;
}
.blog-details .blog-content .content blockquote {
  border-left: 5px solid <?php echo $color; ?>;
  color: <?php echo $color; ?>;
}
.blog-details .blog-content .content .tag-social-link .social-links li a {
  background: <?php echo $color; ?>;
}
.blog-details .comments .comment-box-area li .comment-box .left .img {
  border: 2px solid <?php echo $color; ?>;
}
.blog-details .comments .comment-box-area li .comment-box .left .replay {
  background: <?php echo $color; ?>;
}
.blog-details .comments .comment-box-area li .comment-box .left .replay:hover {
  background: <?php echo $color; ?>;
}
.blog-details .comments .comment-box-area li .replay-form .replay-form-close:hover {
  background: <?php echo $color; ?>;
  border-color: <?php echo $color; ?>;
}
.blog-details .comments .comment-box-area li .replay-form .replay-comment-btn {

  background: <?php echo $color; ?>;
}

.blog-details .comments .comment-box-area li .replay-form .replay-comment-btn:hover {
  background: <?php echo $color; ?>;
}
.blog-details .write-comment .submit-btn {
  background: <?php echo $color; ?>;
}

.blog-details .write-comment .submit-btn:hover {
  background: <?php echo $color; ?>;
}
.blog-details .blog-aside .categori .categori-list li a:hover, .blog-details .blog-aside .categori .categori-list li a.active {
  color: <?php echo $color; ?>;
}
.blog-details .blog-aside .recent-post-widget .post-list li .post .post-details .post-title:hover {
  color: <?php echo $color; ?>;
}
.blog-details .blog-aside .archives .archives-list li a:hover {
  color: <?php echo $color; ?>;
}
.blog-details .blog-aside .tags .tags-list li a:hover {
  background: <?php echo $color; ?>;
  border-color: <?php echo $color; ?>;
}
.checkout .right-area .header-area {
  background: <?php echo $color; ?>;
}
.checkout .right-area .footer .right .price {
  color: <?php echo $color; ?>;
}
.contact-us .contact-section-title .title {
  color: <?php echo $color; ?>;
}

.contact-us .contact-section-title .text {
  color: <?php echo $color; ?>;
}
.contact-us .left-area .contact-form .submit-btn {
  background: <?php echo $color; ?>;
}

.contact-us .left-area .contact-form .submit-btn:hover {
  background: <?php echo $color; ?>;
}

.contact-us .right-area .contact-info {
  border-bottom: 2px solid <?php echo $color; ?>;
}

.contact-us .right-area .contact-info .left .icon {
  background: <?php echo $color; ?>;
}
.contact-us .right-area .social-links ul li a {
  background: <?php echo $color; ?>;
}

.contact-us .right-area .social-links ul li a:hover {
  background: <?php echo $color; ?>;
}

.heroarea .right-area .img .video-icon {
  background: <?php echo $color; ?>b3;

}
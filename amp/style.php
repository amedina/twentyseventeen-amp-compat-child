<?php
// Get content width
$content_max_width       = absint( $this->get( 'content_max_width' ) );

// Get template colors
$theme_color             = $this->get_customizer_setting( 'theme_color' );
$text_color              = $this->get_customizer_setting( 'text_color' );
$muted_text_color        = $this->get_customizer_setting( 'muted_text_color' );
$border_color            = $this->get_customizer_setting( 'border_color' );
$link_color              = $this->get_customizer_setting( 'link_color' );
$header_background_color = $this->get_customizer_setting( 'header_background_color' );
$header_color            = $this->get_customizer_setting( 'header_color' );
?>
/* From parent theme */

.home-in-sidebar {
    margin-top: 30px;
    margin-bottom: 30px;
    margin-right: 0px;
    margin-left: 0px;
    color: #000;
}

/**************************************************************
    13.1 Header
**************************************************************/

#masthead .wrap {
position: relative;
}

.site-header {
background-color: #fafafa;
position: relative;
}

/* Site branding */

.site-branding {
padding: 1em 0;
position: relative;
-webkit-transition: margin-bottom 0.2s;
transition: margin-bottom 0.2s;
z-index: 3;
}

.site-branding a {
text-decoration: none;
-webkit-transition: opacity 0.2s;
transition: opacity 0.2s;
}

.site-branding a:hover,
.site-branding a:focus {
opacity: 0.7;
}

.site-title {
    clear: none;
    font-size: 24px;
    font-size: 1.5rem;
    font-weight: 800;
    line-height: 1.25;
    letter-spacing: 0.08em;
    margin: 0;
    padding: 0;
    text-transform: uppercase;
}

.site-title,
.site-title a {
    color: #222;
    opacity: 1; /* Prevent opacity from changing during selective refreshes in the customize preview */
}

body.has-header-image .site-title,
body.has-header-image .site-title a {
    color: #fff;
}

.site-description {
    color: #666;
    font-size: 13px;
    font-size: 0.8125rem;
    margin-bottom: 0;
}

body.has-header-image .site-description,
body.has-header-video .site-description {
    color: #fff;
    opacity: 0.8;
}

.custom-logo-link {
    display: inline-block;
    padding-right: 1em;
    vertical-align: middle;
    width: auto;
}

.custom-logo-link img {
    display: inline-block;
    max-height: 80px;
    width: auto;
}

body.home.title-tagline-hidden.has-header-image .custom-logo-link img,
body.home.title-tagline-hidden.has-header-video .custom-logo-link img {
    max-height: 200px;
    max-width: 100%;
}

.custom-logo-link a:hover,
.custom-logo-link a:focus {
    opacity: 0.9;
}

.custom-header {
    position: relative;
}

.custom-header-media {
    bottom: 0;
    left: 0;
    overflow: hidden;
    position: absolute;
    right: 0;
    top: 0;
    width: 100%;
}

.custom-header-media:before {
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0+0,0.3+75 */
    background: -moz-linear-gradient(to top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 75%, rgba(0, 0, 0, 0.3) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(to top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 75%, rgba(0, 0, 0, 0.3) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 75%, rgba(0, 0, 0, 0.3) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00000000", endColorstr="#4d000000", GradientType=0); /* IE6-9 */
    bottom: 0;
    content: "";
    display: block;
    height: 100%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: 2;
}

.has-header-image .custom-header-media img {
    position: fixed;
    height: auto;
    left: 50%;
    max-width: 1000%;
    min-height: 100%;
    min-width: 100%;
    min-width: 100vw; /* vw prevents 1px gap on left that 100% has */
    width: auto;
    top: 50%;
    padding-bottom: 1px; /* Prevent header from extending beyond the footer */
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}


.has-header-image:not(.twentyseventeen-front-page):not(.home) .custom-header-media img {
    bottom: 0;
    position: absolute;
    top: auto;
    -ms-transform: translateX(-50%) translateY(0);
    -moz-transform: translateX(-50%) translateY(0);
    -webkit-transform: translateX(-50%) translateY(0);
    transform: translateX(-50%) translateY(0);
}

/* For browsers that support 'object-fit' */
@supports ( object-fit: cover ) {
    .has-header-image .custom-header-media img,
    .has-header-video .custom-header-media video,
    .has-header-video .custom-header-media iframe,
    .has-header-image:not(.twentyseventeen-front-page):not(.home) .custom-header-media img {
        height: 100%;
        left: 0;
        -o-object-fit: cover;
        object-fit: cover;
        top: 0;
        -ms-transform: none;
        -moz-transform: none;
        -webkit-transform: none;
        transform: none;
        width: 100%;
    }
}

/* Hides div in Customizer preview when header images or videos change. */


.has-header-image.twentyseventeen-front-page .site-branding,
.has-header-video.twentyseventeen-front-page .site-branding,
.has-header-image.home.blog .site-branding,
.has-header-video.home.blog .site-branding {
    display: table-cell;
    height: 100%;
    vertical-align: bottom;
}
/**************************************************************/
/* Post Navigation */
/**************************************************************/

.nav-links:before,
.nav-links:after {
    content: "";
    display: table;
    table-layout: fixed;
}

.nav-links:after {
    clear: both;
}

.nav-links .nav-previous .nav-title .nav-title-icon-wrapper {
    margin-right: 0.5em;
}

.nav-links .nav-next .nav-title .nav-title-icon-wrapper {
    margin-left: 0.5em;
}

.post-navigation a {
    -webkit-box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 1);
    box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 1);
    text-decoration: none;
    -webkit-transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, box-shadow 130ms ease-in-out, -webkit-box-shadow 130ms ease-in-out;
}

.post-navigation a:focus,
.post-navigation a:hover {
    color: #000;
    -webkit-box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1);
    box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1);
}
.post-navigation a:focus .icon,
.post-navigation a:hover .icon {
    color: #222;
}

.post-navigation {
    font-weight: 800;
    margin: 3em 0;
}

.post-navigation .nav-links {
    padding: 1em 0;
}

.nav-subtitle {
    background: transparent;
    color: #767676;
    display: block;
    font-size: 11px;
    font-size: 0.6875rem;
    letter-spacing: 0.1818em;
    margin-bottom: 1em;
    text-transform: uppercase;
}

.nav-title {
    color: #333;
    font-size: 15px;
    font-size: 0.9375rem;
}

.post-navigation .nav-next {
    margin-top: 1.5em;
}

.nav-links .nav-previous .nav-title .nav-title-icon-wrapper {
    margin-right: 0.5em;
}

.nav-links .nav-next .nav-title .nav-title-icon-wrapper {
    margin-left: 0.5em;
}

@media screen and (min-width: 30em) {
    .post-navigation {
        clear: both;
    }
    
    .post-navigation .nav-previous {
        float: left;
        width: 50%;
    }
    
    .post-navigation .nav-next {
        float: right;
        text-align: right;
        width: 50%;
    }
    
    .nav-next,
    .post-navigation .nav-next {
        margin-top: 0;
    }

}

@media screen and (min-width: 48em) {	
    .nav-links .nav-title {
        position: relative;
    }
    
    .nav-title-icon-wrapper {
        position: absolute;
        text-align: center;
        width: 2em;
    }
    
    .nav-links .nav-previous .nav-title .nav-title-icon-wrapper {
        left: -2em;
    }
    
    .nav-links .nav-next .nav-title .nav-title-icon-wrapper {
        right: -2em;
    }
}

/**************************************************************/
/* Layout
/**************************************************************/

.wrap {
    margin-left: auto;
    margin-right: auto;
    max-width: 700px;
    padding-left: 2em;
    padding-right: 2em;
}

.wrap:after {
    clear: both;
    content: "";
    display: block;
}

/**************************************************************/
/* Screen Reader Text
/**************************************************************/

.screen-reader-text {
    clip: rect(1px, 1px, 1px, 1px);
    height: 1px;
    overflow: hidden;
    position: absolute;
    width: 1px;
    word-wrap: normal;
}

.screen-reader-text:focus {
    background-color: #f1f1f1;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
    box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
    clip: auto;
    color: #21759b;
    display: block;
    font-size: 14px;
    font-size: 0.875rem;
    font-weight: 700;
    height: auto;
    left: 5px;
    line-height: normal;
    padding: 15px 23px 14px;
    text-decoration: none;
    top: 5px;
    width: auto;
    z-index: 100000; /* Above WP toolbar. */
}
/**************************************************************/
/* byline */
.byline,
.updated:not(.published) {
    display: not;
}

.entry-title {
    color: #222;
    font-size: 14px;
    font-size: 0.875rem;
    font-weight: 800;
    letter-spacing: 0.14em;
    text-transform: uppercase;
}

.entry-title,
.entry-title {
    font-size: 26px;
    font-size: 1.625rem;
}

.single-featured-image-header {
    display: block;
    margin: auto;
    background-color: #fafafa;
    border-bottom: 1px solid #eee;
}


.site-content {
    padding: 5.5em 0 0;
}

/**************************************************************/
/* Widgets
/**************************************************************/

.widget-area:before,
.widget-area:after,
.widget:before,
.widget:after {
    content: "";
    display: table;
    table-layout: fixed;
}

.widget-area:after,
.widget:after {
    clear: both;
}

.widget-area a {
    -webkit-box-shadow: inset 0 -1px 0 rgba(15, 15, 15, 1);
    box-shadow: inset 0 -1px 0 rgba(15, 15, 15, 1);
    -webkit-transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, box-shadow 130ms ease-in-out, -webkit-box-shadow 130ms ease-in-out;
}

.widget a img {
    -webkit-box-shadow: 0 0 0 8px #fff;
    box-shadow: 0 0 0 8px #fff;
}

.widget .widget-title a,
.widget ul li a {
    -webkit-box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 1);
    box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 1);
    text-decoration: none;
    -webkit-transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, box-shadow 130ms ease-in-out, -webkit-box-shadow 130ms ease-in-out;
}

.widget .widget-title a:focus,
.widget .widget-title a:hover,
.widget ul li a:focus,
.widget ul li a:hover {
    color: #000;
    -webkit-box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1);
    box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1);
}
h2.widget-title {
    color: #222;
    font-size: 13px;
    font-size: 0.8125rem;
    font-weight: 800;
    letter-spacing: 0.1818em;
    margin-bottom: 1.5em;
    text-transform: uppercase;
}

.widget-title a {
    color: inherit;
}

/* widget forms */

.widget select {
    width: 100%;
}


/* widget lists */

.widget ul {
    list-style: none;
    margin: 0;
}

.widget ul li,
.widget ol li {
    border-bottom: 1px solid #ddd;
    border-top: 1px solid #ddd;
    padding: 0.5em 0;
}

.widget ul li + li {
    margin-top: -1px;
}

.widget ul li ul {
    margin: 0 0 -1px;
    padding: 0;
    position: relative;
}

.widget ul li li {
    border: 0;
    padding-left: 24px;
    padding-left: 1.5rem;
}

/* Widget lists of links */

.widget_top-posts ul li ul,
.widget_rss_links ul li ul,
.widget-grofile ul.grofile-links li ul,
.widget_pages ul li ul,
.widget_meta ul li ul {
    bottom: 0;
}

.widget_nav_menu ul li li,
.widget_top-posts ul li,
.widget_top-posts ul li li,
.widget_rss_links ul li,
.widget_rss_links ul li li,
.widget-grofile ul.grofile-links li,
.widget-grofile ul.grofile-links li li {
    padding-bottom: 0.25em;
    padding-top: 0.25em;
}

.widget_rss ul li {
    padding-bottom: 1em;
    padding-top: 1em;
}

/* widget markup */

.widget .post-date,
.widget .rss-date {
    font-size: 0.81em;
}

/* Text widget */

.widget_text {
    word-wrap: break-word;
}

.widget_text ul {
    list-style: disc;
    margin: 0 0 1.5em 1.5em;
}

.widget_text ol {
    list-style: decimal;
}

.widget_text ul li,
.widget_text ol li {
    border: none;
}

.widget_text ul li:last-child,
.widget_text ol li:last-child {
    padding-bottom: 0;
}

.widget_text ul li ul {
    margin: 0 0 0 1.5em;
}

.widget_text ul li li {
    padding-left: 0;
    padding-right: 0;
}

.widget_text ol li {
    list-style-position: inside;
}

.widget_text ol li + li {
    margin-top: -1px;
}

/* RSS Widget */

.widget_rss .widget-title .rsswidget:first-child {
    float: right;
}

.widget_rss .widget-title .rsswidget:first-child:hover {
    background-color: transparent;
}

.widget_rss .widget-title .rsswidget:first-child img {
    display: block;
}

.widget_rss ul li {
    padding: 2.125em 0;
}

.widget_rss ul li:first-child {
    border-top: none;
    padding-top: 0;
}

.widget_rss li .rsswidget {
    font-size: 22px;
    font-size: 1.375rem;
    font-weight: 300;
    line-height: 1.4;
}

.widget_rss .rss-date,
.widget_rss li cite {
    color: #767676;
    display: block;
    font-size: 10px;
    font-size: 0.625rem;
    font-style: normal;
    font-weight: 800;
    letter-spacing: 0.18em;
    line-height: 1.5;
    text-transform: uppercase;
}

.widget_rss .rss-date {
    margin: 0.5em 0 1.5em;
    padding: 0;
}

.widget_rss .rssSummary {
    margin-bottom: 0.5em;
}

/* Contact Info Widget */

.widget_contact_info .contact-map {
    margin-bottom: 0.5em;
}

#header-sidebar .widget-title {
    display: none;
}
/**************************************************************/
/* Footers
/**************************************************************/

.entry-footer:before,
.entry-footer:after,
.site-footer:before,
.site-footer:after,
.widget-area:before,
.widget-area:after,
.widget:before,
.widget:after {
    content: "";
    display: table;
    table-layout: fixed;
}

.entry-footer:after,
.site-footer:after,
.widget-area:after,
.widget:after {
    clear: both;
}

.site-footer .widget-area a,
.posts-navigation a {
    -webkit-box-shadow: inset 0 -1px 0 rgba(15, 15, 15, 1);
    box-shadow: inset 0 -1px 0 rgba(15, 15, 15, 1);
    -webkit-transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, box-shadow 130ms ease-in-out, -webkit-box-shadow 130ms ease-in-out;
}

.site-footer .widget-area ul li a,
.site-footer .widget-area ul li a {
    -webkit-box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 1);
    box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 1);
    text-decoration: none;
    -webkit-transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, box-shadow 130ms ease-in-out, -webkit-box-shadow 130ms ease-in-out;
}

.site-footer .widget-area a:focus,
.site-footer .widget-area a:hover,
.entry-footer a:focus,
.entry-footer a:hover,
.entry-footer .cat-links a:focus,
.entry-footer .cat-links a:hover,
.entry-footer .tags-links a:focus,
.entry-footer .tags-links a:hover {
    color: #000;
    -webkit-box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1);
    box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1);
}

.footer {
    display: block;
}

.site-footer {
    border-top: 1px solid #eee;
}

.site-footer .wrap {
    padding-bottom: 1.5em;
    padding-top: 2em;
}


.site-footer .widget-area {
    padding-bottom: 2em;
    padding-top: 2em;
}

@media screen and (min-width: 30em) {
    .site-footer {
        font-size: 16px;
        font-size: 1rem;
    }
}

@media screen and (min-width: 48em) {
    .site-footer {
        font-size: 14px;
        font-size: 0.875rem;
        line-height: 1.6;
        margin-top: 3em;
    }
    .site-footer .widget-column.footer-widget-1 {
        float: left;
        width: 36%;
    }
    
    .site-footer .widget-column.footer-widget-2 {
        float: right;
        width: 58%;
    }
}

/*********************/
/* Site Info */
/*********************/

.site-info {
    font-size: 14px;
    font-size: 0.875rem;
    margin-bottom: 1em;
}

.site-info a {
    -webkit-box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 1);
    box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 1);
    text-decoration: none;
    -webkit-transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, box-shadow 130ms ease-in-out, -webkit-box-shadow 130ms ease-in-out;
}

.site-info a:focus,
.site-info a:hover {
    color: #000;
    -webkit-box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1);
    box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1);
}

.site-info a {
    color: #666;
}

.site-info .sep {
    margin: 0;
    display: block;
    visibility: hidden;
    height: 0;
    width: 100%;
}

@media screen and (min-width: 48em) {
    .site-info {
        float: left;
        padding: 0.7em 0 0;
        width: 58%;
    }
    .site-info .sep {
        margin: 0 0.5em;
        display: inline;
        visibility: visible;
        height: auto;
        width: auto;
    }
}

/*********************/
/* Entry footer */
/*********************/

.entry-footer:after {
    clear: both;
}

.entry-footer {
    border-bottom: 1px solid #eee;
    border-top: 1px solid #eee;
    margin-top: 2em;
    padding: 2em 0;
}

.entry-footer .cat-links,
.entry-footer .tags-links {
    display: block;
    font-size: 11px;
    font-size: 0.6875rem;
    font-weight: 800;
    letter-spacing: 0.1818em;
    padding-left: 2.5em;
    position: relative;
    text-transform: uppercase;
}

.entry-footer .cat-links + .tags-links {
    margin-top: 1em;
}

.entry-footer a,
.entry-footer .cat-links a,
.entry-footer .tags-links a {
    color: #333;
    -webkit-box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 1);
    box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 1);
    text-decoration: none;
    -webkit-transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, -webkit-box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, box-shadow 130ms ease-in-out;
    transition: color 80ms ease-in, box-shadow 130ms ease-in-out, -webkit-box-shadow 130ms ease-in-out;
}

.entry-footer .cat-links .icon,
.entry-footer .tags-links .icon {
    color: #767676;
    left: 0;
    margin-right: 0.5em;
    position: absolute;
    top: 2px;
}

entry-footer a:focus,
.entry-footer a:hover,
.entry-footer .cat-links a:focus,
.entry-footer .cat-links a:hover,
.entry-footer .tags-links a:focus,
.entry-footer .tags-links a:hover,
.post-navigation a:focus,
.post-navigation a:hover {
    color: #000;
    -webkit-box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1);
    box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1);
}

.entry-footer .edit-link {
    display: inline-block;
}

.entry-footer .edit-link a.post-edit-link {
    background-color: #222;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #fff;
    display: inline-block;
    font-size: 14px;
    font-size: 0.875rem;
    font-weight: 800;
    margin-top: 2em;
    padding: 0.7em 2em;
    -webkit-transition: background-color 0.2s ease-in-out;
    transition: background-color 0.2s ease-in-out;
    white-space: nowrap;
}

.entry-footer .edit-link a.post-edit-link:hover,
.entry-footer .edit-link a.post-edit-link:focus {
    background-color: #767676;
}

@media screen and (min-width: 48em) {
    .entry-footer {
        display: table;
        width: 100%;
    }
    
    .entry-footer .cat-tags-links {
        display: table-cell;
        vertical-align: middle;
        width: 100%;
    }
    
    .entry-footer .edit-link {
        display: table-cell;
        text-align: right;
        vertical-align: middle;
    }
    
    .entry-footer .edit-link a.post-edit-link {
        margin-top: 0;
        margin-left: 1em;
    }
}

/* SVG Icons base styles */

.icon {
    display: inline-block;
    fill: currentColor;
    height: 1em;
    position: relative; /* Align more nicely with capital letters */
    top: -0.0625em;
    vertical-align: middle;
    width: 1em;
}

svg {
    position: absolute;
    width: 0;
    height: 0;
    overflow: hidden;
}


/**************************************************************
**************************************************************/
/* AMP START Styling */
/**************************************************************
**************************************************************/

html {
    font-family: sans-serif;
    line-height: 1.15;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%
}
body {
    margin: 0
}
article,
aside,
footer,
header,
nav,
section {
    display: block
}
h1 {
    font-size: 2em;
    margin: .67em 0
}
figcaption,
figure,
main {
    display: block
}
figure {
    margin: 1em 40px
}
hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible
}
pre {
    font-family: monospace, monospace;
    font-size: 1em
}
a {
    background-color: transparent;
    -webkit-text-decoration-skip: objects
}
a:active,
a:hover {
    outline-width: 0
}
abbr[title] {
    border-bottom: none;
    text-decoration: underline;
    text-decoration: underline dotted
}
b,
strong {
    font-weight: inherit;
    font-weight: bolder
}
code,
kbd,
samp {
    font-family: monospace, monospace;
    font-size: 1em
}
dfn {
    font-style: italic
}
mark {
    background-color: #ff0;
    color: #000
}
small {
    font-size: 80%
}
sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}
sub {
    bottom: -.25em
}
sup {
    top: -.5em
}

[type=checkbox],
[type=radio] {
    box-sizing: border-box;
    padding: 0
}
[type=number]::-webkit-inner-spin-button,
[type=number]::-webkit-outer-spin-button {
    height: auto
}
[type=search] {
    -webkit-appearance: textfield;
    outline-offset: -2px
}
[type=search]::-webkit-search-cancel-button,
[type=search]::-webkit-search-decoration {
    -webkit-appearance: none
}
::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit
}
details,
menu {
    display: block
}
summary {
    display: list-item
}
canvas {
    display: inline-block
}
[hidden],
template {
    display: none
}
.h1 {
    font-size: 3rem
}
.h2 {
    font-size: 2rem
}
.h3 {
    font-size: 1.5rem
}
.h4 {
    font-size: 1.125rem
}
.h5 {
    font-size: .875rem
}
.h6 {
    font-size: .75rem
}
.font-family-inherit {
    font-family: inherit
}
.font-size-inherit {
    font-size: inherit
}
.text-decoration-none {
    text-decoration: none
}
.bold {
    font-weight: 700
}
.regular {
    font-weight: 400
}
.italic {
    font-style: italic
}
.caps {
    text-transform: uppercase;
    letter-spacing: .2em
}
.left-align {
    text-align: left
}
.center {
    text-align: center
}
.right-align {
    text-align: right
}
.justify {
    text-align: justify
}
.nowrap {
    white-space: nowrap
}
.break-word {
    word-wrap: break-word
}
.line-height-1 {
    line-height: 1rem
}
.line-height-2 {
    line-height: 1.125rem
}
.line-height-3 {
    line-height: 1.5rem
}
.line-height-4 {
    line-height: 2rem
}
.list-style-none {
    list-style: none
}
.underline {
    text-decoration: underline
}
.truncate {
    max-width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}
.list-reset {
    list-style: none;
    padding-left: 0
}
.inline {
    display: inline
}
.block {
    display: block
}
.inline-block {
    display: inline-block
}
.table {
    display: table
}
.table-cell {
    display: table-cell
}
.overflow-hidden {
    overflow: hidden
}
.overflow-scroll {
    overflow: scroll
}
.overflow-auto {
    overflow: auto
}
.clearfix:after,
.clearfix:before {
    content: " ";
    display: table
}
.clearfix:after {
    clear: both
}
.left {
    float: left
}
.right {
    float: right
}
.fit {
    max-width: 100%
}
.max-width-1 {
    max-width: 24rem
}
.max-width-2 {
    max-width: 32rem
}
.max-width-3 {
    max-width: 48rem
}
.max-width-4 {
    max-width: 64rem
}
.border-box {
    box-sizing: border-box
}
.align-baseline {
    vertical-align: baseline
}
.align-top {
    vertical-align: top
}
.align-middle {
    vertical-align: middle
}
.align-bottom {
    vertical-align: bottom
}
.m0 {
    margin: 0
}
.mt0 {
    margin-top: 0
}
.mr0 {
    margin-right: 0
}
.mb0 {
    margin-bottom: 0
}
.ml0,
.mx0 {
    margin-left: 0
}
.mx0 {
    margin-right: 0
}
.my0 {
    margin-top: 0;
    margin-bottom: 0
}
.m1 {
    margin: .5rem
}
.mt1 {
    margin-top: .5rem
}
.mr1 {
    margin-right: .5rem
}
.mb1 {
    margin-bottom: .5rem
}
.ml1,
.mx1 {
    margin-left: .5rem
}
.mx1 {
    margin-right: .5rem
}
.my1 {
    margin-top: .5rem;
    margin-bottom: .5rem
}
.m2 {
    margin: 1rem
}
.mt2 {
    margin-top: 1rem
}
.mr2 {
    margin-right: 1rem
}
.mb2 {
    margin-bottom: 1rem
}
.ml2,
.mx2 {
    margin-left: 1rem
}
.mx2 {
    margin-right: 1rem
}
.my2 {
    margin-top: 1rem;
    margin-bottom: 1rem
}
.m3 {
    margin: 1.5rem
}
.mt3 {
    margin-top: 1.5rem
}
.mr3 {
    margin-right: 1.5rem
}
.mb3 {
    margin-bottom: 1.5rem
}
.ml3,
.mx3 {
    margin-left: 1.5rem
}
.mx3 {
    margin-right: 1.5rem
}
.my3 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem
}
.m4 {
    margin: 2rem
}
.mt4 {
    margin-top: 2rem
}
.mr4 {
    margin-right: 2rem
}
.mb4 {
    margin-bottom: 2rem
}
.ml4,
.mx4 {
    margin-left: 2rem
}
.mx4 {
    margin-right: 2rem
}
.my4 {
    margin-top: 2rem;
    margin-bottom: 2rem
}
.mxn1 {
    margin-left: -.5rem;
    margin-right: -.5rem
}
.mxn2 {
    margin-left: -1rem;
    margin-right: -1rem
}
.mxn3 {
    margin-left: -1.5rem;
    margin-right: -1.5rem
}
.mxn4 {
    margin-left: -2rem;
    margin-right: -2rem
}
.ml-auto {
    margin-left: auto
}
.mr-auto,
.mx-auto {
    margin-right: auto
}
.mx-auto {
    margin-left: auto
}
.p0 {
    padding: 0
}
.pt0 {
    padding-top: 0
}
.pr0 {
    padding-right: 0
}
.pb0 {
    padding-bottom: 0
}
.pl0,
.px0 {
    padding-left: 0
}
.px0 {
    padding-right: 0
}
.py0 {
    padding-top: 0;
    padding-bottom: 0
}
.p1 {
    padding: .5rem
}
.pt1 {
    padding-top: .5rem
}
.pr1 {
    padding-right: .5rem
}
.pb1 {
    padding-bottom: .5rem
}
.pl1 {
    padding-left: .5rem
}
.py1 {
    padding-top: .5rem;
    padding-bottom: .5rem
}
.px1 {
    padding-left: .5rem;
    padding-right: .5rem
}
.p2 {
    padding: 1rem
}
.pt2 {
    padding-top: 1rem
}
.pr2 {
    padding-right: 1rem
}
.pb2 {
    padding-bottom: 1rem
}
.pl2 {
    padding-left: 1rem
}
.py2 {
    padding-top: 1rem;
    padding-bottom: 1rem
}
.px2 {
    padding-left: 1rem;
    padding-right: 1rem
}
.p3 {
    padding: 1.5rem
}
.pt3 {
    padding-top: 1.5rem
}
.pr3 {
    padding-right: 1.5rem
}
.pb3 {
    padding-bottom: 1.5rem
}
.pl3 {
    padding-left: 1.5rem
}
.py3 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem
}
.px3 {
    padding-left: 1.5rem;
    padding-right: 1.5rem
}
.p4 {
    padding: 2rem
}
.pt4 {
    padding-top: 2rem
}
.pr4 {
    padding-right: 2rem
}
.pb4 {
    padding-bottom: 2rem
}
.pl4 {
    padding-left: 2rem
}
.py4 {
    padding-top: 2rem;
    padding-bottom: 2rem
}
.px4 {
    padding-left: 2rem;
    padding-right: 2rem
}
.col {
    float: left
}
.col,
.col-right {
    box-sizing: border-box
}
.col-right {
    float: right
}
.col-1 {
    width: 8.33333%
}
.col-2 {
    width: 16.66667%
}
.col-3 {
    width: 25%
}
.col-4 {
    width: 33.33333%
}
.col-5 {
    width: 41.66667%
}
.col-6 {
    width: 50%
}
.col-7 {
    width: 58.33333%
}
.col-8 {
    width: 66.66667%
}
.col-9 {
    width: 75%
}
.col-10 {
    width: 83.33333%
}
.col-11 {
    width: 91.66667%
}
.col-12 {
    width: 100%
}
@media (min-width: 40.06rem) {
    .sm-col {
        float: left;
        box-sizing: border-box
    }
    .sm-col-right {
        float: right;
        box-sizing: border-box
    }
    .sm-col-1 {
        width: 8.33333%
    }
    .sm-col-2 {
        width: 16.66667%
    }
    .sm-col-3 {
        width: 25%
    }
    .sm-col-4 {
        width: 33.33333%
    }
    .sm-col-5 {
        width: 41.66667%
    }
    .sm-col-6 {
        width: 50%
    }
    .sm-col-7 {
        width: 58.33333%
    }
    .sm-col-8 {
        width: 66.66667%
    }
    .sm-col-9 {
        width: 75%
    }
    .sm-col-10 {
        width: 83.33333%
    }
    .sm-col-11 {
        width: 91.66667%
    }
    .sm-col-12 {
        width: 100%
    }
}
@media (min-width: 52.06rem) {
    .md-col {
        float: left;
        box-sizing: border-box
    }
    .md-col-right {
        float: right;
        box-sizing: border-box
    }
    .md-col-1 {
        width: 8.33333%
    }
    .md-col-2 {
        width: 16.66667%
    }
    .md-col-3 {
        width: 25%
    }
    .md-col-4 {
        width: 33.33333%
    }
    .md-col-5 {
        width: 41.66667%
    }
    .md-col-6 {
        width: 50%
    }
    .md-col-7 {
        width: 58.33333%
    }
    .md-col-8 {
        width: 66.66667%
    }
    .md-col-9 {
        width: 75%
    }
    .md-col-10 {
        width: 83.33333%
    }
    .md-col-11 {
        width: 91.66667%
    }
    .md-col-12 {
        width: 100%
    }
}
@media (min-width: 64.06rem) {
    .lg-col {
        float: left;
        box-sizing: border-box
    }
    .lg-col-right {
        float: right;
        box-sizing: border-box
    }
    .lg-col-1 {
        width: 8.33333%
    }
    .lg-col-2 {
        width: 16.66667%
    }
    .lg-col-3 {
        width: 25%
    }
    .lg-col-4 {
        width: 33.33333%
    }
    .lg-col-5 {
        width: 41.66667%
    }
    .lg-col-6 {
        width: 50%
    }
    .lg-col-7 {
        width: 58.33333%
    }
    .lg-col-8 {
        width: 66.66667%
    }
    .lg-col-9 {
        width: 75%
    }
    .lg-col-10 {
        width: 83.33333%
    }
    .lg-col-11 {
        width: 91.66667%
    }
    .lg-col-12 {
        width: 100%
    }
}
.flex {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}
@media (min-width: 40.06rem) {
    .sm-flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }
}
@media (min-width: 52.06rem) {
    .md-flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }
}
@media (min-width: 64.06rem) {
    .lg-flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }
}
.flex-column {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column
}
.flex-wrap {
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}
.items-start {
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start
}
.items-end {
    -webkit-box-align: end;
    -ms-flex-align: end;
    align-items: flex-end
}
.items-center {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}
.items-baseline {
    -webkit-box-align: baseline;
    -ms-flex-align: baseline;
    align-items: baseline
}
.items-stretch {
    -webkit-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch
}
.self-start {
    -ms-flex-item-align: start;
    align-self: flex-start
}
.self-end {
    -ms-flex-item-align: end;
    align-self: flex-end
}
.self-center {
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    align-self: center
}
.self-baseline {
    -ms-flex-item-align: baseline;
    align-self: baseline
}
.self-stretch {
    -ms-flex-item-align: stretch;
    -ms-grid-row-align: stretch;
    align-self: stretch
}
.justify-start {
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start
}
.justify-end {
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end
}
.justify-center {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center
}
.justify-between {
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}
.justify-around {
    -ms-flex-pack: distribute;
    justify-content: space-around
}
.content-start {
    -ms-flex-line-pack: start;
    align-content: flex-start
}
.content-end {
    -ms-flex-line-pack: end;
    align-content: flex-end
}
.content-center {
    -ms-flex-line-pack: center;
    align-content: center
}
.content-between {
    -ms-flex-line-pack: justify;
    align-content: space-between
}
.content-around {
    -ms-flex-line-pack: distribute;
    align-content: space-around
}
.content-stretch {
    -ms-flex-line-pack: stretch;
    align-content: stretch
}
.flex-auto {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-width: 0;
    min-height: 0
}
.flex-none {
    -webkit-box-flex: 0;
    -ms-flex: none;
    flex: none
}
.order-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0
}
.order-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1
}
.order-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2
}
.order-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3
}
.order-last {
    -webkit-box-ordinal-group: 100000;
    -ms-flex-order: 99999;
    order: 99999
}
.relative {
    position: relative
}
.absolute {
    position: absolute
}
.fixed {
    position: fixed
}
.top-0 {
    top: 0
}
.right-0 {
    right: 0
}
.bottom-0 {
    bottom: 0
}
.left-0 {
    left: 0
}
.z1 {
    z-index: 1
}
.z2 {
    z-index: 2
}
.z3 {
    z-index: 3
}
.z4 {
    z-index: 4
}
.border {
    border-style: solid;
    border-width: 1px
}
.border-top {
    border-top-style: solid;
    border-top-width: 1px
}
.border-right {
    border-right-style: solid;
    border-right-width: 1px
}
.border-bottom {
    border-bottom-style: solid;
    border-bottom-width: 1px
}
.border-left {
    border-left-style: solid;
    border-left-width: 1px
}
.border-none {
    border: 0
}
.rounded {
    border-radius: 3px
}
.circle {
    border-radius: 50%
}
.rounded-top {
    border-radius: 3px 3px 0 0
}
.rounded-right {
    border-radius: 0 3px 3px 0
}
.rounded-bottom {
    border-radius: 0 0 3px 3px
}
.rounded-left {
    border-radius: 3px 0 0 3px
}
.not-rounded {
    border-radius: 0
}
.hide {
    position: absolute;
    height: 1px;
    width: 1px;
    overflow: hidden;
    clip: rect(1px, 1px, 1px, 1px)
}
@media (max-width: 40rem) {
    .xs-hide {
        display: none
    }
}
@media (min-width: 40.06rem) and (max-width: 52rem) {
    .sm-hide {
        display: none
    }
}
@media (min-width: 52.06rem) and (max-width: 64rem) {
    .md-hide {
        display: none
    }
}
@media (min-width: 64.06rem) {
    .lg-hide {
        display: none
    }
}
.display-none {
    display: none
}
* {
    box-sizing: border-box
}
body {
    background: #fff;
    color: #4a4a4a;
    font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, Arial, sans-serif;
    min-width: 315px;
    overflow-x: hidden;
    font-smooth: always;
    -webkit-font-smoothing: antialiased
}
main {
    max-width: 700px;
    margin: 0 auto
}

.ampstart-accent {
    color: #003f93
}
#content:target {
    margin-top: calc(0px - 3.5rem);
    padding-top: 3.5rem
}
.ampstart-title-lg {
    font-size: 3rem;
    line-height: 3.5rem;
    letter-spacing: .06rem
}
.ampstart-title-md {
    font-size: 2rem;
    line-height: 2.5rem;
    letter-spacing: .06rem
}
.ampstart-title-sm {
    font-size: 1.5rem;
    line-height: 2rem;
    letter-spacing: .06rem
}
.ampstart-subtitle,
body {
    line-height: 1.5rem;
    letter-spacing: normal
}
.ampstart-subtitle {
    color: #003f93;
    font-size: 1rem
}
.ampstart-byline,
.ampstart-caption,
.ampstart-hint,
.ampstart-label {
    font-size: .875rem;
    color: #4f4f4f;
    line-height: 1.125rem;
    letter-spacing: .06rem
}
.ampstart-label {
    text-transform: uppercase
}
.ampstart-footer,
.ampstart-small-text {
    font-size: .75rem;
    line-height: 1rem;
    letter-spacing: .06rem
}
.ampstart-card {
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .14), 0 1px 1px -1px rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12)
}
.h1,
h1 {
    font-size: 3rem;
    line-height: 3.5rem
}
.h2,
h2 {
    font-size: 2rem;
    line-height: 2.5rem
}
.h3,
h3 {
    font-size: 1.5rem;
    line-height: 2rem
}
.h4,
h4 {
    font-size: 1.125rem;
    line-height: 1.5rem
}
.h5,
h5 {
    font-size: .875rem;
    line-height: 1.125rem
}
.h6,
h6 {
    font-size: .75rem;
    line-height: 1rem
}
h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0;
    padding: 0;
    font-weight: 400;
    letter-spacing: .06rem
}
a,
a:active,
a:visited {
    color: inherit
}
.ampstart-btn {
    font-family: inherit;
    font-weight: inherit;
    font-size: 1rem;
    line-height: 1.125rem;
    padding: .7em .8em;
    text-decoration: none;
    white-space: nowrap;
    word-wrap: normal;
    vertical-align: middle;
    cursor: pointer;
    background-color: #000;
    color: #fff;
    border: 1px solid #fff
}
.ampstart-btn:visited {
    color: #fff
}
.ampstart-btn-secondary {
    background-color: #fff;
    color: #000;
    border: 1px solid #000
}
.ampstart-btn-secondary:visited {
    color: #000
}
.ampstart-btn:active .ampstart-btn:focus {
    opacity: .8
}
.ampstart-btn[disabled],
.ampstart-btn[disabled]:active,
.ampstart-btn[disabled]:focus,
.ampstart-btn[disabled]:hover {
    opacity: .5;
    outline: 0;
    cursor: default
}

.ampstart-initialcap {
    padding-top: 1rem;
    margin-top: 1.5rem
}
.ampstart-initialcap:first-letter {
    color: #000;
    font-size: 3rem;
    font-weight: 700;
    margin-left: -2px
}
.ampstart-pullquote {
    border: none;
    border-left: 4px solid #000;
    font-size: 1.5rem;
    padding-left: 1.5rem
}
.ampstart-byline time {
    font-style: normal;
    white-space: nowrap
}
.amp-carousel-button-next {
    background-image: url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Next</title><path d="M25.557 14.7L13.818 2.961 16.8 0l16.8 16.8-16.8 16.8-2.961-2.961L25.557 18.9H0v-4.2z" fill="#FFF" fill-rule="evenodd"/></svg>')
}
.amp-carousel-button-prev {
    background-image: url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Previous</title><path d="M33.6 14.7H8.043L19.782 2.961 16.8 0 0 16.8l16.8 16.8 2.961-2.961L8.043 18.9H33.6z" fill="#FFF" fill-rule="evenodd"/></svg>')
}
.ampstart-dropdown {
    min-width: 200px
}
.ampstart-dropdown.absolute {
    z-index: 100
}
.ampstart-dropdown.absolute>section,
.ampstart-dropdown.absolute>section>header {
    height: 100%
}
.ampstart-dropdown>section>header {
    background-color: #000;
    border: 0;
    color: #fff
}
.ampstart-dropdown>section>header:after {
    display: inline-block;
    content: "+";
    padding: 0 0 0 1.5rem;
    color: #003f93
}
.ampstart-dropdown>[expanded]>header:after {
    content: "–"
}
.absolute .ampstart-dropdown-items {
    z-index: 200
}
.ampstart-dropdown-item {
    background-color: #000;
    color: #003f93;
    opacity: .9
}
.ampstart-dropdown-item:active,
.ampstart-dropdown-item:hover {
    opacity: 1
}
.ampstart-footer {
    background-color: #fff;
    color: #000;
    padding-top: 5rem;
    padding-bottom: 5rem
}
.ampstart-footer .ampstart-icon {
    fill: #000
}
.ampstart-footer .ampstart-social-follow li:last-child {
    margin-right: 0
}
.ampstart-image-fullpage-hero {
    color: #fff
}
.ampstart-fullpage-hero-heading-text,
.ampstart-image-fullpage-hero .ampstart-image-credit {
    -webkit-box-decoration-break: clone;
    box-decoration-break: clone;
    background: #000;
    padding: 0 1rem .2rem
}
.ampstart-image-fullpage-hero>amp-img {
    max-height: calc(100vh - 3.5rem)
}
.ampstart-image-fullpage-hero>amp-img img {
    -o-object-fit: cover;
    object-fit: cover
}
.ampstart-fullpage-hero-heading {
    line-height: 3.5rem
}
.ampstart-fullpage-hero-cta {
    background: transparent
}
.ampstart-readmore {
    background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, .65), transparent);
    background: linear-gradient(0deg, rgba(0, 0, 0, .65) 0, transparent);
    color: #fff;
    margin-top: 5rem;
    padding-bottom: 3.5rem
}
.ampstart-readmore:after {
    display: block;
    content: "⌄";
    font-size: 2rem
}
.ampstart-readmore-text {
    background: #000
}
@media (min-width: 52.06rem) {
    .ampstart-image-fullpage-hero>amp-img {
        height: 60vh
    }
}
.ampstart-image-heading {
    color: #fff;
    background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, .65), transparent);
    background: linear-gradient(0deg, rgba(0, 0, 0, .65) 0, transparent)
}
.ampstart-image-heading>* {
    margin: 0
}
amp-carousel .ampstart-image-with-heading {
    margin-bottom: 0
}
.ampstart-image-with-caption figcaption {
    color: #4f4f4f;
    line-height: 1.125rem
}
amp-carousel .ampstart-image-with-caption {
    margin-bottom: 0
}
.ampstart-input {
    max-width: 100%;
    width: 300px;
    min-width: 100px;
    font-size: 1rem;
    line-height: 1.5rem
}
.ampstart-input [disabled],
.ampstart-input [disabled]+label {
    opacity: .5
}
.ampstart-input [disabled]:focus {
    outline: 0
}
.ampstart-input>input,
.ampstart-input>select,
.ampstart-input>textarea {
    width: 100%;
    margin-top: 1rem;
    line-height: 1.5rem;
    border: 0;
    border-radius: 0;
    border-bottom: 1px solid #4a4a4a;
    background: none;
    color: #4a4a4a;
    outline: 0
}
.ampstart-input>label {
    color: #003f93;
    pointer-events: none;
    text-align: left;
    font-size: .875rem;
    line-height: 1rem;
    opacity: 0;
    -webkit-animation: .2s;
    animation: .2s;
    -webkit-animation-timing-function: cubic-bezier(.4, 0, .2, 1);
    animation-timing-function: cubic-bezier(.4, 0, .2, 1);
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards
}
.ampstart-input>input:focus,
.ampstart-input>select:focus,
.ampstart-input>textarea:focus {
    outline: 0
}
.ampstart-input>input:focus::-webkit-input-placeholder,
.ampstart-input>select:focus::-webkit-input-placeholder,
.ampstart-input>textarea:focus::-webkit-input-placeholder {
    color: transparent
}
.ampstart-input>input:focus::-moz-placeholder,
.ampstart-input>select:focus::-moz-placeholder,
.ampstart-input>textarea:focus::-moz-placeholder {
    color: transparent
}
.ampstart-input>input:focus:-ms-input-placeholder,
.ampstart-input>select:focus:-ms-input-placeholder,
.ampstart-input>textarea:focus:-ms-input-placeholder {
    color: transparent
}
.ampstart-input>input:focus::placeholder,
.ampstart-input>select:focus::placeholder,
.ampstart-input>textarea:focus::placeholder {
    color: transparent
}
.ampstart-input>input:not(:placeholder-shown):not([disabled])+label,
.ampstart-input>select:not(:placeholder-shown):not([disabled])+label,
.ampstart-input>textarea:not(:placeholder-shown):not([disabled])+label {
    opacity: 1
}
.ampstart-input>input:focus+label,
.ampstart-input>select:focus+label,
.ampstart-input>textarea:focus+label {
    -webkit-animation-name: a;
    animation-name: a
}
@-webkit-keyframes a {
    to {
        opacity: 1
    }
}
@keyframes a {
    to {
        opacity: 1
    }
}
.ampstart-input>label:after {
    content: "";
    height: 2px;
    position: absolute;
    bottom: 0;
    left: 45%;
    background: #003f93;
    -webkit-transition: .2s;
    transition: .2s;
    -webkit-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
    transition-timing-function: cubic-bezier(.4, 0, .2, 1);
    visibility: hidden;
    width: 10px
}
.ampstart-input>input:focus+label:after,
.ampstart-input>select:focus+label:after,
.ampstart-input>textarea:focus+label:after {
    left: 0;
    width: 100%;
    visibility: visible
}
.ampstart-input>input[type=search] {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}
.ampstart-input>input[type=range] {
    border-bottom: 0
}
.ampstart-input>input[type=range]+label:after {
    display: none
}
.ampstart-input>select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}
.ampstart-input>select+label:before {
    content: "⌄";
    line-height: 1.5rem;
    position: absolute;
    right: 5px;
    zoom: 2;
    top: 0;
    bottom: 0;
    color: #003f93
}
.ampstart-input-chk,
.ampstart-input-radio {
    width: auto;
    color: #4a4a4a
}
.ampstart-input input[type=checkbox],
.ampstart-input input[type=radio] {
    margin-top: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 20px;
    height: 20px;
    border: 1px solid #003f93;
    vertical-align: middle;
    margin-right: .5rem;
    text-align: center
}
.ampstart-input input[type=radio] {
    border-radius: 20px
}
.ampstart-input input[type=checkbox]:not([disabled])+label,
.ampstart-input input[type=radio]:not([disabled])+label {
    pointer-events: auto;
    -webkit-animation: none;
    animation: none;
    vertical-align: middle;
    opacity: 1
}
.ampstart-input input[type=checkbox]+label:after,
.ampstart-input input[type=radio]+label:after {
    display: none
}
.ampstart-input input[type=checkbox]:after,
.ampstart-input input[type=radio]:after {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    content: " ";
    line-height: 1.4rem;
    vertical-align: middle;
    text-align: center;
    background-color: #fff
}
.ampstart-input input[type=checkbox]:checked:after {
    background-color: #003f93;
    color: #fff;
    content: "✓"
}
.ampstart-input input[type=radio]:checked {
    background-color: #fff
}
.ampstart-input input[type=radio]:after {
    top: 3px;
    bottom: 3px;
    left: 3px;
    right: 3px;
    border-radius: 12px
}
.ampstart-input input[type=radio]:checked:after {
    content: "";
    font-size: 3rem;
    background-color: #003f93
}
.ampstart-input>label,
_:-ms-lang(x) {
    opacity: 1
}
.ampstart-input>input:-ms-input-placeholder,
_:-ms-lang(x) {
    color: transparent
}
.ampstart-input>input::placeholder,
_:-ms-lang(x) {
    color: transparent
}
.ampstart-input>input::-ms-input-placeholder,
_:-ms-lang(x) {
    color: transparent
}
.ampstart-input>select::-ms-expand {
    display: none
}
.ampstart-headerbar {
    background-color: #fff;
    color: #000;
    z-index: 999;
    box-shadow: 0 0 5px 2px rgba(0, 0, 0, .1)
}
.ampstart-headerbar+:not(amp-sidebar),
.ampstart-headerbar+amp-sidebar+* {
    margin-top: 3.5rem
}
.ampstart-headerbar-nav .ampstart-nav-item {
    padding: 0 1rem;
    background: transparent;
    opacity: .8
}
.ampstart-headerbar-nav {
    line-height: 3.5rem
}
.ampstart-nav-item:active,
.ampstart-nav-item:focus,
.ampstart-nav-item:hover {
    opacity: 1
}
.ampstart-navbar-trigger:focus {
    outline: none
}
.ampstart-nav a,
.ampstart-navbar-trigger,
.ampstart-sidebar-faq a {
    cursor: pointer;
    text-decoration: none
}
.ampstart-navbar-trigger {
    line-height: 3.5rem;
    font-size: 2rem
}
.ampstart-headerbar-nav {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1
}
.ampstart-nav-search {
    -webkit-box-flex: 0.5;
    -ms-flex-positive: 0.5;
    flex-grow: 0.5
}

.ampstart-nav-dropdown {
    min-width: 200px
}
.ampstart-nav-dropdown amp-accordion header {
    background-color: #fff;
    border: none
}
.ampstart-nav-dropdown amp-accordion ul {
    background-color: #fff
}
.ampstart-nav-dropdown .ampstart-dropdown-item,
.ampstart-nav-dropdown .ampstart-dropdown>section>header {
    background-color: #fff;
    color: #000
}
.ampstart-nav-dropdown .ampstart-dropdown-item {
    color: #003f93
}
.ampstart-sidebar {
    background-color: #fff;
    color: #000;
    min-width: 300px;
    width: 300px
}
.ampstart-sidebar .ampstart-icon {
    fill: #003f93
}
.ampstart-sidebar-header {
    line-height: 3.5rem;
    min-height: 3.5rem
}
.ampstart-sidebar .ampstart-dropdown-item,
.ampstart-sidebar .ampstart-dropdown header,
.ampstart-sidebar .ampstart-faq-item,
.ampstart-sidebar .ampstart-nav-item,
.ampstart-sidebar .ampstart-social-follow {
    margin: 0 0 2rem
}
.ampstart-sidebar .ampstart-nav-dropdown {
    margin: 0
}
.ampstart-sidebar .ampstart-navbar-trigger {
    line-height: inherit
}


<?php
/**
 * Email Styles
 *
 */

if ( !defined( 'ABSPATH' ) )
    exit; // Exit if accessed directly

/**
 * @var WC_Email $current_email
 */
global $current_email;

$template = yith_wcet_get_email_template( $current_email );

$meta = get_post_meta( $template, '_template_meta', true );

$bg         = ( isset( $meta[ 'bg_color' ] ) ) ? $meta[ 'bg_color' ] : '#F5F5F5';
$body       = ( isset( $meta[ 'body_color' ] ) ) ? $meta[ 'body_color' ] : '#FFFFFF';
$base       = ( isset( $meta[ 'base_color' ] ) ) ? $meta[ 'base_color' ] : '#2470FF';
$base_text  = wc_light_or_dark( $base, '#202020', '#ffffff' );
$text       = ( isset( $meta[ 'txt_color' ] ) ) ? $meta[ 'txt_color' ] : '#000000';
$page_width = ( isset( $meta[ 'page_width' ] ) ) ? $meta[ 'page_width' ] . 'px' : '800px';

// PREMIUM
$logo_height              = '100px';
$page_border_radius       = '3px';
$header_position          = 'center';
$header_color             = $body;
$h1_size                  = '30px';
$h2_size                  = '18px';
$h3_size                  = '16px';
$body_size                = '14px';
$body_line_height         = '20px';
$table_border_width       = '1px';
$table_border_width_plus2 = '2px';
$table_border_color       = '#cccccc';
$price_title_bg_color     = '#ffffff';
$table_bg_color           = 'transparent';
$footer_text_color        = '#555555';

$header_padding     = array( 36, 48, 36, 48 );
$header_padding_css = implode( 'px ', $header_padding ) . 'px';

$bg_darker_10    = wc_hex_darker( $bg, 10 );
$body_darker_10  = wc_hex_darker( $bg, 10 );
$base_lighter_20 = wc_hex_lighter( $base, 20 );
$base_lighter_40 = wc_hex_lighter( $base, 40 );
$text_lighter_20 = wc_hex_lighter( $text, 20 );

/**
 * Action yith_wcet_before_email_styles
 * Params:
 *      premium_style
 *      template meta
 *      current email
 */
$premium_style = 0;
do_action( 'yith_wcet_before_email_styles', $premium_style, $meta, $current_email );
?>
    #wrapper {
    background-color: <?php echo esc_attr( $bg ); ?>;
    margin: 0;
    padding: 70px 0 70px 0;
    -webkit-text-size-adjust: none !important;
    width: 100%;
    }

    #table_wrapper{
    padding: 70px 0 70px 0;
    background-color: <?php echo esc_attr( $bg ); ?>;
    }

    table{
    color: <?php echo $text; ?>;
    font-size: <?php echo esc_attr( $body_size ) ?>;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    }

    #template_container {
    box-shadow: 0 1px 4px rgba(0,0,0,0.1) !important;
    background-color: <?php echo esc_attr( $body ); ?>;
    border: 1px solid <?php echo esc_attr( $bg_darker_10 ); ?>;
    border-radius: <?php echo esc_attr( $page_border_radius ); ?> !important;
    max-width: <?php echo $page_width; ?>;
    overflow: hidden;
    }

    #template_header h1,
    #template_header h1 a {
    color: <?php echo esc_attr( $base_text ); ?>;
    }

    #template_footer td {
    padding: 0;
    -webkit-border-radius: 6px;
    }

    #template_footer #credit {
    border:0;
    color: <?php echo esc_attr( $base_lighter_40 ); ?>;
    font-family: Arial;
    font-size:12px;
    line-height:125%;
    text-align:center;
    padding: 0 48px 48px 48px;
    }

    #body_content {
    background-color: <?php echo esc_attr( $body ); ?>;
    }

    #body_content table td {
    padding: 48px;
    }

    #body_content table td td {
    padding: 12px;
    }

    #body_content table td th {
    padding: 12px;
    }

    #body_content td ul.wc-item-meta {
    font-size: small;
    margin: 1em 0 0;
    padding: 0;
    list-style: none;
    }

    #body_content td ul.wc-item-meta li {
    margin: 0.5em 0 0;
    padding: 0;
    }

    #body_content td ul.wc-item-meta li p {
    margin: 0;
    }

    #body_content p {
    margin: 0 0 16px;
    }

    #body_content_inner {
    color: <?php echo esc_attr( $text_lighter_20 ); ?>;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-size: 14px;
    line-height: 150%;
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
    }

    .td {
    color: <?php echo esc_attr( $text_lighter_20 ); ?>;
    border: 1px solid <?php echo esc_attr( $body_darker_10 ); ?>;
    }

    .address {
    padding:12px 12px 0;
    color: <?php echo esc_attr( $text_lighter_20 ); ?>;
    border: 1px solid <?php echo esc_attr( $body_darker_10 ); ?>;
    }

    .text {
    color: <?php echo esc_attr( $text ); ?>;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    }

    .link {
    color: <?php echo esc_attr( $base ); ?>;
    }

    #header_wrapper {
    padding: 36px 48px;
    display: block;
    }

    h1 {
    color: <?php echo esc_attr( $base ); ?>;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-size: 30px;
    font-weight: 300;
    line-height: 150%;
    margin: 0;
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
    text-shadow: 0 1px 0 <?php echo esc_attr( $base_lighter_20 ); ?>;
    -webkit-font-smoothing: antialiased;
    }

    h2 {
    color: <?php echo esc_attr( $base ); ?>;
    display: block;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-size: 18px;
    font-weight: bold;
    line-height: 130%;
    margin: 0 0 18px;
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
    }

    h3 {
    color: <?php echo esc_attr( $base ); ?>;
    display: block;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-size: 16px;
    font-weight: bold;
    line-height: 130%;
    margin: 16px 0 8px;
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
    }

    a {
    color: <?php echo esc_attr( $base ); ?>;
    font-weight: normal;
    text-decoration: underline;
    }

    img {
    border: none;
    display: inline;
    font-size: 14px;
    font-weight: bold;
    height: auto;
    line-height: 100%;
    outline: none;
    text-decoration: none;
    text-transform: capitalize;
    }

    #table_wrapper{
    padding: 70px 0 70px 0;
    background-color: <?php echo esc_attr( $bg ); ?>;
    }

    #template_container {
    box-shadow: 0 1px 4px rgba(0,0,0,0.1) !important;
    background-color: <?php echo esc_attr( $body ); ?>;
    border: 1px solid <?php echo esc_attr( $bg_darker_10 ); ?>;
    border-radius: <?php echo esc_attr( $page_border_radius ); ?> !important;
    max-width: <?php echo $page_width; ?>;
    overflow: hidden;
    }

    #template_header_image {
    background-color: <?php echo esc_attr( $header_color ); ?>;
    color: <?php echo $base_text; ?>;
    border-bottom: 0;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-weight: bold;
    line-height: 100%;
    vertical-align: middle;
    text-align: <?php echo $header_position ?>;
    width: 100%;
    }

    #template_header_image img{
    height:<?php echo $logo_height; ?>;
    margin-top: 10px;
    margin-bottom :10px;
    }

    #template_header {
    background-color: <?php echo esc_attr( $base ); ?>;
    color: <?php echo esc_attr( $base_text ); ?>;
    border-bottom: 0;
    font-weight: bold;
    line-height: 100%;
    vertical-align: middle;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    width: 100%;
    }

    #template_body {
    width: 100%;
    }

    #header_wrapper {
    padding: <?php echo $header_padding_css; ?>;
    display: block;
    box-sizing: border-box;
    }

<?php
/**
 * Action yith_wcet_after_email_styles
 * Params:
 *      premium_style
 *      template meta
 *      current email
 */
do_action( 'yith_wcet_after_email_styles', $premium_style, $meta, $current_email );
?>
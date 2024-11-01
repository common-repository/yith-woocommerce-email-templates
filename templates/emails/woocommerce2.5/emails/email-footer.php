<?php
/**
 * Email Footer
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-footer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see        http://docs.woothemes.com/document/template-structure/
 * @author        WooThemes
 * @package    WooCommerce/Templates/Emails
 * @version     2.3.0
 */

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


/**
 * @var WC_Email $current_email
 */
global $current_email;
$template = yith_wcet_get_email_template( $current_email );
$meta     = get_post_meta( $template, '_template_meta', true );

?>
</div>
</td>
</tr>
</table>
<!-- End Content -->
</td>
</tr>
</table>
<!-- End Body -->
</td>
</tr>
<tr>
    <td align="center" valign="top">
        <!-- Footer -->
        <table class="yith-wcet-max-width-mobile" border="0" cellpadding="10" cellspacing="0" id="template_footer">
            <tr>
                <td valign="top">
                    <table class="yith-wcet-max-width-mobile" border="0" cellpadding="10" cellspacing="0" width="100%">
                        <?php if ( !empty( $args ) ) : ?>
                            <tr>
                                <td colspan="3" valign="middle" id="template_footer_extra_text">
                                    <?php
                                    foreach ( $args as $arg ) {

                                        echo $arg;

                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </table>
                </td>
            </tr>
        </table>
        <!-- End Footer -->
    </td>
</tr>
<tr>
    <td class="yith-wcet-max-width-mobile" id="template_footer_wc_credits" align="center" valign="middle">
        <?php echo wpautop( wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ) ); ?>
    </td>
</tr>
</table>
</td>
</tr>
</table>
</div>
</body>
</html>

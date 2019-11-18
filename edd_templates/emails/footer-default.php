<?php
/**
 * Email Footer
 *
 * @author 		Easy Digital Downloads
 * @package 	Easy Digital Downloads/Templates/Emails
 * @version     2.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


// For gmail compatibility, including CSS styles in head/body are stripped out therefore styles need to be inline. These variables contain rules which are added to the template inline.
$template_footer = "
	border-top:0;
	-webkit-border-radius:3px;
";

$credit = "
	border:0;
	color: #000000;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	font-size:12px;
	line-height:125%;
	text-align:center;
";

$header_img = edd_get_option( 'email_logo', '' );
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
        <table border="0" cellpadding="10" cellspacing="0" width="600" id="template_footer"
            style="<?php echo $template_footer; ?>">
            <tr>
                <td valign="top">
                    <table border="0" cellpadding="10" cellspacing="0" width="100%">
                        <tr>
                            <td colspan="2" valign="middle" id="credit" style="<?php echo $credit; ?>">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <?php if( ! empty( $header_img ) ) : ?>
                                    <div id="template_header_image">
                                        <?php echo '<img src="' . esc_url( $header_img ) . '" alt="' . get_bloginfo( 'name' ) . '" />'; ?>
                                    </div>
                                    <?php endif; ?>
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!-- End Footer -->
    </td>
</tr>
</table>
</td>
</tr>
</table>
</div>
</body>

</html>
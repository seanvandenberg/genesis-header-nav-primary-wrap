//Remove Site Header
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

//Remove Nav Primary
remove_action( 'genesis_after_header', 'genesis_do_nav' );

//Add Opening Div around site header and primary nav
add_action( 'genesis_before_header', 'sv_custom_header_primary_wrap_open' );
function sv_custom_header_primary_wrap_open() {
    echo '<div class="custom-header-primary-wrap">';
}
    
//Add Site Header back   
add_action( 'genesis_header', 'genesis_header_markup_open', 5 );
add_action( 'genesis_header', 'genesis_do_header' );
add_action( 'genesis_header', 'genesis_header_markup_close', 15 );

//Add Nav Primary back
add_action( 'genesis_after_header', 'genesis_do_nav' );

//Add Closing Div around site header and primary nav
add_action( 'genesis_after_header', 'sv_custom_header_primary_wrap_close' );
function sv_custom_header_primary_wrap_close() {
    echo '</div>';
}
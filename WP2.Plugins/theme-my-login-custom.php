<?php
function tml_user_register( $user_id ) {
	if ( !empty( $_POST['first_name'] ) )
		update_user_meta( $user_id, 'first_name', $_POST['first_name'] );
	if ( !empty( $_POST['last_name'] ) )
		update_user_meta( $user_id, 'last_name', $_POST['last_name'] );
}
add_action( 'user_register', 'tml_user_register' );
?>
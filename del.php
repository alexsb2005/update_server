<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = fopen( 'list.json', 'w' );
    fwrite( $file, $_POST['del']);
    fclose( $file );
    unlink( $_POST['name'] );
}
?>
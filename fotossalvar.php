<?php
	$i=0;
    function base64_to_jpeg( $base64_string, $output_file ) {
        $ifp = fopen( $output_file, "wb" ); 
        fwrite( $ifp, base64_decode( $base64_string) ); 
        fclose( $ifp ); 
        return( $output_file ); 
    }   
	$i++;
	$str = (string) $i;
    $imagem = str_replace('data:image/png;base64,','',$_POST['imagem']);        
    base64_to_jpeg($imagem, "fts/foto$str.png");        
    echo json_encode(array('imagem' => $i));
?>
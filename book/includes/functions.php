<?php 
     function image($url, $alt = 'image', $width='200px', $height='200px', $text = 'This is image'){
        print '<h2>'.$text.'</h2>
        <div><img src="'.$url.'" alt="'.$alt.'" width="'.$width.'" height="'.$height.'"></div>';
    }    
    $image_path = "images/";
    function image2($img_name, $alt='image', $width='300px', $height='200px', $text='This is image'){
        $path = $GLOBALS['image_path'];
        $url = $path . $img_name;
        print '<h2>'.$text.'</h2>
        <div><img src="'.$url.'" alt="'.$alt.'" width="'.$width.'" height="'.$height.'"></div>';
    }
?>
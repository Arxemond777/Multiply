<?php
function multiply($firstPicture, $twoPicture, $x, $y)
{
    $img = new Imagick($firstPicture);
    $img->thumbnailImage(140, 140);
    $shadow = $img->clone();
    $shadow->setImageBackgroundColor(new ImagickPixel('black'));//color shadow
    $shadow->shadowImage(80, 3, 5, 5);//create shadow
    $shadow->compositeImage($img, Imagick::COMPOSITE_OVER, 0, 0);
    header("Content-Type: image/jpeg");
    $img2 = new Imagick($twoPicture);
    $img2->compositeImage($shadow, $shadow->getImageCompose(), $x, $y);
    echo $img2;
}
multiply($firstPicture = 'source.png', $twoPicture = 'good.jpg', $x = 166, $y = 295);
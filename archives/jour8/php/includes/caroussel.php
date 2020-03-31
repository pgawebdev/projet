<section class="caroussel">
        <div id="slider">

<?php $tableau = glob("assets/img/dog*.{jpg,jpeg,gif,png}", GLOB_BRACE);

foreach($tableau as $i => $image)
{
    echo
<<<CODEHTML
            <figure>
                <img src="$image" alt="$image">
            </figure>
CODEHTML;    

}
?>
    </div>
</section>


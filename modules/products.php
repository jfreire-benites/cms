<?php
    $pics = [
        ["bismuth.jpeg","nice shiny boi",4],
        ["pyrite.jpeg","ooh purdy",1],
        ["celestite.jpeg","from the heavens",0],
        ["copper.jpeg","is blooo",2],
        ["diamond.jpeg","baller baller",99]
    ];
?>
<div class="admin-container">
    <div class="product-list">
        <div class="product-grid">
            <?php
                foreach ($pics as $pic){
                    echo "
                        <div class='product'>
                            <image class='product-image' src='../images/$pic[0]'/>
                            <div style='display:grid; grid-template-rows:auto 30%'>
                                <div class='product-description'>
                                    <div>$pic[1]</div>
                                </div>
                                <div class='product-stock'>
                                    <span>$pic[2] in stock</span>
                                    <button>buy now</button>
                                </div>
                            </div>
                        </div>
                    ";
                }
            ?>
        </div>
    </div>
</div>
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
    <div class="admin-product-list">
        <div class="admin-product-grid">
            <?php
                foreach ($pics as $pic){
                    echo "
                        <div class='product'>
                            <image class='product-image' src='../images/$pic[0]'/>
                            <div style='display:grid; grid-template-rows:auto 30%'>
                                <div class='product-description'>
                                    <div>$pic[1]</div>
                                    <button class='description-edit'>edit</button>
                                </div>
                                <div class='product-stock'>
                                    <span>current stock : $pic[2]</span><br>
                                    <select id='add stock' class='add-stock'>
                                        <option value='' disabled selected hidden>Change Stock</option>
                                        <option value='1'>1</option>
                                        <option value='2'>2</option>
                                        <option value='3'>3</option>
                                        <option value='4'>4</option>
                                        <option value='5'>5</option>
                                        <option value='0'>remove item</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    ";
                }
            ?>
        </div>
    </div>
</div>
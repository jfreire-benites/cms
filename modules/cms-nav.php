<div class="cms-nav">
    <div class="cms-item"><form class='nav-button' method='post'><input style='width: 100%; background-color: rgba(0, 218, 218, 0.712); border-style: unset;' type='submit' name='profile' value='profile' ></form></div>
    <div class="cms-item"><form class='nav-button' method='post'><input style='width: 100%; background-color: rgba(0, 218, 218, 0.712); border-style: unset;' type='submit' name='users' value='users' ></form></div>
    <div class="cms-item"><form class='nav-button' method='post'><input style='width: 100%; background-color: rgba(0, 218, 218, 0.712); border-style: unset;' type='submit' name='orders' value='orders' ></form></div>
    <div class="cms-item"><form class='nav-button' method='post'><input style='width: 100%; background-color: rgba(0, 218, 218, 0.712); border-style: unset;' type='submit' name='products' value='products' ></form></div>
    <div class="cms-item"><form class='nav-button' method='post'><input style='width: 100%; background-color: rgba(0, 218, 218, 0.712); border-style: unset;' type='submit' name='button5' value='5' ></form></div>
    <div class="cms-item"><form class='nav-button' method='post'><input style='width: 100%; background-color: rgba(0, 218, 218, 0.712); border-style: unset;' type='submit' name='button6' value='6' ></form></div>
</div>
<div style="height:80%;">
    <?php
        if(!isset($_POST['profile'])&&!isset($_POST['users'])&&!isset($_POST['orders'])&&!isset($_POST['products'])&&!isset($_POST['button5'])&&!isset($_POST['button6'])){
            include '../admin-pages/profile.php';
        }
        if(isset($_POST['profile'])){
            include '../admin-pages/profile.php';
        }
        if(isset($_POST['users'])){
            include '../admin-pages/users.php';
        }
        if(isset($_POST['orders'])){
            include '../admin-pages/orders.php';
        }
        if(isset($_POST['products'])){
            include '../admin-pages/products.php';
        }
        if(isset($_POST['button5'])){
            include '../admin-pages/button5.php';
        }
        if(isset($_POST['button6'])){
            include '../admin-pages/button6.php';
        }
    ?>
</div>
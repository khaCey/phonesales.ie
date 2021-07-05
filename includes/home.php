<?php
    $type = mysqli_real_escape_string($conn, $_GET['type']);
?>

<section class="py-5 section-container">
    <div class="container px-4 px-lg-5 mt-5">
        <a class="nav-link aria-current="page" aria-current="page" href="//phonesales.ie/raffles"><h2>Active Raffles</h2></a>
        <div class="shop-section row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <!-- Item -->
            <?php
                if($type==null){
                    $sql = "SELECT * FROM raffles";
                }
                else{
                    $sql = "SELECT * FROM products WHERE os = '$type'";
                }
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0){
                    while ($row = mysqli_fetch_assoc($result)){
                        $available = $row["threshold"] - $row["current"];
                        echo "<div class=\"col mb-5\">";
                                
                            echo "<div class=\"card h-100\">";
                                echo "<img class=\"card-img-top\" src=\"../images/{$row["raffleID"]}small.png\" alt=\"image not found\"  onerror=\"this.src='../images/450x600.png'\"/>";
                                    echo "<div class=\"card-body p-4\">";
                                        echo "<div class=\"text-center\">";
                                            echo "<h5 class=\"fw-bolder\">{$row["prize"]} <br> {$row[""]}</h5>";
                                            echo "<h5>€{$row["price"]}</h5>";
                                            echo "<p>Available Tickets: {$available}</p>";
                                            
                                        echo "</div>";
                                echo "</div>";
                                echo "<div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">";
                                    echo "<div class=\"text-center\">";
                                        echo "<a class=\"btn btn-outline-dark mt-auto\" href=\"//phonesales.ie/raffleitem/{$row["raffleID"]}\">View Details</a>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    }
                }
            ?>
        </div>
    </div>                
</section>
<div class="home-divider section-container"></div>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <h2>New Items</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <!-- Item -->
            <?php
                if($type==null){
                    $sql = "SELECT * FROM products";
                }
                else{
                    $sql = "SELECT * FROM products WHERE os = '$type'";
                }
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0){
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<div class=\"col mb-5\">";
                                
                            echo "<div class=\"card h-100\">";
                                echo "<img class=\"card-img-top\" src=\"../images/{$row["imagename"]}.png\" alt=\"image not found\"  onerror=\"this.src='../images/450x600.png'\"/>";
                                    echo "<div class=\"card-body p-4\">";
                                        echo "<div class=\"text-center\">";
                                            echo "<h5 class=\"fw-bolder\">{$row["brand"]} <br> {$row["product"]}</h5>";
                                            echo "<h5>€{$row["sellprice"]}</h5>";
                                            
                                        echo "</div>";
                                echo "</div>";
                                echo "<div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">";
                                    echo "<div class=\"text-center\">";
                                        echo "<a class=\"btn btn-outline-dark mt-auto\" href=\"//phonesales.ie/shopitem/{$row["productID"]}\">View Item</a>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    }
                }
            ?>
        </div>
    </div>                
</section>
        

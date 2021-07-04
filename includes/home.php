<?php
    $type = mysqli_real_escape_string($conn, $_GET['type']);
?>


<section class="py-5">
            <div class="item-container div px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1"><h5><?php echo $product['prize'];?></h5></div>
                        <h1 class="display-5 fw-bolder"><?php echo ""; ?></h1>
                        <div class="fs-5 mb-5">
                            <span><?php echo "€".""; ?></span>
                        </div>
                        <p class="lead">
                        </p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
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
                        echo "<div class=\"col mb-5\">";
                                
                            echo "<div class=\"card h-100\">";
                                echo "<img class=\"card-img-top\" src=\"../images/{$row["imagename"]}.png\" alt=\"image not found\"  onerror=\"this.src='../images/450x600.png'\"/>";
                                    echo "<div class=\"card-body p-4\">";
                                        echo "<div class=\"text-center\">";
                                            echo "<h5 class=\"fw-bolder\">{$row["prize"]} <br> {$row[""]}</h5>";
                                            echo "<h5>€{$row["price"]}</h5>";
                                            
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
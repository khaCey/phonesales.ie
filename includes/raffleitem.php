<?php
    $raffleID = mysqli_real_escape_string($conn, $_GET['raffleID']);
    $sql = "SELECT * FROM raffles WHERE raffleID = '$raffleID'";
    
    $raffleID = $_GET['raffleID'];
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);
    
?>

        <section class="py-5 section-container">
            <div class="item-container div px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../images/{<?php echo $product["raffleID"]; ?>}.png\" alt="image not found"  onerror="this.src='https://dummyimage.com/600x700/dee2e6/6c757d.jpg'" /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">
                            <h5><?php echo $product['category'];?></h5>
                            <h4><?php echo $product['prize'];?></h4>
                            <p>Total Tickets: <?php echo $product['threshold'];?>
                            </br>
                            Available Tickets: <?php echo ($product['threshold']-$product['current']);?></p>

                        </div>
                        <h1 class="display-5 fw-bolder"><?php echo ""; ?></h1>
                        <div class="fs-5 mb-5">
                            <span><?php echo "€" . " " . $product['price']; ?></span>
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
        
        
        
        
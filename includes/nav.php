<?php
    $activePage = $page;
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="//phonesales.ie/index">PhoneSales.ie</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        
                <li class="nav-item"><a class="nav-link <?php if ($activePage=="apparel"){echo "active";}?>" aria-current="page" href="//phonesales.ie/apparel">Apparel</a></li>     
                        <li class="nav-item">
                            <a class="nav-link <?php if ($activePage=="bags"){echo "active";}?> " aria-current="page" href="//phonesales.ie/bags">Bags</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ($activePage=="electronics"){echo "active";}?>"  id="navbarDropdown" href="//phonesales.ie/electronics" role="button" data-bs-toggle="dropdown" aria-expanded="false">Electronics</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="//phonesales.ie/electronics">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="//phonesales.ie/electronics/iOS">Apple</a></li>
                                <li><a class="dropdown-item" href="//phonesales.ie/electronics/Android">Android</a></li>
                            </ul>
                        </li>
 
                        <li class="nav-item" >
                            <a class="nav-link <?php if ($activePage=="raffle"){echo "active";}?>" aria-current="page" href="//phonesales.ie/raffles">Raffles</a>
                        </li>
  
                    </ul>
                    <!-- 
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                    -->
                </div>
            </div>
</nav>
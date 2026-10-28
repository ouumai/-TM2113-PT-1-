<?php
ob_start();
?>

<section class="bg-primary bg-opacity-10 text-dark rounded-4 shadow-sm p-4 p-md-5 mb-5">
    <div class="row align-items-center g-4">
        <div class="col-md-8">
            <span class="badge rounded-pill bg-white text-primary mb-3 px-3 py-2">
                <i class="bi bi-stars me-1"></i> Canvas Tote Bags
            </span>
            <h1 class="display-5 fw-bold text-primary mb-3">Carry your world<br class="d-none d-lg-block"> on your shoulder.</h1>
            <p class="lead text-secondary mb-4">Tote-ally yours.</p>
            <a href="products.php" class="btn btn-light text-primary fw-semibold rounded-pill px-4 py-2">
                <i class="bi bi-bag me-2"></i>Explore the collection <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
        <div class="col-md-4 text-center">
            <div class="d-inline-flex align-items-center justify-content-center rounded-4 bg-white p-3">
                <i class="bi bi-bag-fill text-primary display-1" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</section>

<div class="d-flex align-items-end justify-content-between mb-3">
    <div>
        <p class="text-uppercase small fw-semibold text-primary mb-1">Welcome in</p>
        <h2 class="h4 fw-bold mb-0">Explore our shop</h2>
    </div>
    <span class="text-muted small d-none d-sm-inline">Find everything in one place</span>
</div>
<div class="row g-3">
    <div class="col-sm-6 col-lg-3">
        <a href="products.php" class="card h-100 border-0 shadow-sm text-decoration-none text-dark">
            <div class="card-body d-flex align-items-center gap-3 p-4">
                <span class="rounded-4 bg-primary bg-opacity-10 text-primary p-3"><i class="bi bi-bag fs-4"></i></span>
                <span><span class="d-block fw-semibold">Products</span><small class="text-muted">Browse the collection</small></span>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a href="orders.php" class="card h-100 border-0 shadow-sm text-decoration-none text-dark">
            <div class="card-body d-flex align-items-center gap-3 p-4">
                <span class="rounded-4 bg-info bg-opacity-10 text-info p-3"><i class="bi bi-receipt fs-4"></i></span>
                <span><span class="d-block fw-semibold">Orders</span><small class="text-muted">View order details</small></span>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a href="customers.php" class="card h-100 border-0 shadow-sm text-decoration-none text-dark">
            <div class="card-body d-flex align-items-center gap-3 p-4">
                <span class="rounded-4 bg-primary bg-opacity-10 text-primary p-3"><i class="bi bi-people fs-4"></i></span>
                <span><span class="d-block fw-semibold">Customers</span><small class="text-muted">Customer directory</small></span>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a href="staffs.php" class="card h-100 border-0 shadow-sm text-decoration-none text-dark">
            <div class="card-body d-flex align-items-center gap-3 p-4">
                <span class="rounded-4 bg-info bg-opacity-10 text-info p-3"><i class="bi bi-person-badge fs-4"></i></span>
                <span><span class="d-block fw-semibold">Staff</span><small class="text-muted">Meet the team</small></span>
            </div>
        </a>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>

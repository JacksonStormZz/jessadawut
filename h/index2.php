<?php
session_start();
include_once("check_login.php");
include("header.php");
?>

<div class="card shadow-sm">
  <div class="card-body">
    <h3 class="text-success">แดชบอร์ด</h3>
    <p class="text-muted">
      ผู้ใช้งาน: <?php echo $_SESSION['aname'] ?? $_SESSION['a_name']; ?>
    </p>

    <div class="row g-3 mt-3">
      <div class="col-md-4">
        <a href="products.php" class="card border-success text-decoration-none">
          <div class="card-body text-success">
            <h5>📦 สินค้า</h5>
            <p class="mb-0">จัดการสินค้า</p>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a href="orders.php" class="card border-success text-decoration-none">
          <div class="card-body text-success">
            <h5>🧾 ออเดอร์</h5>
            <p class="mb-0">จัดการออเดอร์</p>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a href="customers.php" class="card border-success text-decoration-none">
          <div class="card-body text-success">
            <h5>👥 ลูกค้า</h5>
            <p class="mb-0">จัดการลูกค้า</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>

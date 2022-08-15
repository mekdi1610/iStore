<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
   
  
    <link rel="stylesheet" href="../../css/style.css" />

 
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class="bx bxl-c-plus-plus"></i>
        <span class="logo_name">CRM</span>
      </div>
      <ul class="nav-links">
      <li>
          <a href="/client/seller"   class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/product">
          <i class="bx bx-cart"></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="/category">
            <i class="bx bx-sitemap"></i>
            <span class="links_name">Category</span>
          </a>
        </li>
        <li>
          <a href="/order">
            <i class="bx bx-clipboard"></i>
            <span class="links_name">Order</span>
          </a>
        </li>
         <li class="log_out">
          <a href="/login">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="profile-details">
          <!--<img src="images/profile.jpg" alt="">-->
          <span class="admin_name">{{$users['email'] ?? ''}}</span>
          <i class="bx bx-chevron-down"></i>
        </div>
   
      </nav>

      <div class="home-content">
        <div class="overview-boxes">
          <div class="box">
            <div class="">
              <div class="box-topic">Total Order</div>
              <div class="number">{{$sumOrders ?? ''}}</div>
           
            </div>
            <i class="bx bx-cart-alt cart"></i>
          </div>
          <div class="box">
            <div class="">
              <div class="box-topic">Total Product</div>
              <div class="number">{{$productNo ?? ''}}</div>
       
            </div>
            <i class="bx bxs-cart-add cart two"></i>
          </div>
        </div>

     
    
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">Recent Sales</div>
            <div class="sales-details">
              <ul class="details">
              
                <li class="topic">Product Name</li>
                @foreach($orders ?? '' as $order)
              @foreach($products ?? '' as $product)
              @foreach($sales ?? '' as $sale)
              @if($product->id==$order->product_id && $order->status=='Inactive')
              @if($order->id==$sale->order_id)
                <li><a href="#">{{$product['name']}}</a></li>
                @endif
@endif
@endforeach
                @endforeach
                @endforeach
              </ul>
              <ul class="details">
                <li class="topic">Quantity</li>
                @foreach($orders ?? '' as $order)
              @foreach($products ?? '' as $product)
              @foreach($sales ?? '' as $sale)
              @if($product->id==$order->product_id && $order->status=='Inactive')
              @if($order->id==$sale->order_id)
                <li><a href="#">{{$order['quantity']}}</a></li>
                @endif
@endif
@endforeach
                @endforeach
                @endforeach
              </ul>
              <ul class="details">
                <li class="topic">Date</li>
                @foreach($orders ?? '' as $order)
              @foreach($products ?? '' as $product)
              @foreach($sales ?? '' as $sale)
              @if($product->id==$order->product_id && $order->status=='Inactive')
              @if($order->id==$sale->order_id)
                <li><a href="#">{{$order['created_at']}}</a></li>
                @endif
@endif
@endforeach
                @endforeach
                @endforeach

              </ul>

            </div>
            
          </div>
         
        </div>
      </div>
    </section>

    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
    </script>
  </body>
</html>
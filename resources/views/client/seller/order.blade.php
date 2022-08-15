<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/style.css" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  

    <link rel="stylesheet" href="../css/mdb.min.css" />
    <link rel="stylesheet" href="../css/css3.css" />
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
          <a href="/client/seller">
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
          <a href="/order"  class="active">
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
          <span class="admin_name">{{$users['email']}}</span>
          <i class="bx bx-chevron-down"></i>
        </div>
   
      </nav>

      <div class="home-content">
      @include('flash-message')
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">
              Products &nbsp;&nbsp;&nbsp;
              <!-- Button trigger modal -->
            

              <!-- Modal -->
              <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">
                        Confirm Sales
                      </h5>

                      <button
                        type="button"
                        class="btn-close"
                        data-mdb-dismiss="modal"
                        aria-label="Close" 
                      ></button>
                    </div>
                    <div class="modal-body card-text">
                    <form action="/api/sale/store" method="POST" enctype="multipart/form-data">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="form-outline mb-4">
                          <input type="text" class="form-control" name="order_id" id="id" readonly/>
                          <label class="form-label" for="name" style="font-size: 1rem;" >ID</label>
                        </div>
                        <div class="form-outline mb-4">
                          <input type="text" class="form-control" name="name"  id="name" disabled/>
                          <label class="form-label" for="name" style="font-size: 1rem;">Name</label>
                        </div>

                        <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="quantity"  id="quantity" disabled/>
                        <label class="form-label" for="name" style="font-size: 1rem;">Quantity</label>
                        </div>
                        <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="up" id="up" disabled/>
                        <label class="form-label" for="name" style="font-size: 1rem;">Unit Price</label>
                        </div>

                        <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="tp" id="tp" disabled/>
                        <label class="form-label" for="name" style="font-size: 1rem;">Total Price</label>
                        </div>
                        <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-mdb-dismiss="modal"
                      >
                        Close
                      </button>
                      <button class="btn btn-success" type="submit" name="action" value="save" id="signup">Confirm Sale</button>
                     
                    </div>
                      </form>
                    </div>
                  
                  </div>
                </div>
              </div>

      

            <table class="table table-hover align-middle mb-0 bg-white">
              <thead class="bg-light">
                <tr>
                  <th>Date</th>
                  <th>Product Name</th>
                  
                  <th>Quantity</th>
                  <th>Confirm Sale</th>
                </tr>
              </thead>
              <tbody>
              @foreach($orders ?? '' as $order)
              @foreach($products ?? '' as $product)
              
              @if($product->id==$order->product_id && $order->status=='active')
                <tr>
                <td>
                    <div class="ms-3">
                    <p class="fw-normal mb-1"> {{$order['created_at']}} </p>
                       </div>
                  </td>
                  <td>
                    <div class="ms-3">
                    <p class="fw-normal mb-1"> {{$product['name']}} </p>
                       </div>
                  </td>
                  <td> <p class="fw-normal mb-1"> {{$order['quantity']}} </p></td>


            <td>
             
               
             
                  <a data-mdb-toggle="modal" date-status="update" data-id="{{$order['id']}}" data-name="{{$product['name']}}" data-quantity="{{$order['quantity']}}" data-up="{{$product['unit_price']}}" title="Add this item" id="open-AddBookDialog" href="#exampleModal"><x-tni-tick-o style="width: 20px;"/></a>
                  </td>

                </tr>
                @endif
                @endforeach
                @endforeach
               

              </tbody>
            
           </div>
        </div>
      </div>
    </section>
    <script>
    $(document).on("click", "#open-AddBookDialog", function () {
     var id=$(this).data('id');
     var name = $(this).data('name');
     var quantity = $(this).data('quantity');
     var up = $(this).data('up');
     var tp = document.getElementById('tp')
    var total_price =  up*quantity

    tp.value = total_price
    //  var userId = $(this).data('id');
    $(".modal-body #id").val( id );
     $(".modal-body #name").val( name );
     $(".modal-body #quantity").val( quantity );
     $(".modal-body #up").val( up );
  
     
   
 
});
    </script>

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
    <script type="text/javascript" src="../js/mdb.min.js"></script>

    <script type="text/javascript"></script>
  </body>
</html>

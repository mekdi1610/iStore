<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8" />
   
  
   <link rel="stylesheet" href="../../css/style.css" />

  
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../css/mdb.min.css" />
    <link rel="stylesheet" href="../../css/css3.css" />
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
          <a href="#" class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="./users.html">
            <i class="bx bx-box"></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="./stores.html">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Stores</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../index.html">
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
        <div class="search-box">
          <input type="text" placeholder="Search..." />
          <i class="bx bx-search"></i>
        </div>
        <div class="profile-details">
          <!--<img src="images/profile.jpg" alt="">-->
          <span class="admin_name">Prem Shahi</span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>

      <div class="home-content">
        <div class="overview-boxes">
        
        @foreach($products ?? '' as $product)
    
       
          <div class="box">
            <div class="">
        
       
            
              <div>{{$product['name']}}</div>
            
            </div>
          
            <a data-mdb-toggle="modal" date-show="update" data-id="{{$product['id']}}" data-name="{{$product['name']}}" data-detail="{{$product['detail']}}" data-code="{{$product['code']}}" data-model="{{$product['model']}}" data-unit_price="{{$product['unit_price']}}" data-category_id="{{$product['category_id']}}"  title="Add this item" id="open-AddBookDialog" href="#exampleModal">
       
            <i class="bx bx-cart-alt cart"></i>
</a>
          </div>

          @endforeach

        </div>
      </div>
      

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
                        Add new product
                      </h5>

                      <button
                        type="button"
                        class="btn-close"
                        data-mdb-dismiss="modal"
                        aria-label="Close" 
                      ></button>
                    </div>
                    <div class="modal-body card-text">
                    <form action="/api/product/store" method="POST" enctype="multipart/form-data">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="form-outline mb-4">
                        <img src="{{url('/products/'.$product->image)}}" alt="Image"/><!-- 2 column grid layout with text inputs for the first and last names -->
                        </div>
                        <div class="form-outline mb-4"  style="display:none;">
                        <label class="form-label" for="name">ID</label>
                          <input type="text" id="id" class="form-control" name="id"/>
                        
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name" style="font-size: 1rem;">Name</label>
                          <input type="text" class="form-control" id = "name" name="name" disabled  />
                        
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="name" style="font-size: 1rem;">Detail</label>
                        <input type="text" class="form-control" id = "detail" name="detail" disabled  />
                     
                        </div>
                        <div class="form-outline mb-4">
                        <label class="form-label" for="name" style="font-size: 1rem;">Code</label>
                        <input type="text" class="form-control" id = "code" name="code" disabled />
                       
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="name" style="font-size: 1rem;">Model</label>
                        <input type="text" class="form-control" id = "model" name="model"  disabled />
                       
                        </div>
                        <div class="form-outline mb-4">
                        <label class="form-label" for="name" style="font-size: 1rem;">Unit Price</label>
                        <input type="text" class="form-control" id = "unit_price" name="unit_price" disabled />
                       
                        </div>
                       
                        
                        <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-mdb-dismiss="modal"
                      >
                        Close
                      </button>
                      <button class="btn btn-primary" type="submit" name="action" value="save" id="signup">Buy Now</button>
                     
                    </div>
                      </form>
                    </div>
                  
                  </div>
                </div>
              </div>
              </section>
    <script>
$(document).on("click", "#open-AddBookDialog", function () {
     var id=$(this).data('id');
     var name = $(this).data('name');
     var detail = $(this).data('detail');
     var code = $(this).data('code');
     var model = $(this).data('model');
     var unit_price = $(this).data('unit_price');
     var category_id = $(this).data('category_id');

    
    //  var userId = $(this).data('id');
    $(".modal-body #id").val( id );
     $(".modal-body #name").val( name );
     $(".modal-body #detail").val( detail );
     $(".modal-body #code").val( code );
     $(".modal-body #model").val( model );
     $(".modal-body #unit_price").val( unit_price );
     $(".modal-body #category_id").val( category_id );
     
   
 
 
});
    </script>



    <script type="text/javascript" src="../../js/mdb.min.js"></script>

    <script type="text/javascript"></script>
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

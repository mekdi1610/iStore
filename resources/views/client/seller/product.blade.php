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
          <a href="./index.html">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/product" class="active">
            <i class="bx bx-user"></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="/category">
            <i class="bx bx-product"></i>
            <span class="links_name">Category</span>
          </a>
        </li>
         <li class="log_out">
          <a href="/">
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
          <span class="admin_name">Prem Shahi</span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>

      <div class="home-content">
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">
              Products &nbsp;&nbsp;&nbsp;
              <!-- Button trigger modal -->
              <button
                type="button"
                class="btn btn-primary create-btn"
                data-mdb-toggle="modal"
                data-mdb-target="#exampleModal"
              >
                Add new product
              </button>

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
                    <form action="/api/product/product" method="POST">
                        <!-- 2 column grid layout with text inputs for the first and last names -->

                        <div class="form-outline mb-4">
                          <input type="text" class="form-control" name="name"  />
                          <label class="form-label" for="name" style="font-size: 1rem;">Name</label>
                        </div>

                        <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="detail"  />
                        <label class="form-label" for="name" style="font-size: 1rem;">Detail</label>
              

                              
                       
                          
                        </div>
                        <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="code"  />
                        <label class="form-label" for="name" style="font-size: 1rem;">Code</label>
                        </div>

                        <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="model"  />
                        <label class="form-label" for="name" style="font-size: 1rem;">Model</label>
                        </div>
                        <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="up"  />
                        <label class="form-label" for="name" style="font-size: 1rem;">up</label>
                        </div>
                        <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="category"  />
                        <label class="form-label" for="name" style="font-size: 1rem;">category</label>
                        </div>

                        <div class="form-outline mb-4">
                        <select  name="status" class="form-control">
                                  <option disabled selected>Select Status</option>
                                  <option name="status" value="Active"> Activate</option>
                                  <option name="status" value="Deactive"> Deactivate</option>
                             
                                </select>
                        
                        </div>
                        <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-mdb-dismiss="modal"
                      >
                        Close
                      </button>
                      <button class="btn btn-primary" type="submit" name="action" value="save" id="signup">Save</button>
                     
                    </div>
                      </form>
                    </div>
                  
                  </div>
                </div>
              </div>

              <!-- Modal -->
              <div
                class="modal fade"
                id="updateModal"
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
                    <form action="/api/product/update" method="POST">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="form-outline mb-4" style="display:none;">
                        <label class="form-label" for="name">ID</label>
                          <input type="text" id="id" class="form-control" name="id"/>
                        
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="name" style="font-size: 1.2rem;">Name</label>
                          <input type="text" id="name" class="form-control" name="name"/>
                        
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="location"  style="font-size: 1.2rem;"
                                >Location</label
                              >
                             
                              
                              </div>
                        <div class="form-outline mb-4">
                        <label class="form-label" for="status"  style="font-size: 1.2rem;">Status</label>
                        <select  name="status" class="form-control">
                                  <option disabled selected>Select Status</option>
                                  <option name="status" value="Active"> Activate</option>
                                  <option name="status" value="Deactive"> Deactivate</option>
                             
                                </select>
                          
                        </div>
                        <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-mdb-dismiss="modal"
                      >
                        Close
                      </button>
                     
                      <button class="btn btn-primary" type="submit" name="action" value="save" id="update">Update</button>
                     
                    </div>
                      </form>
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>

            <table class="table table-hover align-middle mb-0 bg-white">
              <thead class="bg-light">
                <tr>
                  <th>Name</th>
                  <th>Detail</th>
                  <th>Code</th>

                  <th>Model</th>
                  <th>Unit Price</th>
                  <th>Category</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              @foreach($products ?? '' as $product)
               
                <tr>
                  <td>
                    <div class="ms-3">
                    <p class="fw-normal mb-1"> {{$product['name']}} </p>
                       </div>
                  </td>
                  <td> <p class="fw-normal mb-1"> {{$product['detail']}} </p></td>
                  <td>
                  <p class="fw-normal mb-1"> {{$product['code']}} </p>
                  </td>
                  <td>
                  <p class="fw-normal mb-1"> {{$product['model']}} </p>
                  </td>
                  <td>
                  <p class="fw-normal mb-1"> {{$product['unit_price']}} </p>
                  </td>
                  <td>
                  <p class="fw-normal mb-1"> {{$product['category_id']}} </p>
                  </td>

            <!-- <td> -->
             
               
             
                  <!-- <a data-mdb-toggle="modal" date-status="update" data-id="{{$product['id']}}" data-name="{{$product['name']}}" data-detail="{{$product['detail']}}" data-code="{{$product['code']}}" data-model="{{$product['model']}}" data-up="{{$product['unit_price']}}" data-category="{{$product['category']}}" title="Add this item" id="open-AddBookDialog" href="#updateModal"><x-far-edit style="width: 20px;"/></a> -->
       
                  <!-- <a data-mdb-toggle="modal" date-status="deactivate" data-id="{{$product['id']}}" title="Deativate this item" id="open-AddBookDialog" href="#deactivateModal"><x-css-remove style="width: 20px;"/></a> -->
                  </td>

                </tr>
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
     var location = $(this).data('location');
     var status = $(this).data('status');

    
    //  var userId = $(this).data('id');
    $(".modal-body #id").val( id );
     $(".modal-body #name").val( name );
     $(".modal-body #location").val( location );
     $(".modal-body #status").val( status );
   
 
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

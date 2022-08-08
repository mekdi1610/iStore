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
                    <form action="/api/product/store" method="POST" enctype="multipart/form-data">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="name" style="font-size: 1rem;">Image</label>
                        <input type="file" class="form-control" required name="image">
                                              </div>
 
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
                        <input type="text" class="form-control" name="unit_price"  />
                        <label class="form-label" for="name" style="font-size: 1rem;">Unit Price</label>
                        </div>
                        <div class="form-outline mb-4">
                        <select  name="category_id" class="form-control">
                                  <option disabled selected>Select Category</option>
                                  @foreach($categories ?? '' as $category)
                                  <option name="category_id" value="{{$category['id']}}"> {{$category['name']}}</option>
                                  @endforeach
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
                        Update Product
                      </h5>

                      <button
                        type="button"
                        class="btn-close"
                        data-mdb-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body card-text">
                    <form action="/api/product/update" method="PUT">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="name" style="display:none;">ID</label>
                          <input type="text" id="id" class="form-control" name="id"/>
                        
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name" style="font-size: 1rem;">Name</label>
                          <input type="text" class="form-control" id = "name" name="name"  />
                        
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="name" style="font-size: 1rem;">Detail</label>
                        <input type="text" class="form-control" id = "detail" name="detail"  />
                     
                        </div>
                        <div class="form-outline mb-4">
                        <label class="form-label" for="name" style="font-size: 1rem;">Code</label>
                        <input type="text" class="form-control" id = "code" name="code"  />
                       
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="name" style="font-size: 1rem;">Model</label>
                        <input type="text" class="form-control" id = "model" name="model"  />
                       
                        </div>
                        <div class="form-outline mb-4">
                        <label class="form-label" for="name" style="font-size: 1rem;">Unit Price</label>
                        <input type="text" class="form-control" id = "unit_price" name="unit_price"  />
                       
                        </div>
                        <div class="form-outline mb-4">
                        <select  name="category_id" class="form-control">
                                  <option disabled selected>Select Category</option>
                                  @foreach($categories ?? '' as $category)
                                  <option name="category_id" value="{{$category['id']}}"> {{$category['name']}}</option>
                                  @endforeach
                                </select> </div>
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
                id="deleteModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">
                        Delete Product
                      </h5>

                      <button
                        type="button"
                        class="btn-close"
                        data-mdb-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body card-text">
                    <form action="/api/product/delete" method="POST">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="name">ID</label>
                          <input type="text" id="id" class="form-control" name="id"/>
                        
                        </div>
                        <div class="form-outline mb-4">
                       <h6> Are you sure you want to delete this product?</h6>
                        
                        </div>
                        <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-success"
                        data-mdb-dismiss="modal"
                      >
                        No
                      </button>
                      <button class="btn btn-danger" type="submit" name="action" value="save" id="delete">Yes</button>
                     
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
                  <th>Image</th>
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
              @foreach($categories ?? '' as $category)
              @if($product->category_id==$category->id)
                <tr>
                  <td>
                  <img src="{{url('/products/'.$product->image)}}" alt="Image"/></td>
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
                  <p class="fw-normal mb-1"> {{$category['name']}} </p>
                  </td>

            <td>
             
               
             
                  <a data-mdb-toggle="modal" date-status="update" data-id="{{$product['id']}}" data-name="{{$product['name']}}" data-detail="{{$product['detail']}}" data-code="{{$product['code']}}" data-model="{{$product['model']}}" data-unit_price="{{$product['unit_price']}}" data-category_id="{{$category['category_id']}}" title="Add this item" id="open-AddBookDialog" href="#updateModal"><x-far-edit style="width: 20px;"/></a>
       
                  <a data-mdb-toggle="modal" date-status="deactivate" data-id="{{$product['id']}}" title="Deativate this item" id="open-AddBookDialog" href="#deleteModal"><x-css-remove style="width: 20px;"/></a>
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

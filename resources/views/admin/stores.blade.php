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
          <a href="/admin/users">
            <i class="bx bx-user"></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="/admin/stores"   class="active">
            <i class="bx bx-store"></i>
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
        <div class="profile-details">
          <!--<img src="images/profile.jpg" alt="">-->
          <span class="admin_name">{{$loggedin['email']}}</span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>

      <div class="home-content">
      @include('flash-message')
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">
              Stores &nbsp;&nbsp;&nbsp;
              <!-- Button trigger modal -->
              <button
                type="button"
                class="btn btn-primary create-btn"
                data-mdb-toggle="modal"
                data-mdb-target="#exampleModal"
              >
                Add new store
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
                        Add new store
                      </h5>

                      <button
                        type="button"
                        class="btn-close"
                        data-mdb-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body card-text">
                    <form action="/api/store/store" method="POST">
                        <!-- 2 column grid layout with text inputs for the first and last names -->

                        <div class="form-outline mb-4">
                          <input type="text" class="form-control" name="name"  />
                          <label class="form-label" for="name" style="font-size: 1rem;">Name</label>
                        </div>

                        <div class="form-outline mb-4">
                        <select  name="location_id" class="form-control">
                                  <option disabled selected>Select Location</option>
                                  @foreach($locations ?? '' as $location)
                                  <option name="location_id" value="{{$location['id']}}" style="font-size: 1rem;"> {{$location['country']}},{{$location['city']}},{{$location['street']}}</option>
                                  @endforeach
                                </select>

                              
                       
                          
                        </div>
                        <div class="form-outline mb-4">
                        <select  name="user_id" class="form-control">
                                  <option disabled selected>Select Owner</option>
                                  @foreach($users ?? '' as $user)
                                  @if($user['role']=='Seller')
                                  <option name="user_id" value="{{$user['id']}}" style="font-size: 1rem;"> {{$user['email']}},{{$user['role']}}</option>
                                  @endif
                                  @endforeach
                                </select>
                              
                  
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
                        Add new store
                      </h5>

                      <button
                        type="button"
                        class="btn-close"
                        data-mdb-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body card-text">
                    <form action="/api/store/update" method="POST">
                    @method('PUT')
    @csrf
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="form-outline mb-4" style="display:none;">
                        <label class="form-label" for="name">ID</label>
                          <input type="text" id="id" class="form-control" name="id" style="font-size: 1rem;"/>
                        
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="name" style="font-size: 1rem;">Name</label>
                          <input type="text" id="name" class="form-control" name="name" style="font-size: 1rem;"/>
                        
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="location"  style="font-size: 1rem;"
                                >Location</label
                              >
                                <select  name="location_id" class="form-control">
                                  <option disabled selected>Select Location</option>
                                  @foreach($locations ?? '' as $location)
                                  <option name="location_id" value="{{$location['id']}}" style="font-size: 1rem;"> {{$location['country']}},{{$location['city']}},{{$location['street']}}</option>
                                  @endforeach
                                </select>
                              
                              </div>
                        <div class="form-outline mb-4">
                        <label class="form-label" for="status"  style="font-size: 1rem;">Status</label>
                        <select  name="status" class="form-control" style="font-size: 1rem;">
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
                  <th>Location</th>
                  <th>Store</th>

                  <th>Status</th>
                  <th>Owner</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              @foreach($stores ?? '' as $store)
              @foreach($users ?? '' as $user)
              @foreach($locations ?? '' as $location)
               
               @if($store->user_id==$user->id && $store->location_id==$location->id)
                <tr>
                  <td>
                    <div class="ms-3">
                    <p class="fw-normal mb-1"> {{$store['name']}} </p>
                       </div>
                  </td>
                  <td> <p class="fw-normal mb-1"> {{$location['city']}} </p></td>
                  <td>Abeba</td>
                  <td>
                  <p class="fw-normal mb-1"> {{$store['status']}} </p>
                  </td>
                  <td>
                  <p class="fw-normal mb-1"> {{$user['email']}} </p>
                  </td>

            <td>
             
               
             
                  <a data-mdb-toggle="modal" date-status="update" data-id="{{$store['id']}}" data-name="{{$store['name']}}" data-location="{{$store['location_id']}}" data-status="{{$store['status']}}"  title="Add this item" id="open-AddBookDialog" href="#updateModal"><x-far-edit style="width: 20px;"/></a>
       
                                   </td>

                </tr>
                @endif
                @endforeach
                @endforeach
                @endforeach
              </tbody>
              
            </table>
            <!-- <div class="button">
              <a href="#">See All</a>
            </div> -->
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

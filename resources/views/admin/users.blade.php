<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
          <a href="#" class="active">
            <i class="bx bx-store"></i>
            <span class="links_name">Stores</span>
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
              Users &nbsp;&nbsp;&nbsp;
              <!-- Button trigger modal -->
              <button
              id="newUser"
                type="button"
                class="btn btn-primary create-btn"
                data-mdb-toggle="modal"
                data-mdb-target="#exampleModal"
              >
                Add new user
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
                        Add new user
                      </h5>

                      <button
                        type="button"
                        class="btn-close"
                        data-mdb-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body card-text">
                    <form action="/api/profile/store" method="POST" id="addUser">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                          <div class="col">
                            <div class="form-outline">
                              <input
                                type="text"
                                id="fname" name="first_name"
                                class="form-control"
                              />
                              <label class="form-label" for="fname">First name</label
                              >
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline mb-4">
                              <input
                                type="text"
                                id="mname" name="middle_name"
                                class="form-control"
                              />
                              <label class="form-label" for="mname"
                                >Middle name</label
                              >
                            </div>
                          </div>
                       </div>
                       <div class="row mb-4">
                        <!-- Email input -->
                        <div class="col">
                          <div class="form-outline mb-4">
                          <input type="lnmae" id="lname" name="last_name" class="form-control" />
                          <label class="form-label" for="email"
                            >Last Name</label
                          >
                        </div>
                        </div>
                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                          <input type="email" id="email" name="email" class="form-control" />
                          <label class="form-label" for="email"
                            >Email address</label
                          >
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                          <input
                            type="password"
                            id="password" name="password"
                            class="form-control"
                          />
                          <label class="form-label" for="password"
                            >Password</label
                          >
                        </div>
                             <!-- Password input -->
                             <div class="form-outline mb-4">
                              <input
                                type="password"
                                id="confirm_password" name="confirm_password"
                                class="form-control"
                              />
                              <label class="form-label" for="confirm_password"
                                >Confirm password</label
                              >
                            </div>
                           
                              <div class="form-outline mb-4">
                                <select  name="role" id="role"   class="form-control">
                                  <option disabled selected>Select your role</option>
                                  <option name="role" value="buyer">Buyer</option>
                                  <option name="role" value="seller">Seller</option>
                                  <option name="role" value="admin">Admin</option>
                                </select>
                                <label class="form-label" for="confirm_password"
                                >Role</label
                              >
                              </div>
                         
                   
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
                        Update User
                      </h5>

                      <button
                        type="button"
                        class="btn-close"
                        data-mdb-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body card-text">
                    <form action="/api/user/update" method="POST">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                        <div class="col" style="display:none;">
                            <div class="form-outline">
                              <input
                                type="text"
                                id="id" name="id"
                                class="form-control" style="transition: none;"
                              />
                              <label class="form-label" for="id">ID</label
                              >
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="fname">First name</label>
                              <input
                                type="text"
                                id="fname" name="first_name"
                                class="form-control" style="transition: none;" readonly
                              />
                             
                              
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline mb-4">
                            <label class="form-label" for="mname"
                                >Middle name</label
                              >
                              <input
                                type="text"
                                id="mname" name="middle_name"
                                class="form-control" style="transition: none;" readonly
                              />
                             
                            </div>
                          </div>
                       </div>
                       <div class="row mb-4">
                        <!-- Email input -->
                        <div class="col">
                          <div class="form-outline mb-4">
                          <label class="form-label" for="email"
                            >Last Name</label
                          >
                          <input type="lname" id="lname" name="last_name" class="form-control" style="transition: none;" readonly/>
                          
                        </div>
                        </div>
                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="email"
                            >Email address</label
                          >
                          <input type="email" id="email" name="email" class="form-control" style="transition: none;"/>
                         
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="password"
                            >Password</label
                          >
                          <input
                            type="password"
                            id="password" name="password"
                            class="form-control" style="transition: none;"
                          />
                         
                        </div>
                             <!-- Password input -->
                             <div class="form-outline mb-4">
                             <label class="form-label" for="confirm_password"
                                >Confirm password</label
                              >
                              <input
                                type="password"
                                id="confirm_password" name="confirm_password"
                                class="form-control" style="transition: none;"
                              />
                            
                            </div>
                           
                              <div class="form-outline mb-4">
                              <label class="form-label" for="confirm_password"
                                >Role</label
                              >
                                <select  name="role" id="role" class="form-control" style="transition: none;">
                                  <option disabled selected>Select your role</option>
                                  <option name="role" value="Buyer">Buyer</option>
                                  <option name="role" value="Seller">Seller</option>
                                  <option name="role" value="Admin">Admin</option>
                                </select>
                             
                              </div>
                         
                   
                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-mdb-dismiss="modal"
                      >
                        Close
                      </button>
                      <button class="btn btn-primary" type="submit" name="action" value="update" id="update">Update</button>
                     
                      
                    </div>
                  </form>


                  
                  </div>
                </div>
              </div>
            </div>
        
            <table class="table table-hover align-middle mb-0 bg-white">
              <thead class="bg-light">
                <tr>
                 
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Creted Date</th>

                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              @foreach($profiles ?? '' as $profile)
              
          
              @foreach($users ?? '' as $user)
               
                @if($user->profile_id==$profile->id)
              
                <tr>
               
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="ms-3">
                      <p class="fw-normal mb-1"> {{$profile['first_name']}} {{$profile['middle_name']}} {{$profile['last_name']}}</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="fw-normal mb-1"> {{$user['email']}}</p>
                   
                  </td>
                  <td>
                   <p class="text-muted mb-0">{{$user['role']}}</p>
                    
                  </td>
                  <td>
                   <p class="text-muted mb-0">{{$user['created_at']}}</p>
                    
                  </td>
                  <td>
                  <!-- <a data-toggle="modal" data-id="ISBN-001122" title="Add this item" class="open-AddBookDialog btn btn-primary" href="#addBookDialog">test</a> -->

                
                  
                <a data-mdb-toggle="modal" date-status="update" data-id="{{$user['id']}}" data-email="{{$user['email']}}" data-role="{{$user['role']}}" data-first_name="{{$profile['first_name']}}" data-middle_name="{{$profile['middle_name']}}" data-last_name="{{$profile['last_name']}}" title="Add this item" id="open-AddBookDialog" href="#updateModal"><x-far-edit style="width: 20px;"/></a>
       
                  </td>
                </tr>
                @endif

          
                @endforeach
                @endforeach
              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <script>
   $(document).on("click", "#open-AddBookDialog", function () {
     var userId = null;
     userId=$(this).data('id');
     var first_name = $(this).data('first_name');
     var middle_name = $(this).data('middle_name');
     var last_name = $(this).data('middle_name');
     var email = $(this).data('email');
     var role = $(this).data('role');
    
    //  var userId = $(this).data('id');
    $(".modal-body #id").val( userId );
     $(".modal-body #email").val( email );
     $(".modal-body #fname").val( first_name );
     $(".modal-body #mname").val( middle_name );
     $(".modal-body #lname").val( last_name );
     $(".modal-body #role").val( role );
   
    //  $('#signup').html('Password dont match').css('display', 'none')
    $('#signup').css('display', 'none'),
     $('#update').css('display', 'block')
 
});
    </script>

<script>
   $(document).on("click", "#newUser", function () {
    
    
    //  var userId = $(this).data('id');

     $(".modal-body #email").val("");
     $(".modal-body #fname").val("");
     $(".modal-body #mname").val("");
     $(".modal-body #lname").val("");
     $(".modal-body #role").val("");

     $('#signup').css('display', 'block'),
     $('#update').css('display', 'none')
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
    
    <script type="text/javascript" src="/js/mdb.min.js"></script>

    <script type="text/javascript"></script>
  </body>
</html>

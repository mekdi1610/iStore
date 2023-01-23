<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/style.css" />

    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
            <span class="links_name">iStore</span>
          </a>
        </li>
       
        <li class="log_out">
          <a href="/login">
            <i class="bx bx-log-in"></i>
@if(isset($users['email']))
            <span class="links_name">{{$users['email'] ? 'Logout' : 'Login'}}</span>
         @else
         <span class="links_name">{{'Login'}}</span>
       
            @endif
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">iStore</span>
        </div>
        <div class="profile-details">
          <!--<img src="images/profile.jpg" alt="">-->
          <span class="admin_name">{{$users['email'] ?? 'Login?'}}</span>
          <i class="bx bx-chevron-down"></i>
        </div>
        

   
      </nav>

      <div class="home-content">
        <div class="overview-boxes">
        
        @foreach($categories ?? '' as $category)
    
       
          <div class="box" style="height:200px;">
            <div class="">
            <a href="{{ url('store/product/'.$category->id) }}">
            <x-bx-category />
            
              <div class="" style="color: black; font-size:10px;">{{$category['name']}}</div>
              </a>
            </div>
          
          </div>

          @endforeach

        </div>
      </div>
    </section>
<style>
  svg {
    width: 50.5px;
    height: 50.5px;
  }
  </style>
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

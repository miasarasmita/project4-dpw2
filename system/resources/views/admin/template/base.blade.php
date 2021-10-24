<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.section.assets')
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      @include('admin.section.sidebar')    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      @include('admin.section.header')
      <!-- End Navbar -->
    
      <div class="content">
        <div style="padding-top: 100px">
     @yield('content')
          
        </div>
      </div>
      
      <footer class="footer">
        @include('admin.section.footer')
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
 @include('admin.section.js')
</body>

</html>
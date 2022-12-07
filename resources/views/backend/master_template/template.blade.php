
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <!-- head-->
    @include('backend.includes.head')

  
    <!-- Css-->
    @include('backend.includes.css')

  </head>

  <body>

   

    <!-- Leftpanel-->
    @include('backend.includes.leftpanel')

    <!-- Topbar-->

    @include('backend.includes.topbar')
    

    <!-- Rightpanel-->
    
    @include('backend.includes.rightpanel')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      
    @yield('content')
    
    <!--Footer-->
    @include('backend.includes.footer')

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!--script-->
    @include('backend.includes.script')
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type='text/css'>
        .div_center
        {
            text-align:center;
            padding-top:40px;
        }
        .h2_font
        {
            font-size:40px;
            padding-top:40px;
        }
        .input_colour
        {
            colour: black;
        }
        .get_current_user
        {
            margin:auto;
            width:50%;
            text-align: center;
            margin-top:30px;
            border: 3px white;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))
          <div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
            {{session()->get('message')}}
            </div>
            @endif
            <div class="div_center">
                <h2 class="h2_font">Add Category</h2>
                <form action="{{url('/add_category')}}" method="POST">

                @csrf
                    <input class='input_colour' type='text' name='category' placeholder='Write category name'>
                    <input type='submit' class='btn btn-primary' name='submit' value='Add category'>
                </form>
            </div>

            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
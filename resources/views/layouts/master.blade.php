
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>To do list</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
</head>
<body>

    <div class="container">

           

             <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                @csrf
                <p>Logged as <b>{{Auth::user()->name }}</b><button type="submit" class="waves-effect waves-light 
                btn">logout</button></p>
            </form>

            @isAdmin
            <ul class="collapsible">
                    <li>
                      <div class="collapsible-header">
                        <i class="material-icons">person_add</i>
                        Invitation
                        <span class="new badge">4</span></div>
                      <div class="collapsible-body">
                          <p>
                            <span class="red-text"><b>Buzz Narith Ran</b></span> <a href="">accept</a> | <a href="">deny</a>
                          </p>
                          <p>
                             <span class="red-text"><b>Fuller Narith Ran</b></span> <a href="">accept</a> | <a href="">deny</a>
                          </p>
                          <p>
                            <span class="red-text"><b>Harry Narith Ran</b></span> <a href="">accept</a> | <a href="">deny</a>
                          </p>
                          <p>
                            <span class="red-text"><b>Lida Narith Ran</b></span> <a href="">accept</a> | <a href="">deny</a>
                          </p>
                        
                       </div>
                    </li>
                    
                  </ul>

                @endisAdmin

                  <h1 class="center-align green-text text-darken-4">To-do list</h1>
                  @yield('content')

    </div>
    
 


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script>
      var elems = document.querySelectorAll('.collapsible');
      var options;
      var instances = M.Collapsible.init(elems, options);
  </script>
    <script>
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
    </script>
  </body>
</html>

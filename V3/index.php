<!DOCTYPE html>

<html lang="en">
  <head>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>
      forum-home
    </title>

      <link rel="apple-touch-icon" sizes="180x180" href="./images/icon/apple-touch-icon.png">
      <link rel="icon" type="image/png" href="./images/icon/favicon-32x32.png" sizes="32x32">
      <link rel="icon" type="image/png" href="./images/icon/favicon-16x16.png" sizes="16x16">
      <link rel="manifest" href="./images/icon/manifest.json">
      <link rel="mask-icon" href="./images/icon/safari-pinned-tab.svg" color="#5bbad5">

    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

    <nav class="navbar navbar-light bg-faded navbar-fixed-top NavText">

      <ul class="nav navbar-nav">

        <a href="index.php" class="nav-item"><img id="LogoNavBar" src="./images/LogoNavBar.svg"></a>

        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="code/pages/groups.php">Groups</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="code/pages/account.php">Account</a>
        </li>

        <form class="form-inline float-xs-right">

            <button type="button" class="btn btn-outline-success AccountOptionButtons" data-toggle="modal" data-target="#LoginModal" id="LoginButton">
              Login
            </button>
            <button type="button" class="btn btn-outline-success AccountOptionButtons" data-toggle="modal" data-target="#SignUpModal" id="SignUpButton">
              Sign Up
            </button>

        </form>

      </ul>

    </nav>

    <a href="code/pages/post.php">
      <button type="button" class="btn btn-primary" id="PostButton">Post</button>
    </a>

  </head>

  <body id="body">

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

    <!-- Modal login -->
    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Login</h4>
          </div>
          <div class="modal-body">
            <input class="form-control AccountFields modalForm" type="text" placeholder="email">
            <input class="form-control AccountFields modalForm" type="password" placeholder="password">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Forgot password</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Login</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Sign Up -->
    <div class="modal fade" id="SignUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
          </div>
          <div class="modal-body">
            <input class="form-control AccountFields modalForm" type="text" placeholder="full name">
            <input class="form-control AccountFields modalForm" type="text" placeholder="email">
            <input class="form-control AccountFields modalForm" type="password" placeholder="password">
            <input class="form-control AccountFields modalForm" type="password" placeholder="comfirm password">
            <input class="form-control AccountFields modalForm" type="text" placeholder="password hint">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Create Account</button>
          </div>
        </div>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3 TitlePost">Title Post</h1>
        <p class="lead ContentPost">Post Content</p>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3 TitlePost">Lorem ipsum</h1>
        <p class="lead ContentPost">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. </p>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3 TitlePost">Lorem ipsum</h1>
        <p class="lead ContentPost">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. </p>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3 TitlePost">Lorem ipsum</h1>
        <p class="lead ContentPost">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. </p>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3 TitlePost">Lorem ipsum</h1>
        <p class="lead ContentPost">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. </p>
      </div>
    </div>

    <link rel="stylesheet" type="text/css" href="./code/css/main.css">

  </body>

</html>

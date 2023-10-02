<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>College Dashboard</title>
  <!-- <link rel="stylesheet" href="frontend/css/style.css" /> -->
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="containerCustom">
    <nav>
      <ul>
        <li>
          <a href="/dashboard" class="logo">
            <!-- <img src="/logo.jpg" alt=""> -->
            <span class="nav-item">
              @auth('college')
                  <p>{{ Auth::guard('college')->user()->name }}</p>
              @endauth
            </span>
          </a>
        </li>

        <li><a href="/college/edit-profile">
          <i class="fas fa-user"></i>
          <span class="nav-item">Edit Profile</span>
        </a></li>
        <li><a href="/college/course-detail">
          <i class="fas fa-user"></i>
          <span class="nav-item">Manage Course</span>
        </a></li>
        <li><a href="/college/view-inquiry">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Manage Inquiry</span>
        </a></li>
        <li><a href="/college/logout" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      @yield('content')
    </section>
  </div>
</body>
</html>

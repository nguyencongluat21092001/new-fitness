<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> -->

    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="frontend/css_dashboard/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
    <!-- Custom styles for this template -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link href="frontend/css_dashboard/css/dashboard.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
    <style>
        .group:hover .group-hover{
            /* visibility: visible; */
            transform: translate(0);
        }
        .group-hover{
            /* visibility: hidden; */
        }
        .pt-club{
            font-family: 'Rampart One', cursive;
        }
    </style>
</head>

<body class="bg-cover bg-no-repeat w-screen h-screen bg-center  "style="background-image: url('https://image.thanhnien.vn/1024/uploaded/ngocquy/2020_08_24/4-hit-day_nqwl.jpg')">
    <nav class="navbar bg-white sticky-top bg-dark h-10 p-0">
        <a class="navbar-brand bg-white  flex justify-center col-sm-3 col-md-2 mr-0 text-center uppercase font-bold" href="{{ url ('trang-chu') }}"><img src="https://i.etsystatic.com/20162739/r/il/9a71a4/1939184823/il_1588xN.1939184823_n1zy.jpg" width="100" alt=""></a>
        <a class="nav-link text-green-500   uppercase font-bold mt-10" href="{{ url ('loginAdmin') }}">  <button type="button" class="btn btn-success hover:bg-yellow-600">Logout</button></a>
      
    </nav>  

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-gray-100 sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column text-center">
                        <button type="button" class="btn btn-success">ADMIN GYM CLUB</button>
                        <li class="nav-item group bg-black text-white py-2 my-2 mx-2  shadow ">
                            <span class=" px-3 uppercase font-semibold">Huấn luyện Viên</span>
                            <ul class="group-hover mt-3 absolute bg-gray-200 font-serif transition duration-700 ease-in-out transform -translate-x-full">
                                <li><a class="nav-link active " href="{{ url ('dashboard') }}">
                                    <button type="button" class="btn btn-light hover:bg-green-300">Thêm huấn luyện viên</button>
                                </a></li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ url ('dashboard_manager') }}">
                                        <button type="button" class="btn btn-light hover:bg-green-300">All huấn luyện viên </button>
                                    </a>
                                </li>
                            </ul>
                            
                        </li>
                        <li class="nav-item group bg-black text-white py-2 my-2 mx-2  shadow ">
                            <span class=" px-3 uppercase font-semibold">Combo</span>
                            <ul class="group-hover mt-3 absolute bg-gray-200 font-serif transition duration-700 ease-in-out transform -translate-x-full">
                                <li><a class="nav-link active " href="{{ url ('addPricing') }}">
                                    <button type="button" class="btn btn-light hover:bg-green-300">Thêm gói tập luyện</button>
                                </a></li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ url ('listPricing') }}">
                                        <button type="button" class="btn btn-light hover:bg-green-300">Gói tập hiện tại</button>
                                    </a>
                                </li>
                            </ul>
                            
                        </li>
                        <li class="nav-item group bg-black text-white py-2 my-2 mx-2  shadow ">
                            <span class=" px-3 uppercase font-semibold">Time</span>
                            <ul class="group-hover mt-3 absolute bg-gray-200 font-serif transition duration-700 ease-in-out transform -translate-x-full">
                                <li><a class="nav-link active " href="{{ url ('addschedule') }}">
                                    <button type="button" class="btn btn-light hover:bg-green-300">Thay đổi thời khóa biểu</button>
                                </a></li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ url ('listschedule') }}">
                                        <button type="button" class="btn btn-light hover:bg-green-300">Thời khóa biểu</button>
                                    </a>
                                </li>
                            </ul>
                            
                        </li>
                        <li class="nav-item group bg-black text-white py-2 my-2 mx-2  shadow ">
                            <span class=" px-3 uppercase font-semibold">Blog</span>
                            <ul class="group-hover mt-3 absolute px-4 bg-gray-200 font-serif transition duration-700 ease-in-out transform -translate-x-full">
                                <li><a class="nav-link active " href="{{ url ('addBlog') }}">
                                    <button type="button" class="btn btn-light hover:bg-green-300">Thêm bài viết</button>
                                </a></li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ url ('listBlog') }}">
                                        <button type="button" class="btn btn-light hover:bg-green-300">Tất cả bài viết</button>
                                    </a>
                                </li>
                            </ul>
                            
                        </li>
                        <li class="nav-item group bg-black text-white py-2 my-2 mx-2  shadow ">
                            <span class=" px-3 uppercase font-semibold">Contact</span>
                            <ul class="group-hover mt-3  absolute bg-gray-200 font-serif transition duration-700 ease-in-out transform -translate-x-full">
                                <li class="px-12"><a class="nav-link active " href="{{ url ('listContact') }}">
                                    <button type="button" class="btn btn-light hover:bg-green-300">Liên hệ </button>
                                </a></li>
                               
                            </ul>
                        </li>
                        <li class="nav-item group bg-black text-white py-2 my-2 mx-2  shadow ">
                            <span class=" px-3 uppercase font-semibold">users</span>
                            <ul class="group-hover mt-3  px-4 absolute bg-gray-200 font-serif transition duration-700 ease-in-out transform -translate-x-full">
                                <li><a class="nav-link active " href="{{ url ('users') }}">
                                    <button type="button" class="btn btn-light hover:bg-green-300">Quản lí Users </button>
                                </a></li>
                               
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </nav>

@yield('body')

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script> -->

    <!-- Icons -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

</body>

</html>
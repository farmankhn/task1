<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LaraCraft</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('ui_assets/css/bootstrap.min.css') !!}
    
    <!-- Custom CSS -->
    {!! Html::style('ui_assets/css/modern-business.css') !!}
    
    <!-- Custom Fonts -->
    {!! Html::style('ui_assets/font-awesome/css/font-awesome.min.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    @yield('slider')

    <div class="container">
        <!-- Footer -->

        @yield('content')

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>

     <!-- jQuery -->
    {!! Html::script('ui_assets/js/jquery.js') !!}

    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('ui_assets/js/bootstrap.min.js') !!}

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <script type="text/javascript">
            $("#getDet").click(function(){
            if($("#city_name").val() == "" || $("#zip_code").val() == ""){
                alert("Invalid Data");
                return false;
            }
            
            $.ajax({
                  type: "POST",
                  url: "{{ action('Main@getDetails') }}",
                  data: {"city_name": $('#city_name').val(), "zip_code": $('#zip_code').val() },
                  beforeSend: function(){
                    $('#myTableId tbody').remove();
                  },
                  success: function(data){
                    var obj = jQuery.parseJSON( data);
                    var newRowContent = "<tr><td>"+obj.city+"</td><td>"+obj.observation_time+"</td><td>"+obj.temp_C+"</td><td>"+obj.weatherCode+"</td><td><img src="+obj.weatherIconUrl+"></td><td>"+obj.weatherDesc+"</td></tr>";
                    $(newRowContent).appendTo($("#bod"));
                  },
                  aftereSend: function(){
                  
                  }

            });
        });
        </script>

</body>
</html>
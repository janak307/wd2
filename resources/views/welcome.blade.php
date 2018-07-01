<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"  ></script>
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->

        <div class="container">
            <div class="col-md-offset-3 col-md-6 text-center">
                <h2 style="color: #555; line-height: 1">FREQUENLY ASKED QUESTIONS</h2>
                <hr>
            </div>

            <div class="col-md-offset-3 col-md-6">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default" style="background-color: transparent">
                        <div class="panel-heading text-left" role="tab" id="headingOne">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class="panel-title">        
                                    What type of Food is prepared in kitchen ? 
                                </h4>
                            </a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body text-left" style="color: black">
                              We make simple home style, less oily and less spicy food. You can check the weekly menu in menu segment
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="background-color: transparent">
                        <div class="panel-heading text-left" role="tab" id="headingTwo">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 class="panel-title">        
                                    How to Book for Monthly Plan and what are the charges ?         
                                </h4>
                            </a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body text-left" style="color: black">
                              You can opt for 20 or 25 meals plan which can be consumed over a period of 60 days.<br/><br/>
                              All payments for our tiffin services should be made in advance and we do not give any credit. Once your meal plan is over, delivery will automatically stop unless and until it is renewed.<br/><br/>
                              We charge a security deposit of Rs.250/- for tiffin containers, which is 100% refundable at the time of cancellation of membership but in case any damage is caused to the containers or the bag containing the containers, amount will be deducted from your security deposit as follows: (Per container : Rs.50/-, Bag containing the containers : Rs.110/-)<br/><br/>
                              The security deposit can be given to the delivery person in cash at the time of your first tiffin delivery.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="background-color: transparent">
                        <div class="panel-heading text-left" role="tab" id="headingThree">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h4 class="panel-title">        
                                    How tiffin account is maintained ? 
                                </h4>
                            </a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body text-left" style="color: black">
                              Our accounting system is online and transparent. You can login to your account and check the details at any time.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="background-color: transparent">
                        <div class="panel-heading text-left" role="tab" id="headingFour">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h4 class="panel-title">        
                                    I am in a touring/sales job, how can I opt for monthly package plan ?         
                                </h4>
                            </a>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body text-left" style="color: black">
                              We have a flexible, customer friendly system where you can easily choose the dates as per your requirement and also reschedule it if necessary. The 20 or 25 meals in your plan can  be consumed over a period of 60 days.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="background-color: transparent">
                        <div class="panel-heading text-left" role="tab" id="headingFive">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <h4 class="panel-title">        
                                    Can I take trial before opting for monthly plan ? 
                                </h4>
                            </a>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body text-left" style="color: black">
                              Yes, we have an option of 1 day or 6 days trial. Meal will be delivered in disposable containers.
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
            
            <div class="col-md-offset-3 col-md-6 text-center">
                <h2 style="color: #555; line-height: 1">SEND US QUERY</h2>
                <hr>
            </div>

            <div id="queryForm" class="col-md-offset-3 col-md-6">            
                <form id="contactFrom" class="form-horizontal" action="{{ url('querystore')}}" method="post">
                    @csrf
                    <fieldset>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12" for="txtName">Name</label>  
                            <div class="col-md-12">
                            <input id="txtName" name="txtName" type="text" placeholder="name" class="form-control input-md" required="">
                              
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12" for="txtemail">emailid</label>  
                            <div class="col-md-12">
                            <input id="txtEmail" name="txtEmail" type="email" placeholder="email" class="form-control input-md" required="">
                              
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-12" for="txtaQuestion">Question</label>
                            <div class="col-md-12">                     
                              <textarea class="form-control" id="txtaQuestion" name="txtaQuestion" placeholder="your query"></textarea>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <div class="col-md-12">
                              <button id="btnSubmit" name="btnSubmit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>

            <div id="loader" class="col-md-offset-3 col-md-6 progress" style="display:none">
              <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                <span class="sr-only">45% Complete</span>
              </div>
            </div>

        </div>


        <script>
          
            $(document).ready(function(e) {
                $('#contactFrom').submit(function(e) {
                    e.preventDefault();
                    var sEmail = $('#txtEmail').val();
                    var sName = $('#txtName').val();
                    var sQuery = $('#txtaQuestion').val();
                    
                    if ($.trim(sName).length == 0 || $.trim(sEmail).length == 0 || $.trim(sQuery).length == 0) {
                        alert('All fields are mandatory');
                        return  false;
                    }

                    if (!validateEmail(sEmail)) {
                        alert('Invalid Email Address');
                        return  false; 
                    }

                    var url = '/querystore'; // the script where you handle the form input.

                    $.ajax({
                           type: "POST",
                           url: url,
                           data: $("#contactFrom").serialize(), // serializes the form's elements.
                           beforeSend: function(){
                             $('#loader').show();
                             $('#queryForm').hide();

                           },
                           success: function(data)
                           {
                                toastr.success(data, 'Thank You');
                                window.scrollTo(0,0);
                                $('#loader').hide();
                                $('#queryForm').show();

                                $('#txtEmail').val('');
                                $('#txtName').val('');
                                $('#txtaQuestion').val('');
                               // alert(data); // show response from the php script.
                           }
                    });



                                              
                });
            });

            function validateEmail(sEmail) {
                var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                if (filter.test(sEmail)) {
                    return true;
                }
                else {
                    return false;
                }
                
            }

        </script>    
    </body>
</html>

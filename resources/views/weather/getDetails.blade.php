@extends('app')

@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Enter Details</small>
                </h1>
                
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <form name="sentMessage" id="contactForm" accept-charset="UTF-8">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>City Name:</label>
                            <input type="text" class="form-control" id="city_name" required data-validation-required-message="Please enter your name." name="city_name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Zip Code:</label>
                            <input type="tel" class="form-control" id="zip_code" required data-validation-required-message="Please enter your phone number." name="zip_code">
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="button" id="getDet" class="btn btn-primary">Get Detail !!</button>
                </form>
            </div>

        </div> <br />
        <div class="row">
            <div class="col-md-10">
        <table class="table table-bordered" id="bod">
    <thead>
      <tr>
        <th>City Name</th>
        <th>Observation time</th>
        <th>Temperature</th>
        <th>Weather Code</th>
        <th>Icon</th>
        <th>weather Desc</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
  </div>
  </div>
@stop
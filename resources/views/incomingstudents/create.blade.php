<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com) & Updivision (https://www.updivision.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim & Updivision

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('light-bootstrap/img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('light-bootstrap/img/favicon.ico') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>{{ __('Register') }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="{{ asset('light-bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('light-bootstrap/css/light-bootstrap-dashboard.css?v=2.0.0') }} " rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{ asset('light-bootstrap/css/demo.css') }}" rel="stylesheet" />
    </head>

    <body>
        <div class="wrapper wrapper-full-page">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
                <div class="container">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="/">{{ __('Davao Oriental State University') }}</a>
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar burger-lines"></span>
                            <span class="navbar-toggler-bar burger-lines"></span>
                            <span class="navbar-toggler-bar burger-lines"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navbar">
                        <!-- <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('dashboard') }}" class="nav-link">
                                    <i class="nc-icon nc-chart-pie-35"></i> {{ __('Dashboard') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">
                                    <i class="nc-icon nc-badge"></i> {{ __('Register') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">
                                    <i class="nc-icon nc-mobile"></i> {{ __('Login') }}
                                </a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </nav>
            <div class="full-page register-page section-image" data-color="orange" data-image="{{ asset('light-bootstrap/img/dorsu-background.jpg') }}">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h3>DATA PRIVACY</h3>
                                    <hr>
                                </div>
                                <div class="card-body">
                                    <p>In compliance with the Data Privacy Act(DPA) of 2012, and its Implementing Rules and Regulations (IRR) effective since September8, 
                                        2016, I allow DOrSU-GCTC to collect and process my personal sensitive information. Furthermore, I am Particular, I agree that 
                                        DOrSU-GCTC shall:
                                        <ol>
                                            <li>
                                                Collect and process my Personal Data, Parent's Information, SCAST Results,
                                                Unique Features, Educational and Career Plan and Self-Assessment;
                                            </li>
                                            <li>
                                                Collect and process the aforementioned data solely for counseling and intervention purposes;
                                            </li>
                                            <li>Collect the data using online platform, and</li>
                                            <li>
                                                Store the data for no longer than necessary or upon the termination of the purpose for which
                                                the data are to be utilized. I am fully aware of my rights, specifically: <br>
                                                A. The exercise of my rights to access, correction, as well as the right to lodge a complaint before
                                                the University's Data Protection Officer; <br>
                                                B. That my personal and sensitive personal information shall not be disclosed or transferred to any
                                                other individuals or entities without my express consent.
                                            </li>
                                        </ol>
                                    </p>
                                    <p>By participating in this data collection, I hereby agree with the foregoing conditions in compliance to
                                        Republic
                                        Act 10173 or the Data Privacy of 2012.
                                    </p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <button type="submit" class="btn btn-primary">I agree</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Type of Student Enrollee</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col-lg-4">
                                            <div>
                                                <img src="img/newstudent.png">
                                            </div>
                                            <br>
                                            <h4>New Student</h4>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat,
                                                exercitationem!</p>
                                            <button class="btn btn-primary fadeIn first">Proceed</button>
                                        </div>

                                        <div class="col-lg-4">
                                            <div>
                                                <img src="img/transferee.png">
                                            </div>
                                            <br>
                                            <h4>Transferee</h4>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat,
                                                exercitationem!</p>
                                            <button class="btn btn-primary fadeIn first">Proceed</button>
                                        </div>

                                        <div class="col-lg-4">
                                            <div>
                                                <img src="img/returningstudent.png">
                                            </div>
                                            <br>
                                            <h4>Returning Student</h4>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat,
                                                exercitationem!</p>
                                            <button class="btn btn-primary fadeIn first">Proceed</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4>Personal Data</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <label for="">Upload Profile</label>
                                                <button class="btn btn-primary">CHOOSE IMAGE</button>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-10">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label for="first_name">First Name</label>
                                                                <input type="text" class="form-control" name="first_name" required>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label for="middle_name">Middle Name</label>
                                                                <input type="text" class="form-control" name="middle_name">
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label for="last_name">Last Name</label>
                                                                <input type="text" name="last_name" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="col-sm-12">
                                                            <label for="suffix">Suffix</label>
                                                            <input type="text" name="suffix" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label for="age">Age</label>
                                                <input name="age" class="form-control" type="text" required>
                                                <div class="invalid-feedback">Please enter your age</div>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="birthdate">Birthdate</label>
                                                <input name="birthdate" type="date"  class="form-control" required>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="gender">Gender</label>
                                                <select name="gender" class="form-select form-control">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="status">Civil Status</label>
                                                <select name="status" class="form-select form-control">
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Widowed">Widowed</option>
                                                    <option value="Separated">Separated</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                    <label for="citizenship">Citizenship</label>
                                                    <input name="citizenship" class="form-control" type="text" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="height">Height</label>
                                                <input name="height" class="form-control" type="text" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="width">Width</label>
                                                <input name="width" class="form-control" type="text" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label for="birth_place">Place of Birth</label>
                                                <input name="birth_place" class="form-control" type="text" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Residential Address</label>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <input name="r_street" type="text" class="form-control" placeholder="Street" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input name="r_brgy" type="text" class="form-control" placeholder="Barangay" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input name="res-city" type="text" class="form-control" placeholder="City" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input name="res-zip" type="text" class="form-control" placeholder="Zip" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Current Address</label>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <input name="r_street" type="text" class="form-control" placeholder="Street" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input name="r_brgy" type="text" class="form-control" placeholder="Barangay" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input name="res-city" type="text" class="form-control" placeholder="City" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input name="res-zip" type="text" class="form-control" placeholder="Zip" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="ethnic">Ethnic Origin</label>
                                                <input class="form-control" name="ethnic" type="text">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="religion">Religion</label>
                                                <input class="form-control" name="religion" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label for="language">Languages/Dialects Fluent In</label>
                                                <input class="form-control" name="language" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="contact_number">Contact Information:</label>
                                                <input class="form-control" type="text" name="contact_number" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="email">Email Address</label>
                                                <input name="email" id="email" class="form-control" type="text" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="fb_account">Facebook Account</label>
                                                <input class="form-control" type="text" name="fb_account">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="row">
                                                    <label>Are you a: </label>
                                                </div>
                                                <div class="row">
                                                    <input type="radio" class="form-check-input" name="optradiows" id="fts">
                                                    <label for="fts" class="form-check-label">Full Time Student</label>
                                                </div>
                                                <div class="row">
                                                    <input type="radio" class="form-check-input" name="optradiows" id="ws" >
                                                    <label for="ws" class="form-check-label">Working Student</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <label for="optr-no">Where or whom do you work?:</label>
                                                <input class="form-control" id="whomwork" name="optr-no" type="text">
                                            </div>                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4>Family Background</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for=""><span class="badge badge-danger">(if married)</span> Name of Spouse</label>
                                                <input type="text" name="spouse_name" class="form-control">
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="spouse_occupation">Occupation of Spouse</label>
                                                <input type="text" class="form-control" name="spouse_occupation">
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="children">Occupation of Spouse</label>
                                                <input type="text" name="children"class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label for="">Father's First Name</label>
                                                        <input type="text" name="fafname" class="form-control" required>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Father's Middle Name</label>
                                                        <input type="text" name="fathers_middle_name" class="form-control">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Father's Last Name</label>
                                                        <input type="text" name="fathers_last_name" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label for="">Suffix</label>
                                                        <input type="text" name="fasuffix" id="fasuffix" class="form-control" placeholder="Suffix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="">Contact Information (Father):</label>
                                                <input class="form-control" name="fathers_contact" type="text">
                                            </div>
                                            <div class="col-sm-8">
                                                <label for="">Father's Address</label>
                                                <input class="form-control" name="fathers_address" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-11">
                                                <label>Employment</label>
                                                <div class="form-group row">
                                                    <label class="col-sm-4"><input type="radio" class="form-check-input" name="fa-work" value="Private" name="faemployment"> Private</label>
                                                    <label class="col-sm-4"><input type="radio" class="form-check-input" name="fa-work" value="Government" name="faemployment"> Government</label>
                                                    <label class="col-sm-4"><input type="radio" class="form-check-input" name="fa-work" value="Entrepreneurial" name="faemployment"> Entrepreneurial</label>
                                                    <label class="col-sm-4"><input type="radio" class="form-check-input" name="fa-work" value="None" name="faemployment"> None</label>
                                                    <label class="col-sm-4"><input type="radio" class="form-check-input" name="fa-work" value="ofw" name="faemployment"> OFW where <input type="text" name=""></label>
                                                    <label class="col-sm-4"><input type="radio" class="form-check-input" name="fa-work" value="other" name="faemployment"> Others Specify <input type="text" name=""></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label for="">Mother's First Name</label>
                                                        <input type="text" name="mothers_first_name" class="form-control" required>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Mother's Middle Name</label>
                                                        <input type="text" name="mothers_middle_name" class="form-control">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Mother's Last Name</label>
                                                        <input type="text" name="mothers_last_name" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label for="">Suffix</label>
                                                        <input type="text" name="mosuffix" class="form-control" placeholder="Suffix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="">Contact Information (Mother):</label>
                                                <input class="form-control" name="mothers_contact" type="text">
                                            </div>
                                            <div class="col-sm-8">
                                                <label for="">Mother's Address</label>
                                                <input class="form-control" name="mothers_address" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-11">
                                                <label>Employment</label>
                                                <div class="form-group row">
                                                    <label class="col-sm-4"><input type="radio" class="form-check-input" name="fa-work" value="Private" name="faemployment"> Private</label>
                                                    <label class="col-sm-4"><input type="radio" class="form-check-input" name="fa-work" value="Government" name="faemployment"> Government</label>
                                                    <label class="col-sm-4"><input type="radio" class="form-check-input" name="fa-work" value="Entrepreneurial" name="faemployment"> Entrepreneurial</label>
                                                    <label class="col-sm-4"><input type="radio" class="form-check-input" name="fa-work" value="None" name="faemployment"> None</label>
                                                    <label class="col-sm-4"><input type="radio" class="form-check-input" name="fa-work" value="ofw" name="faemployment"> OFW where <input type="text" name=""></label>
                                                    <label class="col-sm-4"><input type="radio" class="form-check-input" name="fa-work" value="other" name="faemployment"> Others Specify <input type="text" name=""></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label for="">Person to Contact in Case of Emergency: (Full Name)</label>
                                                <input type="text" name="guardian" class="form-control">
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="">Guardian's Contact Number</label>
                                                <input type="text" name="gcontact" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label for="">Guardian's Address</label>
                                                <input type="text" name="gaddress" id="gaddress" placeholder="Address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label class="form-label">Parents are:</label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input type="radio" name="optradio2" value="None" checked hidden>
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="optradio2" value="Living Together"> Living Together
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="optradio2" value="Temporarily Separated"> Temporarily Separated
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class=" col-md-4">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="optradio2" value="Permanently Separated"> Permanently Separated
                                                            </label>
                                                        </div>
                                                        <div class=" form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="optradio2" value="Father w/ another partner"> Father w/ another partner
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="optradio2" value="Marriage Annulled"> Marriage Annulled
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="optradio2" value="Mother w/ another partner"> Mother w/ another partner
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Family Monthly Income (Estimated)</label>
                                                <input name="famincome" type="text" class="form-control required" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Guardian's Monthly Income (if not living with parents)</label>
                                                <input type="text" name="guardian" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="">Number of Siblings</label>
                                                <input type="text" class="form-control" name="siblings" placeholder="Siblings" onkeyup="NumbersOnly(this)">
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="">Number of Working Siblings</label>
                                                <input type="text" class="form-control" name="wsiblings" placeholder="Working Siblings" onkeyup="NumbersOnly(this)">
                                            </div> 
                                            <div class="col-sm-3">
                                                <label for="">Number of College Siblings</label>
                                                <input type="text" class="form-control" name="csiblings" placeholder="College Siblings" onkeyup="NumbersOnly(this)">
                                            </div> 
                                            <div class="col-sm-3">  
                                                <label for="">Number of High School Siblings</label>
                                                <input type="text" class="form-control" name="hsiblings" placeholder="Highschool Siblings" onkeyup="NumbersOnly(this)">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4>Educational & Career Plan</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <label class="form-label">Elementary School</label>
                                                <input name="elemschool"type="text" class="form-control required" required>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="">Year Graduated</label>
                                                <input type="text" name="elemyear" class="form-control required" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label class="form-label">Secondary School:</label>
                                                <input name="secschool" type="text" class="form-control required" required>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="">Strand</label>
                                                <input type="text" name="strand" class="form-control">
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="">Year Graduated</label>
                                                <input type="text" name="secyear" class="form-control required" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label class="form-label">Vocational School:</label>
                                                <input type="text" class="form-control" name="vocschool">
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="">Course</label>
                                                <input type="text" class="form-control" name="voccourse">
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="">Year Graduated</label>
                                                <input type="text" class="form-control" name="vocyear">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Honors/Award received</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="form-label">Are you enrolling as a scholar?</label>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label for="yes-scholar" class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="scholar" id="yes-scholar" value="Yes"> Yes
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="no-scholar" class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="scholar" value="No" id="no-scholar" onchange="Scholar()"> No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <label>If yes, what scholarship grant?</label>
                                                <input class="form-control" type="text" name="schoyes">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label class="form-label">What course are you enrolled?</label>
                                                <select name="gctccourse" id="gctc-course" class="form-control col-form-label">
                                                    <option value="0">Bachelor of Science in Information Technology</option>
                                                    <option value="0">Bachelor of Science in Elementary Education</option>
                                                    <option value="0">Bachelor of Science in Environmental Science</option>
                                                    <option value="0">Bachelor of Science in Industrial Technology</option>
                                                    <option value="0">Bachelor of Science in Agri Management</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="form-label">Year</label>
                                                <input type="text" name="gctcyear" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label class="form-label">Which campus would you enroll</label>
                                                <select name="campus" id="campus" class="form-control">
                                                    <option value="Main Campus(Mati)">Main Campus(Mati)</option>
                                                    <option value="Banaybanay Extension Campus">Banaybanay Extension Campus</option>
                                                    <option value="Cateel Extension Campus">Cateel Extension Campus</option>
                                                    <option value="San-Isidro Extension Campus">San-Isidro Extension Campus</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <span class="badge badge-info">Please enter your desired program/course to enroll (Fill all 3 fields)</span>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label for="">First Choice</label>
                                                        <select name="firstcourse" id="firstcourse" class="form-control col-form-label">
                                                            <option value="0">Bachelor of Science in Information Technology</option>
                                                            <option value="0">Bachelor of Science in Elementary Education</option>
                                                            <option value="0">Bachelor of Science in Environmental Science</option>
                                                            <option value="0">Bachelor of Science in Industrial Technology</option>
                                                            <option value="0">Bachelor of Science in Agri Management</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Second Choice</label>
                                                        <select name="secondcourse" id="secondcourse" class="form-control col-form-label">
                                                            <option value="0">Bachelor of Science in Information Technology</option>
                                                            <option value="0">Bachelor of Science in Elementary Education</option>
                                                            <option value="0">Bachelor of Science in Environmental Science</option>
                                                            <option value="0">Bachelor of Science in Industrial Technology</option>
                                                            <option value="0">Bachelor of Science in Agri Management</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Third Choice</label>
                                                        <select  name="thirdcourse" id="thirdcourse" class="form-control col-form-label">
                                                            <option value="0">Bachelor of Science in Information Technology</option>
                                                            <option value="0">Bachelor of Science in Elementary Education</option>
                                                            <option value="0">Bachelor of Science in Environmental Science</option>
                                                            <option value="0">Bachelor of Science in Industrial Technology</option>
                                                            <option value="0">Bachelor of Science in Agri Management</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Why did you decide to take the course you are enrolling?</label>
                                                <input type="text" name="qcourse" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="form-label">Is it your own choice to enroll in DOrSU?</label>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="decide" value="Yes" id="yes-decide"> Yes
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="decide" value="No" id="no-decide" > No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <label>If no, who influenced you?</label>
                                                <input name="influenced" class="form-control" type="text">
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Why did you decide to enroll in DOrSU?</label>
                                                <input type="text" name="qenroll" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>What is your plan or ambition in life?</label>
                                                <input type="text" name="qambition" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>What are your Expectations</label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="">School</label>
                                                        <input type="text" name="expectschool" class="form-control" required>
                                                        <label for="">Instructor</label>
                                                        <input type="text" name="expectinstructor" class="form-control" required>
                                                        <label for="">Subject you like least</label>
                                                        <input type="text" name="expectsubjectleast" class="form-control" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="">Course</label>
                                                        <input type="text" name="expectcourse" class="form-control" required>
                                                        <label for="">Students</label>
                                                        <input type="text" name="expectstudent" class="form-control" required>
                                                        <label for="">Subject you like most</label>
                                                        <input type="text" name="expectsubjectmost" class="form-control" required>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label class="form-label">Do you have a SCAST Result?</label>
                                                <div class="row">
                                                    <div class="col-sm-1">
                                                        <label for="yes" class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="optradioyes" id="yes" onchange="chooseYes()"> Yes
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <label for="no" class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="optradioyes" id="no" onchange="chooseNo()"> No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="">General Ability</label>
                                                <input type="text" name="genability" class="form-control">

                                                <label for="">Spatial Aptitude</label>
                                                <input type="text" name="spatial" class="form-control">
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="">Verbal Aptitude</label>
                                                <input type="text" name="verbal" class="form-control">
                                                <label for="">Perceptual Aptitude</label>
                                                <input type="text" name="perceptual" class="form-control">
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="">Numerical Aptitude</label>
                                                <input type="text" name="numerical" class="form-control">
                                                <label for="">Manual Dexterity</label>
                                                <input type="text" name="manual" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Hobbies/Recreational Activities</label>
                                                <input type="text" name="hobbies" class="form-control" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Motto</label>
                                                <input type="text" name="motto" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Special Skills/Talents</label>
                                                <input type="text" name="talent" class="form-control" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Special Interests</label>
                                                <input type="text" name="interest" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4> Other Information</h1>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>Are you a person with disability (PWD)?</label>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label><input type="radio" value="yes" name="pwd"> Yes</label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label><input type="radio" value="no" name="pwd"> No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <label>If yes, give details (type of disability)</label>
                                                <input type="text" class="form-control" id="pwd-text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>Are you a single parent?</label>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label><input type="radio" value="yes" name="sparent"> Yes</label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label><input type="radio" value="no" name="sparent"> No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <label>If yes, give details (number of children)</label>
                                                <input type="text" class="form-control" id="parent-text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>Are you a working-student?</label>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label><input type="radio" value="yes" name="wstudent"> Yes</label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label><input type="radio" value="no" name="wstudent"> No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <label>If yes, give details (employer)</label>
                                                <input type="text" class="form-control" id="emp-text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4> Self Assesment</h1>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>What traits/characteristics do you think you posses? (You may check as many)</label>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="tense/jittery"> tense/jittery
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="confident"> confident
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="submissive"> submissive
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="independent"> independent
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="sensitive"> sensitive
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="trusting"> trusting
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" col-md-3">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="easily troubled"> easily troubled
                                                    </label>
                                                </div>
                                                <div class=" form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="responsible"> responsible
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="relaxed/calm"> relaxed/calm
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="dependent"> dependent
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="perceptive"> perceptive
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="insecure"> insecure
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="happy-go-lucky"> happy-go-lucky
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="loner"> loner
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="suspicious"> suspicious
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="stubborn"> stubborn
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="idealistic"> idealistic
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="worrier"> worrier
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="friendly"> friendly
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="imaginative"> imaginative
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="dominant"> dominant
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="sentimental"> sentimental
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="selfassesment" value="practical"> practical
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" id="otherpossesed" onchange="OthersPossesed()"> Others: <input type="text" id="otherposstext">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>What bothers you most at the moment?</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="bothers"> Financial difficulty
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="bothers"> Difficulties in adjusting a new school
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="bothers"> Study habits
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="bothers" id="healthprob"> Health problems, Please specify: <input type="text" id="health-text">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="bothers">
                                                        Developing self-confidence
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="bothers">
                                                        Interpersonal relationship (parent;friends;siblings)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="bothers">
                                                        Student-Instructor relationship
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="bothers" id="otherspecify" > Other, please specify: <input type="text" id="specify-text" >
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>What was your most embarrassing experience in life?</label>
                                                <input type="text" class="form-control" name="embarrassing">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Things you would like to talk and discuss with:</label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                            <label for="">Friends</label>
                                                            <input type="text" name="friends" class="form-control">
                                                            <label>Parents</label>
                                                            <input type="text" name="parents" class="form-control">
                                                    </div>
                                                    <div class="col-sm-6">
                                                            <label>Teachers</label>
                                                            <input type="text" name="teachers" class="form-control">
                                                            <label>Councelors</label>
                                                            <input type="text" name="councelors" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="https://dorsu.edu.ph/" class="nav-link" target="_blank">{{ __('DOrSU Main') }}</a>
                            </li>
                            <li>
                                <a href="https://dorsu.edu.ph/bec/" class="nav-link" target="_blank">{{ __('Banay-banay Ext.') }}</a>
                            </li>
                            <li>
                                <a href="https://dorsu.edu.ph/cec/" class="nav-link" target="_blank">{{ __('Cateel Ext.') }}</a>
                            </li>
                            <li>
                                <a href="https://dorsu.edu.ph/siec/" class="nav-link" target="_blank">{{ __('San Isidro Ext.') }}</a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="https://dorsu.edu.ph/">{{ __('DoRSU Creations') }}</a>{{ __(', made with love for a better learning.') }}
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </body>
        <!--   Core JS Files   -->
    <script src="{{ asset('light-bootstrap/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('light-bootstrap/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('light-bootstrap/js/core/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('light-bootstrap/js/plugins/jquery.sharrre.js') }}"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-switch.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  Chartist Plugin  -->
    <script src="{{ asset('light-bootstrap/js/plugins/chartist.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="{{ asset('light-bootstrap/js/light-bootstrap-dashboard.js?v=2.0.0') }}" type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('light-bootstrap/js/demo.js') }}"></script>
    @stack('js')
    <script>
      $(document).ready(function () {
        
        $('#facebook').sharrre({
          share: {
            facebook: true
          },
          enableHover: false,
          enableTracking: false,
          enableCounter: false,
          click: function(api, options) {
            api.simulateClick();
            api.openPopup('facebook');
          },
          template: '<i class="fab fa-facebook-f"></i> Facebook',
          url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
        });

        $('#google').sharrre({
          share: {
            googlePlus: true
          },
          enableCounter: false,
          enableHover: false,
          enableTracking: true,
          click: function(api, options) {
            api.simulateClick();
            api.openPopup('googlePlus');
          },
          template: '<i class="fab fa-google-plus"></i> Google',
          url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
        });

        $('#twitter').sharrre({
          share: {
            twitter: true
          },
          enableHover: false,
          enableTracking: false,
          enableCounter: false,
          buttons: {
            twitter: {
              via: 'CreativeTim'
            }
          },
          click: function(api, options) {
            api.simulateClick();
            api.openPopup('twitter');
          },
          template: '<i class="fab fa-twitter"></i> Twitter',
          url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
        });
      });
    </script>
</html>

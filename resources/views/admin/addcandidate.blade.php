@extends('admin.layout.auth')
@section('content')
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->     
    @include('admin.nav')
    <section>
    @include('admin.leftsidebar')
</section>
<section class="content">
        <div class="container-fluid">
        <ol class="breadcrumb breadcrumb-bg-pink">
                                <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">person</i> Candidate</a></li>
                                <li class="active">Add Candidate</li>
                            </ol>
            <!-- #END# Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>ADD CANDIDATE</h2>
                                </li>
                            </ul>
                        </div>
                        <div class="body">       
            <form id="form_validation" method="POST" action="">
                              <label>Candidate Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter candidate name">
                                    </div>
                                </div><label>Candidate Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter candidate email">
                                    </div>
                                </div><label>Candidate Username</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter username">
                                    </div>
                                </div>      
                                <label for="password">Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                    </div>
                                </div>      
                                <label for="password">Confirm Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="cpassword" class="form-control" placeholder="Enter confirm password">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      </div>
    </div>
  </div>
@endsection

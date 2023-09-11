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
                                <li><a href="javascript:void(0);"><i class="material-icons">contact_phone</i>Contact</a></li>
                            </ol>
            <!-- #END# Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>CONTACT US</h2>
                                </li>
                            </ul>
                        </div>
                        <div class="body">       
            <form id="form_validation" method="POST" action="">
                              <label>Title Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter Title name">
                                    </div>
                                </div>
                                <label>Phone Number </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter phone number">
                                    </div>
                                </div> 
                                <label>Mobile Number</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter mobile number">
                                    </div>
                                </div> 
                                <label>Email Id</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter email">
                                    </div>
                                </div> 
                                <label>Website</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="website" name="website" class="form-control" placeholder="Enter website">
                                    </div>
                                </div> 
                                <textarea name="content" id="ckeditor_full"></textarea>  
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">SAVE</button>
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

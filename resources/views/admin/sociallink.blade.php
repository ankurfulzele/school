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
                                <li><a href="javascript:void(0);"><i class="material-icons">link</i>Social Link</a></li>
                            </ol>
            <!-- #END# Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>SOCIAL LINK</h2>
                                </li>
                            </ul>
                        </div>
                        <div class="body">       
            <form id="form_validation" method="POST" action="">
                              <label>Title Name</label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter title name">
                                    </div>
                                </div>
                                </div>
                                <label>Facebook </label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">link</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" id="facebook" name="facebook" class="form-control" placeholder="Enter facebook link">
                                    </div>
                                </div> 
                                </div> 
                                <label>You Tube</label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">link</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" id="youtube" name="youtube" class="form-control" placeholder="Enter you tube">
                                    </div>
                                </div> 
                                </div> 
                                <label>Linkedin</label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">link</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder="Enter linkedin link">
                                    </div>
                                </div> 
                                </div> 
                                <label>Twitter</label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">link</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" id="twitter" name="twitter" class="form-control" placeholder="Enter twitter link">
                                    </div>
                                </div> 
                                </div>  
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

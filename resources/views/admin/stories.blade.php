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
                                <li><a href="javascript:void(0);"><i class="material-icons">import_contacts</i> Success Stories</a></li>
                            </ol>
            <!-- #END# Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>SUCCESS STORIES</h2>
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
                                <label>Link</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="link" name="link" class="form-control" placeholder="Enter link">
                                    </div>
                                </div> 
                                <textarea name="content" id="ckeditor_full"></textarea>  
                        <div class="dropzone dz-clickable">
                        <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    <h3>Drop image here or click to upload.</h3>
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
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

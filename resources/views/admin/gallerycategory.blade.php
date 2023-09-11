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
                                <li><a href="javascript:void(0);"><i class="material-icons">perm_media</i> Gallery</a></li>
                                <li class="active">Gallery Category</li>
                            </ol>
                            
            <div class="row clearfix candidatetable">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>GALLERY CATEGORY</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">                                    
                            <div class="button-demo js-modal-buttons">
                                    <a href="#" class="btn btn-danger waves-effect">Add Gallery Category</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                       <!-- For Form modal-->
            <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Add Category</h4>
                        </div>
                        <form method="post" action="#" enctype="multipart/form-data">
                        <div class="modal-body">                            
                        <label>Category Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                                </div>            
                        <label>Status</label>
                                <div class="form-group">
                                <select class="form-control show-tick" name="status" id="status">
                                        <option value="1">Active</option>
                                        <option value="2">Deactive</option>
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SAVE</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- For Form modal-->
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Category Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Sr.No</th>
                                            <th>Category Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                            <td>1</td>
                                            <td>company</td>
                                            <td>Deactive</td>
                                            <td>
                                              <a href="#"><i class="material-icons">edit</i></a>
                                              <a href="#"><i class="material-icons">pageview</i></a>
                                              <a href="#"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr> <tr>
                                            <td>2</td>
                                            <td>category </td>
                                            <td>Deactive</td>
                                            <td>
                                              <a href="#"><i class="material-icons">edit</i></a>
                                              <a href="#"><i class="material-icons">pageview</i></a>
                                              <a href="#"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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

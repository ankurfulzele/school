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
                                <li class="active">Candidate List</li>
                            </ol>
            <!-- #END# Widgets -->
            <div class="row clearfix candidatetable">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>CANDIDATE LIST</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="{{url('admin/addcandidate')}}" class="btn btn-danger waves-effect">Add Candidate</a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                            <td>
                                              <a href="#"><i class="material-icons">edit</i></a>
                                              <a href="#"><i class="material-icons">pageview</i></a>
                                              <a href="#"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                            <td>
                                              <a href="#"><i class="material-icons">edit</i></a>
                                              <a href="#"><i class="material-icons">pageview</i></a>
                                              <a href="#"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                            <td>
                                              <a href="#"><i class="material-icons">edit</i></a>
                                              <a href="#"><i class="material-icons">pageview</i></a>
                                              <a href="#"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                            <td>
                                              <a href="#"><i class="material-icons">edit</i></a>
                                              <a href="#"><i class="material-icons">pageview</i></a>
                                              <a href="#"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                            <td>
                                              <a href="#"><i class="material-icons">edit</i></a>
                                              <a href="#"><i class="material-icons">pageview</i></a>
                                              <a href="#"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                            <td>
                                              <a href="#"><i class="material-icons">edit</i></a>
                                              <a href="#"><i class="material-icons">pageview</i></a>
                                              <a href="#"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                            <td>
                                              <a href="#"><i class="material-icons">edit</i></a>
                                              <a href="#"><i class="material-icons">pageview</i></a>
                                              <a href="#"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                            <td>
                                              <a href="#"><i class="material-icons">edit</i></a>
                                              <a href="#"><i class="material-icons">pageview</i></a>
                                              <a href="#"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                            <td>
                                              <a href="#"><i class="material-icons">edit</i></a>
                                              <a href="#"><i class="material-icons">pageview</i></a>
                                              <a href="#"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                            <td>
                                              <a href="#"><i class="material-icons">edit</i></a>
                                              <a href="#"><i class="material-icons">pageview</i></a>
                                              <a href="#"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                            <td>
                                              <a href="#"><i class="material-icons">edit</i></a>
                                              <a href="#"><i class="material-icons">pageview</i></a>
                                              <a href="#"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Garrett </td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                            <td>
                                              <a href="#"><i class="material-icons">edit</i></a>
                                              <a href="#"><i class="material-icons">pageview</i></a>
                                              <a href="#"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td> Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                            <td>
                                              <a href="#"><i class="material-icons">edit</i></a>
                                              <a href="#"><i class="material-icons">pageview</i></a>
                                              <a href="#"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
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

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
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW CANDIDATE</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_outline</i>
                        </div>
                        <div class="content">
                            <div class="text">PENDING</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">SHORTLIST</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">cancel</i>
                        </div>
                        <div class="content">
                            <div class="text">REJECTED</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <div class="row clearfix candidatetable">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CANDIDATE LIST
                            </h2>
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
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Garrett </td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td> Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Garrett Winters</td>
                                            <td>test@gmail.com</td>
                                            <td>Edinburgh</td>
                                            <td>pending</td>
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

@extends('admin.layout.auth')
@section('content')
<div class="container-scroller">
    <!-- partial:partials/_navbar -->     
    @include('admin.nav')
    <section>
    @include('admin.leftsidebar')
</section>
<section class="content">
<div class="container-fluid">
        <ol class="breadcrumb breadcrumb-bg-pink">
            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
            <li><a href="javascript:void(0);"><i class="material-icons">assignment</i> Contact List</a></li>
        </ol>
        <div class="row clearfix candidatetable">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header"><h2>CONTACT LIST</h2></div>
                    <div class="body">
                    <div class="table-responsive">                           
                           <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                               <thead>
                                   <tr>
                                       <th>Sr.No</th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Phone Number</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               <tfoot>
                                   <tr>
                                   <th>Sr.No</th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Phone Number</th>
                                       <th>Action</th>
                                   </tr>
                               </tfoot>
                               <tbody> 
@php
$i = 1
@endphp
@foreach($users as $value)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->phn_no }}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#useredit{{$value->id}}"><i class="material-icons">edit</i></a>
                                    <!-- <a class="show_modal" href="#" data-id="{{$value->id}}"><i class="material-icons">pageview</i></a>-->
                                    <a href="#" data-toggle="modal" data-target="#userview{{$value->id}}"><i class="material-icons">pageview</i></a>    
                                    <a href="{{URL('admin/deletecontactlist/'. $value->id)}}" ><i class="material-icons deleteUser">delete</i></a>                                              
                                </td>
                            </tr>                               
@endforeach
                        </tbody>
                        </table>
                    </div>  
                    </div><!-- end body-->
                    
@foreach($users as $value)
    <div class="modal fade" id="userview{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #820630;color: #fff;text-align: center;">
                    <h5 class="modal-title" id="exampleModalLabel">{{$value->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:#fff;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-offset-2">
                        <div class="row">
                        <div class="col-md-5"><h4><b>Name</b> :-</h4></div>
                        <div class="col-md-7"><h4>{{$value->name}}</h4></div>
                        </div>
                        <div class="row">
                        <div class="col-md-5"><h4><b>Phone Number</b> :-</h4></div>
                        <div class="col-md-7"><h4>{{$value->phn_no}}</h4></div>
                        </div>
                        <div class="row">
                        <div class="col-md-5"><h4><b>Email</b> :-</h4></div>
                        <div class="col-md-7"><h4>{{$value->email}}</h4></div>
                        </div>
                        <div class="row">
                        <div class="col-md-12"><h5>{{$value->message}}</h5></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach<!--end view model-->
    
@foreach($users as $value)
    <div class="modal fade" id="useredit{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #820630;color: #fff;text-align: center;">
                    <h5 class="modal-title" id="exampleModalLabel">{{$value->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:#fff;">&times;</span>
                    </button>
                </div>
            <form action="{{URL('admin/editcontactlist/'. $value->id)}}" class="model_class_inner">
                <div class="modal-body">
                    <div class="col-md-offset-2">                         
                        <div class="row">
                        <div class="col-md-5"><h4><b>Name</b> :-</h4></div>
                        <div class="col-md-7"><input type="text" value="{{$value->name}}" name="name"></div>
                        </div>
                        <div class="row">
                        <div class="col-md-5"><h4><b>Phone Number</b> :-</h4></div>
                        <div class="col-md-7"><input type="text" value="{{$value->phn_no}}" name="phn_no"></div>
                        </div>
                        <div class="row">
                        <div class="col-md-5"><h4><b>Email</b> :-</h4></div>
                        <div class="col-md-7"><input type="text" value="{{$value->email}}" name="email"></div>
                        </div>
                        <div class="row">
                        <div class="col-md-12"><textarea name="message">{{$value->message}}</textarea></div>
                        </div>
                        <div class="row">
                        <button type="submit" value="send" class="btn btn-primary">SAVE</button>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    </div>
    </div>               
    @endforeach<!-- end edit model-->

                </div>
            </div>
        </div>
</div><!-- end container-fluid --> 
</section>
      </div>  <!-- end container-scroller --> 

@endsection

@section('pageScript')
<script type="text/javascript">
    $(document).on('click','.deleteUser',function() {
        var url = $(this).attr('rel');
        if(confirm("Are you sure you want to delete this?")){
           window.location.href = url
        }
        else{
            return false;
        }
    })
</script>
<!--<script>
    $(".show_modal").on('click', function() {
        let id = $(this).attr('data-id')
        $('.data-id').html(id);        
        $("#user-view").modal('show');
    });
    </script>-->
@endsection

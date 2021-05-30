@extends('Layout.app')

@section('body')
<section class="content-header">
    <h1>
        Customer
        <small>View customer</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">customer</a></li>
        <li class="active">view customer</li>
    </ol>
</section>
<section class="content">

      
        <div class="row">

            <div class="col-md-12">
                <div class="box box-primary">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#Id</th>
                                <th>Customer Name</th>
                                <th>NIC number</th>
                                <th>Contact number</th>
                                <th>Email address</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                   
                    </table>
                    </div>
                </div>
            </div>

        </div>

</section>

@endsection

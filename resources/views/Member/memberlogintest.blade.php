@extends('Layout.app')
@section('body')
<section class="content-header">
    <h1>
        Customer
        <small>add customer</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
    </ol>
</section>

<section class="content">
<form action="/api/login" method="POST">
            {{csrf_field()}}
    <div class="row">


            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Quick Example</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group" {{ $errors->has('fname') ? ' has-error' : '' }}>
                            <label for="email">First Name:</label>
                            <input type="text" class="form-control" placeholder="Enter email" name="email" id="email">
                            @if ($errors->has('fname'))
                            <span class="help-block">
                                <strong style="color: #ff0000">{{ $errors->first('fname') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        <div class="form-group" {{ $errors->has('nic') ? ' has-error' : '' }}>
                            <label for="pwd">NIC Number:</label>


                            <span class="pull-right badge badge-success" id="msg_nic"></span>
                            <input type="text" class="form-control" placeholder="Enter password" name="password" id="nic">
                            @if ($errors->has('nic'))
                            <span class="help-block">
                                <strong style="color: #ff0000">{{ $errors->first('nic') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group" {{ $errors->has('dob') ? ' has-error' : '' }}>
                            <label for="email">Date Of Birth:</label>
                            <input type="text"  autocomplete="off" class="form-control" placeholder="Enter email"  id="dob">
                        </div>
                   

                        <div class="form-group" {{ $errors->has('image') ? ' has-error' : '' }}>
                            <label for="email">NIC copy:</label>
                            <input type="file" class="form-control" placeholder="select image" id="image">
                           
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">General Elements</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group"  {{ $errors->has('email') ? ' has-error' : '' }}>
                            <label for="pwd">Email:</label>
                            <input type="text" class="form-control" placeholder="Enter password"  id="email">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong style="color: #ff0000">{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group"  {{ $errors->has('contact') ? ' has-error' : '' }}>
                            <label for="pwd">Conatact Number:</label>
                            <input type="text" class="form-control" placeholder="Enter password" id="contact">
                            @if ($errors->has('contact'))
                            <span class="help-block">
                                <strong style="color: #ff0000">{{ $errors->first('contact') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group"  {{ $errors->has('address') ? ' has-error' : '' }}>
                            <label for="text">Address:</label>
                            <textarea id="" cols="50" class="form-control" rows="4"></textarea>
                            @if ($errors->has('address'))
                            <span class="help-block">
                                <strong style="color: #ff0000">{{ $errors->first('address') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

            </div>


    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
</section>



@endsection

@extends('admin.admin_master')

@section('dashobard_title', 'Promoter Sponsor Tree')
@section('admin_content')
<style>
    /*Now the CSS*/
    * {
        margin: 0;
        padding: 0;
    }

    .tree ul {
        padding-top: 20px;
        position: relative;

        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }

    .tree li {
        float: left;
        text-align: center;
        list-style-type: none;
        position: relative;
        padding: 20px 5px 0 5px;

        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }

    /*We will use ::before and ::after to draw the connectors*/

    .tree li::before,
    .tree li::after {
        content: '';
        position: absolute;
        top: 0;
        right: 50%;
        border-top: 1px solid #ccc;
        width: 50%;
        height: 20px;
    }

    .tree li::after {
        right: auto;
        left: 50%;
        border-left: 1px solid #ccc;
    }

    /*We need to remove left-right connectors from elements without 
    any siblings*/
    .tree li:only-child::after,
    .tree li:only-child::before {
        display: none;
    }

    /*Remove space from the top of single children*/
    .tree li:only-child {
        padding-top: 0;
    }

    /*Remove left connector from first child and 
    right connector from last child*/
    .tree li:first-child::before,
    .tree li:last-child::after {
        border: 0 none;
    }

    /*Adding back the vertical connector to the last nodes*/
    .tree li:last-child::before {
        border-right: 1px solid #ccc;
        border-radius: 0 5px 0 0;
        -webkit-border-radius: 0 5px 0 0;
        -moz-border-radius: 0 5px 0 0;
    }

    .tree li:first-child::after {
        border-radius: 5px 0 0 0;
        -webkit-border-radius: 5px 0 0 0;
        -moz-border-radius: 5px 0 0 0;
    }

    /*Time to add downward connectors from parents*/
    .tree ul ul::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        border-left: 1px solid #ccc;
        width: 0;
        height: 20px;
    }

    .tree li a {
        border: 1px solid #ccc;
        padding: 5px 10px;
        text-decoration: none;
        color: #666;
        font-family: arial, verdana, tahoma;
        font-size: 11px;
        display: inline-block;

        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;

        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }

    /*Time for some hover effects*/
    /*We will apply the hover effect the the lineage of the element also*/
    .tree li a:hover,
    .tree li a:hover+ul li a {
        background: #c8e4f8;
        color: #000;
        border: 1px solid #94a0b4;
    }

    /*Connector styles on hover*/
    .tree li a:hover+ul li::after,
    .tree li a:hover+ul li::before,
    .tree li a:hover+ul::before,
    .tree li a:hover+ul ul::before {
        border-color: #94a0b4;
    }

    .tooltip {
        position: relative;
        display: inline-block;
        font-size: 16px;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        background-color: black;
        color: #fff;
        text-align: center;
        padding: 5px 0;
        border-radius: 6px;
        position: absolute;
        z-index: 1;
        top: 100%;
        left: 50%;
        margin-left: -60px;
        font-size: 12px;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }

</style>
<link href="https://unpkg.com/treeflex/dist/css/treeflex.css" rel="stylesheet">
@if(Session::has('success') || Session::has('failed') || Session::has('error'))
<section class="content">
    <div class="col-md-8 offset-2 mt-2">
        @if(Session::has('success'))
        <div class="alert alert-success alert-block text-center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong class="text-center">{{ Session::get('success') }}</strong>
        </div>
        @endif

        @if(Session::has('failed'))
        <div class="alert alert-danger alert-block text-center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong> {{ Session::get('failed') }}</strong>
        </div>
        @endif
        @if(Session::has('error'))
        <div class="alert alert-danger alert-block text-center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('error') }}</strong>
        </div>
        @endif
    </div>
</section>
@endif

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <marquee style="color: red;">Welcome To RefineDimond 2020 Limited.</marquee>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Genology Tree</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="tf-tree example">
                        <ul>
                            <li>
                                <span class="tf-nc">
                                  @if($node_1_user_id > 0)
                                    <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                    
                                        <b>{{ $node_1_user_id }}</b><br/>
                                        <b>BC {{ $node_1_bc }}</b>
                                  @else
                                      +
                                  @endif
                                </span>
                                <ul>
                                    <li>
                                        <span class="tf-nc">
                                          @if($node_11_user_id > 0)
                                          <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                            <b>{{ $node_11_user_id }}</b>
                                          @else
                                              +
                                          @endif
                                        </span>
                                        <ul>
                                            <li>
                                              <span class="tf-nc">
                                                @if($node_111_user_id > 0)
                                                <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                                  <b>{{ $node_111_user_id }}</b>
                                                @else
                                                    +
                                                @endif
                                              </span>
                                                <ul>
                                                    <li><span class="tf-nc">
                                                      @if($node_1111_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                                        <b>{{ $node_1111_user_id }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc">
                                                      @if($node_1112_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                                        <b>{{ $node_1112_user_id }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="tf-nc">
                                                  @if($node_112_user_id > 0)
                                                  <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                                    <b>{{ $node_112_user_id }}</b>
                                                  @else
                                                      +
                                                  @endif
                                                </span>
                                                <ul>
                                                    <li><span class="tf-nc">
                                                      @if($node_1121_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                                        <b>{{ $node_1121_user_id }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc">
                                                      @if($node_1122_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                                        <b>{{ $node_1122_user_id }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="tf-nc">
                                          @if($node_12_user_id > 0)
                                          <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                            <b>{{ $node_12_user_id }}</b>
                                          @else
                                              +
                                          @endif
                                        </span>
                                        <ul>
                                            <li><span class="tf-nc">
                                              @if($node_121_user_id > 0)
                                              <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                                <b>{{ $node_121_user_id }}</b>
                                              @else
                                                  +
                                              @endif
                                            </span>
                                                <ul>
                                                    <li><span class="tf-nc">
                                                      @if($node_1211_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                                        <b>{{ $node_1211_user_id }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc">
                                                      @if($node_1212_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                                        <b>{{ $node_1212_user_id }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                </ul>
                                            </li>
                                            <li><span class="tf-nc">
                                                @if($node_122_user_id > 0)
                                                <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                                  <b>{{ $node_122_user_id }}</b>
                                                @else
                                                    +
                                                @endif
                                              </span>
                                                <ul>
                                                    <li><span class="tf-nc">
                                                      @if($node_1221_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                                        <b>{{ $node_1221_user_id }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                    <li><span class="tf-nc">
                                                      @if($node_1222_user_id > 0)
                                                      <img src="{{asset('images/person-icon.png')}}" alt="User Image" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><br/>
                                                        <b>{{ $node_1222_user_id }}</b>
                                                      @else
                                                          +
                                                      @endif
                                                    </span></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->


</section>


@endsection

@section('custom_js')
<script>
    console.log('here');

</script>
@endsection

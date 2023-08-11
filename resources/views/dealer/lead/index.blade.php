@extends('dealer.layouts.app')
@push('styles')
    <link href="{{ asset('/dashboard') }}/libs/simple-datatables/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans);
 .form-label {
    margin-bottom: 0.5rem;
    color: #656d9a;
    font-size: 14px;
}
        body {
            background: #f2f2f2;
            font-family: 'Open Sans', sans-serif;
        }

        .search {
            width: 100%;
            position: relative;
            display: flex;
        }

        .searchTerm {
            width: 100%;
            border:none;
            border-right: none;
            padding: 5px;
            border-radius: 5px 0 0 5px;
            outline: none;
            color: #9DBFAF;
        }

        .searchTerm:focus {
            color: #00B4CC;
        }

        .searchButton {
            width: 40px;
            height: 36px;
            border: 1px solid #00B4CC;
            background: #00B4CC;
            text-align: center;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 20px;
        }

        /*Resize the wrap to see the search bar change!*/
        .wrap {
            width: 100%;
            position: absolute;
            top: 59%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .divide {
            width: 100%;
            height: 5px;
            background-color: #dfdfdf;
            margin-top: 20px;
        }

        /* tab design */
        .warpper {
            display: flex;
            flex-direction: column;
            margin-top: 35px;
        }

        .tab {
            cursor: pointer;
            padding: 10px 20px;
            margin: 0px 2px;
            background: #32557f;
            display: inline-block;
            color: #fff;
            border-radius: 3px 3px 0px 0px;
            box-shadow: 0 0.5rem 0.8rem #00000080;
        }

        .panels {
            background: #fff;
            box-shadow: 0 2rem 2rem #00000080;
            min-height: 200px;
            width: 100%;
            border-radius: 3px;
            overflow: hidden;
            padding: 20px;
        }

        .panel {
            display: none;
            animation: fadein 0.8s;
        }

        @keyframes fadein {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .panel-title {
            font-size: 1.5em;
            font-weight: bold;
        }

        .radio {
            display: none;
        }

        #one:checked~.panels #one-panel,
        #two:checked~.panels #two-panel,
        #three:checked~.panels #three-panel {
            display: block;
        }

        #one:checked~.tabs #one-tab,
        #two:checked~.tabs #two-tab,
        #three:checked~.tabs #three-tab {
            background: #fff;
            color: #000;
            border-top: 3px solid #32557f;
        }


        .wrapper-message {
            background-color: #E9ECEF;
        }

        .message_body
        {
            background-color: #E9ECEF;
            margin-top: 20px;
        }
    </style>
@endpush
@section('content')
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    {{-- <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Localcarz</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item active">Lead</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div><!--end page-title-box--> --}}
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row justify-content-center">
                <div class="col-md-12 mt-4 p-4" style="background-color: #F7F7F7">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Email Leads</h4>
                            <select name="" id="" style="padding: 5px;" class="px-4">
                                <option value="">All Leads</option <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="col-md-4" style="text-align: end">
                            <a href="" class="btn btn-success btn-small">Add Lead</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center p-5">
                <div class="col-md-12 p-4" style=" background-color:#F7F7F7">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Filter by Inventory</label>
                                <button class="btn btn-primary">Select Vehicle</button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Make</label>
                                <select name="" id="" class="form-control">
                                    <option value="">All </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Model</label>
                                <select name="" id=""class="form-control">
                                    <option value="">All </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Lead Type</label>
                                <select name="" id="" class="form-control">
                                    <option value="">All Lead Types</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Read/Unread</label>
                                <select name="" id="" class="form-control">
                                    <option value="">All </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Search Leads</label>
                                <div class="wrap">
                                    <div class="search">
                                        <input type="text" class="searchTerm">
                                        <button type="submit" class="searchButton">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-md-12 p-0">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Leads</h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table " id="datatable_1">
                                    <thead class="thead-light">
                                        <tr>
                                            <th><input type="radio" /> Select </th>
                                            <th>View</th>
                                            <th data-type="date" data-format="YYYY/DD/MM"> Date</th>
                                            <th>Vehicle</th>
                                            <th>Customer</th>
                                            <th>Lead Type</th>
                                            <th>Close Lead</th>
                                        </tr>
                                    </thead>
                                    <tbody style="border-left: 1px solid red">

                                        <tr class="text-center">
                                            <td><input type="radio"></td>
                                            <td><button type="button" class="btn btn-info shadow" data-toggle="modal"
                                                    data-target="#exampleModal">View / Reply</button></td>
                                            <td>2023/02/11</td>
                                            <td>2018 Nissan Maxima SV</td>
                                            <td>Adrian Mccormick</td>
                                            <td>Vehicle Inquiry</td>
                                            <td><i class="fa fa-close"></i></td>
                                        </tr>

                                        <tr class="text-center">
                                            <td><input type="radio"></td>
                                            <td><button type="button" class="btn btn-info shadow" data-toggle="modal"
                                                    data-target="#exampleModal">View / Reply</button></td>
                                            <td>2023/02/16</td>
                                            <td>2015 Mercedes-Benz C-class</td>
                                            <td>James McKnight</td>
                                            <td>Vehicle Inquiry</td>
                                            <td><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><input type="radio"></td>
                                            <td><button type="button" class="btn btn-info shadow" data-toggle="modal"
                                                    data-target="#exampleModal">View / Reply</button></td>
                                            <td>2023/06/6</td>
                                            <td>2017 Chevrolet Silverado 1500</td>
                                            <td>Michael Heatherly</td>
                                            <td>Loan Application</td>
                                            <td><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><input type="radio"></td>
                                            <td><button type="button" class="btn btn-info shadow" data-toggle="modal"
                                                    data-target="#exampleModal">View / Reply</button></td>
                                            <td>2023/06/6</td>
                                            <td>2018 Mazda MAZDA3 Sport</td>
                                            <td>Stonehands 024</td>
                                            <td>Vehicle History Report</td>
                                            <td><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><input type="radio"></td>
                                            <td><button type="button" class="btn btn-info shadow" data-toggle="modal"
                                                    data-target="#exampleModal">View / Reply</button></td>
                                            <td>2023/05/11</td>
                                            <td>2012 Lexux RX 350 Base 4dr SUV</td>
                                            <td>Heather Ramage</td>
                                            <td>Vehicle History Report</td>
                                            <td><i class="fa fa-close"></i></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>

        </div><!--end row-->


        {{-- view modal --}}

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Lead Details-Source: Localcarz.com</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card shadow h-100">
                                        <div class="card-header" style="background-color: #d9dcdf">
                                            <i class="fa-solid fa-car"></i> | <span>Vehicle: 2018 Nissan Maxima SV </span>
                                        </div>
                                        <div class="card-body ">
                                            <div class="media">
                                                <img src="{{ asset('/dashboard') }}/images/image_01.jpg" alt=""
                                                    class="img-thumbnail" style="max-width: 50% !important;">
                                                <div class="media-body align-self-center ms-3 text-truncate">
                                                    <p class="my-0 "><b>Price:</b> $17,500</p>
                                                    <p class="my-0 "><b>Average Price:</b> $22,500</p>
                                                    <p class="my-0 "><b>Milleage:</b> 98,071 mi</p>
                                                    <p class="my-0 "><b>Stock #:</b>3765</p>
                                                    <p class="my-0 "><b>Days Listed:</b>17</p>
                                                    <p class="my-0 "><b>Leads:</b>7</p>


                                                </div><!--end media-body-->
                                            </div>
                                            <button type="button" class="btn btn-sm btn-primary mt-4"
                                                style="align-items: center">View Vehicle</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card shadow h-100">
                                        <div class="card-header" style="background-color: #d9dcdf">
                                            <i class="fa fa-user"></i> | <span>Contact: Adrian Mccormick</span>
                                        </div>
                                        <div class="card-body ">
                                            <p class="my-0 "><b>Phone:</b> (601) 724-8697</p>
                                            <p class="my-0 "><b>Address:</b> Not Provided</p>
                                            <p class="my-0 "><b>Salesperson:</b> Unassigned</p>
                                            <p class="my-0 "><b>Email:</b> Adrian Mccormick@gmail.com</p>

                                            <button type="button" class="btn btn-sm btn-primary mt-5"
                                                style="align-items: center">View Contact</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="divide"></div>
                                <div class="col-md-12">
                                    <div class="warpper">
                                        <input class="radio" id="one" name="group" type="radio" checked>

                                        <div class="tabs">
                                            <label class="tab" id="one-tab" for="one">Message</label>
                                        </div>

                                        <div class="panels">
                                            <div class="panel" id="one-panel">
                                                <div class="wrapper-message">
                                                    <div class="row">
                                                        <div class="col-md-3 p-4">
                                                            <p class="p-0 m-0">Adrian Mccormick </p>
                                                            <p class="p-0 m-0">7/11/23 7:21 AM</p>
                                                        </div>
                                                        <div class="col-md-9 p-4">
                                                            <p>You Have a NEW Lead!</p>
                                                            <p>I'm interested and want to know more about the 2018 Nissan
                                                                Maxima you have listed for $17,500 on localcarz.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row message_body">
                                                    <div class="col-md-9">
                                                        <p class="mt-4">Send a message to Adrian Mccormick</p>
                                                        <textarea name="message" style="width:100%; height:159px" placeholder="Type your Response and click send"></textarea>
                                                    </div>
                                                    <div class="col-md-3">
                                                       <div class="row mb-3">
                                                      <p class="mt-4">Attach</p>
                                                       <input type="file" name="file" id="FileUpload1" style="display: none"><button style="border: none;padding:5px; text-align:left; font-size: 14px;
                                                       background: #fff;
                                                       width: 92%;
                                                       padding: 14px;" id="btnFileUpload"> <i class="fa-solid fa-paperclip"></i> File</button>
                                                       </div>
                                                       <div class="row mb-3">
                                                        <input type="file" name="file" style="display: none"><button style="border: none;padding:5px; text-align:left;    font-size: 14px;
                                                        background: #fff;
                                                        width: 92%;
                                                        padding: 14px;"><i class="fa-solid fa-link-slash"></i> Vehicle History Report</button>
                                                       </div>
                                                       <div class="row mb-3">
                                                        <a href="#" class="btn btn-primary" style="font-size: 14px; width: 92%;"><i class="fa-regular fa-paper-plane"></i> Send</a>
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end modal --}}




        </div><!-- container -->
        <!--end Rightbar-->


    </div>
@endsection

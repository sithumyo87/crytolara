@extends('layouts.master')
@section('content')
<div class="card pt-4 ps-2" style="background-color: rgb(33, 34, 68);">
        <div class="card-body">
            <div class="row d-flex">
                <div class="col-md-6" style="font-size: 14px;">
                   <img src="./assets/images/avatar.png" alt="" width="70px" height="70px" style="border-radius: 10px;">
                    Loading....
                </div>
            </div>
        </div>
    </div>

    <div class="card m-4 ps-2" style="background-color: rgb(33, 34, 68);border-radius: 30px;">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <p class="float-end text-muted">0 USDT</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group mt-0" id="show_hide_password2">
                                <input type="text" class="form-control border-0 rounded-pill text-white" value="0" style="background-color: #2c2c52;">
                                <div class="input-group-addon">
                                    <img src="./assets/images/usdt-icon.png" alt="" width="20px" height="20px">
                    USDT
                   <button class="btn btn-sm rounded-pill" style="color: #f90;background-color: #372d3d;">Max</button>
                                </div>
                            </div>
                    
                </div>
                
            </div>
            <button class="btn text-center  w-100 mt-2 p-2 text-white" style="border-radius: 10px;background-color: #6b54eb;" >Withdraw</button>
            <button class="btn text-center  w-100 mt-2 p-2 text-white mb-4" style="border-radius: 10px;background-color: #2c2c52" >Withdraw Record</button>
        </div>
    </div>

    <div class="card m-4 ps-2" style="background: linear-gradient(318.46deg,#6b54eb,#d080ff);border-radius: 20px;">
        <div class="card-body py-2">
            <div class="row">
                <div class="col-lg-1 col-2 text-center ">
                <img src="./assets/images/usdt-icon.png" alt="" width="50px" height="50px">
                
            </div>
            <div class="col-lg-3 col-9  me-0">
                <p>Invite Friend <br><span class="text-muted">Earn Comission</span></p>
            </div>
            <div class="col-1 mt-3 offset-lg-7">
                <button class="btn bg-white float-end px-3" style="color: #6b54eb;font-size: 14px;">Invite</button>
            </div>
            </div>
        </div>
    </div>

    <div class="card mt-3" style="background-color: #212244;padding: 1.5rem;border-radius: 1.5rem;">
            <div class="row">
                <div class="col">
                    <h5>My Earnings</h5>
                </div>
                <div class="col ">
                    <button class="btn float-end rounded-pill" style="color: #f90;background-color: #372d3d;">See All</button>
                </div>
            </div>
            <div class="card mt-3" style="background-color: #2a2c52">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-4 text-center">
                            <p class="text-muted">ETH</p>
                            <h6 class="text-white">0</h6>
                            <p class="text-muted">Total Revenue</p>
                            
                        </div>
                        <div class="col-md-4 col-4 text-center">
                            <p class="text-muted">ETH</p>
                            <h6 class="text-white">0</h6>
                             <p class="text-muted">Total Earnings</p>
                        </div>
                        <div class="col-md-4 col-4 text-center">
                            <p class="text-muted">ETH</p>
                            <h6 class="text-white">0</h6>
                            <p class="text-muted">Yesterday Earnings</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="card mt-3 mb-5" style="background-color: #212244;padding: 1.5rem;border-radius: 1.5rem;">
        <div class="row">
            <div class="col">
                <h5>My Team</h5>
            </div>
            <div class="col ">
                <button class="btn float-end rounded-pill" style="color: #f90;background-color: #372d3d;">See All</button>
            </div>
        </div>
         <div class="card mt-3" style="background-color: #2a2c52">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-4 text-center">
                            <p class="text-muted">ETH</p>
                            <h6 class="text-white">0</h6>
                            <p class="text-muted">Total Revenue</p>
                            
                        </div>
                        <div class="col-md-4 col-4 text-center">
                            <p class="text-muted">ETH</p>
                            <h6 class="text-white">0</h6>
                             <p class="text-muted">Total Earnings</p>
                        </div>
                        <div class="col-md-4 col-4 text-center">
                            <p class="text-muted">ETH</p>
                            <h6 class="text-white">0</h6>
                            <p class="text-muted">Yesterday Earnings</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
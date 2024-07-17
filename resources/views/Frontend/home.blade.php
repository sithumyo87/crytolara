@extends('layouts.master')
@section('content')
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators bg-transparent">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?q=80&w=2874&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="d-block w-100"
            alt="..."
            height="200px"
          />
        </div>
        <div class="carousel-item">
          <img
            src="https://images.unsplash.com/photo-1508138221679-760a23a2285b?q=80&w=2874&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="d-block w-100"
            alt="..."
            height="200px"
          />
        </div>
        <div class="carousel-item">
          <img
            src="https://images.unsplash.com/photo-1496449903678-68ddcb189a24?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="d-block w-100"
            alt="..."
            height="200px"
          />
        </div>
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-ic   on" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
    </div>

    <div
      class="card"
      style="background-color: rgb(22, 23, 46); border-radius: 100px"
    >
      <div class="card-body">

        <div class="d-flex justify-content-between">
          <div>
            <h3 class="text-muted"><span class="text-white">0</span> USDT</h3>
          </div>
          <div>
            <button
              class="btn btn-sm text-white p-2 shadow-lg"
              style="background-color: #6b54eb" id="logincheck"
            >
              Participate
            </button>
          </div>
        </div>
        <div class="row mt-3 d-flex align-items-center">
          <div class="col-md-3 col-8">
            <h6 class="text-white my-auto">Address</h6>
          </div>
          <div class="col-lg-1 offset-lg-8 col-4">
            <h6 class="text-white my-auto">*********</h6>
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-md-4 col-4 text-center">
            <p class="text-muted">Total output</p>
            <h6 class="text-white">0</h6>
            <h6 class="text-white">ETH</h6>
          </div>
          <div class="col-md-4 col-4 text-center p-0">
            <p class="text-muted ">Yesterday output</p>
            <h6 class="text-white">0</h6>
            <h6 class="text-white">ETH</h6>
          </div>
          <div class="col-md-4 col-4 text-center">
            <p class="text-muted">Total output</p>
            <h6 class="text-white">0</h6>
            <h6 class="text-white">ETH</h6>
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-md-6 col-6">
            <p>Wallet Balance</p>
            <button
              class="btn w-100 text-white"
              style="background-color: rgb(44, 44, 82)"
            >
              0 USDT
            </button>
          </div>
          <div class="col-md-6 col-6">
            <p>Daily yield</p>
            <button
              class="btn w-100 text-white"
              style="background-color: rgb(81, 49, 255)"
            >
              0.000%
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="card m-3 rounded" style="background-color: rgb(44, 44, 82)">
      <div class="card-body m-0 pt-0 pb-0">
        <div class="row pt-2">
          <div class="col-md-2 col-6 text-center">
            <p>
              Current Hashrate<i
                class="fa-solid fa-star"
                style="color: #ffd43b"
              ></i>
            </p>
          </div>
          <div class="col-md-1 col-6 offset-lg-8 text-center">
            <p>261(PH/s)</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card m-3" style="background-color: rgb(44, 44, 82)">
      <div class="card-body">
        <div class="row text-center">
          <div class="col-md-4 col-4 text-center">
            <i
              class="fa-solid fa-microchip text-center"
              style="color: #1eff00"
            ></i>
            <p class="text-muted">Total output</p>
            <h6 class="text-white">0</h6>
            <h6 class="text-white">ETH</h6>
          </div>
          <div class="col-md-4 col-4 text-center m-0 p-0">
            <i class="fa-solid fa-user-group" style="color: #fb29ff"></i>
            <p class="text-muted">Yesterday output</p>
            <h6 class="text-white">0</h6>
            <h6 class="text-white">ETH</h6>
          </div>
          <div class="col-md-4 col-4 text-center">
            <i class="fa-solid fa-signal" style="color: #0c6fbb"></i>
            <p class="text-muted">Total output</p>
            <h6 class="text-white">0</h6>
            <h6 class="text-white">ETH</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="card m-3" style="background-color: rgb(44, 44, 82)">
      <div class="card-body">
        <h5>User Benefits</h5>
        <div class="d-flex justify-content-between">
          <div class="">
            <p class="text-muted">Address</p>
          </div>
          <div class=" ">
            <p class="text-end">Quantity</p>
          </div>
        </div>

        <div class="d-flex justify-content-between">
          <div class="">
            <p class="">0x11***5e2323</p>
          </div>
          <div class=" ">
            <p class="text-end">3434.44</p>
          </div>
        </div>

        <div class="d-flex justify-content-between">
          <div class="">
            <p class="">0x11***5e2323</p>
          </div>
          <div class=" ">
            <p class="text-end">3434.44</p>
          </div>
        </div>

        <div class="d-flex justify-content-between">
          <div class="">
            <p class="">0x11***5e2323</p>
          </div>
          <div class=" ">
            <p class="text-end">3434.44</p>
          </div>
        </div>

        <div class="d-flex justify-content-between">
          <div class="">
            <p class="">0x11***5e2323</p>
          </div>
          <div class=" ">
            <p class="text-end">3434.44</p>
          </div>
        </div>

        <div class="d-flex justify-content-between">
          <div class="">
            <p class="">0x11***5e2323</p>
          </div>
          <div class=" ">
            <p class="text-end">3434.44</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card m-3" style="background-color: rgb(44, 44, 82)">
      <div class="card-body">
        <h5>Help Center</h5>
        <div id="accordion mt-2 ">
          <!-- <div class="card" > -->
          <!-- <div class="card " > -->
          <div
            class="card-header"
            style="background-color: rgb(44, 44, 82)"
            id="headingOne"
          >
            <h5 class="mb-0">
              <div
                class="d-flex justify-content-between"
                style="background-color: rgb(44, 44, 82)"
                data-toggle="collapse"
                data-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >
                <div class="" style="background-color: rgb(44, 44, 82)">
                  <button
                    class="btn text-white text-start shadow-none"
                    style="background-color: rgb(44, 44, 82)"
                  >
                    What is Node Mining?
                  </button>
                </div>
                <div
                  class=""
                  style="background-color: rgb(44, 44, 82)"
                >
                  <i class="fas fa-arrow-circle-left text-end mt-2"></i>
                </div>
              </div>
            </h5>
          </div>

          <div
            id="collapseOne"
            class="collapse"
            aria-labelledby="headingOne"
            data-parent="#accordion"
            style="background-color: rgb(44, 44, 82)"
          >
            <div class="card-body" style="background-color: rgb(44, 44, 82)">
              Anim pariatur cliche reprehenderit, enim eiusmod high life
              accusamus terry richardson ad squid. 3 wolf moon officia aute, non
              cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
              laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
              on it squid single-origin coffee nulla assumenda shoreditch et.
              Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
              nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
              lomo. Leggings occaecat craft beer farm-to-table, raw denim
              aesthetic synth nesciunt you probably haven't heard of them
              accusamus labore sustainable VHS.
            </div>
            <!-- </div> -->
          </div>
        </div>

        <div id="accordion mt-5 ">
          <!-- <div class="card" > -->
          <!-- <div class="card " > -->
          <div
            class="card-header mt-2"
            style="background-color: rgb(44, 44, 82)"
            id="headingOne"
          >
            <h5 class="mb-0">
              <div
                class="d-flex justify-content-between"
                style="background-color: rgb(44, 44, 82)"
                data-toggle="collapse"
                data-target="#collapseOne2"
                aria-expanded="true"
                aria-controls="collapseOne2"
              >
                <div class="" style="background-color: rgb(44, 44, 82)">
                  <button
                    class="btn text-white text-start shadow-none "
                    style="background-color: rgb(44, 44, 82)"
                  >
                    What is Node Mining?
                  </button>
                </div>
                <div
                  class=""
                  style="background-color: rgb(44, 44, 82)"
                >
                  <i class="fas fa-arrow-circle-left text-end mt-2"></i>
                </div>
              </div>
            </h5>
          </div>

          <div
            id="collapseOne2"
            class="collapse"
            aria-labelledby="headingOne"
            data-parent="#accordion"
            style="background-color: rgb(44, 44, 82)"
          >
            <div class="card-body" style="background-color: rgb(44, 44, 82)">
              Anim pariatur cliche reprehenderit, enim eiusmod high life
              accusamus terry richardson ad squid. 3 wolf moon officia aute, non
              cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
              laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
              on it squid single-origin coffee nulla assumenda shoreditch et.
              Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
              nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
              lomo. Leggings occaecat craft beer farm-to-table, raw denim
              aesthetic synth nesciunt you probably haven't heard of them
              accusamus labore sustainable VHS.
            </div>
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
@endsection

    

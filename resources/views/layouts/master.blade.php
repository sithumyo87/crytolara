<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cryto</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
     <script src="https://cdn.jsdelivr.net/npm/web3@1.7.4/dist/web3.min.js"></script>
      @livewireStyles
  </head>
  <body >
    <div class="d-flex justify-content-between m-lg-3">
      <div class="d-flex align-items-center">
     
        <button
          class="btn btn-primary btn-md rounded-pill me-auto"
          href="#"
          id="connect-button" onclick="connectWallet()"
        >
          <div id="wallet-name">Connect Wallet</div>
        </button>
        <div id="account-info">No Wallet is Connected</div>
      </div>
      <div class="d-flex align-items-center">
        <i class="nav-link fa-solid fa-message text-white"></i>
        <div class="navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
          <form class="d-flex me-2">
            <ul class="navbar-nav me-2 mb-2 mb-lg-0">
              <li class="nav-item dropdown mt-1">
                <a
                  class="nav-link dropdown-toggle lang text-white px-3"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  English
                </a>
                <ul
                  class="dropdown-menu bg-white"
                  aria-labelledby="navbarDropdown"
                >
                  <li>
                    <a class="dropdown-item bg-white px-3" href="#">English</a>
                  </li>
                  <li>
                    <a class="dropdown-item bg-white px-3" href="#">Chinese</a>
                  </li>
                </ul>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </div>


   <div id="dataload" >
     @yield('content')
   </div>

    <div class="row text-center align-items-center mb-5">
      <div
        class="container fixed-bottom"
        style="width: 100%; background-color: rgb(33, 34, 68)"
      >
        <nav
          class="navbar navbar-expand-sm navbar-dark p-0 mt-3"
          style="width: 100%; max-height: 70px"
        >
          <div class="col-lg-3">
            <a href="{{ route('index') }}" wire:navigate style="text-decoration: none">
              <img
                src="{{ asset('assets/images/navbar/home.png') }}"
                alt=""
                width="25px"
                height="25px"
              />
              <p class="nav-text">Home</p>
            </a>
          </div>

          <div class="col-lg-3">
            <a href="/team" wire:navigate style="text-decoration: none">
              <img
                src="{{ asset('assets/images/navbar/team.png') }}"
                alt=""
                width="25px"
                height="25px"
              />
              <p class="nav-text">Team</p>
            </a>
          </div>

          <div class="col-lg-3">
            <a href="{{ route('service') }}" wire:navigate style="text-decoration: none">
              <img
                src="{{ asset('assets/images/navbar/serve.png') }}"
                alt=""
                width="25px"
                height="25px"
              />
              <p class="nav-text">Service</p>
            </a>
          </div>

          <div class="col-lg-3">
            <a href="{{ route('mine') }}" wire:navigate style="text-decoration: none" onclick="routeToMine()">
              <img
                src="{{ asset('assets/images/navbar/mine.png') }}"
                alt=""
                width="25px"
                height="25px"
              />
              <p class="nav-text">Mine</p>
            </a>
          </div>
        </nav>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/web3@0.19.0/dist/web3.js"></script>
    <script>
        const getCurrentAccountInformation = async (web3) => {
            const accounts = await web3.eth.getAccounts();
            if (accounts.length === 0) {
                document.getElementById('account-info').innerText = 'No Wallet is Connected';
                return;
            }
            const currentAccountAddress = accounts[0];
            const balance = await web3.eth.getBalance(currentAccountAddress);

            const currentAccount = {
                address: currentAccountAddress,
                network: await web3.eth.net.getNetworkType(),
                ethBalance: balance,
                ethBalanceInEther: web3.utils.fromWei(balance, 'ether'),
            }

            document.getElementById('account-info').innerText = JSON.stringify(currentAccount, null, 2);
            document.getElementById('wallet-name').innerText = (JSON.stringify(currentAccount.address, null, 2)).substring(1,12).replace();
            document.getElementById('logincheck').innerText = 'mining';
        };

        const connectWallet = async () => {
            if (typeof window.ethereum !== 'undefined') {
                const web3 = new Web3(window.ethereum);
                try {
                    // Request account access if needed
                    await window.ethereum.request({ method: 'eth_requestAccounts' });

                    // Get current account information
                    await getCurrentAccountInformation(web3);

                    // Subscribe to accounts changed event
                    window.ethereum.on('accountsChanged', async () => {
                        await getCurrentAccountInformation(web3);
                    });

                    

                } catch (error) {
                    console.error('User denied account access or there was an error:', error);
                    alert(error);
                }
            } else {
                alert('No Ethereum provider detected. Please install MetaMask or another wallet.');
            }
        };

        // Initialize web3 and check wallet connection on page load
        // window.addEventListener('load', async () => {
        //     await connectWallet();
        // });
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    {{-- <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script> --}}
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
      integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
      integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fuse.js/3.2.0/fuse.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
    {{-- <script src="bootstrap-select-dropdown.min.js"></script> --}}
      @livewireScripts
  </body>
</html>
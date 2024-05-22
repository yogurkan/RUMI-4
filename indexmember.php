<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="img/aidlogo.png" />
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
  <div class="loader">
    <div class="lds-roller">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <header class="border-b-4 border-green-700">
    <?php
    include("dbconnect.php");
    session_start();
    $sql = "SELECT member_name, member_lastname FROM members WHERE member_id = {$_SESSION['member_id']}"; // Assuming you want data for a specific customer ID

    $result = $conn->query($sql);

    // Check if there is a result
    if ($result->num_rows > 0) {
      // Output data of each row
      while ($row = $result->fetch_assoc()) {
        $member_name = $row["member_name"];
        $member_lastname = $row["member_lastname"];
      }
    } else {
      echo "No data found in the database.";
    }

    // Close the connection
    $conn->close();
    ?>
    <nav>
      <div class="bg-gray-100 font-sans">
        <div class="bg-white shadow">
          <div class="px-4">
            <div class="flex py-4 justify-between">




              <div class="hidden sm:flex sm:items-center">
                <img src="img/aidlogo.png" alt="Aid Connect Logo" class="w-10 h-10 mr-4" />
                <a href="indexmember.php" class="text-gray-800 text-xl font-semibold hover:text-green-700 ml-2 mr-3">Home</a>
                <!-- <a href="donations2.php" class="text-gray-800 text-xl font-semibold hover:text-green-700 ml-3 mr-3">Donations</a>
                <a href="makedonation.php" class="text-gray-800 text-xl font-semibold hover:text-green-700 ml-3">Make-Donation</a> -->
                <!-- <a href="bevolunteer.php" class="text-gray-800 text-xl font-semibold hover:text-green-700 ml-4 mr-4">Be-Volunteer</a> -->

                <div class="relative inline-block text-left" x-data="{ open: false }" @click.away="open = false">
                  <button @click="open = !open" class="w-full bg-white text-gray-800 text-xl font-semibold py-2 px-4 rounded inline-flex justify-between items-center hover:text-green-700">
                    <span>Donation</span>


                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>

                  <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute z-50 mt-2 w-full rounded-md shadow-lg bg-white border border-gray-200 ">
                    <div class="py-1 text-gray-800 text-xl font-semibold" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                      <a href="makedonation.php" class="block px-4 py-2 hover:bg-green-700 hover:text-white" role="menuitem">Make Donation</a>
                      <a href="donations2.php" class="block px-4 py-2 hover:bg-green-700 hover:text-white" role="menuitem">My Donations</a>
                    </div>
                  </div>
                </div>

                <div class="relative inline-block text-left" x-data="{ open: false }" @click.away="open = false">
                  <button @click="open = !open" class="w-full bg-white text-gray-800 text-xl font-semibold py-2 px-4 rounded inline-flex justify-between items-center hover:text-green-700">
                    <span class="whitespace-nowrap">Volunteer</span>
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>

                  <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute z-50 mt-2 w-auto rounded-md shadow-lg bg-white border border-gray-200 ">
                    <div class="py-1 text-gray-800 text-xl font-semibold" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                      <a href="bevolunteer.php" class="block px-4 py-2 hover:bg-green-700 hover:text-white" role="menuitem">Be Volunteer</a>
                      <a href="myvolunteering.php" class="block px-4 py-2 hover:bg-green-700 hover:text-white" role="menuitem">My Volunteering</a>
                    </div>
                  </div>
                </div>






                <!--<a href="requestaid.php" class="text-gray-800 text-xl font-semibold hover:text-green-700 ml-4">Request-Aid</a> -->
              </div>

              <div class="hidden sm:flex sm:items-center justify-end">

                <span class="flex items-center text-sm font-semibold border-4 mr-4 px-4 py-2 rounded-lg text-green-700 border-green-700 md:mr-3 md:ml-3">

                  <?php echo $member_name . ' ' . $member_lastname; ?>
                </span>
                <a href="unsetID.php" class="text-gray-800 text-sm font-semibold border-2 px-4 py-2 rounded-lg hover:text-green-700 hover:border-green-700">
                  Sign Out
                </a>
              </div>

              <div class="sm:hidden cursor-pointer">
                <img src="img/aidlogo.png" alt="Aid Connect Logo" class="w-10 h-10 mr-4" />
              </div>
            </div>

            <div class="block sm:hidden bg-white border-t-2 py-2">
              <div class="flex flex-col">
                <a href="indexmember.php" class="text-gray-800 text-xl font-semibold hover:text-green-700 mr-4">Home</a>





                <div class="relative inline-block text-left" x-data="{ open: false }" @click.away="open = false">
                  <button @click="open = !open" class="w-full bg-white text-gray-800 text-xl font-semibold py-2  rounded inline-flex justify-between items-center hover:text-green-700">
                    <span>Donation</span>


                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>

                  <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute z-50 mt-2 w-full rounded-md shadow-lg bg-white border border-gray-200 ">
                    <div class="py-1 text-gray-800 text-xl font-semibold" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                      <a href="makedonation.php" class="block px-4 py-2 hover:bg-green-700 hover:text-white" role="menuitem">Make Donation</a>
                      <a href="donations2.php" class="block px-4 py-2 hover:bg-green-700 hover:text-white" role="menuitem">My Donations</a>
                    </div>
                  </div>
                </div>

                <div class="relative inline-block text-left" x-data="{ open: false }" @click.away="open = false">
                  <button @click="open = !open" class="w-full bg-white text-gray-800 text-xl font-semibold py-2 rounded inline-flex justify-between items-center hover:text-green-700">
                    <span>Volunteer</span>


                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>

                  <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute z-50 mt-2 w-full rounded-md shadow-lg bg-white border border-gray-200 ">
                    <div class="py-1 text-gray-800 text-xl font-semibold" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                      <a href="makedonation.php" class="block px-4 py-2 hover:bg-green-700 hover:text-white" role="menuitem">Be Volunteer</a>
                      <a href="donations2.php" class="block px-4 py-2 hover:bg-green-700 hover:text-white" role="menuitem">My Volunteering</a>
                    </div>
                  </div>
                </div>

              </div>

              <div class="sm:flex sm:items-center mt-4 mb-4">

                <span class="text-gray-800 text-sm font-semibold border-4 mr-4 px-4 py-2 rounded-lg text-green-700 border-green-700">

                  <?php echo $member_name . ' ' . $member_lastname; ?>
                </span>
                <a href="unsetID.php" class="text-gray-800 text-sm font-semibold border-2 px-4 py-2 rounded-lg hover:text-green-700 hover:border-green-700">
                  Sign Out
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </nav>
  </header>


  <section class="bg-white py-16 md:mt-10 border-b-4 border-green-700">

    <div class="container max-w-screen-xl mx-auto px-4">

      <p class="font-light text-green-700 text-lg md:text-xl text-center font-semibold uppercase mb-6">Our features</p>

      <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center leading-normal mb-10">We believe we can
        save <br> more life with you</h1>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-20 items-center justify-center">
        <div class="text-center">
          <div class="flex justify-center mb-6">
            <div class="w-20 py-6 flex justify-center bg-green-700 bg-opacity-80 text-white rounded-xl">
              <i data-feather="heart"></i>
            </div>
          </div>

          <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">Make Donation</h4>

          <p class="font-light text-gray-500 text-md md:text-xl mb-6">You can make donations which projects you want.
          </p>

          <div class="flex justify-center">
            <a href="makedonation.php" class="flex items-center gap-1 px-6 py-4 font-semibold text-info text-xl rounded-xl hover:bg-info hover:text-green-500 transition ease-linear">
              Donate Now
              <i data-feather="arrow-right-circle"></i>
            </a>
          </div>
        </div>

        <div class="text-center">
          <div class="flex justify-center mb-6">
            <div class="w-20 py-6 flex justify-center bg-green-700 bg-opacity-80 text-white rounded-xl">
              <i data-feather="users"></i>
            </div>
          </div>

          <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">Be Volunteer</h4>

          <p class="font-light text-gray-500 text-md md:text-xl mb-6">You can be volunteer which project you want.</p>

          <div class="flex justify-center">
            <a href="bevolunteer.php" class="flex items-center gap-1 px-6 py-4 font-semibold text-info text-lg rounded-xl hover:bg-info hover:text-green-500 transition ease-linear">
              Be Volunteer Now
              <i data-feather="arrow-right-circle"></i>
            </a>
          </div>
        </div>


      </div>

    </div>

  </section>

  <section class="bgground py-16 border-b-4 border-green-700">

    <div class="container max-w-screen-xl mx-auto px-4">

      <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center mb-16 underline">Active Projects</h1>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <div class="px-6 py-6 w-full border-2 border-green-700 bg-white bg-opacity-30 rounded-3xl flex flex-col space-y-4 justify-between">
          <img src="img/happykids.webp" alt="Image" class="h-56 w-full object-cover mb-6 rounded">

          <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Aiding Hungry Kids <br>in Africa: Your
            Support Matters</h4>

          <p class="font-light text-gray-900 text-sm md:text-md lg:text-lg mb-10">Join our compassionate mission to
            bring nutritious meals and hope to hungry children in Africa. Your donation to our charity today makes a
            profound impact, offering sustenance and brighter prospectss. </p>

          <div class="flex items-center justify-between mb-8">
            <h6 class="font-light text-gray-400 text-sm md:text-lg"><span class="font-semibold text-gray-900 text-md md:text-lg"></span></h6>

            <h6 class="font-light text-gray-400 text-sm md:text-lg"><span class="font-semibold text-gray-900 text-md md:text-lg"></span></h6>
          </div>

          <div class="hidden md:block lg:flex items-center justify-between mb-8">
            <div>
              <div class="w-72 h-2 bg-info opacity-10 rounded-lg absolute"></div>

              <div class="w-56 h-2 bg-info rounded-lg relative"></div>
            </div>

            <p class="font-light text-gray-900 text-md"></p>
          </div>
          <a class="mt-8 inline-flex items-center justify-center rounded-xl bg-green-600 py-3 px-6 font-dm text-base font-medium text-white shadow-xl transition-transform duration-200 ease-in-out hover:scale-[1.02]" href="login.html">
            Donate
          </a>

          <!-- <button class="w-full py-4 bg-info font-semibold text-green-700 bg-white text-xl rounded-xl hover:text-white hover:bg-green-700 transition ease-in-out duration-500">Donate</button> -->
        </div>

        <div class="px-6 py-6 w-full border-2 border-green-700 bg-white bg-opacity-30 rounded-3xl flex flex-col space-y-4 justify-between">
          <img src="img/anewhome.webp" alt="Image" class="h-56 w-full object-cover mb-6 rounded">

          <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Standing with Turkey: Rebuilding Lives After
            the Earthquake</h4>

          <p class="font-light text-gray-900 text-sm md:text-md lg:text-lg mb-10">Join us as we stand in solidarity with
            Turkey, offering aid and support to rebuild communities devastated by the recent earthquake, providing hope
            and assistance to those affected.</p>

          <div class="flex items-center justify-between mb-8">
            <h6 class="font-light text-gray-400 text-sm md:text-lg"><span class="font-semibold text-gray-900 text-md md:text-lg"></span></h6>

            <h6 class="font-light text-gray-400 text-sm md:text-lg"><span class="font-semibold text-gray-900 text-md md:text-lg"></span></h6>
          </div>

          <div class="hidden md:block lg:flex items-center justify-between mb-8">
            <div>
              <div class="w-72 h-2 bg-info opacity-10 rounded-lg absolute"></div>

              <div class="w-52 h-2 bg-info rounded-lg relative"></div>
            </div>

            <p class="font-light text-gray-900 text-md"></p>
          </div>

          <a class="mt-8 inline-flex items-center justify-center rounded-xl bg-green-600 py-3 px-6 font-dm text-base font-medium text-white shadow-xl transition-transform duration-200 ease-in-out hover:scale-[1.02]" href="login.html">
            Donate
          </a>
        </div>

        <div class="px-6 py-6 w-full border-2 border-green-700 bg-white bg-opacity-30 rounded-3xl flex flex-col space-y-4 justify-between">
          <img src="img/hopefortomorrow.webp" alt="Image" class="h-56 w-full object-cover mb-6 rounded">

          <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Empowering Communities: Aid for Those in Need
            in Indonesia</h4>

          <p class="font-light text-gray-900 text-sm md:text-md lg:text-lg mb-10">Join us in extending a helping hand to
            the people in need across Indonesia, providing vital resources and support to uplift communities and create
            lasting positive change.</p>

          <div class="flex items-center justify-between mb-8">
            <h6 class="font-light text-gray-400 text-sm md:text-lg"><span class="font-semibold text-gray-900 text-md md:text-lg"></span></h6>

            <h6 class="font-light text-gray-400 text-sm md:text-lg"><span class="font-semibold text-gray-900 text-md md:text-lg"></span></h6>
          </div>

          <div class="hidden md:block lg:flex items-center justify-between mb-8">
            <div>
              <div class="w-72 h-2 bg-info opacity-10 rounded-lg absolute"></div>

              <div class="w-60 h-2 bg-info rounded-lg relative"></div>
            </div>

            <p class="font-light text-gray-900 text-md"></p>
          </div>

          <a class="mt-8 inline-flex items-center justify-center rounded-xl bg-green-600 py-3 px-6 font-dm text-base font-medium text-white shadow-xl transition-transform duration-200 ease-in-out hover:scale-[1.02]" href="login.html">
            Donate
          </a>
        </div>


      </div>



    </div> <!-- container.// -->

  </section>
  <!-- donation section //end -->

  <!-- feature section -->
  <section class="bg-white py-16">
    <div class="container max-w-screen-xl mx-auto px-4">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
        <div class="flex items-center justify-center border-4 border-green-700 p-8">
          <img src="img/aidlogo.png" alt="Image" class="w-full h-auto object-cover object-center">
        </div>
        <div>
          <span class="block mb-4 text-xl font-semibold text-green-700 text-primary">
            Why Choose Us
          </span>
          <h2 class="mb-5 text-3xl font-bold text-dark dark:text-dark-6 sm:text-[40px]/[48px]">
            Make your customers happy by giving services.
          </h2>
          <p class="mb-5 text-base text-semibold text-lg text-body-color dark:text-dark-6">
            It's widely acknowledged that individuals are drawn to the impactful work of NGOs when perusing their missions and initiatives. The essence of NGO efforts lies in their ability to enact tangible change and address pressing societal issues, thus captivating the attention and support of concerned global citizens.
          </p>
          <p class="mb-8 text-base text-semibold text-lg text-body-color dark:text-dark-6">
            This recognition underscores the significance of NGO organizations in driving meaningful progress and fostering collective engagement towards a better world. By leveraging their expertise and resources, NGOs play a pivotal role in addressing complex challenges, sparking conversations, and inspiring action on local, national, and international scales. In a landscape where social responsibility and humanitarian values reign supreme, NGOs stand as beacons of hope, driving positive change and leaving an indelible mark on the fabric of society.
          </p>
          <a href="#top" class="inline-flex items-center justify-center py-3 text-base font-medium text-center text-white border border-transparent rounded-md px-7 bg-green-700 hover:bg-opacity-90">
            Get Started
          </a>
        </div>
      </div>
    </div>
  </section>
  <footer class="bg-green-700">
    <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
      <nav class="-mx-5 -my-2 flex flex-wrap justify-center">
        

        <div class="px-5 py-2">
          <a href="#" class="text-base text-white hover:text-white">
            #Home#
          </a>
        </div>
      </nav>

      <p class="mt-8 text-center text-base text-white">
        &copy; 2024 AID CONNECT. All rights reserved.
      </p>
    </div>
  </footer>

  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    feather.replace();
  </script>
  <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>
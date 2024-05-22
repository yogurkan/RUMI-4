<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Donations</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="img/aidlogo.png" />
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
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-700" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M12.9499909,17 C12.7183558,18.1411202 11.709479,19 10.5,19 C9.29052104,19 8.28164422,18.1411202 8.05000906,17 L3.5,17 C3.22385763,17 3,16.7761424 3,16.5 C3,16.2238576 3.22385763,16 3.5,16 L8.05000906,16 C8.28164422,14.8588798 9.29052104,14 10.5,14 C11.709479,14 12.7183558,14.8588798 12.9499909,16 L20.5,16 C20.7761424,16 21,16.2238576 21,16.5 C21,16.7761424 20.7761424,17 20.5,17 L12.9499909,17 Z M18.9499909,12 C18.7183558,13.1411202 17.709479,14 16.5,14 C15.290521,14 14.2816442,13.1411202 14.0500091,12 L3.5,12 C3.22385763,12 3,11.7761424 3,11.5 C3,11.2238576 3.22385763,11 3.5,11 L14.0500091,11 C14.2816442,9.85887984 15.290521,9 16.5,9 C17.709479,9 18.7183558,9.85887984 18.9499909,11 L20.5,11 C20.7761424,11 21,11.2238576 21,11.5 C21,11.7761424 20.7761424,12 20.5,12 L18.9499909,12 Z M9.94999094,7 C9.71835578,8.14112016 8.70947896,9 7.5,9 C6.29052104,9 5.28164422,8.14112016 5.05000906,7 L3.5,7 C3.22385763,7 3,6.77614237 3,6.5 C3,6.22385763 3.22385763,6 3.5,6 L5.05000906,6 C5.28164422,4.85887984 6.29052104,4 7.5,4 C8.70947896,4 9.71835578,4.85887984 9.94999094,6 L20.5,6 C20.7761424,6 21,6.22385763 21,6.5 C21,6.77614237 20.7761424,7 20.5,7 L9.94999094,7 Z M7.5,8 C8.32842712,8 9,7.32842712 9,6.5 C9,5.67157288 8.32842712,5 7.5,5 C6.67157288,5 6,5.67157288 6,6.5 C6,7.32842712 6.67157288,8 7.5,8 Z M16.5,13 C17.3284271,13 18,12.3284271 18,11.5 C18,10.6715729 17.3284271,10 16.5,10 C15.6715729,10 15,10.6715729 15,11.5 C15,12.3284271 15.6715729,13 16.5,13 Z M10.5,18 C11.3284271,18 12,17.3284271 12,16.5 C12,15.6715729 11.3284271,15 10.5,15 C9.67157288,15 9,15.6715729 9,16.5 C9,17.3284271 9.67157288,18 10.5,18 Z" />
                </svg>
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
  <section class="bgground homecenter min-h-screen ">

    <div class=" p-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
      <!--Card 1-->
      <?php


      if (!defined('dbusername')) {
        define('dbusername', 'root');
      }

      if (!defined('dbpassword')) {
        define('dbpassword', '');
      }

      if (!defined('dbdatabase')) {
        define('dbdatabase', 'db_ngo');
      }

      if (!defined('dbserver')) {
        define('dbserver', 'localhost');
      }

      $query = "SELECT donor_id FROM donors WHERE member_id = {$_SESSION["member_id"]}";
      $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

      if (mysqli_num_rows($result) > 0) {
        // echo "
        // <script>
        //   document.getElementById('nores').style.display = 'none';
        // </script>";
        while ($row = mysqli_fetch_assoc($result)) {
          $donor_id = $row["donor_id"];
        }
        $query2 = "SELECT * FROM donations WHERE donor_id = $donor_id";
        $result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));

        while ($row2 = mysqli_fetch_assoc($result2)) {
          $donation_area = $row2["donation_area"];
          $donation_project = $row2["donation_project"];
          $donation_type = $row2["donation_type"];
          $donation_amount = $row2["donation_amount"];
          $donation_material_type = $row2["donation_material_type"];
          $donation_shipping_type = $row2["donation_shipping_type"];
          $donation_date = $row2["donation_date"];
          $img = 'default.jpg'; // Default image

          // Fetch the project_img from the projects table
          $query3 = "SELECT project_img FROM projects WHERE project_name = '$donation_project'";
          $result3 = mysqli_query($conn, $query3) or die(mysqli_error($conn));

          if (mysqli_num_rows($result3) > 0) {
            $row3 = mysqli_fetch_assoc($result3);
            $img = $row3['project_img'];
          }

          echo "
        <div class='max-w-xl rounded overflow-hidden shadow-lg'>
          <img class='w-full' src='img/$img' alt='Forest' style='max-width: 100%; height: 250px;'>
          <div class='px-6 py-4 bg-green-700 h-full'>
            <div class='font-semibold text-xl text-white mb-2'>Project: $donation_project</div>
            <p class='text-white text-base'>
             Area: $donation_area
            </p>
            <p class='text-white text-base'>
              Donation Type: $donation_type
            </p>
            <p class='text-white text-base'>
              Donation Amount: $donation_amount
            </p>
            <p class='text-white text-base'>
              Material Type: $donation_material_type
            </p>
            <p class='text-white text-base'>
              Shipping Type: $donation_shipping_type
            </p>
            <p class='text-white text-base'>
              Donation Date: $donation_date
            </p>
          </div>
          </div>
          ";
        }
      }

      // Close the database connection
      mysqli_close($conn);



      ?>

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
  <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>
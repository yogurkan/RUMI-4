<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Collect-Distribute</title>
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
        include ("dbconnect.php");
        session_start();
        $sql = "SELECT member_name FROM members WHERE member_id = {$_SESSION['member_id']}"; // Assuming you want data for a specific customer ID
        
        $result = $conn->query($sql);

        // Check if there is a result
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                $member_name = $row["member_name"];
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
                                <a href="operations.php"
                                    class="text-gray-800 text-xl font-semibold hover:text-green-700 ml-2 mr-3">Home</a>
                                <!-- <a href="donations2.php" class="text-gray-800 text-xl font-semibold hover:text-green-700 ml-3 mr-3">Donations</a>
                <a href="makedonation.php" class="text-gray-800 text-xl font-semibold hover:text-green-700 ml-3">Make-Donation</a> -->
                                <!-- <a href="bevolunteer.php" class="text-gray-800 text-xl font-semibold hover:text-green-700 ml-4 mr-4">Be-Volunteer</a> -->

                                <div class="relative inline-block text-left" x-data="{ open: false }"
                                    @click.away="open = false">
                                    <button @click="open = !open"
                                        class="w-full bg-white text-gray-800 text-xl font-semibold py-2 px-4 rounded inline-flex justify-between items-center hover:text-green-700">
                                        <span class="whitespace-nowrap">Admin Pages</span>


                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>

                                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-150"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95"
                                        class="absolute z-50 mt-2 w-full rounded-md shadow-lg bg-white border border-gray-300 ">
                                        <div class="py-1 text-gray-800 text-xl font-semibold" role="menu"
                                            aria-orientation="vertical" aria-labelledby="options-menu">
                                            <a href="members.php"
                                                class="block px-4 py-2 hover:bg-green-700 hover:text-white"
                                                role="menuitem">Members</a>
                                            <a href="donorlist.php"
                                                class="block px-4 py-2 hover:bg-green-700 hover:text-white"
                                                role="menuitem">Donor List</a>
                                            <a href="donationlist.php"
                                                class="block px-4 py-2 hover:bg-green-700 hover:text-white"
                                                role="menuitem">Donations List</a>
                                            <a href="volunteerlist.php"
                                                class="block px-4 py-2 hover:bg-green-700 hover:text-white"
                                                role="menuitem">Volunteers</a>
                                            <a href="projects.php"
                                                class="block px-4 py-2 hover:bg-green-700 hover:text-white"
                                                role="menuitem">Projects</a>

                                            <a href="requestlist.php"
                                                class="block px-4 py-2 hover:bg-green-700 hover:text-white"
                                                role="menuitem">Requests</a>
                                            <a href="statistics.php"
                                                class="block px-4 py-2 hover:bg-green-700 hover:text-white"
                                                role="menuitem">Statistics</a>
                                            
                                        </div>
                                    </div>
                                </div>








                                <!--<a href="requestaid.php" class="text-gray-800 text-xl font-semibold hover:text-green-700 ml-4">Request-Aid</a> -->
                            </div>

                            <div class="hidden sm:flex sm:items-center justify-end">

                                <span
                                    class="flex items-center text-sm font-semibold border-4 mr-4 px-4 py-2 rounded-lg text-green-700 border-green-700 md:mr-3 md:ml-3">

                                    <?php echo $member_name ?>
                                </span>
                                <a href="unsetID.php"
                                    class="text-gray-800 text-sm font-semibold border-2 px-4 py-2 rounded-lg hover:text-green-700 hover:border-green-700">
                                    Sign Out
                                </a>
                            </div>

                            <div class="sm:hidden cursor-pointer">
                                <img src="img/aidlogo.png" alt="Aid Connect Logo" class="w-10 h-10 mr-4" />
                            </div>
                        </div>

                        <div class="block sm:hidden bg-white border-t-2 py-2">
                            <div class="flex flex-col">
                                <a href="indexmember.php"
                                    class="text-gray-800 text-xl font-semibold hover:text-green-700 mr-4">Home</a>





                                <div class="relative inline-block text-left" x-data="{ open: false }"
                                    @click.away="open = false">
                                    <button @click="open = !open"
                                        class="w-full bg-white text-gray-800 text-xl font-semibold py-2  rounded inline-flex justify-between items-center hover:text-green-700">
                                        <span>Admin Pages</span>


                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>

                                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-150"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95"
                                        class="absolute z-50 mt-2 w-full rounded-md shadow-lg bg-white border border-gray-300 ">
                                        <div class="py-1 text-gray-800 text-xl font-semibold" role="menu"
                                            aria-orientation="vertical" aria-labelledby="options-menu">
                                            <a href="members.php"
                                                class="block px-4 py-2 hover:bg-green-700 hover:text-white"
                                                role="menuitem">Members</a>
                                            <a href="makedonation.php"
                                                class="block px-4 py-2 hover:bg-green-700 hover:text-white"
                                                role="menuitem">Donor List</a>
                                            <a href="donations2.php"
                                                class="block px-4 py-2 hover:bg-green-700 hover:text-white"
                                                role="menuitem">Donations List</a>
                                            <a href="makedonation.php"
                                                class="block px-4 py-2 hover:bg-green-700 hover:text-white"
                                                role="menuitem">Volunteers</a>
                                            <a href="projects.php"
                                                class="block px-4 py-2 hover:bg-green-700 hover:text-white"
                                                role="menuitem">Projects</a>

                                            <a href="requestlist.php"
                                                class="block px-4 py-2 hover:bg-green-700 hover:text-white"
                                                role="menuitem">Requests</a>
                                            <a href="statistics.php"
                                                class="block px-4 py-2 hover:bg-green-700 hover:text-white"
                                                role="menuitem">Statistics</a>
                                        </div>
                                    </div>
                                </div>





                            </div>

                            <div class="sm:flex sm:items-center mt-4 mb-4">

                                <span
                                    class="text-gray-800 text-sm font-semibold border-4 mr-4 px-4 py-2 rounded-lg text-green-700 border-green-700">

                                    <?php echo $member_name ?>
                                </span>
                                <a href="unsetID.php"
                                    class="text-gray-800 text-sm font-semibold border-2 px-4 py-2 rounded-lg hover:text-green-700 hover:border-green-700">
                                    Sign Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </nav>
    </header>

    <section class="p-6 font-mono w-full min-h-screen bgground">

        <main class="mt-8 card">
            <div class="container mx-auto px-6">
                <div class="md:flex mt-8 md:-mx-4">
                    <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('img/waiting.jpeg');">
                        <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                            <div class="px-10 max-w-xl">
                                <h2 class="text-2xl text-white font-semibold">Not Shipped Donations</h2>
                                <p class="mt-2 text-white">The NGO diligently collects donations from diverse sources, sorts them to meet recipients' needs, and then arranges for their shipment to designated locations, aiming to positively impact the lives of those in need.</p>

                                <button id="showNonShippedTableButton" class="flex items-center mt-4 px-3 py-2 bg-green-600 text-white text-sm uppercase font-medium rounded hover:bg-green-700 focus:outline-none focus:bg-green-700">
                                    <span>Show</span>
                                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('img/shipped.webp');">
                        <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                            <div class="px-10 max-w-xl">
                                <h2 class="text-2xl text-white font-semibold">Shipped Donations</h2>
                                <p class="mt-2 text-white">The NGO has opted to cancel the donation shipment to reevaluate distribution logistics and priorities. This decision allows for a more strategic allocation of resources to maximize impact on beneficiaries.</p>

                                <button id="showShippedTableButton" class="flex items-center mt-4 px-3 py-2 bg-green-600 text-white text-sm uppercase font-medium rounded hover:bg-green-700 focus:outline-none focus:bg-green-700">
                                    <span>Show</span>
                                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <div class="w-full mb-8 overflow-hidden rounded-lg ">
            <div class="w-full overflow-x-auto">
                <div>
                    <table class="w-full hidden non-shipped">
                        <thead>
                            <tr class="text-md font-semibold tracking-wide text-left text-white uppercase border-b border-white bg-green-700">
                                <th class="px-4 py-3">Not Shipped Donations</th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3 flex justify-end">
                                    <button class="close-button bg-gray-200 hover:bg-gray-400 rounded-full h-6 w-6 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-gray-700 hover:text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        <thead>
                            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th class="px-4 py-3">Donation ID</th>
                                <th class="px-4 py-3">Area</th>
                                <th class="px-4 py-3">Project</th>

                                <th class="px-4 py-3">Donation Type</th>
                                <th class="px-4 py-3">Amount</th>
                                <th class="px-4 py-3">Material Type</th>
                                <th class="px-4 py-3">Shipping Type</th>
                                <th class="px-4 py-3">Donor ID</th>
                                <th class="px-4 py-3">Action</th>



                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <?php // Assuming $result is the result of your query;
                            $query = "SELECT * FROM donations WHERE donation_type = 'Material' AND isShipped = 'No' AND donation_shipping_type = 'Collect by NGO'";

                            // Assuming $conn is your database connection
                            $result = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                $donation_id = $row["donation_id"];
                                $donation_area = $row["donation_area"];
                                $donation_project = $row["donation_project"];
                                $donation_type = $row["donation_type"];
                                $donation_amount = $row["donation_amount"];
                                $donation_material_type = $row["donation_material_type"];
                                $donation_shipping_type = $row["donation_shipping_type"];
                                $donor_ID = $row["donor_id"];

                                echo "
                            <tr class='text-gray-700'>
                                <td class='px-4 py-3 text-ms font-semibold border'>$donation_id</td>
                                
                                <td class='px-4 py-3 text-ms font-semibold border'>$donation_area</td>
                                <td class='px-4 py-3 text-ms font-semibold border'>$donation_project</td>
                                <td class='px-4 py-3 text-ms font-semibold border'>$donation_type</td>
                                
                                <td class='px-4 py-3 text-sm border'>$donation_amount</td>
                                <td class='px-4 py-3 text-sm border'>$donation_material_type</td>
                                <td class='px-4 py-3 text-sm border'>$donation_shipping_type</td>
                                <td class='px-4 py-3 text-sm border'>$donor_ID</td>
                                <td class='px-4 py-3 text-sm border'>
                                    <button class='ship-button bg-green-700 hover:bg-green-500 text-white font-bold py-2 px-4 rounded' data-id='$donation_id'>
                                        Ship
                                    </button>
                                </td>
                            </tr>
                            ";
                            }
                            // Free the result set
                            mysqli_free_result($result);

                            ?>

                        </tbody>
                    </table>


                    <table class="w-full mt-8 hidden shipped">
                        <thead>
                            <tr class="text-md font-semibold tracking-wide text-left text-white uppercase border-b border-white bg-green-700">
                                <th class="px-4 py-3">Shipped Donations</th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3 flex justify-end">
                                    <button class="close-button bg-gray-200 hover:bg-gray-400 rounded-full h-6 w-6 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-gray-700 hover:text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        <thead>
                            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th class="px-4 py-3">Donation ID</th>
                                <th class="px-4 py-3">Area</th>
                                <th class="px-4 py-3">Project</th>

                                <th class="px-4 py-3">Donation Type</th>
                                <th class="px-4 py-3">Amount</th>
                                <th class="px-4 py-3">Material Type</th>
                                <th class="px-4 py-3">Shipping Type</th>
                                <th class="px-4 py-3">Donor ID</th>
                                <th class="px-4 py-3">Action</th>

                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <?php // Assuming $result is the result of your query;
                            $query = "SELECT * FROM donations WHERE donation_type = 'Material' AND isShipped = 'Yes'";

                            // Assuming $conn is your database connection
                            $result = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                $donation_id = $row["donation_id"];
                                $donation_area = $row["donation_area"];
                                $donation_project = $row["donation_project"];
                                $donation_type = $row["donation_type"];
                                $donation_amount = $row["donation_amount"];
                                $donation_material_type = $row["donation_material_type"];
                                $donation_shipping_type = $row["donation_shipping_type"];
                                $donor_ID = $row["donor_id"];

                                echo "
                            <tr class='text-gray-700'>
                                <td class='px-4 py-3 text-ms font-semibold border'>$donation_id</td>
                                
                                <td class='px-4 py-3 text-ms font-semibold border'>$donation_area</td>
                                <td class='px-4 py-3 text-ms font-semibold border'>$donation_project</td>
                                <td class='px-4 py-3 text-ms font-semibold border'>$donation_type</td>
                                
                                <td class='px-4 py-3 text-sm border'>$donation_amount</td>
                                <td class='px-4 py-3 text-sm border'>$donation_material_type</td>
                                <td class='px-4 py-3 text-sm border'>$donation_shipping_type</td>
                                <td class='px-4 py-3 text-sm border'>$donor_ID</td>
                                <td class='px-4 py-3 text-sm border'>
                                    <button class='cancelship-button bg-green-700 hover:bg-green-500 text-white font-bold py-2 px-4 rounded' data-id='$donation_id'>
                                        Cancel
                                    </button>
                                </td>
                            </tr>
                            ";
                            }
                            // Free the result set
                            mysqli_free_result($result);

                            ?>

                        </tbody>
                    </table>

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
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".close-button").click(function() {
            window.location.href = 'distribute.php';
        });


        $("#showNonShippedTableButton").click(function() {
            $(".non-shipped").removeClass("hidden");
            $(".card").addClass("hidden");
        });

        $("#showShippedTableButton").click(function() {
            $(".shipped").removeClass("hidden");
            $(".card").addClass("hidden");
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".ship-button").click(function() {
                var button = $(this);
                var donationId = button.data('id');

                $.ajax({
                    url: 'ship_donation.php',
                    type: 'post',
                    data: {
                        donation_id: donationId
                    },
                    success: function(response) {
                        if (response == 1) {
                            button.text('Shipped');
                            button.removeClass('bg-green-700 hover:bg-green-500').addClass('bg-gray-500');
                        } else {
                            alert('Update failed');
                        }
                    }
                });
            });
        });
        $(document).ready(function() {
            $(".cancelship-button").click(function() {
                var button = $(this);
                var donationId = button.data('id');

                $.ajax({
                    url: 'cancel_donation.php',
                    type: 'post',
                    data: {
                        donation_id: donationId
                    },
                    success: function(response) {
                        if (response == 1) {
                            button.text('Canceled');
                            button.removeClass('bg-green-700 hover:bg-green-500').addClass('bg-gray-500');
                        } else {
                            alert('Update failed');
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Statistics</title>
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


    <section class="bgground homecenter min-h-screen ">
        <div id="main" class="main-content flex-1 mt-12 md:mt-2 pb-24 md:pb-5">


            <div class="flex flex-wrap ">
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div
                        class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-gray-600">AID-CONNECT MEMBERS</h2>
                                <?php
                                $sql = "SELECT COUNT(*) as member_count FROM members WHERE member_id != 1";
                                $result = $conn->query($sql);

                                // Check if there is a result
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $member_count = $row["member_count"];
                                    }
                                } else {
                                    echo "No data found in the database.";
                                }
                                ?>
                                <p class="font-bold text-3xl"><?php echo $member_count; ?> <span
                                        class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>



                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div
                        class="bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-indigo-600"><i
                                        class="fas fa-tasks fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-gray-600">AID-CONNECT DONORS</h2>
                                <?php
                                $sql = "SELECT COUNT(*) as donor_count FROM donors";
                                $result = $conn->query($sql);

                                // Check if there is a result
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $donor_count = $row["donor_count"];
                                    }
                                } else {
                                    echo "No data found in the database.";
                                }
                                ?>
                                <p class="font-bold text-3xl"><?php echo $donor_count; ?></p>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div
                        class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-red-600"><i class="fas fa-inbox fa-2x fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-gray-600">AID-CONNECT VOLUNTEERS</h2>
                                <?php
                                $sql = "SELECT COUNT(*) as volunteer_count FROM volunteers WHERE volunteer_approved = 'Approved'";
                                $result = $conn->query($sql);

                                // Check if there is a result
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $volunteer_count = $row["volunteer_count"];
                                    }
                                } else {
                                    echo "No data found in the database.";
                                }
                                ?>
                                <p class="font-bold text-3xl"><?php echo $volunteer_count; ?> <span
                                        class="text-red-500"><i class="fas fa-caret-up"></i></span></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="flex flex-wrap mt-6 -mx-3">

            <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-1/2 lg:flex-none lg:px-2">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl dark:bg-white dark:shadow-dark-xl dark:bg-white border-black-125 rounded-2xl bg-clip-border">
                    <div class="p-4 pb-0 mb-0 rounded-t-4">
                        <div class="flex justify-between">
                            <h6 class="mb-2 dark:text-black dark:opacity-60 font-semibold">Last Donations</h6>
                        </div>
                    </div>
                    <div class="overflow-x-auto">

                        <table
                            class="items-center w-full mb-4 align-top border-collapse border-gray-300 border-gray-300">
                            <tbody>
                                <?php

                                // Check the connection
                                if ($conn->connect_error) {
                                    die('Connection failed: ' . $conn->connect_error);
                                }
                                // Get the last 5 donations
                                $stmt = $conn->prepare('SELECT donor_id, donation_amount FROM donations ORDER BY donation_date DESC LIMIT 5');
                                $stmt->execute();
                                $result = $stmt->get_result();
                                // Fetch the donations as an associative array
                                $donations = $result->fetch_all(MYSQLI_ASSOC);

                                // Loop through the donations and create a row for each one
                                foreach ($donations as $donation) {
                                    $donor_id = $donation['donor_id'];

                                    // Prepare the SQL statement
                                    $stmt1 = $conn->prepare('SELECT donor_name FROM donors WHERE donor_id = ?');

                                    // Bind the donor_id to the SQL statement
                                    $stmt1->bind_param('i', $donor_id);

                                    // Execute the SQL statement
                                    $stmt1->execute();

                                    // Get the result
                                    $result1 = $stmt1->get_result();

                                    // Fetch the donor_name
                                    if ($result1->num_rows > 0) {
                                        $donor = $result1->fetch_assoc();
                                        $donor_name = $donor['donor_name'];
                                    } else {
                                        echo 'No donor found with this ID';
                                    }

                                    echo '<tr>
                                        <td class="p-2 align-middle bg-white border-b w-3/10 whitespace-nowrap border-gray-300">
                                            <div class="flex items-center px-2 py-1">
                                                
                                                <div class="ml-6">
                                                    <p class="mb-0 text-md font-semibold leading-tight dark:text-black dark:opacity-60">Donor:</p>
                                                    <h6 class="mb-0 text-xl leading-normal dark:text-green-700">' . $donor_name . '</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-white border-b whitespace-nowrap border-gray-300">
                                            <div class="text-center">
                                                <p class="mb-0 text-md font-semibold leading-tight dark:text-black dark:opacity-60">Donation Amount:</p>
                                                <h6 class="mb-0 text-xl leading-normal dark:text-green-700  ">' .
                                        $donation['donation_amount'] . '</h6>
                                            </div>
                                        </td>
                                    </tr>';
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-1/2 lg:flex-none lg:px-2">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl dark:bg-white dark:shadow-dark-xl dark:bg-white border-black-125 rounded-2xl bg-clip-border">
                    <div class="p-4 pb-0 mb-0 rounded-t-4">
                        <div class="flex justify-between">
                            <h6 class="mb-2 dark:text-black dark:opacity-60 font-semibold">Total Donation Amounts</h6>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table
                            class="items-center w-full mb-4 align-top border-collapse border-gray-300 border-gray-300">
                            <tbody>
                                <?php
                                // Connect to the database
                                
                                // Check the connection
                                if ($conn->connect_error) {
                                    die('Connection failed: ' . $conn->connect_error);
                                }

                                // Get the total donation amount for each donation type and material type
                                $stmt = $conn->prepare('SELECT CASE WHEN donation_type = "Material" THEN donation_material_type ELSE donation_type END as type, SUM(donation_amount) as total_amount FROM donations GROUP BY type');
                                $stmt->execute();
                                $result = $stmt->get_result();

                                // Fetch the totals as an associative array
                                $totals = $result->fetch_all(MYSQLI_ASSOC);



                                // Loop through the totals and store the total amount for each type in a variable
                                $totals_array = array();
                                foreach ($totals as $total) {
                                    $totals_array[$total['type']] = $total['total_amount'];
                                }
                                ?>

                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap border-gray-300">
                                        <div class="flex items-center px-2 py-1">

                                            <div class="ml-6">
                                                <p
                                                    class="mb-0 text-md font-semibold leading-tight dark:text-black dark:opacity-60">
                                                    Donation Type:</p>
                                                <h6 class="mb-0 text-xl leading-normal dark:text-green-700">Money
                                                </h6>
                                            </div>
                                        </div>
                                    </td>

                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap border-gray-300">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-md font-semibold leading-tight dark:text-black dark:opacity-60">
                                                Total Amounts:</p>
                                            <h6 class="mb-0 text-xl leading-normal dark:text-green-700">
                                                <?php echo isset($totals_array['Money']) ? $totals_array['Money'] : 0; ?>
                                            </h6>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap border-gray-300">
                                        <div class="flex items-center px-2 py-1">

                                            <div class="ml-6">
                                                <p
                                                    class="mb-0 text-md font-semibold leading-tight dark:text-black dark:opacity-60">
                                                    Donation Type:</p>
                                                <h6 class="mb-0 text-xl leading-normal dark:text-green-700">Food
                                                </h6>
                                            </div>
                                        </div>
                                    </td>

                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap border-gray-300">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-md font-semibold leading-tight dark:text-black dark:opacity-60">
                                                Total Amount:</p>
                                            <h6 class="mb-0 text-xl leading-normal dark:text-green-700">
                                                <?php echo isset($totals_array['Food']) ? $totals_array['Food'] : 0; ?>
                                            </h6>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap border-gray-300">
                                        <div class="flex items-center px-2 py-1">

                                            <div class="ml-6">
                                                <p
                                                    class="mb-0 text-md font-semibold leading-tight dark:text-black dark:opacity-60">
                                                    Donation Type:</p>
                                                <h6 class="mb-0 text-xl leading-normal dark:text-green-700">Clothing
                                                </h6>
                                            </div>
                                        </div>
                                    </td>

                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap border-gray-300">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-md font-semibold leading-tight dark:text-black dark:opacity-60">
                                                Total Amount:</p>
                                            <h6 class="mb-0 text-xl leading-normal dark:text-green-700">
                                                <?php echo isset($totals_array['Clothing']) ? $totals_array['Clothing'] : 0; ?>
                                            </h6>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap border-gray-300">
                                        <div class="flex items-center px-2 py-1">

                                            <div class="ml-6">
                                                <p
                                                    class="mb-0 text-md font-semibold leading-tight dark:text-black dark:opacity-60">
                                                    Donation Type:</p>
                                                <h6 class="mb-0 text-xl leading-normal dark:text-green-700">Furniture
                                                </h6>
                                            </div>
                                        </div>
                                    </td>

                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap border-gray-300">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-md font-semibold leading-tight dark:text-black dark:opacity-60">
                                                Total Amount:</p>
                                            <h6 class="mb-0 text-xl leading-normal dark:text-green-700">
                                                <?php echo isset($totals_array['Furniture']) ? $totals_array['Furniture'] : 0; ?>
                                            </h6>
                                        </div>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div id="main" class="main-content flex-1 mt-16 md:mt-8 pb-24 md:pb-5">


            <div class="flex flex-wrap ">
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div
                        class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-600 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-pink-600"><i class="fa fa-wallet fa-2x fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="uppercase font-bold  text-gray-600">Volunteer Number of
                                    <span class="underline">HAPPY KIDS</span>
                                </h2>
                                <?php
                                $sql = "SELECT COUNT(*) as volunteer_project_count FROM volunteers WHERE volunteer_project = 'Happy Kids' AND volunteer_approved = 'Approved'";
                                $result = $conn->query($sql);

                                // Check if there is a result
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $volunteer_project_count = $row["volunteer_project_count"];
                                    }
                                } else {
                                    echo "No data found in the database.";
                                }
                                ?>
                                <p class="font-bold text-3xl"><?php echo $volunteer_project_count; ?> <span
                                        class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>



                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div
                        class="bg-gradient-to-b from-orange-200 to-orange-100 border-b-4 border-orange-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-orange-600"><i
                                        class="fas fa-tasks fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="uppercase font-bold  text-gray-600">Volunteer Number of
                                    <span class="underline">A NEW HOME</span>
                                </h2>
                                <?php
                                $sql = "SELECT COUNT(*) as volunteer_project_count FROM volunteers WHERE volunteer_project = 'A New Home' AND volunteer_approved = 'Approved'";
                                $result = $conn->query($sql);

                                // Check if there is a result
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $volunteer_project_count = $row["volunteer_project_count"];
                                    }
                                } else {
                                    echo "No data found in the database.";
                                }
                                ?>
                                <p class="font-bold text-3xl"><?php echo $volunteer_project_count; ?></p>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div
                        class="bg-gradient-to-b from-purple-300 to-purple-200 border-b-4 border-purple-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-purple-600"><i
                                        class="fas fa-inbox fa-2x fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="uppercase font-bold  text-gray-600">Volunteer Number of
                                    <span class="underline">HOPE FOR TOMORROW</span>
                                </h2>
                                <?php
                                $sql = "SELECT COUNT(*) as volunteer_project_count FROM volunteers WHERE volunteer_project = 'Hope For Tomorrow' AND volunteer_approved = 'Approved'";
                                $result = $conn->query($sql);

                                // Check if there is a result
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $volunteer_project_count = $row["volunteer_project_count"];
                                    }
                                } else {
                                    echo "No data found in the database.";
                                }
                                ?>
                                <p class="font-bold text-3xl"><?php echo $volunteer_project_count; ?> <span
                                        class="text-red-500"><i class="fas fa-caret-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex flex-wrap -mx-3 mt-8">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <!-- <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6 class="dark:text-white">Projects table</h6>
              </div> -->

                    <?php


                    $sql = "SELECT * FROM projects WHERE project_id = 3"; // Fetch data for each project_id
                    
                    $result = $conn->query($sql);

                    // Check if there is a result
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            $project_id3 = $row["project_id"];
                            $project_name3 = $row["project_name"];
                            $project_need_money3 = $row["project_need_money"];
                            $project_need_food3 = $row["project_need_food"];
                            $project_need_clothing3 = $row["project_need_clothing"];
                            $project_need_furniture3 = $row["project_need_furniture"];

                            // You can now use these variables to display the data for each project_id
                        }
                    } else {
                        echo "No data found in the database.";
                    }
                    ?>
                    <?php

                    $sql = "SELECT * FROM projects WHERE project_id = 1"; // Fetch data for each project_id
                    
                    $result = $conn->query($sql);

                    // Check if there is a result
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            $project_id1 = $row["project_id"];
                            $project_name1 = $row["project_name"];
                            $project_need_money1 = $row["project_need_money"];
                            $project_need_food1 = $row["project_need_food"];
                            $project_need_clothing1 = $row["project_need_clothing"];
                            $project_need_furniture1 = $row["project_need_furniture"];

                            // You can now use these variables to display the data for each project_id
                        }
                    } else {
                        echo "No data found in the database.";
                    }
                    ?>
                    <?php

                    $sql = "SELECT * FROM projects WHERE project_id = 2"; // Fetch data for each project_id
                    
                    $result = $conn->query($sql);

                    // Check if there is a result
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            $project_id2 = $row["project_id"];
                            $project_name2 = $row["project_name"];
                            $project_need_money2 = $row["project_need_money"];
                            $project_need_food2 = $row["project_need_food"];
                            $project_need_clothing2 = $row["project_need_clothing"];
                            $project_need_furniture2 = $row["project_need_furniture"];

                            // You can now use these variables to display the data for each project_id
                        }
                    } else {
                        echo "No data found in the database.";
                    }

                    ?>

                    <?php
                    // Connect to the database
                    
                    // Check the connection
                    if ($conn->connect_error) {
                        die('Connection failed: ' . $conn->connect_error);
                    }

                    // Get the total donation amount for each donation type and material type
                    $stmt = $conn->prepare('SELECT CASE WHEN donation_type = "Material" THEN donation_material_type ELSE donation_type END as type, SUM(donation_amount) as total_amount FROM donations WHERE donation_project = "Happy Kids" GROUP BY type');
                    $stmt->execute();
                    $result = $stmt->get_result();

                    // Fetch the totals as an associative array
                    $totals1 = $result->fetch_all(MYSQLI_ASSOC);



                    // Loop through the totals and store the total amount for each type in a variable
                    $totals1_array = array();
                    foreach ($totals1 as $total) {
                        $totals1_array[$total['type']] = $total['total_amount'];
                    }

                    $money_total1 = isset($totals1_array['Money']) ? $totals1_array['Money'] : 0;
                    $food_total1 = isset($totals1_array['Food']) ? $totals1_array['Food'] : 0;
                    $clothing_total1 = isset($totals1_array['Clothing']) ? $totals1_array['Clothing'] : 0;
                    $furniture_total1 = isset($totals1_array['Furniture']) ? $totals1_array['Furniture'] : 0;

                    $percent_money1 = min(100, intval(($money_total1 / $project_need_money1) * 100));
                    $percent_food1 = min(100, intval(($food_total1 / $project_need_food1) * 100));
                    $percent_clothing1 = min(100, intval(($clothing_total1 / $project_need_clothing1) * 100));
                    $percent_furniture1 = min(100, intval(($furniture_total1 / $project_need_furniture1) * 100));

                    ?>


                    <?php
                    // Connect to the database
                    
                    // Check the connection
                    if ($conn->connect_error) {
                        die('Connection failed: ' . $conn->connect_error);
                    }

                    // Get the total donation amount for each donation type and material type
                    $stmt = $conn->prepare('SELECT CASE WHEN donation_type = "Material" THEN donation_material_type ELSE donation_type END as type, SUM(donation_amount) as total_amount FROM donations WHERE donation_project = "Hope For Tomorrow" GROUP BY type');
                    $stmt->execute();
                    $result = $stmt->get_result();

                    // Fetch the totals as an associative array
                    $totals3 = $result->fetch_all(MYSQLI_ASSOC);



                    // Loop through the totals and store the total amount for each type in a variable
                    $totals3_array = array();
                    foreach ($totals3 as $total) {
                        $totals3_array[$total['type']] = $total['total_amount'];
                    }
                    $money_total3 = isset($totals3_array['Money']) ? $totals3_array['Money'] : 0;
                    $food_total3 = isset($totals3_array['Food']) ? $totals3_array['Food'] : 0;
                    $clothing_total3 = isset($totals3_array['Clothing']) ? $totals3_array['Clothing'] : 0;
                    $furniture_total3 = isset($totals3_array['Furniture']) ? $totals3_array['Furniture'] : 0;

                    $percent_money3 = min(100, intval(($money_total3 / $project_need_money3) * 100));
                    $percent_food3 = min(100, intval(($food_total3 / $project_need_food3) * 100));
                    $percent_clothing3 = min(100, intval(($clothing_total3 / $project_need_clothing3) * 100));
                    $percent_furniture3 = min(100, intval(($furniture_total3 / $project_need_furniture3) * 100));
                    ?>


                    <?php
                    // Connect to the database
                    
                    // Check the connection
                    if ($conn->connect_error) {
                        die('Connection failed: ' . $conn->connect_error);
                    }

                    // Get the total donation amount for each donation type and material type
                    $stmt = $conn->prepare('SELECT CASE WHEN donation_type = "Material" THEN donation_material_type ELSE donation_type END as type, SUM(donation_amount) as total_amount FROM donations WHERE donation_project = "A New Home" GROUP BY type');
                    $stmt->execute();
                    $result = $stmt->get_result();

                    // Fetch the totals as an associative array
                    $totals2 = $result->fetch_all(MYSQLI_ASSOC);



                    // Loop through the totals and store the total amount for each type in a variable
                    $totals2_array = array();
                    foreach ($totals2 as $total) {
                        $totals2_array[$total['type']] = $total['total_amount'];
                    }
                    $money_total2 = isset($totals2_array['Money']) ? $totals2_array['Money'] : 0;
                    $food_total2 = isset($totals2_array['Food']) ? $totals2_array['Food'] : 0;
                    $clothing_total2 = isset($totals2_array['Clothing']) ? $totals2_array['Clothing'] : 0;
                    $furniture_total2 = isset($totals2_array['Furniture']) ? $totals2_array['Furniture'] : 0;

                    $percent_money2 = min(100, intval(($money_total2 / $project_need_money2) * 100));
                    $percent_food2 = min(100, intval(($food_total2 / $project_need_food2) * 100));
                    $percent_clothing2 = min(100, intval(($clothing_total2 / $project_need_clothing2) * 100));
                    $percent_furniture2 = min(100, intval(($furniture_total2 / $project_need_furniture2) * 100));
                    ?>




                    <div class="flex-auto px-0 pt-0 pb-2 mt-2">
                        <div class="p-0 overflow-x-auto">
                            <table
                                class="items-center justify-center w-full mb-0 align-top border-collapse border-gray-300 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th
                                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none border-gray-300 dark:text-green-700 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Project</th>
                                        <th
                                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none border-gray-300 dark:text-green-700 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Donation Type</th>
                                        <th
                                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none border-gray-300 dark:text-green-700 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Donation Target</th>
                                        <th
                                            class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none border-gray-300 dark:text-green-700 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Completion</th>
                                        <th
                                            class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-solid shadow-none border-gray-300 dark:text-green-700 tracking-none whitespace-nowrap">
                                        </th>
                                    </tr>
                                </thead>


                                <tbody class="border-t">
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">

                                                <div class="my-auto">
                                                    <h6
                                                        class="mb-0 text-lg leading-normal font-semibold dark:text-black dark:opacity-60">
                                                        <?php echo $project_name1 ?>
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal dark:text-black dark:opacity-60">
                                                Money</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php echo $project_need_money1 ?></span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span
                                                    class="mr-2 text-xs font-semibold leading-tight dark:text-black dark:opacity-60">
                                                    <?php
                                                    echo $percent_money1 . "%";
                                                    ?>
                                                </span>

                                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                                    <div class="bg-green-600 h-2.5 rounded-full"
                                                        style="width: <?php echo $percent_money1; ?>%">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400">
                                                <i
                                                    class="text-xs leading-tight fa fa-ellipsis-v dark:text-black dark:opacity-60"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">

                                                <div class="my-auto">
                                                    <h6
                                                        class="mb-0 text-lg leading-normal font-semibold dark:text-black dark:opacity-60">
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal dark:text-black dark:opacity-60">
                                                Food</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php echo $project_need_food1 ?></span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span
                                                    class="mr-2 text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                    echo $percent_food1 . "%";
                                                    ?></span>
                                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                                    <div class="bg-green-600 h-2.5 rounded-full"
                                                        style="width: <?php echo $percent_food1; ?>%">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i
                                                    class="text-xs leading-tight fa fa-ellipsis-v dark:text-black dark:opacity-60"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">

                                                <div class="my-auto">
                                                    <h6
                                                        class="mb-0 text-lg leading-normal font-semibold dark:text-black dark:opacity-60">
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal dark:text-black dark:opacity-60">
                                                Clothing</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                echo $project_need_clothing1;
                                                ?></span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span
                                                    class="mr-2 text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                    echo $percent_clothing1 . "%";
                                                    ?></span>
                                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                                    <div class="bg-green-600 h-2.5 rounded-full"
                                                        style="width: <?php echo $percent_clothing1; ?>%">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i
                                                    class="text-xs leading-tight fa fa-ellipsis-v dark:text-black dark:opacity-60"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">

                                                <div class="my-auto">
                                                    <h6
                                                        class="mb-0 text-lg leading-normal font-semibold dark:text-black dark:opacity-60">
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal dark:text-black dark:opacity-60">
                                                Furniture</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                echo $project_need_furniture1;
                                                ?></span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span
                                                    class="mr-2 text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                    echo $percent_furniture1 . "%";
                                                    ?></span>
                                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                                    <div class="bg-green-600 h-2.5 rounded-full" style="width: <?php
                                                    echo $percent_furniture1;
                                                    ?>%">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i
                                                    class="text-xs leading-tight fa fa-ellipsis-v dark:text-black dark:opacity-60"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">

                                                <div class="my-auto">
                                                    <h6
                                                        class="mb-0 text-lg leading-normal font-semibold dark:text-black dark:opacity-60">
                                                        A New Home</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal  dark:text-black dark:opacity-60">
                                                Money</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                echo $project_need_money2;
                                                ?></span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span
                                                    class="mr-2 text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                    echo $percent_money2 . "%";
                                                    ?></span>

                                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                                    <div class="bg-green-600 h-2.5 rounded-full"
                                                        style="width:<?php echo $percent_money2; ?>%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i
                                                    class="text-xs leading-tight fa fa-ellipsis-v dark:text-black dark:opacity-60"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">

                                                <div class="my-auto">
                                                    <h6
                                                        class="mb-0 text-lg leading-normal font-semibold dark:text-black dark:opacity-60">
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal dark:text-black dark:opacity-60">
                                                Food</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                echo $project_need_food2;
                                                ?></span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span
                                                    class="mr-2 text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                    echo $percent_food2 . "%";
                                                    ?></span>
                                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                                    <div class="bg-green-600 h-2.5 rounded-full" style="width: <?php
                                                    echo $percent_food2;
                                                    ?>%">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i
                                                    class="text-xs leading-tight fa fa-ellipsis-v dark:text-black dark:opacity-60"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">

                                                <div class="my-auto">
                                                    <h6
                                                        class="mb-0 text-lg leading-normal font-semibold dark:text-black dark:opacity-60">
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal  dark:text-black dark:opacity-60">
                                                Clothing</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                echo $project_need_clothing2;
                                                ?></span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span
                                                    class="mr-2 text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                    echo $percent_clothing2 . "%";
                                                    ?></span>
                                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                                    <div class="bg-green-600 h-2.5 rounded-full" style="width: <?php
                                                    echo $percent_clothing2;
                                                    ?>%">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i
                                                    class="text-xs leading-tight fa fa-ellipsis-v dark:text-black dark:opacity-60"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">

                                                <div class="my-auto">
                                                    <h6
                                                        class="mb-0 text-lg leading-normal font-semibold dark:text-black dark:opacity-60">
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal  dark:text-black dark:opacity-60">
                                                Furniture</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                echo $project_need_furniture2;
                                                ?></span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span
                                                    class="mr-2 text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                    echo $percent_furniture2 . "%";
                                                    ?></span>
                                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                                    <div class="bg-green-600 h-2.5 rounded-full" style="width: <?php
                                                    echo $percent_furniture2;
                                                    ?>%">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i
                                                    class="text-xs leading-tight fa fa-ellipsis-v dark:text-black dark:opacity-60"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">

                                                <div class="my-auto">
                                                    <h6
                                                        class="mb-0 text-lg leading-normal font-semibold dark:text-black dark:opacity-60">
                                                        Hope For Tomorrow</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal  dark:text-black dark:opacity-60">
                                                Money</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                echo $project_need_money3;
                                                ?></span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span
                                                    class="mr-2 text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                    echo $percent_money3 . "%";
                                                    ?></span>
                                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                                    <div class="bg-green-600 h-2.5 rounded-full" style="width: <?php
                                                    echo $percent_money3;
                                                    ?>%">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i
                                                    class="text-xs leading-tight fa fa-ellipsis-v dark:text-black dark:opacity-60"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">

                                                <div class="my-auto">
                                                    <h6
                                                        class="mb-0 text-lg leading-normal font-semibold dark:text-black dark:opacity-60">
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal  dark:text-black dark:opacity-60">
                                                Food</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                echo $project_need_food3;
                                                ?></span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span
                                                    class="mr-2 text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                    echo $percent_food3 . "%";
                                                    ?></span>
                                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                                    <div class="bg-green-600 h-2.5 rounded-full" style="width: <?php
                                                    echo $percent_food3;
                                                    ?>%">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i
                                                    class="text-xs leading-tight fa fa-ellipsis-v dark:text-black dark:opacity-60"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">

                                                <div class="my-auto">
                                                    <h6
                                                        class="mb-0 text-lg leading-normal font-semibold dark:text-black dark:opacity-60">
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal  dark:text-black dark:opacity-60">
                                                Clothing</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                echo $project_need_clothing3;
                                                ?></span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span
                                                    class="mr-2 text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                    echo $percent_clothing3 . "%";
                                                    ?></span>
                                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                                    <div class="bg-green-600 h-2.5 rounded-full" style="width: <?php
                                                    echo $percent_clothing3;
                                                    ?>%">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i
                                                    class="text-xs leading-tight fa fa-ellipsis-v dark:text-black dark:opacity-60"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">

                                                <div class="my-auto">
                                                    <h6
                                                        class="mb-0 text-lg leading-normal font-semibold dark:text-black dark:opacity-60">
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal  dark:text-black dark:opacity-60">
                                                Furniture</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                echo $project_need_furniture3;
                                                ?></span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span
                                                    class="mr-2 text-xs font-semibold leading-tight dark:text-black dark:opacity-60"><?php
                                                    echo $percent_furniture3 . "%";
                                                    ?></span>
                                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                                    <div class="bg-green-600 h-2.5 rounded-full" style="width: <?php
                                                    echo $percent_furniture3;
                                                    ?>%">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i
                                                    class="text-xs leading-tight fa fa-ellipsis-v dark:text-black dark:opacity-60"></i>
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

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
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <script src="../assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
</body>

</html>
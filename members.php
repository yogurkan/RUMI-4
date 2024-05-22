<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Members</title>
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

    <!-- component -->
    <section class="p-6 font-mono w-full min-h-screen">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">member ID</th>
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Mail</th>

                            <th class="px-4 py-3">Birthdate</th>
                            <th class="px-4 py-3">Address</th>
                            <th class="px-4 py-3">Phone</th>
                            <th class="px-4 py-3">Member Date</th>

                            <th class="px-4 py-3">Action</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <?php // Assuming $result is the result of your query;
                        $query = "SELECT * FROM members WHERE member_id != 1";

                        // Assuming $conn is your database connection
                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $member_id = $row["member_id"];
                            $member_name = $row["member_name"];
                            $member_lastname = $row["member_lastname"];
                            $member_mail = $row["member_mail"];
                            $member_birthdate = $row["member_birthdate"];
                            $member_address = $row["member_address"];
                            $member_phone = $row["member_phone"];
                            $member_date = $row["member_date"];

                            echo "
                            <tr class='text-gray-700'>
                                <td class='px-4 py-3 text-ms font-semibold border'>$member_id</td>
                                <td class='px-4 py-3 border'>
                                    <div class='flex items-center text-sm'>
                                        <div class='relative w-8 h-8 mr-3 rounded-full md:block'>
                                            <img class='object-cover w-full h-full rounded-full' src='img/member.png' alt='' loading='lazy' />                                            <div class='absolute inset-0 rounded-full shadow-inner' aria-hidden='true'></div>
                                        </div>
                                        <div>
                                            <p class='font-semibold text-black'>$member_name</p>
                                            <p class='text-l fond-bold text-gray-600'>$member_lastname</p>
                                        </div>
                                    </div>
                                </td>
                                <td class='px-4 py-3 text-ms font-semibold border'>$member_mail</td>
                                
                                <td class='px-4 py-3 text-sm border'>$member_birthdate</td>
                                <td class='px-4 py-3 text-sm border'>$member_address</td>
                                <td class='px-4 py-3 text-sm border'>$member_phone</td>
                                <td class='px-4 py-3 text-sm border'>$member_date</td>

                                <td class='px-4 py-3 text-sm border'><button data-member-id='" . $row['member_id'] . "' class='remove-member inline-block bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded'>Remove Member</button></td>

                             </tr>
                            ";
                        }
                        // Free the result set
                        mysqli_free_result($result);

                        // Close the connection
                        $conn->close();
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div class="confirm fixed z-10 inset-0 overflow-auto bg-black bg-opacity-40 hidden">
        <div class="border rounded-lg shadow relative max-w-sm m-auto bg-white p-6">
            

            <div class="text-center">
                <svg class="w-20 h-20 text-green-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-xl font-normal text-gray-500 mt-5 mb-6">Are you sure you want to delete this user?</h3>
                <a href="#"
                    class="confirm-yes text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:ring-green-400 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2">
                    Yes, I'm sure
                </a>
                <a href="#"
                    class="confirm-no text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-green-400 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center">
                    No, cancel
                </a>
            </div>
        </div>
    </div>
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
    <script>
        $(".remove-member").click(function () {
            var memberId = $(this).data("member-id");
            $(".confirm").show().data("member-id", memberId);
        });

        $(".confirm-yes").click(function () {
            var memberId = $(".confirm").data("member-id");

            $.ajax({
                url: 'remove_member.php',
                type: 'POST',
                data: { member_id: memberId },
                success: function (result) {
                    location.reload();
                },
                error: function () {
                    alert("An error occurred");
                }
            });
        });

        $(".confirm-no").click(function () {
            $(".confirm").hide();
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Volunteer List</title>
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

    <section class="p-6 font-mono w-full min-h-screen">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Volunteer ID</th>
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Profession</th>

                            <th class="px-4 py-3">Income</th>
                            <th class="px-4 py-3">Area</th>
                            <th class="px-4 py-3">Project</th>
                            <th class="px-4 py-3">Transport Handle</th>
                            <th class="px-4 py-3">Availability in Month</th>
                            <th class="px-4 py-3">Available Hours</th>
                            <th class="px-4 py-3">Member ID</th>

                            <th class="px-4 py-3" style="width: 220px;">Approval</th>

                        </tr>
                    </thead>



                    <tbody class="bg-white">
                        <?php // Assuming $result is the result of your query;
                        $query = "SELECT * FROM volunteers ";

                        // Assuming $conn is your database connection
                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $volunteer_id = $row['volunteer_id'];
                            $volunteer_name = $row['volunteer_name'];
                            $volunteer_lastname = $row['volunteer_lastname'];
                            $volunteer_profession = $row['volunteer_profession'];
                            $volunteer_income = $row['volunteer_income'];
                            $volunteer_area = $row['volunteer_area'];
                            $volunteer_project = $row['volunteer_project'];
                            $volunteer_transport_handle = $row['volunteer_transport_handle'];
                            $volunteer_month_availability = $row['volunteer_month_availability'];
                            $volunteer_hours_availability = $row['volunteer_hours_availability'];
                            $volunteer_approved = $row['volunteer_approved'];
                            $member_ID = $row['member_id'];




                            // Fetch the current approval status from the database
                            // Fetch the current approval status from the database
                            $stmt = $conn->prepare('SELECT volunteer_approved FROM volunteers WHERE volunteer_id = ?');
                            $stmt->bind_param('i', $volunteer_id);
                            $stmt->execute();
                            $result1 = $stmt->get_result();
                            $row1 = $result1->fetch_assoc();
                            $currentStatus = $row1['volunteer_approved'];




                            echo "
                            <tr class='text-gray-700'>
                                <td class='px-4 py-3 text-ms font-semibold border'>$volunteer_id</td>
                                <td class='px-4 py-3 border'>
                                    <div class='flex items-center text-sm'>
                                        <div class='relative w-8 h-8 mr-3 rounded-full md:block'>
                                            <img class='object-cover w-full h-full rounded-full' src='img/account.png' alt='' loading='lazy' />                                            
                                            <div class='absolute inset-0 rounded-full shadow-inner' aria-hidden='true'></div>
                                        </div>
                                        <div>
                                            <p class='font-semibold text-black'>$volunteer_name</p>
                                            <p class='text-l fond-bold text-gray-600'>$volunteer_lastname</p>
                                        </div>
                                    </div>
                                </td>
                                <td class='px-4 py-3 text-sm border'>$volunteer_profession</td>
                                <td class='px-4 py-3 text-ms font-semibold border'>$volunteer_income</td>
                                
                                <td class='px-4 py-3 text-sm border'>$volunteer_area</td>
                                <td class='px-4 py-3 text-sm border'>$volunteer_project</td>
                                <td class='px-4 py-3 text-sm border'>$volunteer_transport_handle</td>
                                <td class='px-4 py-3 text-sm border'>$volunteer_month_availability</td>
                                <td class='px-4 py-3 text-sm border'>$volunteer_hours_availability</td>
                                
                                <td class='px-4 py-3 text-sm border'>$member_ID</td>
                                <td class='px-4 py-3 text-sm border'>                                 
                                    

                                <div class='approval-div' data-status='Pending' data-id='{$volunteer_id}' style='cursor: pointer; padding: 3px; border: 1px solid gray; border-radius: 5px; " . ($currentStatus == 'Pending' ? "background-color: red; color: white;" : "") . "'>Pending</div>
                                <div class='mt-1 approval-div' data-status='Approved' data-id='{$volunteer_id}' style='cursor: pointer; padding: 3px; border: 1px solid gray; border-radius: 5px; " . ($currentStatus == 'Approved' ? "background-color: green; color: white;" : "") . "'>Approved</div>
    
                                    
                                </td>
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
        function changeStatus(volunteerId, status) {
            // Get the button group
            var btnGroup = document.getElementById('status-buttons-' + volunteerId);

            // Remove the 'active' class from all buttons in the group
            for (var i = 0; i < btnGroup.children.length; i++) {
                btnGroup.children[i].classList.remove('active');
            }

            // Add the 'active' class to the clicked button
            var btn = btnGroup.querySelector('.' + status);
            btn.classList.add('active');

            // TODO: Update the status in the database...
        }
    </script>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script>
        document.querySelectorAll('.approval-div').forEach(function(div) {
            div.addEventListener('click', function() {
                var volunteerId = this.dataset.id;
                var approvalStatus = this.dataset.status;

                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'update_approval.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    // Update the background color of the divs
                    document.querySelectorAll('[data-id="' + volunteerId + '"]').forEach(function(div) {
                        div.style.backgroundColor = div.dataset.status == approvalStatus ? (approvalStatus == 'Approved' ? 'green' : 'red') : '';
                        div.style.color = div.dataset.status == approvalStatus ? 'white' : '';
                    });
                };
                xhr.send('id=' + volunteerId + '&status=' + approvalStatus);
            });
        });
    </script>


</body>

</html>


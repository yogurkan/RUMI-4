<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amount Targets</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" href="img/aidlogo.png" />
    <style>
        .modal {
            transition: opacity 0.25s ease;
        }

        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }
    </style>
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

        <main class="my-8">
            <div class="container mx-auto px-6">

                <?php
                $query = "SELECT * FROM projects";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    $project_id = $row['project_id'];
                    $project_name = $row['project_name'];
                    $project_area = $row['project_area'];
                    $project_need_money = $row['project_need_money'];
                    $project_need_food = $row['project_need_food'];
                    $project_need_clothing = $row['project_need_clothing'];
                    $project_need_furniture = $row['project_need_furniture'];
                    // rest of your code
                
                    // Generate the HTML
                    echo "
                <div class='mt-16'>
    <div class='flex items-center justify-between'>
        <h3 class='text-2xl font-xl font-semibold'>
            <span class='text-gray-600'>Donation Targets for</span>
            <span class='text-green-800 border-b-2 border-green-800'> {$project_name}</span>
        </h3>
        <button id='changeButton{$project_id}' class='px-3 py-2 bg-green-600 text-white text-sm uppercase font-medium rounded hover:bg-green-700 focus:outline-none focus:bg-green-700'>
            <span>Change Amounts</span>
        </button>
    </div>
    <div class='grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6'>
        <div class='w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden'>
        <div class='flex items-end justify-end h-56 w-full bg-cover' style='background-image: url(\"./img/money.webp\")'>

            </div>
            <div class='px-5 py-6 bg-white'>
                <h3 class='text-gray-700 uppercase font-semibold'>Money</h3>
                
                <input type='number' id='moneyInput{$project_id}' name='moneyInput{$project_id}' readonly value='{$project_need_money}' class='text-gray-500 mt-2'></input>
            </div>
        </div>
        <div class='w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden'>
            <div class='flex items-end justify-end h-56 w-full bg-cover' style='background-image: url(\"./img/food.jpeg\")'>
                
            </div>
            <div class='px-5 py-6 bg-white'>
                <h3 class='text-gray-700 uppercase font-semibold'>Food</h3>
                <input type='number' id='foodInput{$project_id}' name='foodInput{$project_id}' readonly value='{$project_need_food}' class='text-gray-500 mt-2'></input>
                </div>
        </div>
        <div class='w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden'>
            <div class='flex items-end justify-end h-56 w-full bg-cover' style='background-image: url(\"https://images.unsplash.com/photo-1544441893-675973e31985?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80\")'>
               
            </div>
            <div class='px-5 py-6 bg-white'>
                <h3 class='text-gray-700 uppercase font-semibold'>Clothing</h3>

                <input type='number' id='clothingInput{$project_id}' name='clothingInput{$project_id}' readonly value='{$project_need_clothing}' class='text-gray-500 mt-2'></input>
    
            </div>
        </div>
        <div class='w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden'>
            <div class='flex items-end justify-end h-56 w-full bg-cover' style='background-image: url(\"./img/furniture.webp\")'>
                
            </div>
            <div class='px-5 py-6 bg-white'>
                <h3 class='text-gray-700 uppercase font-semibold'>Furniture</h3>

                <input type='number' id='furnitureInput{$project_id}' name='furnitureInput{$project_id}' readonly value='{$project_need_furniture}' class='text-gray-500 mt-2'></input>
    
            </div>
        </div>
    </div>
</div>

                ";
                } ?>





            </div>
        </main>
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

        <?php
            echo "
            <script>
            $(document).ready(function() {
                $('[id^=changeButton]').click(function() {
                    var projectId = this.id.replace('changeButton', '');
                    var moneyInput = document.querySelector('#moneyInput' + projectId);
                    var furnitureInput = document.querySelector('#furnitureInput' + projectId);
                    var foodInput = document.querySelector('#foodInput' + projectId);
                    var clothingInput = document.querySelector('#clothingInput' + projectId);
                    var inputs = [moneyInput, furnitureInput, foodInput, clothingInput];
                    if ($(this).text() === 'Save Changes') {
                        inputs.forEach(input => input.setAttribute('readonly', 'readonly'));
                        $(this).text('Change Amounts');
                        $(this).css('background-color', ''); 

                        // Send AJAX request to update the database
                        $.ajax({
                            url: 'update_needamounts.php', // The PHP script that performs the update
                            type: 'POST',
                            data: {
                                projectId: projectId,
                                money: $('#moneyInput' + projectId).val(),
                                furniture: $('#furnitureInput' + projectId).val(),
                                food: $('#foodInput' + projectId).val(),
                                clothing: $('#clothingInput' + projectId).val()
                            },
                            success: function(data) {
                                // Handle success
                                console.log('Update successful');
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                // Handle error
                                console.log('Update failed: ' + textStatus);
                            }
                        });
                    } else {
                        inputs.forEach(input => input.removeAttribute('readonly'));
                        $(this).text('Save Changes');
                        $(this).css('background-color', '#c53030');
                    }
                });
            });
            </script>
            ";
        ?>
    
    
    <script>
        var openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function (event) {
                event.preventDefault()
                toggleModal()
            })
        }

        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)

        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', toggleModal)
        }

        document.onkeydown = function (evt) {
            evt = evt || window.event
            var isEscape = false
            if ("key" in evt) {
                isEscape = (evt.key === "Escape" || evt.key === "Esc")
            } else {
                isEscape = (evt.keyCode === 27)
            }
            if (isEscape && document.body.classList.contains('modal-active')) {
                toggleModal()
            }
        };


        function toggleModal() {
            const body = document.querySelector('body')
            const modal = document.querySelector('.modal')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
        }
    </script>
    
    <script>
        function sendMails() {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'send_mails.php', true);
            xhr.onload = function () {
                if (this.status == 200) {

                } else {
                    alert('An error occurred');
                }
            };
            xhr.send();
        }
    </script>
</body>

</html>
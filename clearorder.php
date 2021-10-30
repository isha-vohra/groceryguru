<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <script>
function greet() {
  document.getElementById("demo").innerHTML =  <div
                  class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                  style="
                    background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');
                  "
                >
                  <div
                    class="absolute inset-0 bg-blue-900 bg-opacity-75 transition duration-300 ease-in-out"
                  ></div>
                  <div
                    class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center"
                  >
                    <div>
                      <div
                        class="text-white text-lg flex space-x-2 items-center"
                      >
                        <div class="bg-white rounded-md p-2 flex items-center">
                          <i
                            class="fas fa-clipboard-check fa-sm text-blue-800"
                          ></i>
                        </div>
                        <p>Target</p>
                      </div>
                      <h5 class="text-white text-1xl mt-2 font-bold">Fish $10 Joseph</h5>
                      <h5 class="text-white text-1xl mt-2 font-bold">Apples $7 Isha</h5>
                      <h5 class="text-white text-1xl mt-2 font-bold">Oranges $9 Navya</h5>
                      <h5 class="text-white text-1xl mt-2 font-bold">Bagels $10 Surabhi</h5>
                      <h3 class="text-white text-lg mt-2">
                        Remaining amount for free delivery
                        <span class="font-semibold text-blue-200"
                          >$6</span
                        >
                        
                      </h3>
                      <div class="shadow w-full bg-gray-100 mt-2">
                      <div
                        class="bg-red-600 text-xs leading-none py-1 text-center text-white"
                        style="width: 55%"
                      ></div>
                    </div>
                    </div>
                  </div>
                </div>;
}
    </script>

<script>
var closebtns = document.getElementsByClassName("close");
var i;

for (i = 0; i < closebtns.length; i++) {
  closebtns[i].addEventListener("click", function() {
    this.parentElement.style.display = 'none';
  });
}
</script>

<style>


.close {
  cursor: pointer;
  position: absolute;
  top: 50%;
  right: 0%;
  padding: 12px 16px;
  transform: translate(0%, -50%);
}

.close:hover {background: #bbb;}
</style>

  </head>
  <body
    class="h-screen overflow-hidden flex items-center justify-center"
    style="background: #edf2f7"
  >
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Dashboard</title>
      <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
      />
      <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        rel="stylesheet"
      />
      <link
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        rel="stylesheet"
      />
      <script
        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
        defer
      ></script>
    </head>
    <body>
      <div class="flex h-screen w-full bg-gray-800" x-data="{openMenu:1}">
        <!--Start SideBar-->
        <aside
          class="w-20 relative z-20 flex-shrink-0 px-2 overflow-y-auto bg-indigo-600 sm:block"
        >
          <div class="mb-6">
            <!--Start logo -->
            <div class="flex justify-center">
              <div
                class="w-14 h-14 rounded-full bg-gray-300 border-2 border-white mt-2"
              >
                <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVxhAxJ4D7MOeTTj6kR9PBeZonW5HM7giKjTbEmR-HMBwf3G1VqGnlwpO1kWrdyIZu8_U&usqp=CAU"
                  class="rounded-full w-auto"
                />
              </div>
            </div>
            <!--End logo -->
            <!--Start NavItem -->
            <div>
              <ul class="mt-6 leading-10 px-4">
               
                <li
                  class="absolute bottom-0 mb-3 p-2 rounded-full flex items-center mx-auto bg-white cursor-pointer"
                >
                  <i class="fas fa-power-off fa-sm text-indigo-600"></i>
                </li>
              </ul>
              <div class="grid grid-cols-1 gap-4 grid-cols-1 mt-6">
            <p class="text-xs text-center font-bold text-white">Groups</p>
              <div
                class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer"
              >
                <div
                  class="rounded-full p-2 bg-indigo-200 flex flex-col items-center"
                >
                  <i class="fas fa-chart-pie fa-sm text-indigo-600"></i>
                </div>
                <p class="text-xs mt-1 text-center font-semibold">Pi Lovers!</p>
              </div>
              
              <div
                class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer"
              >
                <div
                  class="rounded-full p-2 bg-indigo-200 flex flex-col items-center"
                >
                  <i class="fas fa-shopping-basket fa-sm text-indigo-600"></i>
                </div>
                <p class="text-xs mt-1 text-center font-semibold">Grocery Gang</p>
              </div>
            <!--End NavItem -->
          </div>
        </aside>
        </aside>
        <!-- End Open Menu -->
        <!-- End Sidebar -->
        <div class="flex flex-col flex-1 w-full overflow-y-auto">
          <!--Start Topbar -->
          <!--End Topbar -->
          <main class="relative z-0 flex-1 pb-8 px-6 bg-white">
            <div class="grid pb-10 mt-4">
              <!-- Start Content-->

              
                  <div
                    class="absolute inset-0 bg-indigo-600 bg-opacity-75 transition duration-300 ease-in-out"
                  ></div>
                  
                </div>

                <li>
                <div
                  class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                  style="
                    background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');
                  "
                >
                  <div
                    class="absolute inset-0 bg-blue-900 bg-opacity-75 transition duration-300 ease-in-out"
                  ></div>
                  <div
                    class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center"
                  >
                    <div>
                      <div
                        class="text-white text-lg flex space-x-2 items-center"
                      >
                        <div class="bg-white rounded-md p-2 flex items-center" >
                          <i
                            class="fas fa-clipboard-check fa-sm text-blue-800"
                          ></i>
                        </div>
                        <p>Publix</p>
                      </div>
                      <div ><h5 class="text-white text-1xl mt-2 font-bold">Fish $20 Joseph</h5></div>
                  
                      <h5 class="text-white text-1xl mt-2 font-bold">Apples $7 Isha</h5>
                      <h5 class="text-white text-1xl mt-2 font-bold">Oranges $9 Navya</h5>
                
                      <h3 class="text-white text-lg mt-2">
                        Remaining amount for free delivery
                        <span class="font-semibold text-blue-200"
                          >$4</span
                        >
                        
                      </h3>

                      <div class="md:flex md:items-center">
                      
                      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button" >
                        Add to this order
                      </button>
                    
                      </div>
                      <div class="shadow w-full bg-gray-100 mt-2">
                      
                    </div>
                      
                    </div>
                  </div><span class="close">&times;</span>

                 

                </div>
                </li>



             
                <!-- Next card-->
                <li>
                <div
                  class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                  style="
                    background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');
                  "
                >
                  <div
                    class="absolute inset-0 bg-blue-900 bg-opacity-75 transition duration-300 ease-in-out"
                  ></div>
                  <div
                    class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center"
                  >
                    <div>
                      <div
                        class="text-white text-lg flex space-x-2 items-center"
                      >
                        <div class="bg-white rounded-md p-2 flex items-center">
                          <i
                            class="fas fa-clipboard-check fa-sm text-blue-800"
                          ></i>
                        </div>
                        <p>Target</p>
                      </div>
                      <h5 class="text-white text-1xl mt-2 font-bold">Bread $10 Amy</h5>
                      
                      <h3 class="text-white text-lg mt-2">
                        Remaining amount for free delivery
                        <span class="font-semibold text-blue-200"
                          >$30</span
                        >
                        
                      </h3>
                      
                      <div class="md:flex md:items-center">
                      
                      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button" >
                        Add to this order
                      </button>
                    
                      </div>
                    </div>
                  </div><span class="close">&times;</span>
                </div>


                </li>
                <!-- start-->

                <div id = "demo"></div>
            
                  
              </div>
              <!-- End Content-->
              
           

                <form class="w-full max-w-sm">

                    <div class="md:flex md:items-center mb-6">
                      <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                           Name
                        </label>
                      </div>
                      <div class="md:w-2/3">
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="full-name" type="text" value="">
                      </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                      <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                         Item 
                        </label>
                      </div>
                      <div class="md:w-2/3">
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="item" type="text" placeholder="">
                      </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                           Cost
                          </label>
                        </div>
                        <div class="md:w-2/3">
                          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="cost" type="text" placeholder="">
                        </div>
                      </div>
                    
                    <div class="md:flex md:items-center">
                      <div class="md:w-1/3"></div>
                      <div class="md:w-2/3">
                        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button" onclick="greet()">
                          Add Order
                        </button>
                      </div>
                    </div>
                  </form>
            </div>
        
          </main>
          
        </div>
       
      </div>
      
    </body>
  </body>
</html>

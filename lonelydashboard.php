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
    <style>
input {
    width: 820px;	
	border: none;
	border-radius: 20px;
	outline: none;
	padding: 10px;
	font-family: 'Open Sans', cursive;
	font-size: 1em;
	color: #676767;
    margin-bottom: 5px;
	font-weight: 600;
	transition: border 0.5s;
	-webkit-transition: border 0.5s;
	-moz-transition: border 0.5s;
	-o-transition: border 0.5s;
	border: solid 3px #54585A;	
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}

        
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
                  class="mb-3 p-2 rounded-md flex items-center justify-center bg-purple-400 cursor-pointer"
                >
                  <a class="fas fa-question-circle fa-sm text-white" href=about.php></a>
              </ul>
              <div class="grid grid-cols-1 gap-4 grid-cols-1 mt-6">
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
                  <div
                    class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center"
                  >
                    <div>
                      <div
                        class="text-white text-lg flex space-x-2 items-center"
                      >
                        <div class="bg-white rounded-md p-2 flex items-center">
                          <i
                            class="fas fa-toggle-off fa-sm text-indigo-300"
                          ></i>
                        </div>
                      </div>
                      <h3 class="text-white text-3xl mt-2 font-bold">Uh oh! You are not in a group!</h3>
                      <h3 class="text-white text-lg mt-2 text-indigo-100">
                        Please Join an Existing Group
                      </h3>
                      <section class="myform-area">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="form-area login-form">
                                        <div class="form-input">
                                            <form action="join_team.php" method="POST">
                                              <input type="text"  id="" name="join">
                                              <input type="submit" value = "Join Team">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </body>
                    </div>
                  </div>
                </div>
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
                      </div>
                      <h3 class="text-black text-lg mt-2">
                        <span class="font-semibold text-blue-200"
                          >Or create a new group!</span
                        >
                        <section class="myform-area">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="form-area login-form">
                                            <div class="form-input">
                                                <form action="create_team.php" method="POST">
                                                  <input type="text"  id="" name="name">
                                                  <input type="submit" value = "Create New Team">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

              <!-- End Content-->
            </div>
          </main>
        </div>
      </div>
    </body>

  </body>

</html>

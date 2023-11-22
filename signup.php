<html>
  <head>
    	<!---Title and title icon---->
	<title>Registration Form</title>
	<link rel="shortcut icon" href="./uploads/d.png" type="img/x-icon" />
	<!---Title and title icon end---->

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer ></script>
  </head>

  <body>
<!---Registration Form box screen center ---->
  <div  class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
    <!---Registration Form box screen ---->
  <div class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1" >
  <div class=" sm:p-12">

      	<!---Registration Form icon and text---->
        <div>
          <img src="./uploads/d.png" class="w-32 mx-auto" />
          <div class="mt-12 flex flex-col items-center">
          <h1 class="text-2xl xl:text-3xl font-extrabold"> Sign Up</h1>
        <!---Registration Form icon and text end---->

        <div class flex flex-col items-center>

          <div class="w-full flex-1 mt-8">
            
            <!---Registration Form text ----> 
            <div class="my-12 border-b text-center">
              <div class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">sign up with e-mail</div>
            </div>
            <!---Registration Form text end ---->

            <form method="POST" action="process.php">
            <div class="mx-auto max-w-xs">

              <input class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                type="text"placeholder="Username" name="username"/>

              <input class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                type="email"placeholder="Email" name="email"/>

              <input class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                type="password"placeholder="Password" name="password"/>
              
              <button class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none" type="submit" name="reg_user">
              <span class="ml-3"> Sign Up</span>
              </button>

              <p class="mt-6 text-xs text-gray-600 text-center">
                I agree to abide by clubs forum
                <a href="https://www.termsofservicegenerator.net/download.php?lang=en&token=xt2zTrJQLthpoX3w510TKAXVIhMG9nXS" class="border-b border-gray-500 border-dotted">
                  Terms of Service
                </a>and its
                <a href="https://www.privacypolicygenerator.info/download.php?lang=en&token=4qBt1zYoVFwXY96zpdKCtRIoE2Mzjplk" class="border-b border-gray-500 border-dotted">
                  Privacy Policy
                </a>
              </p>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    
  </body>
</html>

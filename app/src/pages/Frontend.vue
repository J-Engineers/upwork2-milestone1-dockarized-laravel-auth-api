<script setup>

</script>

<template>
    <div class="bg-white  p-4">
        <div class="mb-4">This app was created using VUEJS and TAILWIND CSS using vite.
        </div>
        <div class="mb-4">This is the latest version of VUEJS and TAILWIND CSS as at 13th March, 2025 when the app was built.
        </div>
        <div class="mb-4">For future use, you may run into dependency issues and may need to upgrade the packages and equally apply code changes if need be.
        </div>
        <div class="mb-4">Below are the steps to successfully install this APP.
        </div>
        <div class="mb-4">
            Open your command prompt or terminal and ensure you have internet connection
        </div>

        <div class="mb-4">
            Clone the project into any preferred directory in your machine. Make sure to replace < TOKEN > with the right token.
        </div>
        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" 
            class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ git clone https://token:<TOKEN>@gridirontest.com/bootcamp-cohort-5/justice-ugbogu.git" disabled readonly>
            
        </div>


        <div>
            From the root directory of the cloned repo, move the current director into the frontend folder. This is the folder where the VUEJS App reside
        </div>


        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ cd frontend" disabled readonly>
           
        </div>

        <div>
            Ensure you have node installed on your machine. Install the packages
        </div>

        <div>
            For automated installation, open the Makefile in the root directory and follow the recipe as defined.
        </div>
        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ make install" disabled readonly>

            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ make env" disabled readonly>

            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ make" disabled readonly>
           
        </div>

        <h1>OR</h1>

        <div>
            For manual installatio
        </div>
        
        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ npm install" disabled readonly>
           
        </div>


        <div>
            Create .env file and copy the content of .env.example into it. Remember to configure it to the hosted url of your API
        </div>
        
        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="cp .env.example .env" disabled readonly>
           
        </div>

        <div>
            Start the app
        </div>
        
        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ npm run dev" disabled readonly>
         
        </div>

        <div>
            Observe the IP address and the PORT NUMBER the app started and listening on. Copy and paste same on your web browser.  It might be something like this
        </div>

        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="http://localhost:3000" disabled readonly>
           
        </div>


        <div>
            Here is an example, open the link on your web browser
        </div>

        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="http://gridirontest.phenom.ng/" disabled readonly>
           
        </div>

        <div>
            Credentials: You may create yours, however you can use these below:
        </div>

        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="test@test.test" disabled readonly>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="123456" disabled readonly>
           
        </div>

        <div>
            If you get any error, please reach out to me for support. +234 813 818 4872 && ugboguj@yahoo.com
        </div>

        <div>
            This is a basic project, i am teachable and open to suggestions, welcome to my world with joy.
        </div>
    </div>

</template>

<style scoped>



</style>
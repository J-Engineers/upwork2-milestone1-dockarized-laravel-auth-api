<script setup>

</script>

<template>
    <div class="bg-white  p-4">
        <div class="mb-4">This app was created using PYTHON framework FLASK.
        </div>
        <div class="mb-4">This is the latest version of PYTHON framework FLASK as at 13th March, 2025 when the app was built.
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
            From the root directory of the cloned repo, move the current directory into the backend folder. This is the folder where the PYTHON FLASK App reside.
        </div>


        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ cd backend" disabled readonly>
           
        </div>
        <div>
            Ensure you have python installed on your machine.
            
        </div>
        <div>
            Create .env file and copy the content of .env.example into it. Do also remember to fill in the requirement in the file
        </div>
        
        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="cp .env.example .env" disabled readonly>
           
        </div>

        <div>
            For automated installation, open the Makefile in the root directory and follow the recipe as defined.
        </div>
        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ make envStart" disabled readonly>

            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ make seed" disabled readonly>

            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ make" disabled readonly>
           
        </div>

        OR

        <div>
            Install virtual environment
        </div>
        
        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ pip install virtualenv" disabled readonly>
           
        </div>

        <div>
            Create Virtual Environment
        </div>
        
        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ python -m venv venv" disabled readonly>
           
        </div>

        <div>
            Activate Virtual Environment
        </div>
        
        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ source venv/bin/activate" disabled readonly>
           
        </div>

        <div>
            Install packages
        </div>
        
        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ pip install -r requirements.txt" disabled readonly>
           
        </div>

        <div>
            Seed Database, ensure you have mysql installed on your machine and have created a database
        </div>
        
        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ from api import db" disabled readonly>

            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ db.create_all()" disabled readonly>
           
        </div>

        <div>
    
            Start the app [python or python3 as the case may be]
        </div>
        
        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ python -m app" disabled readonly>
         
        </div>


        <div>
            Side note: I am using PM2 package to persist the app running instance in the background.
        </div>

        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ npm install pm2 -g" disabled readonly>
        
        </div>

        <div>
            Spin up Server
        </div>

        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ pm2 start app.js" disabled readonly>
        
        </div>

        <div>
            Close Server Session [where 0 is the id of the app instance]
        </div>

        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ pm2 stop 0" disabled readonly>
        
        </div>

        <div>
            Restart Server Session [where 0 is the id of the app instance]
        </div>

        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ pm2 save pm2 restart 0" disabled readonly>
        
        </div>

        <div>
            Monitor Server Session
        </div>

        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="$ pm2 logs pm2 monit" disabled readonly>
        
        </div>

        <div>
            Observe the IP address and the PORT NUMBER the app started and listening on. Copy and paste same on your web browser.  It might be something like this
        </div>

        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="http://localhost:5000" disabled readonly>
           
        </div>

        <div>
            Here is an example, open the link on your api testing tool
        </div>

        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="http://66.29.143.70:5050/api/v1" disabled readonly>
           
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
            Endpoint Definitions:
        </div>

        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="GET /" disabled readonly>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="POST /register" disabled readonly>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="POST /verify" disabled readonly>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="POST /forgot" disabled readonly>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="POST /reset" disabled readonly>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="POST /login" disabled readonly>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="POST /logout" disabled readonly>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="POST /user" disabled readonly>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="POST /playlist" disabled readonly>
           
        </div>

        <div>
            Documentation:
        </div>

        <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
            <label for="npm-install" class="sr-only">Label</label>
            <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            value="https://red-meadow-5256.postman.co/workspace/red-meadow-5256's-Public-Worksp~97bf09af-7089-4f46-9056-9a9bc2b6c4d3/collection/10053626-0a03f51e-3c8e-484c-ba0c-76ea20c31878?action=share&creator=10053626" disabled readonly>
           
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
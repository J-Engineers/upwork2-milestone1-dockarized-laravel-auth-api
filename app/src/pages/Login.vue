<script setup>
 import GuestLayout from "../components/GuestLayout.vue";


    import {ref} from "vue";
    import axiosClient from "../axios.js";
    import router from "../router.js";

    const data = ref({
      email: '',
      password: ''
    })

    const errorMessage = ref('')
    const successMessage = ref('')

    function login() {
        axiosClient.post("/login", data.value)
        .then(response => {
          localStorage.setItem('token', response.data.token)
          router.push({name: 'Home'})
        })
        .catch(error => {
          console.log(error.response.data)
          errorMessage.value = error.response.data.message;
        })
    }

    function resetValidation() {
      errorMessage.value = ''
    }

    if (localStorage.getItem('success_msg')){
      successMessage.value = localStorage.getItem('success_msg')
      localStorage.removeItem('success_msg')
    }

    if (localStorage.getItem('error_msg')){
      errorMessage.value = localStorage.getItem('error_msg')
      localStorage.removeItem('error_msg')
    }
</script>
<template>
    <GuestLayout>
        
      <div class="">

    
      
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in to your account</h2>

        
  
      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

        <div v-if="errorMessage" class="mt-4 py-2 px-3 rounded text-white bg-red-400">
          {{errorMessage}}
        </div>

        <p v-if="successMessage" class="mt-4 py-2 px-3 rounded text-white bg-green-700">
              {{ successMessage  }}
        </p>
        <form @submit.prevent="login" class="space-y-6">
          <div>
            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
            <div class="mt-2">
              <input type="email" name="email" id="email" @focus="resetValidation()" autocomplete="email" v-model="data.email" required="" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
           
          </div>
  
          <div>
            <div class="flex items-center justify-between">
              <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
              <div class="text-sm">
                <RouterLink :to="{name: 'Forgot'}" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</RouterLink>
              </div>
             
            </div>
            <div class="mt-2">
              <input type="password" name="password" id="password" autocomplete="current-password" @focus="resetValidation()" v-model="data.password" required="" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
          </div>
  
          <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
          </div>
        </form>
  
        <p class="mt-10 text-center text-sm/6 text-gray-500">
          Have not created an account?
          {{ ' ' }}
          <RouterLink :to="{name: 'Signup'}"  class="font-semibold text-indigo-600 hover:text-indigo-500">Register</RouterLink>
        </p>
      </div>
      </div>
    </GuestLayout>
</template>

<style scoped>

</style>
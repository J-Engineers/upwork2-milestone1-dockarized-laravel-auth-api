<script setup>
    import GuestLayout from "../components/GuestLayout.vue"

    import {ref} from "vue";
    import axiosClient from "../axios.js";
    import router from "../router.js";

    const data = ref({
      token: ''
    })

    const errorMessages = ref('')
    const successMessage = ref('')

    function verify() {
        axiosClient.post("/verify", data.value)
        .then(response => {
          localStorage.setItem('success_msg', response.data.message)
          router.push({name: 'Login'})
        })
        .catch(error => {
          errorMessages.value = error.response.data.message;
        })
    }

    function resetValidation() {
      errorMessages.value = ''
    }

    if (localStorage.getItem('success_msg')){
      successMessage.value = localStorage.getItem('success_msg')
      localStorage.removeItem('success_msg')
    }

    

</script>

<template>
    <GuestLayout>
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Verify your account</h2>
        
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

        <div v-if="errorMessages" class="mt-4 py-2 px-3 rounded text-white bg-red-400">
          {{errorMessages}}
        </div>

        <p v-if="successMessage" class="mt-4 py-2 px-3 rounded text-white bg-green-700">
              {{ successMessage  }}
        </p>
        
        <form class="space-y-6" @submit.prevent="verify">
          <div>
            <label for="token" class="block text-sm/6 font-medium text-gray-900">OTP</label>
            <div class="mt-2 mb-2">
              <input type="text" name="token" id="token" required="" @focus="resetValidation()" v-model="data.token" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Verify Token </button>
          </div>
        </form>
  
        <p class="mt-10 text-center text-sm/6 text-gray-500">
          Create an account?
          {{ ' ' }}
          <RouterLink :to="{name: 'Signup'}"  class="font-semibold text-indigo-600 hover:text-indigo-500">Register</RouterLink>
        </p>
      </div>
    </GuestLayout>
</template>

<style scoped>

</style>
<script setup>
    import GuestLayout from "../components/GuestLayout.vue"

    import {ref} from "vue";
    import axiosClient from "../axios.js";
    import router from "../router.js";

    const data = ref({
      email: ''
    })

    const errorMessages = ref('')

    function forget() {
        axiosClient.post("/forgot", data.value)
        .then(response => {
          localStorage.setItem('success_msg', response.data.message)
          router.push({name: 'Reset'})
        })
        .catch(error => {
          console.log(error)
          errorMessages.value = error.response.data.message;
        })
    }

    function resetValidation() {
      errorMessages.value = ''
    }

</script>

<template>
    <GuestLayout>
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Forgot Password</h2>
        
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

          <div v-if="errorMessages" class="mt-4 py-2 px-3 rounded text-white bg-red-400">
          {{errorMessages}}
        </div>
        
        <form class="space-y-6" @submit.prevent="forget">
          <div>
            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email Address</label>
            <div class="mt-2 mb-2">
              <input type="email" name="email" id="email" required="" @focus="resetValidation()" v-model="data.email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Forgot Password</button>
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
import {defineStore} from "pinia";
import axiosClient from "../axios.js";
import router from "../router.js";

const useUserStore = defineStore('user', {
  state: () => ({
    user: null
  }),
  actions: {
    fetchUser() {
      return axiosClient.get('/user')
        .then(({data}) => {
          this.user = data
          localStorage.setItem('userName', data.name)
          localStorage.setItem('userEmail', data.email)
        })
        .catch(error => {
          router.push({name: 'Login'})
        })
    }
  }
})

export default useUserStore;
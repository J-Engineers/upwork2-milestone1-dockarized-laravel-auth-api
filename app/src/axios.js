import axios from "axios";
import router from "./router.js";

const axiosClient = axios.create({
  baseURL: import.meta.env.VITE_API_BASE_URL,
//   withCredentials: true,
//   withXSRFToken: true
})
   

axiosClient.interceptors.request.use((req) => {
    req.headers["Content-Type"] = "application/json"
    req.headers["Accept"] = "application/json"
    req.headers['Authorization'] = `Bearer ${localStorage.getItem('token')?localStorage.getItem('token'):null}`
    return req;
})

axiosClient.interceptors.response.use((response) => {
  return response;
}, error => {
  if (error.response && error.response.status === 401) {
    router.push({name: 'Login'});
  }
  throw error;
})

export default axiosClient
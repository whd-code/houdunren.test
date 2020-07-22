import Vue from 'vue'
import axios from 'axios'
import Loading from '../plugins/loading'
import store from '../store'
import { Message } from 'element-ui'
import httpStatus from '../plugins/httpStatus'

window.axios =axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
const _axios=axios.create({
    baseUrl: '/',
    timeout:8000
});

Object.defineProperties(Vue.prototype, {
    axios:{
        get(){
            return _axios
        }
    }
});

_axios.interceptors.request.use(
    function (config) {
    // Do something before request is sent
   Loading.open()
    return config;
  }, function (error) {
    // Do something with request error
    return Promise.reject(error);
  });

  _axios.interceptors.response.use(function (response) {
    Loading.close()
    if(response.data.message){
        Message({
            message:response.data.message,
            type:'success'
        })
    }
    return response.data;
  }, function (error) {
    Loading.close()
    let status =error.response.status
    let data=error.response.data
    switch(status) {
        case 422:
            store.commit('setErrors',data.errors)
            break;
            default:
            let message=data.message ?data.message:httpStatus(status)
            Message({
                message:message,
                type:'error'
            })
    }


    return Promise.reject(error);
  });

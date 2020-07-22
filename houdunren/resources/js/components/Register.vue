<template>
     <div class="card shadow">
            <div class="card-header">
                会员注册
            </div>





            <div class="card-body">


            <div class="form-group">

                <label for="name">昵称</label>
                    <input type="text" name="name" id="name"
                class="form-control " :class="{'is-invalid':errors.name}" placeholder="请输入昵称"
                v-model="name" @focus="errors.name=''" />
                    <small id="helpId" class=" form-text invalid-feedback" > {{errors.name}} </small>

            </div>

             <div class="form-group">

                <label for="account">账号</label>
                    <input type="text" name="account" id="account"
                class="form-control " :class="{'is-invalid':errors.account}" placeholder="请输入手机号或者邮箱"
                v-model="account" @focus="errors.account=''" />
                    <small id="helpId" class=" form-text invalid-feedback" > {{errors.account}} </small>

            </div>

            <div class="form-group captcha">
                    <label for="captcha">图形验证码</label>
                    <div class="input-group " :class="{'is-invalid':errors.captcha}">

                        <input type="text" class="form-control" name="captcha" id="captcha" placeholder="输入图形验证码"
                        :class="{'is-invalid':errors.captcha}" v-model="captcha" @focus="errors.captcha=''">
                        <div class="input-group-append"  @click="updateCaptaha">
                            <img class="border" :src="captchaImage"  alt="">
                        </div>

                    </div>
                    <small id="helpId" class="invalid-feedback ">{{errors.captcha}}</small>


            </div>

              <div class="form-group ">
                            <label for="">验证码</label>
                            <div class="input-group mb-3" :class="{'is-invalid':errors.code}">
                                <input type="text" class="form-control" v-model="code" placeholder="输入验证码"
                                aria-label="Recipient's username" aria-describedby="basic-addon2"  @focus="errors.captcha=''"
                                :class="{'is-invalid':errors.code}" />
                                <div class="input-group-append">
                                    <span class="input-group-text" @click="sendCode" id="basic-addon2">发送验证码</span>
                                </div>
                            </div>
                             <small id="helpId" class="invalid-feedback ">{{errors.code}}</small>

            </div>




             <el-divider><i class="el-icon-mobile-phone"></i></el-divider>

             <div class="form-group">

                <label >密码</label>
                <input type="password"  class="form-control " placeholder="请输入密码" v-model="password"
                :class="{'is-invalid':errors.password}" @focus="errors.password=''">
                   <small id="helpId" class="invalid-feedback ">{{errors.password}}</small>

            </div>
               <div class="form-group">

                <label >确认密码</label>
                <input type="password" class="form-control " placeholder="请输入密码" v-model="password_confirmation" >


            </div>

           </div>
            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                 <button class="btn btn-primary" @click="onSubmit">注册</button>
                 <div class="h6 mt-2">
                     <a href="/login">登录</a> |
                     <a href="">找回密码</a>
                 </div>
            </div>
        </div>
</template>

<script>
import {mapState} from 'vuex'
export default {
    data(){
        return {name:'',
        code:"1", account:"",
        captcha:"",password:"",password_confirmation:"",
        captchaImage:"/captcha"
        };
    },
    computed:{
        ...mapState(['errors'])
    },
    methods:{
        async sendCode() {
            let response = await this.axios.post('/register/code',this.$data)
            console.log(response)
                this.$message({
                    message:response.data.message,
                    type:'success'
                });
            },
            updateCaptaha(){
                this.captchaImage='/captcha?'+Math.random()
            },
        async onSubmit(){
            await this.axios.post('register',this.$data)
            location.href="/"
        }
    }
}
</script>

<style lang="scss" scoped>
.captcha {
    .input-group-append {
        cursor: pointer;
    }
}
</style>

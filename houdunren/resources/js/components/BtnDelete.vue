<template>
   <a href="#" @click.prevent="del"  class="btn btn-secondary">{{title}}</a>
</template>

<script>
export default {
    props: {
        title: {default:'删除'},
        action: {required:true , type : String}
        },
      methods:{
            del($event){
                this.$confirm('是否卸载?', '提示', {
                        type: 'warning'
                }).then(async () => {
                    await this.axios.delete(this.action)
                    location.reload(true)
                }).catch(() => {

                });
            }
    }

}
</script>

<style>

</style>

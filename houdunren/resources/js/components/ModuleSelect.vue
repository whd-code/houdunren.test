<template>
    <div>


       <el-table
            ref="multipleTable"
            :data="tableData"
            tooltip-effect="dark"
            style="width: 100%" border
            @selection-change="handleSelectionChange">
                <el-table-column
                type="selection"
                width="55">
                </el-table-column>

                    <el-table-column
                prop=""
                label="图片"
                >
                <template slot-scope="scope">
                    <img :src=" scope.row.preview" style="height:40px;">
                    </template>
                </el-table-column>
                <el-table-column
                prop="title"
                label="模块名称"
                >
                </el-table-column>
                <el-table-column
                    prop="name"
                    label="标识"
                    width="300"
                    >
                </el-table-column>
                <el-table-column
                    prop="versions"
                    label="版本号"
                    width="300"
                    show-overflow-tooltip>
                </el-table-column>
        </el-table>

        <input  type="hidden" v-for="module in multipleSelection" :key="module.id" name="modules[]" :value="module.id"/>
   </div>
</template>

<script>
export default {
 data() {
      return {
        tableData: window.modules,
        selected:window.selected,
        multipleSelection: []
      }
    },
mounted(){
      this.tableData.map(module=> {
          if(this.selected.includes(module.id)){
              this.$refs.multipleTable.toggleRowSelection(module);
          }
  })
 
},
    methods: {
    
      handleSelectionChange(val) {
        this.multipleSelection = val;
      }
    }

}
</script>

<style>

</style>

(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2decf12e"],{"456d":function(e,t,a){var n=a("4bf8"),r=a("0d58");a("5eda")("keys",function(){return function(e){return r(n(e))}})},"5eda":function(e,t,a){var n=a("5ca1"),r=a("8378"),i=a("79e5");e.exports=function(e,t){var a=(r.Object||{})[e]||Object[e],l={};l[e]=t(a),n(n.S+n.F*i(function(){a(1)}),"Object",l)}},"8abd":function(e,t,a){"use strict";var n=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{directives:[{name:"loading",rawName:"v-loading",value:e.loading,expression:"loading"}],staticClass:"page-container"},[e.loading?e._e():a("el-row",{staticStyle:{"margin-bottom":"2rem"}},[a("el-col",{attrs:{span:6}},[a("el-button",{attrs:{type:"primary"},on:{click:e.add}},[e._v("Add More")])],1)],1),e._v(" "),e.loading?e._e():a("el-collapse",{model:{value:e.activeNames,callback:function(t){e.activeNames=t},expression:"activeNames"}},e._l(e.items,function(t,n){return a("el-card",{key:n,staticClass:"box-card"},[e._t("default",null,{item:t}),e._v(" "),a("el-button-group",{staticStyle:{float:"right"}},[a("el-button",{attrs:{type:t.new?"success":"warning",icon:t.new?"el-icon-plus":"el-icon-edit",loading:t.updateLoading},on:{click:function(a){return e.update(t,n)}}},[e._v(e._s(t.new?"Add":"Update"))]),e._v(" "),a("el-button",{attrs:{type:"danger",icon:"el-icon-delete"},on:{click:function(a){return e.remove(t)}}},[e._v("Delete")])],1),e._v(" "),a("el-collapse-item",{attrs:{title:"#"+(n+1)+" "+e.name,name:n}},[e._t("inputs",[a("el-form",{ref:"item-"+n,refInFor:!0,attrs:{model:t,rules:e.rules}},[a("el-tabs",{attrs:{type:"card",stretch:!0}},[a("el-tab-pane",{attrs:{label:"ar"}},[a("el-form-item",{attrs:{label:e.name.toUpperCase()+" Name",prop:"title_ar"}},[a("el-input",{model:{value:t.title_ar,callback:function(a){e.$set(t,"title_ar",a)},expression:"item.title_ar"}})],1),e._v(" "),a("el-form-item",{attrs:{label:e.name.toUpperCase()+" Description",prop:"text_ar"}},[a("el-input",{attrs:{type:"textarea",placeholder:"Please input"},model:{value:t.text_ar,callback:function(a){e.$set(t,"text_ar",a)},expression:"item.text_ar"}})],1)],1),e._v(" "),a("el-tab-pane",{attrs:{label:"En"}},[a("el-form-item",{attrs:{label:e.name.toUpperCase()+" Name",prop:"title_en"}},[a("el-input",{model:{value:t.title_en,callback:function(a){e.$set(t,"title_en",a)},expression:"item.title_en"}})],1),e._v(" "),a("el-form-item",{attrs:{label:e.name.toUpperCase()+" Description",prop:"text_en"}},[a("el-input",{attrs:{type:"textarea",placeholder:"Please input"},model:{value:t.text_en,callback:function(a){e.$set(t,"text_en",a)},expression:"item.text_en"}})],1)],1)],1)],1)],{item:t,rules:e.rules,index:n}),e._v(" "),e._t("fileList",[a("el-upload",{attrs:{action:e.upload.action,headers:e.upload.headers,"on-remove":function(a){return e.removeFile(a.name,t)},"on-success":function(a){return e.fileUploaded(a.name,t)},multiple:!1,fileList:t.fileList,limit:1,"list-type":"picture-card"}},[a("i",{staticClass:"el-icon-plus"})]),e._v(" "),t.upload_valid?e._e():a("div",{staticClass:"el-form-item__error",staticStyle:{position:"relative"}},[e._v("Please select File")])])],2)],2)}),1)],1)},r=[],i=(a("ac6a"),a("456d"),a("db72")),l=(a("7f7f"),a("96cf"),a("3b8d")),o=a("b775");function s(e){return Object(o["a"])({url:"/media/remove",method:"delete",data:{file_name:e}})}var c=a("5f87"),u={props:{crudops:{type:Object},name:{type:String},emptyItem:{type:Object},formFromParent:{type:Boolean,default:!1}},data:function(){return{activeNames:[0],items:[],loading:!1,rules:{},upload:{action:"http://alamal.localhost/en/admin/media/upload",headers:{Authorization:"Bearer ".concat(Object(c["a"])())}}}},methods:{update:function(e,t){var a=this,n="item-".concat(t),r=this.formFromParent?this.$parent.$refs[n]:this.$refs[n][0];r.validate(function(){var t=Object(l["a"])(regeneratorRuntime.mark(function t(n){var r;return regeneratorRuntime.wrap(function(t){while(1)switch(t.prev=t.next){case 0:if(null!==e.file_path&&""!==e.file_path){t.next=3;break}return e.upload_valid=!1,t.abrupt("return");case 3:if(!n){t.next=11;break}return e.updateLoading=!0,r=a.crudops[e.new?"add":"update"],t.next=8,r(e);case 8:e["new"]=!1,e.updateLoading=!1,a.$message({type:"success",message:a.name+" "+(e.new?"created":"updated")});case 11:case"end":return t.stop()}},t)}));return function(e){return t.apply(this,arguments)}}())},add:function(){this.items.push(Object(i["a"])({},this.emptyItem,{new:!0,updateLoading:!1,uploadValid:!0}))},prepareRules:function(){var e={};Object.keys(this.emptyItem).map(function(t){e[t]={required:!0,message:"This Field Can not Be Empty",trigger:"blur"}}),this.rules=e},remove:function(e){var t=this;this.$confirm("Are You Sure Uou Want To Delete ?","danger",{confirmButtonText:"OK",cancelButtonText:"Cancel",type:"danger"}).then(Object(l["a"])(regeneratorRuntime.mark(function a(){return regeneratorRuntime.wrap(function(a){while(1)switch(a.prev=a.next){case 0:if(e.new){a.next=3;break}return a.next=3,t.crudops["remove"](e.id);case 3:t.items.splice(e,1),t.$message({type:"success",message:"Delete completed"});case 5:case"end":return a.stop()}},a)}))).catch(function(){t.$message({type:"info",message:"Delete canceled"})})},removeFile:function(e,t){s(e),t.file_path="",t.upload_valid=!1},fileUploaded:function(e,t){t.file_path=e,t.upload_valid=!0}},mounted:function(){var e=this;this.loading=!0;var t=new URL("http://alamal.localhost/en/admin/null").origin;this.crudops["get"]().then(function(a){e.items=a.map(function(e){return Object(i["a"])({},e,{new:!1,updateLoading:!1,uploadValid:!0,fileList:[{url:t+"/storage/"+e.file_path}]})}),e.loading=!1}),this.prepareRules()}},d=u,p=a("2877"),m=Object(p["a"])(d,n,r,!1,null,null,null);t["a"]=m.exports},a716:function(e,t,a){"use strict";var n=a("b775");function r(){return Object(n["a"])({url:"fields",method:"get"})}function i(e){return Object(n["a"])({url:"fields/".concat(e.id,"/update"),method:"patch",data:e})}function l(e){return Object(n["a"])({url:"fields/add",method:"post",data:e})}function o(e){return Object(n["a"])({url:"fields/".concat(e,"/delete"),method:"delete"})}t["a"]={get:r,update:i,add:l,remove:o}},b8ed:function(e,t,a){"use strict";a.r(t);var n=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("CrudList",{attrs:{name:"field",crudops:e.crudOps,emptyItem:e.emptyItem}})},r=[],i=a("8abd"),l=a("a716"),o={data:function(){return{emptyItem:{title_ar:"",text_ar:"",title_en:"",text_en:"",file_path:""},crudOps:l["a"]}},components:{CrudList:i["a"]}},s=o,c=a("2877"),u=Object(c["a"])(s,n,r,!1,null,null,null);t["default"]=u.exports}}]);
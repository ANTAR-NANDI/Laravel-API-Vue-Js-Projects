<template>
	
		<div class="row">
			<h2>Test CKEditor</h2>
			 <ckeditor v-model="editorData" :config="editorConfig"></ckeditor>
		</div>
             
       
	
	
</template>
<script>
import axios from 'axios'
	export default{
	
		data()
		{
			return {
				details:''
			}
		}
}
      

</script>


<style>
	
</style>
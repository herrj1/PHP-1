<template>
<div class="row">
	<div class="col-md-6 offset-md-3">
    <div class="row" style="background-color: #fff; padding: 1em; margin: 1em;">
        
		<div class="col-md-4">
            <img class="img-thumbnail" :src="image"/>
        </div>
		
        <div class="col-md-4">
            <h3><b>Name:</b> {{ name | properCase }}</h3>
			<!--<div class="form-group">
				<label for="name"><b>Name:</b></label>
				<input type="text" class="form-control" name="name">
			</div>-->
			<div class="form-group">
            <select class="form-control" @change="update">
                <option
                        v-for="col in [ 'pink', 'green', 'blue' ]"
                        :value="col"
                        :key="col"
                        :selected="col === color ? 'selected' : ''"
                >{{ col | properCase }}</option>

            </select>
			</div>
			<div class="form-group">
            <button class="btn btn-danger" @click="del">Delete</button>
			</div>
        </div>
    </div>
	</div>
	</div>


	
	
	<!--<div class="crud">
        <div class="col-1">
            <img :src="image"/>
        </div>
        <div class=" col-2">
            <h3>Name: {{ name | properCase }}</h3>
            <select @change="update">
                <option
                        v-for="col in [ 'red', 'green' ]"
                        :value="col"
                        :key="col"
                        :selected="col === color ? 'selected' : ''"
                >{{ col | properCase }}</option>

            </select>
            <button @click="del">Delete</button>
        </div>
    </div>-->
</template>
<script>
  export default {
    computed: {
      image() {
        return `/images/${this.color}.png`;
      }
    },
    methods: {
      update(val) {
        this.$emit('update', this.id, val.target.selectedOptions[0].value);
      },
      del() {
        this.$emit('delete', this.id);
      }
    },
    props: ['id', 'color', 'name'],
    filters: {
      properCase(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
      }
    }
  }
</script>
<style>
    /**
	.crud {
        display: flex;
        margin: 1em 1em 1em 0;
        border: 1px solid #d1d1d1;
        padding: 1em;
        max-width: 350px;
        background-color: white;
    }
    .crud img {
        height: 70px;
    }
    .col-2 {
        margin-left: 1.3em;
    }
    .col-2 > h3 {
        margin: 0.5em 0;
    }*/
</style>
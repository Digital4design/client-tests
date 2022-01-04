<template>
  <div class="widget">
    <div v-if="activeItems && activeItems.length > 0">
      <ul>
        <li v-for="item in activeItems" :key="item.id">
          {{item.name}}
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        loading: true,
        list: {
          'John': true,
          'Jane': true,
          'Bob': false
        },
      }
    },
    computed: {
      activeItems() {
        
		var newList  this.list;
    
		var active = [];
			for (const key in newList) {
			
				if(list[key] == true )
				{
				  var obj = {name : key , active : true}
				  active.push(obj);
				}
			}
        return active;
      }
    }
  }
</script>
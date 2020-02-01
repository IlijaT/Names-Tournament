<template>
  <div :class="!selected ? 'text-secondary' : ''"  class="h4 mr-2" @click="selctName" style="cursor:pointer">
    <div class="d-flex align-items-center">
      <div>{{ user.first_name }} {{ user.last_name }}</div>
      
      <div class="d-flex">
          <input style="visibility: hidden;" 
            type="radio" 
            :name="'participants['  + index  + ']'" 
            :value="user.id" 
            :checked="picked" 
          >
        <i v-if="!selected" class="far fa-heart text-secondary"></i>
        <i v-else class="fas fa-heart text-danger"></i>
      </div>

    </div>

  </div>

</template>

<script>
export default {
  props: ['user', 'index', 'old'],

  created() {
    if(this.user.id == this.old) {
      this.selected = true;
      this.picked = true;
    }
     
    events.$on('selectedname', this.onSelectedName);
  },

  data() {
    return {
      selected: false,
      picked: false,
    }
  },

  methods: {
    selctName() {
      this.selected = !this.selected;
      this.picked = !this.picked;

      if(this.selected) {
        events.$emit('selectedname', { "index" : this.index, "user": this.user} );
      }
    },
    onSelectedName(name) {
      if(this.index != name.index || this.user.id == name.user.id) {
        return false;
      }
      this.selected = false;
      this.picked = false;
    }
  },

}
</script>
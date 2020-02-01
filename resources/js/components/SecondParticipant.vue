<template>
  <div :class="!selected ? 'text-secondary' : ''"  class="h4" @click="selctName" style="cursor:pointer">
    <input style="visibility: hidden;" 
      type="radio" 
      :name="'participants['  + index  + ']'" 
      :value="user.id"
      :checked="picked" 
     >

     <i v-if="!selected" class="far fa-heart text-secondary mr-3"></i>
     <i v-else class="fas fa-heart text-danger mr-3"></i>

     {{ user.first_name }} {{ user.last_name }}
  </div>

</template>

<script>
export default {
  props: ['user', 'index'],

    created() {
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

      console.log('emitovan');
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

  }
}
</script>
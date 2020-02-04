<template>
  <div :class="!selected ? 'text-secondary' : ''"  class="h4 ml-4 p-2" @click="selctName" style="width: 100%;cursor:pointer">
    <div class="d-flex align-items-center">
      <div class="d-flex">
        <i v-if="!selected" class="far fa-heart text-danger"></i>
        <i v-else class="fas fa-heart text-danger"></i>
        <input style="visibility: hidden;" 
          type="radio" 
          :name="'participants['  + index  + ']'" 
          :value="user.id"
          :checked="picked" 
        >
      </div>

      <div class="ml-auto">
        {{ user.first_name }} {{ user.last_name }}
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

  }
}
</script>
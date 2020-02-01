<template>
  <div class="h4" @click="selctName" style="cursor:pointer">
    <input style="visibility: hidden;" 
      type="radio" 
      :name="'participants['  + index  + ']'" 
      :value="user.id" 
     >

     <i v-if="!selected" class="far fa-heart text-secondary mr-2"></i>
     <i v-else class="fas fa-heart text-danger mr-2"></i>

     {{ user.first_name }} {{ user.last_name }}
  </div>

</template>

<script>
export default {
  props: ['user', 'index'],

  data() {
    return {
      selected: false,
    }
  },

  methods: {
    selctName() {
      this.selected = !this.selected;
      console.log('selected');
    }
  },

}
</script>
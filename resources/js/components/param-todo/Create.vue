<template>
  <div>
    <b-form @submit="onSubmit">
      <b-form-group id="title" label="Your Title:" label-for="title">
        <b-form-input id="title" v-model="form.title" required placeholder="Enter Title"></b-form-input>
      </b-form-group>
      <b-form-group id="description" label="Your Description:" label-for="description">
        <b-form-textarea id="textarea" v-model="form.description" placeholder="Enter Action Parameter" rows="3" max-rows="6">
        </b-form-textarea>
      </b-form-group>
      <b-button type="submit" variant="primary" class="mt-3">Submit</b-button>
      <b-button type="reset" variant="danger" class="mt-3">Reset</b-button>
    </b-form>
  </div>
</template>

<script>
export default {
  data(){
    return {
      form: {
        title:'',
        description: ''
      }
    }
  },
  methods : {
    onSubmit(evt) {
            evt.preventDefault()
            axios.post('/api/1.0/parameters-todos', this.form)
            .then(({data}) => {
                location.href = 'parameters';
            })
                
        },
  }
};
</script>

<style lang="scss" scoped>
</style>
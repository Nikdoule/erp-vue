<template>
<div>
    <b-form @submit.prevent="onSubmit" @reset="onReset" v-if="show" class="p-5">
        <b-form-group id="name" label="Your Last Name:" label-for="name">
            <b-form-input id="name" v-model="form.projects" required placeholder="Enter name of project"></b-form-input>
        </b-form-group>
        <b-button type="submit" variant="primary">Submit</b-button>
        <b-button type="reset" variant="danger">Reset</b-button>
    </b-form>
</div>
</template>

<script>
export default {
    data() {
        return {
            csrf: "",
            form: {
                projects: '',
            },
            show: true,
        }
    },
    methods: {
        onSubmit(evt){
                evt.preventDefault()
                alert(JSON.stringify(this.form.projects))
                axios.post('/api/1.0/projects',{

                    name: this.form.projects
                })
        },
        onReset(evt) {
            evt.preventDefault()
            // Reset our form values
            this.form.projetcs = ''
            
            this.show = false
            this.$nextTick(() => {
                this.show = true
            })
        }
    },
}
</script>

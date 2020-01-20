<template>
<div>
    <b-form @submit="onSubmit" @reset="onReset" class="p-5">
        <div class="d-flex justify-content-around">
            <b-form-group id="actionName" label="Action Name:" label-for="actionName">
                <b-form-input class="input-medium" id="actionName" v-model="form.name" required placeholder="Enter name of action"></b-form-input>
            </b-form-group>
            <b-form-group id="startAt" label="Started At:" label-for="startAt">
                <b-form-input class="input-medium" id="startAt" v-model="form.started_at" required placeholder="2019-11-04 12:00"></b-form-input>
            </b-form-group>
            <b-form-group id="stoppedAt" label="Stopped At:" label-for="stoppedAt">
                <b-form-input class="input-medium" id="stoppedAt" v-model="form.stopped_at" required placeholder="2019-11-04 12:00"></b-form-input>
            </b-form-group>
        </div>
            <div class="mt-5 ml-5">
                <b-button type="submit" variant="primary">Submit</b-button>
                <b-button type="reset" variant="danger">Reset</b-button>
            </div>
    </b-form>
</div>
</template>
<script>
export default {
    props:['deal'],
    data() {
        return {
            form: {
                name: '',
                started_at: '',
                stopped_at: '',
            }
        }
    }, 
    methods:{
        onSubmit(evt){
            evt.preventDefault()
            axios.post('/api/1.0/deals/'+this.deal.id+'/actions',this.form)
            .then(({data}) => {
                location.href = '/deals';
            })
        },
        onReset(evt) {
            evt.preventDefault()
                // Reset our form values
            this.form.name = '',
            this.form.started_at = ''
            this.form.stopped_at = ''
        }
    },
        
}
</script>
<style lang="css" scoped>

</style>
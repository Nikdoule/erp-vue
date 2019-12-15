<template>
<div>
    <b-form @submit="onSubmit" @reset="onReset" class="p-5">
        <b-form-group id="actionName" label="Action Name:" label-for="actionName">
            <b-form-input id="actionName" v-model="form.name" required placeholder="Entrez le nom de l'action"></b-form-input>
        </b-form-group>
        <b-form-group id="startAt" label="Started At:" label-for="startAt">
            <b-form-input id="startAt" v-model="form.started_at" required placeholder="2019-11-04 12:00"></b-form-input>
        </b-form-group>
        <b-form-group id="stoppedAt" label="Stopped At:" label-for="stoppedAt">
            <b-form-input id="stoppedAt" v-model="form.stopped_at" required placeholder="2019-11-04 12:00"></b-form-input>
        </b-form-group>
        <b-button type="submit" variant="primary">Submit</b-button>
        <b-button type="reset" variant="danger">Reset</b-button>
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

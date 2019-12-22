<template>
<div>
    <b-form @submit="onSubmit" @reset="onReset" class="p-5">
        <b-form-group id="reference" label="Référence deal:" label-for="reference">
            <b-form-input name="_token" :value="csrf" id="reference" v-model="form.reference" required placeholder="Enter référence"></b-form-input>
        </b-form-group>
        <b-form-group id="company" label="Company name:" label-for="company">
            <b-form-input name="_token" :value="csrf" id="company" v-model="form.designation" required placeholder="Enter the name of company"></b-form-input>
        </b-form-group>
        <b-form-group id="denomination" label="Dénomination social:" label-for="denomination">
            <b-form-input name="_token" :value="csrf" id="denomination" v-model="form.denomination" required placeholder="Enter the Dénomination social"></b-form-input>
        </b-form-group>
        <b-form-group id="amount" label="Amount of deal:" label-for="amount">
            <b-form-input name="_token" :value="csrf" id="amount" v-model="form.amount" required placeholder="Enter the amount of deal"></b-form-input>
        </b-form-group>
        <b-form-group id="dropbox" label="URL Dropbox:" label-for="dropbox">
            <b-form-input name="_token" :value="csrf" id="dropbox" v-model="form.dropbox" required placeholder="Enter l'url dropbox"></b-form-input>
        </b-form-group>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select the Contact</label>
            <select class="form-control" id="exampleFormControlSelect1" v-model="form.contact_id">
                <option disabled value="">Choose</option>
                <option :key="item.id" v-for="item in contacts" v-bind:value="item.id">{{item.first_name}} {{item.last_name}}</option>
            </select>
            <h6 v-if="errors.contact_id" style="color: red;">The contact is required</h6>
        </div>
        

        <b-button @click="pushId" type="submit" variant="primary">Submit</b-button>
        <b-button type="reset" variant="danger">Reset</b-button>
    </b-form>
</div>
</template>
<script>
export default {
    props: ["contacts"],
    data() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]').content,
            item: [
                {
                    id:''
                }
            ],
            selected: null,
            form: {
                designation: '',
                reference: '',
                denomination: '',
                amount: '',
                dropbox: '',
                contact_id: ''

            },
            errors: {

            }
            
        }
    },
    methods: {
        pushId: function () {
            this.item.push(this.form.contact_id)
        },
        onSubmit(evt) {
            evt.preventDefault()
            axios.post('/api/1.0/deals',this.form)
            .then(({data}) => {
                location.href = '/deals';
            })
            .catch(error => {
                this.errors = error.response.data.errors
            })
            
        },
        onReset(evt) {
            evt.preventDefault()
            // Reset our form values
            this.form.designation = ''
            this.form.reference = ''
            this.form.contact = ''
            this.form.denomination = ''
            this.form.amount = ''
            this.form.dropbox = ''
        }
    }
}
</script>

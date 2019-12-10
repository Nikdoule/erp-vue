<template>
<div>
    <h2 class="text-center">Edit the deal référence {{deal.reference}} of sir {{contacts[deal.contact_id-1].last_name}}</h2>
    <b-form @submit="onSubmit" @reset="onReset" class="p-5">
        <b-form-group id="designation" label="Désignation social:" label-for="designation">
            <b-form-input id="designation" v-model="form.designation" required placeholder="Entrez la désignation"></b-form-input>
        </b-form-group>
        <b-form-group id="reference" label="Référence affaire:" label-for="reference">
            <b-form-input id="reference" v-model="form.reference" required placeholder="Entrez la référence"></b-form-input>
        </b-form-group>
        <b-form-group id="denomination" label="Dénomination social:" label-for="denomination">
            <b-form-input id="denomination" v-model="form.denomination" required placeholder="Entrez la Dénomination social"></b-form-input>
        </b-form-group>
        <b-form-group id="amount" label="Montant de l'affaire:" label-for="amount">
            <b-form-input id="amount" v-model="form.amount" required placeholder="Entrez le montant de l'affaire"></b-form-input>
        </b-form-group>
        <b-form-group id="dropbox" label="URL Dropbox:" label-for="dropbox">
            <b-form-input id="dropbox" v-model="form.dropbox" required placeholder="Entrez l'url dropbox"></b-form-input>
        </b-form-group>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select the Contact</label>
            <select class="form-control" id="exampleFormControlSelect1" v-model="form.contact_id">
                <option disabled value="">Choisissez</option>
                <option :key="item.id" v-for="item in contacts" v-bind:value="item.id">{{item.first_name}}</option>
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
    props: ["deal", 'contacts'],
    data() {
        return {
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
    mounted(){
            console.log(this.deal.id)
        },
    methods: {
        pushId: function () {
            this.item.push(this.form.contact_id)
        },
        onSubmit(evt){
                evt.preventDefault()
                    axios.put('/api/1.0/deals/'+this.deal.id, this.form)
                    .then(({data}) => {
                    location.href = '/deals';
                });
                
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
            this.form.contact_id = ''
        }
    }
}
</script>

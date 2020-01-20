<template>
<div>
    <h2 class="text-center">Edit the deal reference {{deal.reference}} of sir {{contacts[deal.contact_id-1].last_name}} {{contacts[deal.contact_id-1].first_name}}</h2>
    <b-form @submit="onSubmit" @reset="onReset" class="p-5">
         <div class="d-flex justify-content-around">
            <b-form-group id="reference" label="Référence deal:" label-for="reference">
                <b-form-input class="input-medium" name="_token" :value="csrf" id="reference" v-model="form.reference" placeholder="Enter référence"></b-form-input>
            </b-form-group>
            <b-form-group id="company" label="Company name:" label-for="company">
                <b-form-input class="input-medium" name="_token" :value="csrf" id="company" v-model="form.designation" placeholder="Enter the name of company"></b-form-input>
            </b-form-group>
            <b-form-group id="denomination" label="Dénomination social:" label-for="denomination">
                <b-form-input class="input-medium" name="_token" :value="csrf" id="denomination" v-model="form.denomination" placeholder="Enter the Dénomination social"></b-form-input>
            </b-form-group>
        </div>
        <div class="d-flex justify-content-around">
            <b-form-group id="amount" label="Amount of deal:" label-for="amount">
                <b-form-input class="input-medium" name="_token" :value="csrf" id="amount" v-model="form.amount" placeholder="Enter the amount of deal"></b-form-input>
            </b-form-group>
            <b-form-group id="dropbox" label="URL Dropbox:" label-for="dropbox">
                <b-form-input class="input-medium" name="_token" :value="csrf" id="dropbox" v-model="form.dropbox" placeholder="Enter l'url dropbox"></b-form-input>
            </b-form-group>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select the Contact</label>
                <select class="form-control" id="exampleFormControlSelect1" v-model="form.contact_id">
                    <option disabled value="">Choose</option>
                    <option :key="item.id" v-for="item in contacts" v-bind:value="item.id">{{item.first_name}} {{item.last_name}}</option>
                </select>
                <!-- <h6 v-if="errors.contact_id" style="color: red;">The contact is</h6> -->
            </div>
        </div>
        <div class="ml-5">
            <b-button @click="pushId" type="submit" variant="primary">Submit</b-button>
            <b-button type="reset" variant="danger">Reset</b-button>
        </div>
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
<style lang="css" scoped>
.form-deal{
    width: 240px;
}
</style>
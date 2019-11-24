<template>
<div>
    <b-form @submit="onSubmit" @reset="onReset" v-if="show" class="p-5">
        <b-form-group id="input-group-1" label="Date:" label-for="input-1">
            <b-form-input id="input-1" v-model="form.date" required placeholder="Entrez la date" type="date"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-2" label="Désignation social:" label-for="input-2">
            <b-form-input id="input-2" v-model="form.designation" required placeholder="Entrez la désignation"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-3" label="Référence affaire:" label-for="input-3">
            <b-form-input id="input-3" v-model="form.reference" required placeholder="Entrez la référence"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-4" label="Contact:" label-for="input-4">
            <b-form-input id="input-4" v-model="form.contact" required placeholder="Entrez le contact"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-5" label="Dénomination social:" label-for="input-5">
            <b-form-input id="input-5" v-model="form.denomination" required placeholder="Entrez la Dénomination social"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-5" label="Montant de l'affaire:" label-for="input-5">
            <b-form-input id="input-5" v-model="form.price" required placeholder="Entrez le montant de l'affaire"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-5" label="URL Dropbox:" label-for="input-5">
            <b-form-input id="input-5" v-model="form.dropbox" required placeholder="Entrez l'url dropbox"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-5" label="Provenance du contact:" label-for="input-5">
            <b-form-input id="input-5" v-model="form.origin" required placeholder="Entrez l'origine du contact"></b-form-input>
        </b-form-group>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select the contact</label>
            <select class="form-control" id="exampleFormControlSelect1" :key="item.id" v-for="item in contacts">
                <option v-bin:value="item.id">{{item.first_name}}</option>
            </select>
        </div>
        <h1></h1>

        <b-button type="submit" variant="primary">Submit</b-button>
        <b-button type="reset" variant="danger">Reset</b-button>
    </b-form>
</div>
</template>

<script>
export default {
    props: ["contacts"],
    data() {
        return {
            selected: null,
            form: {
                date: '',
                designation: '',
                reference: '',
                contact: '',
                denomination: '',
                price: '',
                dropbox: '',
                origin: ''

            },
            show: true,
        }
    },
    methods: {
        onGetter(evt) {
            axios.get("/api/1.0/contacts");
        },
        onReset(evt) {
            evt.preventDefault()
            // Reset our form values
            this.form.date = ''
            this.form.designation = ''
            this.form.reference = ''
            this.form.contact = ''
            this.form.denomination = ''
            this.form.price = ''
            this.form.dropbox = ''
            this.form.origin = ''
            // Trick to reset/clear native browser form validation state
            this.show = false
            this.$nextTick(() => {
                this.show = true
            })
        }
    }
}
</script>

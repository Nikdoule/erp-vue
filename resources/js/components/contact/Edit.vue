<template>
    <div>
        <h2 class="text-center">Edit {{ contact.last_name }} {{ contact.first_name }}</h2>
        <b-form @submit.prevent="onSubmit" @reset="onReset" class="p-5">
        <b-form-group id="lastName" label="Your Last Name:" label-for="lastName">
            <b-form-input id="lastName" v-model="form.last_name" required placeholder="Enter last name"></b-form-input>
        </b-form-group>
        <b-form-group id="firstName" label="Your First Name:" label-for="firstName">
            <b-form-input id="firstName" v-model="form.first_name" required placeholder="Enter first name"></b-form-input>
        </b-form-group>
        <b-form-group id="email" label="Email address:" label-for="email" description="We'll never share your email with anyone else.">
            <b-form-input id="email" v-model="form.email" type="email" required placeholder="Enter email"></b-form-input>
        </b-form-group>
        <b-form-group id="adress" label="Your Adress:" label-for="adress">
            <b-form-input id="adress" v-model="form.adress" required placeholder="Enter adress"></b-form-input>
        </b-form-group>
        <b-form-group id="zipCode" label="Your Zip Code:" label-for="zipCode">
            <b-form-input id="zipCode" v-model="form.zip_code" required placeholder="Enter zip code"></b-form-input>
        </b-form-group>
        <b-form-group id="city" label="Your City:" label-for="city">
            <b-form-input id="city" v-model="form.city" required placeholder="Enter city"></b-form-input>
        </b-form-group>
        <b-form-group id="timeZone" label="Your Time Zone:" label-for="timeZone">
            <b-form-input id="timeZone" v-model="form.time_zone" required placeholder="Enter time zone"></b-form-input>
        </b-form-group>
        <b-form-group id="naf" label="Your Naf:" label-for="naf">
            <b-form-input id="naf" v-model="form.naf" required placeholder="Enter naf"></b-form-input>
        </b-form-group>
        <b-form-group id="mark" label="Your Mark:" label-for="mark">
            <b-form-input id="mark" v-model="form.mark" required placeholder="Enter mark"></b-form-input>
        </b-form-group>
        <b-form-group id="company" label="Your Company:" label-for="company">
            <b-form-input id="company" v-model="form.company" required placeholder="Enter company"></b-form-input>
        </b-form-group>
        <b-form-group id="siret" label="Your Siret:" label-for="siret">
            <b-form-input id="siret" v-model="form.siret" required placeholder="Enter siret"></b-form-input>
        </b-form-group>
        <b-form-group id="kbis" label="Your Kbis:" label-for="kbis">
            <b-form-input id="kbis" v-model="form.kbis" required placeholder="Enter kbis"></b-form-input>
        </b-form-group>
        <b-form-group id="country" label="Your Country:" label-for="country">
            <b-form-input id="country" v-model="form.country" required placeholder="Enter country"></b-form-input>
        </b-form-group>
        <b-form-group id="language" label="Your Language:" label-for="language">
            <b-form-input id="language" v-model="form.language" required placeholder="Enter language"></b-form-input>
        </b-form-group>
        <b-form-group id="money" label="Your Money:" label-for="money">
            <b-form-input id="money" v-model="form.money" required placeholder="Enter money"></b-form-input>
        </b-form-group>
        <b-form-group id="title" label="Your Title:" label-for="title">
            <b-form-input id="title" v-model="form.title" required placeholder="Enter title"></b-form-input>
        </b-form-group>
        <b-form-group id="phone" label="Your Phone:" label-for="phone">
            <b-form-input id="phone" v-model="form.phone" required placeholder="Enter phone"></b-form-input>
        </b-form-group>
        <b-form-group id="status" label="Your Status:" label-for="status">
            <b-form-input id="status" v-model="form.status" required placeholder="Enter status"></b-form-input>
        </b-form-group>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Developper</label>
            <select class="form-control" id="exampleFormControlSelect1" v-model="form.developper_id">
                <option disabled value="">Choisissez</option>
                <option :key="item.id" v-for="item in developpers" v-bind:value="item.id">{{item.first_name}}</option>
            </select>
            <h6 v-if="errors.developper_id" style="color: red;">The developper is required</h6>
        </div>
        <b-button type="submit" variant="primary">Submit</b-button>
        <b-button type="reset" variant="danger">Reset</b-button>
    </b-form>
    </div>
</template>

<script>
    export default {
        props : ['contact', 'developpers'],
        data() {
            return {
                item: [
                    {
                        id:''
                    }
                ],
                form: {
                    email: '',
                    last_name: '',
                    first_name: '',
                    naf: '',
                    company: '',
                    siret: '',
                    kbis: '',
                    country: '',
                    adress: '',
                    phone: '',
                    zip_code: '',
                    city: '',
                    language: '',
                    title: '',
                    mark: '',
                    status: '',
                    money: '',
                    time_zone: '',
                    developper_id: ''
                },
                errors: {

                }
            }
        },mounted(){
            console.log(window.location.href.substr(-1))
        },
        methods: {
        pushId: function () {
            this.item.push(this.form.developper_id)
        },
        onSubmit(evt){
                evt.preventDefault()
                    axios.put('/api/1.0/contacts/'+window.location.href.substr(-1), this.form)
                    .then(({data}) => {
                        location.href = '/contacts';
                    })
                    .catch(error => {
                        this.errors = error.response.data.errors
                    })

                
        },
        onReset(evt) {
            evt.preventDefault()
            // Reset our form values
            this.form.last_name = '',
            this.form.first_name = '',
            this.form.adress = '',
            this.form.zip_code = '',
            this.form.city = '',
            this.form.time_zone = '',
            this.form.naf = '',
            this.form.mark = '',
            this.form.company = '',
            this.form.siret = '',
            this.form.kbis = '',
            this.form.country = '',
            this.form.language = '',
            this.form.money = '',
            this.form.title = '',
            this.form.phone = '',
            this.form.status = '',
            this.form.email = ''
            this.form.developper_id = ''
            
        }
    },
        
    }
</script>

<style lang="scss" scoped>

</style>
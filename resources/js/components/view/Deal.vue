<template>
<div class="table-radius table col-8 p-4 ml-auto mr-auto">
    <table class="table">
        <thead>
            <tr>
                <th scope="col" :key="item.id" v-for="item in fields">{{ item }}</th>
            </tr>
        </thead>
        <tbody>
            <tr :key="item.id" v-for="item in deals" class="" v-bind:class="[item.action == 'Terminer' ? 'coolGrenn' : item.action == 'Refuser' ?  'coolRed' : '']">
                <th scope="row">{{item.created_at}}</th>
                <td>{{item.reference}}</td>
                <td>{{item.designation}}</td>
                <td>{{item.contact_id}}</td>
                <td>{{item.denomination}}</td>
                <td>{{item.amount}}</td>
                <td>{{item.dropbox}}</td>
                <td></td>
                
            </tr>
        </tbody>
    </table>
</div>
</template>

<script>
export default {
    props: ["deals"],
    data() {
        return {
            fields: ['Date', 'Référence', 'Désignation', 'Contact', 'Dénomination_Social', 'Montant', 'ID_dropbox', 'Provenance'],
            items: [
                "designation" ,
                "date" ,
                "reference" ,
                "contact" ,
                "denomination_social" ,
                "montant" ,
                "id_dropbox" ,
                "provenance_contact" ,
                
            ]
        }
    },
    methods: {
    onSubmit(evt) {
      axios.get("/api/1.0/deals");
    }
  }
}
</script>

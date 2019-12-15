<template>
<div class="table-radius table col-8 p-4 ml-auto mr-auto">
    <table class="table">
    <thead>
        <tr>
            <th scope="col" :key="item.id" v-for="item in fields">{{ item }}</th>
        </tr>
    </thead>
    <tbody>
        <tr v-bind:class="[actions[actions.length-1].name == 'Terminer' ? 'coolGrenn' : actions[actions.length-1].name == 'Refuser' ?  'coolRed' : '']">
            <td>{{actions[actions.length-1].started_at}}</td>
            <td>{{deal.reference}}</td>
            <td>{{deal.designation}}</td>
            <td>{{deal.denomination}}</td>
            <td>{{deal.amount}}</td>
            <td>{{deal.dropbox}}</td>
            <td>{{actions[actions.length-1].name}}</td>
        </tr>
    </tbody>
</table>
</div>
</template>
<script>
export default {
    props: ["deal", "actions"],
    data() {
        return {
            fields: ['Action Date', 'Référence', 'Désignation', 'Dénomination Social', 'Montant', 'ID_dropbox', 'Action'],
            
        }
    },
}
</script>

<template>
<div class="table-radius table col-8 p-4 ml-auto mr-auto">
    <table class="table">
        <thead>
            <tr>
                <th scope="row">#</th>
                <th scope="col" :key="item.id" v-for="item in fields">{{ item }}</th>
            </tr>
        </thead>
        <tbody>
            <tr :key="item.id" v-for="item in deals">
                <th scope="row">
                    <a v-bind:href="'deal/'+item.id" >
                        <i class="fas fa-edit"></i>
                    </a>
                    <a v-bind:href="'deal/'+item.id+'/create-action'" >
                        <i class="fas fa-hammer"></i>
                    </a>
                    <a v-bind:href="'deal/'+item.id+'/view-action'" >
                        <i class="far fa-eye"></i>
                    </a>
                </th>
                <td>{{item.created_at}}</td>
                <td>{{item.reference}}</td>
                <td>{{item.designation}}</td>
                <td>{{contacts[item.contact_id-1].first_name}}</td>
                <td>{{item.denomination}}</td>
                <td>{{item.amount}}</td>
                <td>{{item.dropbox}}</td>
                <td>{{contacts[item.contact_id-1].origin}}</td>
            </tr>
        </tbody>
    </table>
</div>
</template>
<script>
export default {
    props: ["deals", "contacts"],
    data() {
        return {
            fields: ['Date', 'Référence', 'Désignation', 'Contact', 'Dénomination_Social', 'Montant', 'ID_dropbox', 'origin'],
            
        }
    },
}
</script>

<template>
<div class="table-radius table col-8 p-4 ml-auto mr-auto">
    <table>
        <thead>
            <tr>
                <th scope="col" :key="item.id" v-for="item in fields">{{ item }}</th>
            </tr>
        </thead>
        <tbody>
            <tr :key="item.id" v-for="item in items" class="" v-bind:class="[item.action == 'Terminer' ? 'coolGrenn' : item.action == 'Refuser' ?  'coolRed' : '']">
                <th scope="row">{{item.date}}</th>
                <td>{{item.reference}}</td>
                <td>{{item.designation}}</td>
                <td>{{item.contact}}</td>
                <td>{{item.denomination_social}}</td>
                <td>{{item.montant}} €</td>
                <td>{{item.id_dropbox}}</td>
                <td>{{item.provenance_contact}}</td>
                <td>{{item.action}}</td>
            </tr>
        </tbody>
    </table>
</div>
</template>

<script>
export default {
    data() {
        return {
            modes: ['multi', 'single', 'range'],
            fields: ['Date', 'Référence', 'Désignation', 'Contact', 'Dénomination_Social', 'Montant', 'ID_dropbox', 'Provenance', 'Action'],
            items: [{
                    designation: 'e.commerce',
                    date: '10/01/2019',
                    reference: '112019001',
                    contact: 'Blocking / Générale de construction / José  GARCIA',
                    denomination_social: 'Blocking',
                    montant: 4580,
                    id_dropbox: '41250',
                    provenance_contact: 'Lens',
                    action: 'Terminer'
                },
                {
                    designation: 'e.commerce',
                    date: '11/01/2019',
                    reference: '112019001',
                    contact: 'Blocking / Générale de construction / José  GARCIA',
                    denomination_social: 'Blocking',
                    montant: 5000,
                    id_dropbox: '41250',
                    provenance_contact: 'Paris',
                    action: 'Premier Contact'
                },
                {
                    designation: 'e.commerce',
                    date: '12/01/2019',
                    reference: '112019001',
                    contact: 'Blocking / Générale de construction / José  GARCIA',
                    denomination_social: 'Blocking',
                    montant: 2000,
                    id_dropbox: '41250',
                    provenance_contact: 'Lievin',
                    action: 'Premier Contact'
                },
                {
                    designation: 'e.commerce',
                    date: '13/01/2019',
                    reference: '112019001',
                    contact: 'Blocking / Générale de construction / José  GARCIA',
                    denomination_social: 'Blocking',
                    montant: 4580,
                    id_dropbox: '41250',
                    provenance_contact: 'Lens',
                    action: 'Terminer'
                },
                {
                    designation: 'e.commerce',
                    date: '13/01/2019',
                    reference: '112019001',
                    contact: 'Blocking / Générale de construction / José  GARCIA',
                    denomination_social: 'Blocking',
                    montant: 4580,
                    id_dropbox: '41250',
                    provenance_contact: 'Lens',
                    action: 'Refuser'
                }
            ]
        }
    },
}
</script>

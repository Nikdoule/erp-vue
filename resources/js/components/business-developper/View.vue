<template>
<div>
<table class="table">
    <thead>
        <tr>
            <th scope="row">#</th>
            <th scope="col" :key="item.id" v-for="item in fields">{{ item }}</th>
        </tr>
    </thead>
    <tbody>
        <tr :key="item.id" v-for="item in developpers">
            <th scope="row"><a v-bind:href="'business-developper/'+item.id" ><i class="fas fa-edit"></i></a></th>
            <td>{{item.company}} / {{item.last_name}} / {{item.first_name}}</td>
            <td>{{item.company}}</td>
            <td>{{item.adress}}</td>
            <td>{{item.zip_code}}</td>
            <td>{{item.city}}</td>
            <td>{{item.naf}}</td>
            <td>{{item.siret}}</td>
            <td>{{item.kbis}}</td>
            <td>{{item.country}}</td>
            <td>{{item.language}}</td>
            <td>{{item.money}}</td>
            <td>{{item.time_zone}}</td>
            <td>{{item.title}}</td>
            <td>{{item.last_name}}</td>
            <td>{{item.first_name}}</td>
            <td>{{item.status}}</td>
        </tr>
    </tbody>
</table>
    <!-- <div class="d-flex col-12 justify-content-around">
        <b-card img-src="https://picsum.photos/600/300/?image=25" img-alt="Image"
            img-top tag="article" style="max-width: 20rem;" class="mb-2" :key="item.id" v-for="item in developpers">
            <b-card-text> 
                First name : {{item.first_name}}
            </b-card-text>
            <b-card-text> 
                Last name : {{item.last_name}}
            </b-card-text>
            <b-card-text> 
                Compagny : {{item.company}}
            </b-card-text>
            <b-card-text> 
                Adress : {{item.adress}}
            </b-card-text>
            <b-card-text> 
                Adress : {{item.adress}}
            </b-card-text>
            <b-button href="#" variant="primary">Go somewhere</b-button>
        </b-card>
    </div> -->
</div>
</template>

<script>
export default {
    props: ['developpers'],
    data() {
        return {
            fields: [
                'Company Nom Prénom',
                'Company',
                'Adress',
                'Zip_Code',
                'City',
                'Naf',
                'Siret',
                'KBIS',
                'Country',
                'Language',
                'Money',
                'Time Zone',
                'Title',
                'Last name',
                'First name',
                'Status'
            ],
        }
    },
}
</script>

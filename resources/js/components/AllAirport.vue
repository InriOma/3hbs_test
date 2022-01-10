<template>
    <div>
        <h2 class="text-center">Airport</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>City</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="airport in airports" :key="airport.id">
                    <td>{{airport.id}}</td>
                    <td>{{airport.name}}</td>
                    <td>{{airport.code}}</td>
                    <td>{{airport.city}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link: to="{name: 'edit', params: {id: airport.id}}" class="btn btn-success">Editar</router-link>
                            <button class="btn btn-danger" @click="deleteAirport(airport.id)">Borrar</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default{
       data(){
          return{airports:[]}
        },
       created(){
            this.axios.get('http://3hbs.test/api/airports/').then(response => {
                this.airports = response.data;
             });
        },
       methods:{
           deleteAirport(id){
                this.axios.delete('http://3hbs.test/api/airports/${id}').then(response =>{
                    let i=this.airports.map(data=>data.id).indexOf(id);
                    this.airports.splice(i, 1)
                });
            }
        }
    }
</script>
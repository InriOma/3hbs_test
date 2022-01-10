<template>
    <div>
        <h2 class="text-center">Aerolineas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="airline in airlines" :key="airline.id">
                    <td>{{airline.id}}</td>
                    <td>{{airline.name}}</td>
                    <td>{{airline.code}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link: to="{name: 'edit', params: {id: airline.id}}" class="btn btn-success">Editar</router-link>
                            <button class="btn btn-danger" @click="deleteAirline(airline.id)">Borrar</button>
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
          return{airlines:[]}
        },
       created(){
            this.axios.get('http://3hbs.test/api/airlines/').then(response => {
                this.airlines = response.data;
             });
        },
       methods:{
           deleteAirline(id){
                this.axios.delete('http://3hbs.test/api/airlines/${id}').then(response =>{
                    let i=this.airlines.map(data=>data.id).indexOf(id);
                    this.airlines.splice(i, 1)
                });
            }
        }
    }
</script>
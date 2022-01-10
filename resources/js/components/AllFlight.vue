<template>
    <div>
        <h2 class="text-center">Flights</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Type</th>
                    <th>Departure ID</th>
                    <th>Destination ID</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Airline ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="flight in flights" :key="flight.id">
                    <td>{{flight.id}}</td>
                    <td>{{flight.name}}</td>
                    <td>{{flight.code}}</td>
                    <td>{{flight.type}}</td>
                    <td>{{flight.departure_id}}</td>
                    <td>{{flight.destination_id}}</td>
                    <td>{{flight.departure_time}}</td>
                    <td>{{flight.arrival_time}}</td>
                    <td>{{flight.airline_id}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link: to="{name: 'edit', params: {id: flight.id}}" class="btn btn-success">Editar</router-link>
                            <button class="btn btn-danger" @click="deleteFlight(flight.id)">Borrar</button>
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
          return{flights:[]}
        },
       created(){
            this.axios.get('http://3hbs.test/api/flights/').then(response => {
                this.flights = response.data;
             });
        },
       methods:{
           deleteFlight(id){
                this.axios.delete('http://3hbs.test/api/flights/${id}').then(response =>{
                    let i=this.flights.map(data=>data.id).indexOf(id);
                    this.flights.splice(i, 1)
                });
            }
        }
    }
</script>
<template>
    <div>
        <h3 class="text-center">Editar Airport</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateAirport">
                    <div class="form-group">
                        <label>Name</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="airport.name"
                        />
                    </div>
                    <div class="form-group">
                        <label>Code</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="airport.code"
                        />
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return { airport: {} };
    },
    created() {
        this.axios
            .get(`http://3hbs.test/api/airports/${this.$route.params.id}`)
            .then((res) => {
                this.airport = res.data;
            });
    },
    methods: {
        updateAirport() {
            this.axios
                .patch(
                    `http://3hbs.test/api/airlines/${this.$route.params.id}`,
                    this.airport
                )
                .then((res) => {
                    this.$router.push({ name: "home" });
                });
        },
    },
};
</script>

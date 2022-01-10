<template>
    <div>
        <h3 class="text-center">Editar Aerolineas</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateAirline">
                    <div class="form-group">
                        <label>Name</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="airline.name"
                        />
                    </div>
                    <div class="form-group">
                        <label>Code</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="airline.code"
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
        return { airline: {} };
    },
    created() {
        this.axios
            .get(`http://3hbs.test/api/airlines/${this.$route.params.id}`)
            .then((res) => {
                this.airline = res.data;
            });
    },
    methods: {
        updateAirline() {
            this.axios
                .patch(
                    `http://3hbs.test/api/airlines/${this.$route.params.id}`,
                    this.airline
                )
                .then((res) => {
                    this.$router.push({ name: "home" });
                });
        },
    },
};
</script>

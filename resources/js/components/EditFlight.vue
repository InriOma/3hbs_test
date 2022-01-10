<template>
    <div>
        <h3 class="text-center">Editar Flight</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateFlight">
                    <div class="form-group">
                        <label>Name</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="flight.name"
                        />
                    </div>
                    <div class="form-group">
                        <label>Code</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="flight.code"
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
        return { flight: {} };
    },
    created() {
        this.axios
            .get(`http://3hbs.test/api/flights/${this.$route.params.id}`)
            .then((res) => {
                this.flight = res.data;
            });
    },
    methods: {
        updateFlight() {
            this.axios
                .patch(
                    `http://3hbs.test/api/flights/${this.$route.params.id}`,
                    this.flight
                )
                .then((res) => {
                    this.$router.push({ name: "home" });
                });
        },
    },
};
</script>

<template>
    <div>
        <h3 class="text-center">Crear Airport</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addAirport">
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
                    <button type="submit" class="btn btn-primary">Crear</button>
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
    methods: {
        addAirline() {
            this.axios
                .post("http://3hbs.test/api/airports", this.airport)
                .then((response) => this.$router.push({ name: "home" }))
                .catch((err) => console.log(err))
                .finally(() => (this.loadin = false));
        },
    },
};
</script>

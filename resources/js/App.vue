<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="airlines/" class="nav-item nav-link">Lista de Aereolineas</router-link><router-link to="airlines/create" class="nav-item nav-link">Crear Aereolinea</router-link>
                    <router-link to="airports/" class="nav-item nav-link">Lista de Aereopuertos</router-link><router-link to="airports/create" class="nav-item nav-link">Crear Aereopuerto</router-link>
                    <router-link to="flights/" class="nav-item nav-link">Lista de Flights</router-link><router-link to="flights/create" class="nav-item nav-link">Crear Flights</router-link>
                </div>
            </div>
        </nav>
        <router-view> </router-view>
    </div>
</template>
<script>
export default {};
</script>

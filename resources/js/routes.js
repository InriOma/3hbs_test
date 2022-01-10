import AllAirline from "./components/AllAirline.vue";
import CreateAirline from "./components/CreateAirline.vue";
import EditAirline from "./components/EditAirline.vue";

import AllAirport from "./components/AllAirport.vue";
import CreateAirport from "./components/CreateAirport.vue";
import EditAirport from "./components/EditAirport.vue";

import AllFlight from "./components/AllFlight.vue";
import CreateFlight from "./components/CreateFlight.vue";
import EditFlight from "./components/EditFlight.vue";

export const routes = [
    {
        name: "home-airlines",
        path: "airlines/",
        component: AllAirline,
    },
    {
        name: "create-airlaines",
        path: "airlines/create",
        component: CreateAirline,
    },
    {
        name: "edit-airlines",
        path: "airlines/edit/:id",
        component: EditAirline,
    },

    {
        name: "home-airports",
        path: "airports/",
        component: AllAirport,
    },
    {
        name: "create-airports",
        path: "airports/create",
        component: CreateAirport,
    },
    {
        name: "edit-airports",
        path: "airports/edit/:id",
        component: EditAirport,
    },

    {
        name: "home-flights",
        path: "flights/",
        component: AllFlight,
    },
    {
        name: "create-flights",
        path: "flights/create",
        component: CreateFlight,
    },
    {
        name: "edit-flights",
        path: "flights/edit/:id",
        component: EditFlight,
    },
];

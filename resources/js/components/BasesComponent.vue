<template>
    <div id="main">
        <Bilboard />
        <Menu />
        <Homegrid />
    </div>
</template>

<script>
import Header from "./partials/HeaderComponent.vue";
import Bilboard from "./partials/BilboardComponent.vue";
import Content from "./partials/ContentComponent.vue";
import Menu from "./MenuComponent.vue";
import Homegrid from "./HomegridsComponent.vue";
import Footer from "./partials/FooterComponent.vue";

export default {
    data() {
        return {
            secrets: []
        };
    },
    mounted() {
        console.log("Component mounted.");
    },
    components: {
        Content,
        Bilboard,
        Menu,
        Homegrid
    }
};
</script>

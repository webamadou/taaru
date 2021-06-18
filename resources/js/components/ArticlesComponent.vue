<template>
    <div class="container">
        <!-- login form -->
        <!-- list of articles -->
        <Bilboard />
        <h1>This is the component from article</h1>
    </div>
</template>

<script>
import Bilboard from "./partials/BilboardComponent.vue";

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
        Bilboard
    }
};
</script>

<template>
    <div class="grid-wrapper">
        <div class="grid-content">
            <template v-for="care in cares">
                <div class="box box-image" v-bind:key="care.id">
                    <div class="care-image">
                        <img :src="care.images" alt="`${care[0].name}`" />
                    </div>
                    <div class="care-details">
                        <h3>{{ care.institute.name }}</h3>
                        <p class="address">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="box box-text arrow-box" v-bind:key="care.id">
                    <div class="care-name">
                        <h3>{{ cares[0].name }}</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Cupiditate, consequuntur?
                        </p>
                    </div>
                </div>
            </template>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            cares: []
        };
    },
    methods: {},
    async created() {
        const fetchCares = await axios.get(
            "http://localhost:8000/api/higlighted-cares"
        );
        this.cares = await fetchCares.data;
    }
};
</script>

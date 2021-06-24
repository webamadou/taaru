<template>
    <div class="grid-wrapper">
        <div class="grid-content">
            <template v-for="care in cares_from.data">
                <div class="box box-image" v-bind:key="care.id">
                    <div class="care-image">
                        <img :src="care.images" alt="`${care[0].name}`" />
                    </div>
                    <div class="care-details">
                        <h3>{{ care.institute.name }}</h3>
                        <p class="address">{{getWordStr(care.institute.presentation, 11)}}</p>
                    </div>
                </div>
                <div class="box box-text arrow-box" v-bind:key="care.id">
                    <div class="care-name">
                        <h3>{{ cares.name }}</h3>
                        <p>{{getWordStr(care.description, 11)}}</p>
                    </div>
                </div>
            </template>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import gql from 'graphql-tag';

export default {
    data() {
        return {
            cares: [],
            cares_from: [],
            menus: []
        };
    },
    methods: {
        getWordStr(str, length) {
            let text = str.split(/\s+/).slice(0,length).join(" ");
            return str.length > length ? `${text}...` : text;
        }
    },
    /* async created() {
        const fetchCares = await axios.get(
            "http://localhost:8000/api/higlighted-cares"
        );
        this.cares = await fetchCares.data;
    }, */
    apollo: {
        cares_from: gql `query{
                cares_from(first:4, care_type_id: 3){
                    data{
                        name
                        slug
                        description
                        price
                        images
                        institute {
                            name
                            slug
                            images
                            presentation
                        }
                    }
                }
            }
        `,
        menus: gql`query {
            menus{
                name
                slug
            }
        }`,
    }
};
</script>

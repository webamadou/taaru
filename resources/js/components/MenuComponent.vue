<template>
    <div class="hidden-xs col-sm-12 mainmenu">
        <ul id="menu1" class="nav navbar">
            <li v-bind:key="menu.id" v-for="menu in menus">
                <a :href="`/${menu.slug}`">{{ menu.name }}</a>
            </li>
        </ul>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            menus: []
        };
    },
    async created() {
        const fetchMenus = await axios.get(
            "http://localhost:8000/api/caretypes/"
        );
        console.log(fetchMenus);
        this.menus = fetchMenus.data;
    }
};
</script>

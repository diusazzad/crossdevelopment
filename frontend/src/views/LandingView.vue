<template>
    <landing-page></landing-page>/>
    <router-link to="/signup">Signup</router-link>
    <router-link to="/login">Login</router-link>

</template>

<script>
import LandingPage from "../components/LandingPage.vue";


export default {
    setup() {
        return {};
    },
    components: {  LandingPage },
};
</script>

<style lang="scss" scoped></style>

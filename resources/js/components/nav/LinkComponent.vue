<template>
    <li>
        <router-link :class="{ active: getActive}" :to="link.href">{{ link.text }}
            <span></span>
        </router-link>
    </li>
</template>

<script>

export default {
    props: ['link'],
    data() {
        return {
            isActive: false,
        }
    },
    computed: {
        getActive() {
            return this.isActive;
        }
    }
}

</script>

<style scoped>


    ul li {
        display: inline-block;
        padding: 12px 16px;
        color: hsla(211, 3%, 52%, 1);
        font-weight: 500;
        font-size: 14px;
        overflow: hidden;
        letter-spacing: .3px;
        cursor: default;
        text-decoration: none;
        position: relative;

    }

    ul li a {
        text-decoration: none;
        color: #6e7881;
        cursor: default;
    }

    ul li a.active span {
        height: 4px;
        width: 100%;
        display: block;
        background-color: #9ccee1;
        border-radius: 4px;
        position: relative;
        bottom: -7px;
        left: -100px;
        animation: active .25s ease-in-out forwards;
        margin-top: 3px;
    }

    ul li a span {
        height: 4px;
        width: 100%;
        display: block;
        border-radius: 4px;
        position: relative;
        bottom: -7px;
        animation: inactive .25s ease-in-out forwards;
        margin-top: 3px;
    }

    ul li:hover a {
        color: hsla(208, 8%, 65%, 1)!important;
    }

    @keyframes active {
    from {left: -100px;}
    to {left: 0px;}
    }

    @keyframes inactive {
    from {left: 0px}
    to {left: -100px;}
    }

</style>

<template>
    <div>
    <p>
        <router-link :to="{name: dashboard}">Dashboard</router-link>
    </p>

    <p>
        <router-link :to="{name: login}">Login</router-link>
    </p>
    </div>
    <div>
        <router-view></router-view>
    </div>
</template>


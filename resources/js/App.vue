<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <a href="https://github.com/diegotpereira" target="_blank"><img src="https://github.githubassets.com/images/modules/site/icons/footer/github-logo.svg"></a><br>
            <span class="text-secondary">Laravel & Vue CRUD Single Page Application (SPA) + em github.com/diegotpereira</span>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">Home</router-link>
                    <router-link to="/add" class="nav-item nav-link">Novo Livro</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {}
</script>

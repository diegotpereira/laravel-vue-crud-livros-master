<template>
    <div>
        <h3 class="text-center">Novo Livro</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addLivro">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" v-model="livro.nome">
                    </div>

                    <div class="form-group">
                        <label>Autor</label>
                        <input type="text" class="form-control" v-model="livro.autor">
                    </div>

                    <button type="submit" class="btn btn-primary">Novo Livro</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                livro:{}
            }
        },
        methods:{
            addLivro(){
                this.axios
                    .post('htpp://localhost:8000/api/livro/add', this.livro)
                    .then(response => (
                        this.$router.push({name: 'home'})
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>
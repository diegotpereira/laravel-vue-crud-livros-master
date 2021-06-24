<template>
    <div>
        <h3 class="text-center">Editar Livro</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateLivro">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" v-model="livro.nome">
                    </div>

                    <div class="form-group">
                        <label>Autor</label>
                        <input type="text" class="form-control" v-model="livro.autor">
                    </div>

                    <button type="submit" class="btn btn-primary">Atualizar Livro</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return {
                livro:{}
            }
        },

        created(){
            this.axios
                .get('http://localhost:8000/api/livro/edit/${this.$route.params.id}')
                .then((response) => {
                    this.livro = response.data;
                });
        },

        methods:{
            updateLivro(){
                this.axios  
                    .post('htpp://localhost:8000/api/livro/update/${this.$route.params.id}', this.livro)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>
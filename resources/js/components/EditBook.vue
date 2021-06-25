<template>
    <div>
        <h3 class="text-center">Editar Livro</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateLivro">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" v-model="book.name">
                    </div>

                    <div class="form-group">
                        <label>Autor</label>
                        <input type="text" class="form-control" v-model="book.author">
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
                book:{}
            }
        },

        created(){
            this.axios
                .get('http://localhost:8000/api/book/edit/${this.$route.params.id}')
                .then((response) => {
                    this.book = response.data;
                });
        },

        methods:{
            updatebook(){
                this.axios
                    .post('htpp://localhost:8000/api/book/update/${this.$route.params.id}', this.book)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>

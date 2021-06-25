<template>
    <div>
        <h3 class="text-center">Novo Livro</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addBook">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" v-model="book.name">
                    </div>

                    <div class="form-group">
                        <label>Autor</label>
                        <input type="text" class="form-control" v-model="book.author">
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
                book:{}
            }
        },
        methods:{
            addBook(){
                this.axios
                    .post('http://localhost:8000/api/book/add', this.book)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>

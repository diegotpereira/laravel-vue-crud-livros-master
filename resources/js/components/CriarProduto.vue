<template>
    <div>
        <h3 class="text-center">Novo Produto</h3>
        <div class="row">
            <form @submit.prevent="addProduto">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" v-model="produto.nome">
                </div>

                <div class="form-group">
                    <label>Detalhe</label>
                    <input type="text" class="form-control" v-model="produto.detalhe">
                </div>
                <button type="submit" class="btn btn-primary">Criar</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return {
                produto:{}
            }
        },

        methods:{
            addProduto(){
                this.axios
                    .post('http://localhost:800/api/produtos', this.produto)
                    .then(response => (
                        this.$router.push({name:'home'})
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>
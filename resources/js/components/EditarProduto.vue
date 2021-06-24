<template>
    <div>
        <h3 class="text-center">Editar Produto</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="atualizarProduto">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" v-model="produto.nome">
                    </div>

                    <div class="form-group">
                        <label>Detalhe</label>
                        <input type="text" class="form-control" v-model="produto.detalhe">
                    </div>

                    <button type="submit" class="btn btn-primary">atualizar Produto</button>
                </form>
            </div>
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

        created(){
            this.axios
                .get('http://localhost:8000/api/produtos/${this.$route.params.id}')
                .then((res) => {
                   this.produto = res.data;
                });
        },

        methods:{
            alterarProduto(){
                this.axios
                    .patch('http://localhost:8000/api/produtos/${this.$route.params.id}' ,this.produto)
                    .then((res) => {
                     this.$router.push({name:'home'});
            });
        }
    }

}
</script>
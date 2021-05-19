<template>
    <div class="container">
        <!-- login form -->
        <div class="row mt-4" >
            <div class="col-6 offset-3">
                <form action="#" @submit.prevent="handleLogin">
                    <h3>Sign in for secrets</h3>
                    <div class="form-row">
                        <input type="email" name="email" class="form-control" v-model="formData.email" placeholder="Email Address">
                    </div>
                    <div class="form-row">
                        <input type="password" name="password" class="form-control" v-model="formData.password" placeholder="Password">
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            dranken: [],
            formData: {
                email: '',
                password: ''
            }
        }
    },
    methods: {
        handleLogin() {
            // send axios request to the login route
            axios.get('/sanctum/csrf-cookie').then(response => {
                axios.post('/login', this.formData).then(response => {
                    console.log('User signed in!');
                    this.$router.push('/dashboard');
                })
                    .catch(error => {
                        console.log(error);
                    });
            });
        },
        getDranken() {
            axios.get('/api/consumpties/')
                .then(response => {
                    this.dranken = response.data
                    console.log(this.dranken);
                })
                .catch(error => {
                    console.log(error);
                })
        }
    },
    created() {
        this.getDranken()
    }
}
</script>

<style scoped>

</style>

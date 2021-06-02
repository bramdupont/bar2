<template>
    <div>
        <div class="thor">
            <img class="w-100 h-3/6" :src="image" alt="">
        </div>
        <div class="mt-12 text-left">
            <form action="#" @submit.prevent="handleLogin">
                <h1 class="mb-4 inline-block border-b-2 border-purple text-2xl font-bold text-left">Inloggen</h1>
                <div class="form-row">
                    <input type="email" name="email" class="w-9/12 my-2 px-0 border-t-0 border-r-0 border-l-0 border-b-2 border-purple bg-transparent placeholder-gray-500 form-control" v-model="formData.email" placeholder="E-mailadres">
                </div>
                <div class="form-row">
                    <input type="password" name="password" class="w-9/12 my-2 px-0 border-t-0 border-r-0 border-l-0 border-b-2 border-purple bg-transparent placeholder-gray-500 form-control" v-model="formData.password" placeholder="Wachtwoord">
                </div>
                <div class="form-row">
                    <button type="submit" class="my-6 bg-purple p-2 text-white rounded-md w-11/12 block">Inloggen</button>
                </div>
            </form>
            <router-link to="/registreren" class="my-6 text-center text-blue block">Ik heb nog geen account</router-link>
            <a href="https://dupontwebdesign.com" target="_blank" class="mt-12 w-11/12 text-gray-500 text-sm font-light block text-center">© Dupont Webdesign</a>
        </div>
    </div>
</template>

<script>
import image from "../../assets/thor_refill.gif";
export default {
    data() {
        return {
            formData: {
                email: '',
                password: ''
            },
            image: image
        }
    },
    methods: {
        handleLogin() {
            axios.get('/sanctum/csrf-cookie').then(response => {
                axios.post('api/login', this.formData).then(response => {
                    console.log('User signed in!');
                    this.$router.push('/bestellen');
                })
                    .catch(error => {
                        console.log(error);
                    });
            });
        }
    }
}
</script>

<style scoped>
input {
    outline: none;
}
input:focus {
    outline: none;
}
    .thor {
        margin: -16px -16px 0 -16px;
    }
</style>

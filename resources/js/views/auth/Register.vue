<template>
    <div>
        <div class="thor">
            <img class="w-100 h-3/6" :src="image" alt="">
        </div>
        <div class="mt-32 text-left">
            <form action="#" @submit.prevent="handleRegister">
                <h1 class="mb-4 inline-block border-b-2 border-purple text-2xl font-bold text-left">Account aanmaken</h1>
                <div class="form-row">
                    <input type="text" name="name" class="w-9/12 my-2 px-0 border-t-0 border-r-0 border-l-0 border-b-2 border-purple bg-transparent placeholder-gray-500 form-control" v-model="formData.name" placeholder="Naam">
                </div>
                <div class="form-row">
                    <input type="email" name="email" class="w-9/12 my-2 px-0 border-t-0 border-r-0 border-l-0 border-b-2 border-purple bg-transparent placeholder-gray-500 form-control" v-model="formData.email" placeholder="E-mailadress">
                </div>
                <div class="form-row">
                    <input type="password" name="password" class="w-9/12 my-2 px-0 border-t-0 border-r-0 border-l-0 border-b-2 border-purple bg-transparent placeholder-gray-500 form-control" v-model="formData.password" placeholder="Wachtwoord">
                </div>
                <div class="form-row">
                    <button type="submit" class="my-6 bg-purple p-2 text-white rounded-md w-11/12 block">Ik wil bier!</button>
                </div>
            </form>
            <router-link to="/" class="my-6 text-center text-blue block">Ik heb al een account</router-link>
            <p class="absolute bottom-4 w-11/12 text-gray-500 text-sm font-light block text-center">© Dupont Webdesign</p>
        </div>
    </div>
</template>

<script>
import image from "../../assets/thor_refill.gif";
export default {
    data() {
        return {
            formData: {
                name: '',
                email: '',
                password: ''
            },
            image: image
        }
    },
    methods: {
        handleRegister() {
            axios.get('/sanctum/csrf-cookie').then(response => {
                axios.post('api/register', this.formData).then(response => {
                    this.formData.name = this.formData.email = this.formData.password = ''
                    console.log('User registered!');
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

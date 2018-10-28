<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">User Component</div>

                    <div class="card-body">
                        <ul>
                            <li v-for="user in users" :key="user.id">{{user.email}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                users: [],
            }
        },
        props: [
            'params'
        ],
        mounted() {
            this.users = this.params
            console.log(this.users)
        }
    }
</script>

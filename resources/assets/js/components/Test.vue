<template>
    <div class="test">
        <input type="text" v-model="title"><br>
        <h1>{{title}}</h1>
        <p>{{user.first_name}}</p>
        <p v-if="showName" v-text="user.last_name"></p>
        <p v-else>nobody</p>
        <ul>
            <li v-for="item in items">{{item.title}}</li>
        </ul>
        <button v-on:click="greet" class="btn btn-outline-dark">Say hello</button>
        <br>
        <input v-on:keyup="presskey" type="text" v-on:keyup.enter="">
    </div>
</template>

<script>
    export default {
        name: "test",
        data(){
            return {
                title:'hello world',
                user:{
                    first_name:'John',
                    last_name:'Doe'
                },
                showName:true,
                items:[
                    {title:'title one'},
                    {title:'title two'},
                    {title:'title three'}
                ]

            }
        },
        methods:{
            greet:function(){
                alert("Hello pouya")
            },
            presskey:function(e){
                console.log(e.target.value);
            }
        }
    }
</script>

<style scoped>

</style>
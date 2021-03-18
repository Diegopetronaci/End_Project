<template>

        <nav class="container_nav d_flex space_between">

            <div class="d_flex space_between">
                <img src="../../../public/img/giphy.gif" alt="logo"> 
                <h2>DeliveBooh!</h2>
            </div>
            
            <div >
                <ul class="nav-item d_flex">
                    <li><a class="nav-link" href="/login"> Ristoranti </a></li>
                    <li><a class="nav-link" href="/register"> Registati </a></li>
                </ul>
            </div>

        </nav>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
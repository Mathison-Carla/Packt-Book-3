
<html>

    <head>
        @vite('./resources/js/app.js')
    
    </head>
    <body>
        <div id="app"> 
            <a href="./resources/js/components/alabama.blade.php">Alabama</a>


@component
<router-link to="./js/components/App.vue"></router-link>
<router-link to="./js/components/Home.vue"></router-link>
@endcomponent 


@component
<router-link to="./js/components/Dashboard.vue"></router-link>
@endcomponent

@component
<router-link to="./js/components/Search.vue"></router-link>
@endcomponent


        </div>
    </body>


    <script src='./js/app.js'></script>
</html>


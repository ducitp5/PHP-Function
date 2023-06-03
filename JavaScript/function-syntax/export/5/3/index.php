

<script type="module">
    console.log('This is from a module');
    console.log( button2);
</script>

<script>
    console.log('This is regular script');
    console.log(typeof button2);
    // undefined
</script>

<button id="button2">Button</button>

<script>
    console.log('This is regular script 2');
    console.log(typeof button2);
    // undefined
</script>


<script async type="module">

    import {counter} from './analytics.js';

    var $t = counter.count();

    console.log('counter - ', $t)
</script>


<script type="module">
    console.log('This is run in modern browser');
</script>

<script nomodule>
    console.log('Modern browser will skip this');
    console.log('Old browser will execute this');
</script>

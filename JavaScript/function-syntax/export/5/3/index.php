<button id="button2">Button</button>

<script async type="module">

    import {counter} from './analytics.js';

    var $t = counter.count();

    console.log('counter - ', $t)
</script>


<script type="module">
    console.log('This is run in modern browser');
</script>

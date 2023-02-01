<script type="module">
    let user = 'FooBar';
    console.log(user);
</script>

<script type="module">
    console.log(user);
    try{
        console.log(user);
    }
    catch (e) {
        console.log(e)
    }

    console.log('abc')
//
// Error: user is not defined
</script>

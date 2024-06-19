
<script>
    const numbersOne = [1, 2, 3];
    const numbersTwo = [4, 5, 6];
    const numbersCombined = [...numbersOne, ...numbersTwo];
    document.write(numbersCombined);

    const [one, two, ...rest] = numbersCombined;

    console.log(one, two, rest);
    console.log(typeof(rest));
</script>

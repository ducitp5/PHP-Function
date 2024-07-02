<!DOCTYPE html>
<html>

<body>

<h1>Arrow Function</h1>

<p>The <strong>this</strong> keyword represents the Header object.</p>

<button id="btn">Click Me!</button>

<p><strong>this</strong> represents:</p>

<p id="demo"></p>


<script>
    class Header {

        abc = 'yyy';

        constructor() {
            this.color = "Red";
        }

        getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        changeColor = ($param) => {

            let $color = this.color = this.getRandomColor();

            console.log(1111, $param, $color)
            document.getElementById("demo").innerHTML += `<div style="color: ${this.color}"> ${this.color} </div>`;

            return this;
        }
    }

    const myheader = new Header();

    //The window object calls the function:
    window.addEventListener("load", myheader.changeColor);

    //A button object calls the function:
    document.getElementById("btn").addEventListener("click", myheader.changeColor);

    document.getElementById("btn").addEventListener("click", function () {

        console.log(2222, myheader, 3333, myheader.changeColor())
    })

</script>

</body>
</html>

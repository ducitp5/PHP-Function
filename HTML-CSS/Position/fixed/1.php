<style>
    .content {
        position: relative;
        width: 300px;
        height: 500px;
        background: red;
    }

    .fix {
        position: fixed;
        height: 50px;
        background: green;
        padding: 10px 0;
    }

    .fix.right {
        right: 0;
    }
    .bt{

    }
</style>

<div class="content">
    <div class="fix">
        <button class="bt" onclick="this.parentElement.classList.toggle('right'); console.log(this, this.parentElement)">Jump</button>
    </div>
</div>

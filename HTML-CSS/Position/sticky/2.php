<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container{
        background-color: #ccc;
        width: 600px;
        height: 600px;
        margin: 30px auto;
        overflow: scroll;
    }

    .table{
        display: flex;
        flex-direction: row;
        width: 1000px;
        height: 1000px;
    }

    .col{
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        border-right: 1px solid #333;
    }

    .col:first-child{
        border-left: 1px solid #333;
        position: sticky;
        left: 0;
        z-index: 1;
    }

    .col:first-child .cell{
        background-color: yellow;
    }

    .col:first-child .cell:first-child{
        background-color: violet;
    }


    .cell{
        display: flex;
        flex-grow: 1;
        background-color: #eee;
        padding: 30px;
        border-bottom: 1px solid #333;
    }

    .cell:first-child{
        border-top: 1px solid #333;
        position: sticky;
        top: 0;
        background-color: red;
    }
</style>

<div class="container">
    <div class="table">
        <div class="col">
            <div class="cell">#</div>
            <div class="cell">Sidebar</div>
            <div class="cell">Sidebar</div>
            <div class="cell">Sidebar</div>
            <div class="cell">Sidebar</div>
            <div class="cell">Sidebar</div>
            <div class="cell">Sidebar</div>
            <div class="cell">Sidebar</div>
        </div>
        <div class="col">
            <div class="cell">Header</div>
            <div class="cell">2</div>
            <div class="cell">3</div>
            <div class="cell">4</div>
            <div class="cell">5</div>
            <div class="cell">6</div>
            <div class="cell">7</div>
            <div class="cell">8</div>
        </div>
        <div class="col">
            <div class="cell">Header</div>
            <div class="cell">2</div>
            <div class="cell">3</div>
            <div class="cell">4</div>
            <div class="cell">5</div>
            <div class="cell">6</div>
            <div class="cell">7</div>
            <div class="cell">8</div>
        </div>
        <div class="col">
            <div class="cell">Header</div>
            <div class="cell">2</div>
            <div class="cell">3</div>
            <div class="cell">4</div>
            <div class="cell">5</div>
            <div class="cell">6</div>
            <div class="cell">7</div>
            <div class="cell">8</div>
        </div>
        <div class="col">
            <div class="cell">Header</div>
            <div class="cell">2</div>
            <div class="cell">3</div>
            <div class="cell">4</div>
            <div class="cell">5</div>
            <div class="cell">6</div>
            <div class="cell">7</div>
            <div class="cell">8</div>
        </div>
        <div class="col">
            <div class="cell">Header</div>
            <div class="cell">2</div>
            <div class="cell">3</div>
            <div class="cell">4</div>
            <div class="cell">5</div>
            <div class="cell">6</div>
            <div class="cell">7</div>
            <div class="cell">8</div>
        </div>
        <div class="col">
            <div class="cell">Header</div>
            <div class="cell">2</div>
            <div class="cell">3</div>
            <div class="cell">4</div>
            <div class="cell">5</div>
            <div class="cell">6</div>
            <div class="cell">7</div>
            <div class="cell">8</div>
        </div>
        <div class="col">
            <div class="cell">Header</div>
            <div class="cell">2</div>
            <div class="cell">3</div>
            <div class="cell">4</div>
            <div class="cell">5</div>
            <div class="cell">6</div>
            <div class="cell">7</div>
            <div class="cell">8</div>
        </div>
    </div>
</div>

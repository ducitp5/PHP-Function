export class counter {

    static $i = 0;

    static count() {

        var $c;

        for ($c = 0; $c <5; $c++)   ++this.$i;

        return counter.$i;
    }
}

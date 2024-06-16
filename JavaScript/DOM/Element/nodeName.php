<!DOCTYPE html>
<html>
<body>
<h1>The Element Object</h1>
<h2>The nodeName Property</h2>

<p>The node names of the body element's child nodes.</p>

<p>Whitespaces between elements are considered nodes (#text).</p>

<!-- This is a comment. -->

<div>Comments are considered nodes (#comments).</div>

<p id="demo"></p>

<script>
    const nodes = document.body.childNodes;
    let text  = "";

    for (let i = 0; i < nodes.length; i++) {

        let $node = nodes[i];
        // let $node = nodes[i].firstChild;

        console.log(nodes[i], $node);

        if ($node !== null){
            text += "<hr> <br>";
            text += "Name: " + $node.nodeName + "<br>";
            text += "Value: " + $node.nodeValue + "<br>";
            text += "Type: " + $node.nodeType + "<br>";

            console.log(nodes[i], $node);
            // console.log(i, $node, $node.nodeName, $node.nodeValue, $node.nodeType);
        }
    }

    document.getElementById("demo").innerHTML = text;
</script>

</body>
</html>

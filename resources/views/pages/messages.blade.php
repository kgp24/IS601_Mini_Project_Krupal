<link href="/css/messages.css" rel="stylesheet">

<h2>NEW MESSAGES:</h2>

<table id="myTable">
    <tr>
        <th>Subject</th>
        <th></th>

    </tr>
    <tr>
        <td><a href="{{route('contactmessage1')}}">Hi Krupal</a></td>
        <td><input type="button" value="Delete" onclick="deleteRow(this)"></td>

    </tr>
    <tr>
        <td><a href="{{route('contactmessage2')}}">Nice webpage!</a></td>
        <td><input type="button" value="Delete" onclick="deleteRow(this)"></td>

    </tr>
    <tr>
        <td><a href="{{route('contactmessage3')}}">I'm giving you an A+!</a></td>
        <td><input type="button" value="Delete" onclick="deleteRow(this)"></td>

    </tr>
    <tr>
        <td><a href="{{route('contactmessage4')}}">Prof Keith</a></td>
        <td><input type="button" value="Delete" onclick="deleteRow(this)"></td>

    </tr>
    <tr>
        <td><a href="{{route('contactmessage5')}}">This is COOL!</a></td>
        <td><input type="button" value="Delete" onclick="deleteRow(this)"></td>

    </tr>
</table>

<script>
    function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("myTable").deleteRow(i);
    }
</script>

</body>
</html>
